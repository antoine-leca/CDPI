INSERT INTO auteurs (nom, email)              
    -> VALUES
    -> ('Georges Sand', 'gsand@example.com'),
    -> ('Victor Hugo', 'vhugo@example.com'),
    -> ('Alexandre Dumas', 'adumas@example.com'),
    -> ('Gustave Flaubert', 'gflaubert@example.com'),
    -> ('Marcel Pagnol', 'mpagnol@example.com');

INSERT INTO categories (nom)
    -> VALUES
    -> ('Roman historique'),
    -> ('Poésie'),
    -> ('Théâtre'),
    -> ('Roman réaliste'),
    -> ('Littérature jeunesse');

INSERT INTO livres (titre, date_publication, auteur_id, categorie_id)
    -> VALUES
    -> ('La Mare au Diable', '1846-01-01', '1', '4'),
    -> ('Indiana', '1832-01-01', '1', '4'),
    -> ('Les Misérables', '1862-01-01', '2', '1'),
    -> ('Les Contemplations', '1856-01-01', '2', '2'),
    -> ('Le Compte de Monte-Cristo', '1845-01-01', '3', '1'),
    -> ('Les Trois Mousquetaires', '1844-01-01', '3', '1'),
    -> ('Madame Bovary', '1857-01-01', '4', '4'),
    -> ('Salammbô', '1862-01-01', '4', '1'),
    -> ('La Gloire de mon père', '1957-01-01', '5', '5'),
    -> ('Marius', '1929-01-01', '5', '3');

SELECT * FROM categories;

SELECT titre, YEAR(date_publication) FROM livres;