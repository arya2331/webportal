<?php

if ( ! isset( $_POST['submitted'] ) )
header('Location: ' . $_SERVER['HTTP_REFERER']);


$credentials = array(
    'rishabh' => 'arya',
    'arya' => 'great',
    'rishu' => 'don'
);

session_start();


foreach ($credentials as $username=> $password){ 

          if ( $username === $_POST['username'] 
         && $password === $_POST['password'] ){
            echo "string";
            $_SESSION["isLogged"] = "1";
            // return true;
            $_SESSION['username']= $username ;
            header('Location:' . 'reg.php');
            exit();
                       
          }

}

header('Location: ' . $_SERVER['HTTP_REFERER']);

exit();
