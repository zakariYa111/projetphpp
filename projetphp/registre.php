<?php
    session_start();
    

    if( isset($_POST['registre']) ) {
        $emailV = $_POST['email'];
        $fullnameV = $_POST['fullname'];
        $usernameV= $_POST['username'];
        $passwordV= $_POST['password'];

        if( empty($emailV) ||empty($passwordV ) || empty($fullnameV) || empty($usernameV) ) {
        
       $_SESSION['errorempty']=" empty values ";
       header("location: LOGandREG.php");
       exit();
        
        }else if (!preg_match("/@emsi\.ma$/", $emailV)) {
                $_SESSION['erroremail'] = "L'email doit être une adresse @emsi.ma.";
                header("location: LOGandREG.php");
                exit();
        } else if (strlen($passwordV) < 8) {
                $_SESSION['errorpassword'] = "Le mot de passe doit contenir au moins 8 caractères";
                header("location: LOGandREG.php");
                exit();
        } else {
                $_SESSION['email']=$emailV;
                $_SESSION['fullname']=$fullnameV;
                $_SESSION['username']=$usernameV;
                $_SESSION['password']=$passwordV;
                header("location: LOGandREG2.php") ;
                exit();

        }
            
        
        }
        

    
?>
