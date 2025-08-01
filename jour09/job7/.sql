SELECT *FROM etudiants
WHERE date_naissance <= CURRENT_DATE - INTERVAL '18 years';
