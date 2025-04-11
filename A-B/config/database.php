<?php

session_start();
try {
    $db = new PDO('mysql:host=localhost;dbname=ambiance_et_creation;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8mb4');
 
 

}catch(Exception $e){
    echo "Impossible de se connecter a la base de donnees";
    die();
};



?>
<?php