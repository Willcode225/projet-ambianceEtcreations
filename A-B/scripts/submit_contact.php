<?php

include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
   
    $nom       = htmlspecialchars(trim($_POST['nom']));
    $email     = htmlspecialchars(trim($_POST['email']));
    $telephone = htmlspecialchars(trim($_POST['telephone'])); 
    $message   = htmlspecialchars(trim($_POST['message']));

    try {
       
        $sql = "INSERT INTO message (
                    nom, email, message, date_message, repondu, id_client, id_admin
                ) VALUES (?, ?, ?, NOW(), 'non', NULL, NULL)";

        $stmt = $db->prepare($sql);
        $stmt->execute([$nom, $email, $message]);

        
        header("Location: /index.php");
        exit;

    } catch (PDOException $e) {
        echo "Une erreur est survenue : " . $e->getMessage();
    }

} else {
    echo "Accès non autorisé.";
}
?>
