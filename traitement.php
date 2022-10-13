<?php
    session_start();

    switch ($action) {
        case 'reserver':
            if (isset($_POST['submit'])){
                $clientName = filter_input(INPUT_POST, "clientName", FILTER_SANITIZE_SPECIAL_CHARS);
                $clientNb = filter_input(INPUT_POST,"clientNb",FILTER_VALIDATE_INT);
                $clientEMail = filter_input(INPUT_POST,"clientNb",FILTER_VALIDATE_INT);
                $midi = $_POST['midi'];
                $soir = $_POST['soir'];

            }
            break;
    }
    
?>