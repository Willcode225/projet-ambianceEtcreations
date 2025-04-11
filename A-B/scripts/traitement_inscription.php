<?php
session_start();
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupération et nettoyage des données du formulaire
    $nom       = htmlspecialchars(trim($_POST['nom_inscription']));
    $email     = htmlspecialchars(trim($_POST['email_inscription']));
    $telephone = htmlspecialchars(trim($_POST['telephone_inscription']));
    $mot_de_passe = htmlspecialchars(trim($_POST['mot_de_passe_inscription']));

    try {
        // Vérifier si l'email est déjà utilisé
        $check = $db->prepare("SELECT id_client FROM client WHERE email = ?");
        $check->execute([$email]);

        if ($check->rowCount() > 0) {
            echo "⚠️ Cet email est déjà utilisé. Veuillez en choisir un autre.";
            exit;
        }

        // Hachage du mot de passe
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        // Insertion dans la base
        $sql = "INSERT INTO client (nom, email, mot_de_passe, statut_compte, date_creation)
                VALUES (?, ?, ?, 'en_attente', NOW())";

        $stmt = $db->prepare($sql);
        $stmt->execute([$nom, $email, $mot_de_passe_hash]);

        // Option : démarrer une session directement
        $_SESSION['user'] = [
            'nom' => $nom,
            'email' => $email
        ];
        $_SESSION['role'] = 'client';

        // Redirection
        header("Location: /espace-client.php");
        exit;

    } catch (PDOException $e) {
        echo " Erreur lors de l'inscription : " . $e->getMessage();
    }

} else {
    echo "Accès non autorisé.";
}
?>
