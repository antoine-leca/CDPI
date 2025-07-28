CREATE DATABASE entreprise_informatique;

use entreprise_informatique;

CREATE TABLE departements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
    );

CREATE TABLE employes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    id_dep INT,
    FOREIGN KEY (id_dep) REFERENCES departements(id)
);

CREATE TABLE projets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    budget INT NOT NULL
);

CREATE TABLE projet_employes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_projet INT NOT NULL,
    id_employe INT NOT NULL,
    FOREIGN KEY (id_projet) REFERENCES projets(id),
    FOREIGN KEY (id_employe) REFERENCES employes(id)
);