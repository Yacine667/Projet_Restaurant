<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>liste des reservations</title>
</head>

<body style="background-color: white;">
<h1>Reservations :</h1>
    <?php
    // var_dump($_SESSION['days'][0]);
    //  si la clé "products" du tableau $-session n'existe pas OU ou cette clé existe mais ne contient aucune donnée  -->
    if (!isset($_SESSION['reservations']) || empty($_SESSION['reservations'])) {
        echo "<p>Aucune reservation en session</p>";
    } else {
        echo "<table>",
        "<tr>",
        "<th>ID</th>",
        "<th>Nom</th>",
        "<th>Email</th>",
        "<th>Nombre</th>",
        "<th>heure</th>",
        "<th>Jour</th>",
        "</tr>";

        foreach ($_SESSION['reservations'] as $index => $reservation) {
            echo "<tr>",
            "<td>" . $index . "</td>",
            "<td>" . $reservation['clientName'] . "</td>",
            "<td>" . $reservation['clientEmail'] . "</td>",
            "<td>" . $reservation['clientNb'] . "</td>",
            "<td>" . $reservation['horaire'] . "</td>",
            "<td>" . $reservation['day'] . "</td>",
            "</tr>";
        }
        "</table>";
    }
    ?>

</body>

</html>