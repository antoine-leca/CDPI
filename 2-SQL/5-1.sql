use librairie;

SELECT * FROM livres WHERE date_publication < '1900-01-01';

SELECT * FROM livres ORDER BY date_publication ASC;

SELECT 
    YEAR(date_publication) AS annee,
    COUNT(*) AS nombre_livres
FROM livres 
GROUP BY YEAR(date_publication)
ORDER BY annee;