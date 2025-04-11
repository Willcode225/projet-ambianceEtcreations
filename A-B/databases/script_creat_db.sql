

-- NB: j'ai rendu Nullable les champs id_client  pourque meme les visiteurs puissent faire une demande de devis et un message sans avoir de compte client


CREATE DATABASE IF NOT EXISTS Ambiance_et_Creation  
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Ambiance_et_Creation;
CREATE TABLE admin (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    mot_de_passe VARCHAR(255),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE client (
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    mot_de_passe VARCHAR(255),
    statut_compte ENUM('en_attente', 'valide', 'refuse') DEFAULT 'en_attente',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE demande_devis (
    id_demande INT AUTO_INCREMENT PRIMARY KEY,
    nom_client VARCHAR(100),
    prenom_client VARCHAR(100),
    email_client VARCHAR(150),
    telephone_client VARCHAR(20),
    service VARCHAR(100),
    message TEXT,
    date_demande DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('en_attente', 'traitée', 'refusée') DEFAULT 'en_attente',
    fichier_devis VARCHAR(255),
    id_client INT NULL  
);


CREATE TABLE devis (
    id_devis INT AUTO_INCREMENT PRIMARY KEY,
    numero_devis VARCHAR(50),
    date_devis DATETIME,
    montant DECIMAL(10, 2),
    etat ENUM('en_attente', 'envoye', 'valide', 'refuse') DEFAULT 'en_attente',
    chemin_pdf VARCHAR(255),
    date_validation DATETIME,
    id_client INT NULL,    
    id_admin INT,
    id_demande INT
);


CREATE TABLE message (
    id_message INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(150),
    message TEXT,
    date_message DATETIME DEFAULT CURRENT_TIMESTAMP,
    repondu BOOLEAN DEFAULT FALSE,
    id_client INT NULL,    
    id_admin INT NULL
);


CREATE TABLE realisation (
    id_realisation INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150),
    description TEXT,
    url_image VARCHAR(255),
    date_ajout DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_admin INT
);



ALTER TABLE demande_devis
ADD CONSTRAINT fk_demande_client
FOREIGN KEY (id_client) REFERENCES client(id_client);


ALTER TABLE devis
ADD CONSTRAINT fk_devis_client
FOREIGN KEY (id_client) REFERENCES client(id_client);


ALTER TABLE devis
ADD CONSTRAINT fk_devis_admin
FOREIGN KEY (id_admin) REFERENCES admin(id_admin);

ALTER TABLE devis
ADD CONSTRAINT fk_devis_demande
FOREIGN KEY (id_demande) REFERENCES demande_devis(id_demande);


ALTER TABLE message
ADD CONSTRAINT fk_message_client
FOREIGN KEY (id_client) REFERENCES client(id_client);

ALTER TABLE message
ADD CONSTRAINT fk_message_admin
FOREIGN KEY (id_admin) REFERENCES admin(id_admin);


ALTER TABLE realisation
ADD CONSTRAINT fk_realisation_admin
FOREIGN KEY (id_admin) REFERENCES admin(id_admin);
