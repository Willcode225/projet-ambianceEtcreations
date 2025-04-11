<?php
session_start();
include 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = htmlspecialchars(trim($_POST['email_connexion']));
    $mot_de_passe = htmlspecialchars(trim($_POST['mot_de_passe']));

    try {
        // Vérification dans la table client
        $sqlClient = "SELECT * FROM client WHERE email = ?";
        $stmt = $db->prepare($sqlClient);
        $stmt->execute([$email]);
        $client = $stmt->fetch();

        // Si trouvé dans les clients
        if ($client && password_verify($mot_de_passe, $client['mot_de_passe'])) {
            $_SESSION['user'] = $client;
            $_SESSION['role'] = 'client';

            header("Location: /espace-client.php");
            exit;
        }

        // Sinon, on vérifie dans les admins
        $sqlAdmin = "SELECT * FROM admin WHERE email = ?";
        $stmt = $db->prepare($sqlAdmin);
        $stmt->execute([$email]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($mot_de_passe, $admin['mot_de_passe'])) {
            $_SESSION['user'] = $admin;
            $_SESSION['role'] = 'admin';

            header("Location: /dashboard-admin.php");
            exit;
        }

        // Sinon : aucune correspondance
        echo "❌ Identifiants incorrects.";

    } catch (PDOException $e) {
        echo "Erreur lors de la connexion : " . $e->getMessage();
    }

} else {
    echo "Accès non autorisé.";
}
?>
