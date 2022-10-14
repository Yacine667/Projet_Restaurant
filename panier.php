<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        "<th>Action</th>",
        "</tr>";

        foreach ($_SESSION['reservations'] as $index => $reservation) {
            echo "<tr>",
            "<td>" . $index . "</td>",
            "<td>" . $reservation['clientName'] . "</td>",
            "<td>" . $reservation['clientEmail'] . "</td>",

      

            "<td><a href='traitement.php?action=retirePersonne&id=$index'><i class='fa-solid fa-minus'></i></a>" . $reservation['clientNb'] . "<a  href='traitement.php?action=addPersonne&id=$index'><i class='fa-solid fa-plus'></i></a></td>",



            "<td>" . $reservation['horaire'] . "</td>",
            "<td>" . $reservation['day'] . "</td>",
            "<td><a href='traitement.php?action=deleteReservation&id=$index'><button>supprimer</button></a></td>";
            "</tr>";
        }
        "</table>";
    }
    ?>
        <a href="traitement.php?action=deleteAll"><button type='submit' name='delete-button' class='btn btn-danger'>supprimer</button></a>
        <a href="index.php"><button>Accueil</button></a>

</body>

</html>