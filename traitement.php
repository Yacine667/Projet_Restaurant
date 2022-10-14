<?php
    session_start();

    $action = $_GET["action"];
    $id = (isset($_GET["id"])) ? $_GET["id"] : "";

    switch ($action) {
        case 'reserver':
            if (isset($_POST['submit'])){
                $clientName = filter_input(INPUT_POST, "clientName", FILTER_SANITIZE_SPECIAL_CHARS);
                $clientNb = filter_input(INPUT_POST,"clientNb",FILTER_VALIDATE_INT);
                $clientEMail = filter_input(INPUT_POST,"clientEmail",FILTER_SANITIZE_SPECIAL_CHARS);         
                $horaire = $_POST ['horaire'];
                $jour = $_POST ['day'];
                
                //var_dump($clientName);
                if ($clientName && $clientNb && $clientEMail  && $horaire && $jour){                
                    $reservation = [
                        "clientName" => $clientName,
                        "clientNb" => $clientNb,
                        "clientEmail" => $clientEMail,                
                        "horaire" => $horaire,
                        "day" => $jour
                    ];
                    $_SESSION['reservations'][] = $reservation;
                    var_dump($reservation);
                    
                }
            }
            header("location:panier.php");



            break;

    case "addPersonne":

        $_SESSION["reservations"][$id]['clientNb']++;
         header("Location:panier.php");

      break;

      case "retirePersonne":

          $newclientNb = $_SESSION["reservations"][$id]['clientNb']--;

          if ($newclientNb == 1) {
              unset($_SESSION["reservations"][$id]);
          }
          header("Location:panier.php");

      break;
   

    }
    



    

    
    
?>
