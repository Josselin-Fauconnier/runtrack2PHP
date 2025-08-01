SELECT  etages.nom AS nom_etage,salles.nom AS 'Biggest Room',salles.capaciteFROM salles
JOIN etages ON salles.etage = etages.numeroORDER BY CAST(salles.capacite AS SIGNED) DESC
LIMIT 1;
