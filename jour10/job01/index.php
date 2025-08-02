
<?php
$mysqli = new mysqli("localhost", "root", "root", "job2");

if ($mysqli->connect_error) {
    exit("Échec de la connexion : " . $mysqli->connect_error);
}


$query = "SELECT * FROM etudiants";
$result = $mysqli->query($query);


if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<thead><tr>";

 
    while ($fieldinfo = $result->fetch_field()) {
        echo "<th>" . htmlspecialchars($fieldinfo->name) . "</th>";
    }

    echo "</tr></thead><tbody>";

 
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "Aucun étudiant trouvé.";
}

$mysqli->close();
?>
