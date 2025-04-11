<?php

include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    
    $nom       = htmlspecialchars(trim($_POST['nom']));
    $prenom    = htmlspecialchars(trim($_POST['prenom']));
    $email     = htmlspecialchars(trim($_POST['email']));
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $service   = htmlspecialchars(trim($_POST['service']));
    $message   = htmlspecialchars(trim($_POST['message']));

    try {
        
        $DemandeDevis = "INSERT INTO demande_devis (
                    nom_client, prenom_client, email_client, telephone_client,
                    service, message, statut, date_demande, id_client
                ) VALUES (?, ?, ?, ?, ?, ?, 'en_attente', NOW(), NULL)";

       
        $stmt = $db->prepare($DemandeDevis);
        $stmt->execute([$nom, $prenom, $email, $telephone, $service, $message]);

      
        header("Location: /index.php");
        exit;

    } catch (PDOException $e) {
        echo " Une erreur est survenue : " . $e->getMessage();
    }

} else {
    echo "Accès non autorisé.";
}
?>

