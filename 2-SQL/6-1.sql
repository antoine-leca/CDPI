use transport_aerien;

UPDATE avions SET autonomie_km = 6300 WHERE modele = "A320";

UPDATE avions SET constructeur = 'Boeing' WHERE constructeur = "McDonnell Douglas";

UPDATE avions SET capacite = capacite + 10 WHERE constructeur = "Bombardier";

DELETE FROM avions WHERE capacite < 100;

DELETE FROM avions WHERE en_service = FALSE;