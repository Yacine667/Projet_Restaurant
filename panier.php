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
           
                        "<td>" . $index . "</td>",
                        "<td>" . $reservation['clientName'] . "</td>",
                        "<td>" . $reservation['clientEmail'] . "</td>",
                        "<td><div class='colonne'><a href='traitement.php?action=retirePersonne&id=$index'><i class='fa-solid fa-minus' style='color:red'></i></a>" . $reservation['clientNb'] . "<a  href='traitement.php?action=addPersonne&id=$index'><i class='fa-solid fa-plus' style='color:green'></i></a></div></td>",

                        "<form method = POST action=traitement.php?action=changeHour&id=$index>",
                        "<td><div class='colonne'><select name='horaire' id='select_hour' class='sub_menu_select' >
                        <option class='hidenOption' value=". $reservation['horaire'] ." >". $reservation['horaire'] .
                        "</option>
                        <optgroup label='Midi'/>
                        <option class='option' value='12h00'><div class ='opti'>12h00</div></option>
                        <option class='option' value='12h30'>12h30</option>
                        <option class='option' value='13h00'>13h00</option>
                        <option class='option' value='13h30'>13h30</option>
                        <option class='option' value='14h00'>14h00</option>
                        <optgroup label='Soir'/>
                        <option class='option' value='19h00'>19h00</option>
                        <option class='option' value='19h30'>19h30</option>
                        <option class='option' value='20h00'>20h00</option>
                        <option class='option' value='20h30' >20h30</option>
                        <option class='option' value='21h00'>21h00</option>
                        <option class='option' value='21h30'>21h30</option>
                        <option class='option' value='22h00'>22h00</option>            
                        </select><button class='edit' type=submit name=submitJour ><i class='fa-solid fa-pen-to-square'></i></button></div></td>",
                        "</form>",

                        "<form method = POST action=traitement.php?action=changeJour&id=$index>",
                        "<td><div class='colonne'><select name='day' class='sub_menu_select'>
                        <option value=". $reservation['day'].">". $reservation['day'] ."</option>
                        <option value='mardi'>Mardi</option>
                        <option value='mercredi'>Mercredi</option>
                        <option value='jeudi'>Jeudi</option>
                        <option value='vendredi'>Vendredi</option>
                        <option value='samedi'>Samedi</option>
                        <option value='dimanche'>Dimanche</option>
                        </select><button class='edit' type=submit name=submitHour><i class='fa-solid fa-pen-to-square'></i></button></div></td>",
                        "</form>",
                        "<td id='champ_btn'><div class='colonne'><a href='traitement.php?action=deleteReservation&id=$index'><button class='btnsupprimer'>Annuler</button></a>
                        <a href='panier.php?id=$index&jour=" . $reservation['day'] . "'><button class='btnVoir'>menu</button></a> </div>           
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
<script src="js/script.js"></script>
<script>compareValue();</script>
</html>