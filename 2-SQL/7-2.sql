CREATE DATABASE concession_auto;

use concession_auto;

CREATE TABLE vehicules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    num_serie VARCHAR(100) NOT NULL,
    marque VARCHAR(50) NOT NULL,
    modele VARCHAR(100) NOT NULL,
    puissance INT NOT NULL,
    prix INT NOT NULL,
    date_arrivée DATE NOT NULL,
    id_client INT,
    etat VARCHAR(20) NOT NULL,
    FOREIGN KEY (id_client) REFERENCES clients(id)
);

CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    tel VARCHAR(10) NOT NULL
);

CREATE TABLE commandes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_cmd DATE NOT NULL,
    prix_vehicule INT,
    id_client INT,
    id_vehicule INT,
    FOREIGN KEY (id_vehicule) REFERENCES vehicules(id),
    FOREIGN KEY (id_client) REFERENCES clients(id)
)