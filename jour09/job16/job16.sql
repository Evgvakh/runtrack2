SELECT etage.nom, MAX(salles.capacite), salles.nom AS biggest_room FROM etage JOIN salles ON etage.id = salles.id_etage;

-- ou bien

SELECT etage.nom, salles.nom AS biggest_room FROM etage JOIN salles ON etage.id = salles.id_etage ORDER BY salles.capacite DESC LIMIT 1;