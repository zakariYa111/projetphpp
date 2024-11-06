<?php
    session_start();
    

    if( isset($_POST['login']) ) {
        $usernm=$_POST['usernamee'];
        $passwrd=$_POST['passName'];

        if( empty($usernm) ||empty($passwrd )  ) {
        
        $_SESSION ['emptyV'] = "empty values";
        header("location: LOGandREG2.php");
        exit();
        
        } elseif( $passwrd ==  $_SESSION['password'] && $usernm == $_SESSION['username'] ) {
                header("location: home.php") ;
                exit();
        }else if (strlen($passwrd) < 8) {
                    $_SESSION['erorpassword'] = "Le mot de passe doit contenir au moins 8 caractères";
                    header("location: LOGandREG2.php");
            }else{
            $_SESSION ['incopass'] = "Username or password is incorrect.";
            header("location: LOGandREG2.php");
            exit();
        }
    }
?>