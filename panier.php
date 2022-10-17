<?php
session_start();
$jour = (isset($_GET["jour"])) ? $_GET["jour"] : "";


function afficherMenu($jour)
{
    if (!empty($jour)) {
        echo "<h3>le menu de ".$jour." est composé de :</h3><br>";
        echo"<h5>". implode('<br>', $_SESSION[$jour])."</h5>";
    } else {
        echo '';
    }
}

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

<body >
    <header id="header_panier">
    <div id="menu_logo">
            <a href=index.php>
              <i class="fa-solid fa-wheat-awn"></i>
              <p>le Quai des Machines</p>
            </a>
          </div>

    <a href="traitement.php?action=deleteAll"><button type='submit' name='delete-button' class='btnsupprimer'>annuler mes reservations</button></a>
    </header>
    <h1 style="color: white;">Reservations :</h1>
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

            "<form method = POST action=traitement.php?action=changeJour&id=$index>",
            "<td>" . $index . "</td>",
            "<td>" . $reservation['clientName'] . "</td>",
            "<td>" . $reservation['clientEmail'] . "</td>",
            "<td><a href='traitement.php?action=retirePersonne&id=$index'><i class='fa-solid fa-minus' style='color:red'></i></a>" . $reservation['clientNb'] . "<a  href='traitement.php?action=addPersonne&id=$index'><i class='fa-solid fa-plus' style='color:green'></i></a></td>",


            "<td>" . $reservation['horaire'] . "</td>",


            
            "<td><select name='day' id='sub_menu_select'>
            <option value='defaut'>". $reservation['day'] ."</option>
            <option value='Mardi'>Mardi</option>
            <option value='mercredi'>Mercredi</option>
            <option value='jeudi'>Jeudi</option>
            <option value='vendredi'>Vendredi</option>
            <option value='samedi'>Samedi</option>
            <option value='dimanche'>Dimanche</option>
            </select><button type=submit name=submitJour >Modifier</button></td>",

            "</form>"
        ,




            "<td><a href='traitement.php?action=deleteReservation&id=$index'><button class='btnsupprimer'>Annuler</button></a>
            <a href='panier.php?id=$index&jour=" . $reservation['day'] . "'><button class='btnVoir'>Voir menu</button></a>
            
            </td>";
            "</tr>";
        }
        "</table>";
    }
    ?>
    


    <div class="panier_menudiv">
        <h2><?php echo afficherMenu($jour)  ?></h2>
    </div>

</body>

</html>