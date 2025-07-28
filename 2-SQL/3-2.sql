CREATE TABLE auteurs (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> nom VARCHAR(100) NOT NULL,
    -> email VARCHAR(100) UNIQUE
    -> );

CREATE TABLE categories (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> nom VARCHAR(100) NOT NULL
    -> );

CREATE TABLE livres (                      
    -> id INT AUTO_INCREMENT PRIMARY KEY,                  
    -> titre VARCHAR(200) NOT NULL,      
    -> date_publication YEAR, 
    -> auteur_id INT NOT NULL,
    -> categorie_id INT NOT NULL,           
    -> FOREIGN KEY (auteur_id) REFERENCES auteurs(id),       
    -> FOREIGN KEY (categorie_id) REFERENCES categories(id)
    -> );