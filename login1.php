<?php

if ( ! isset( $_POST['submitted'] ) )
header('Location: ' . $_SERVER['HTTP_REFERER']);

// Sample Email and password for demo
// Email: 'test@example.com'
// Password: labrador19
// class UserController {
// private $username;
// private $password;
// private $isLoggedIn = false;

// // Credentials
// public function credentials() {
//     $credentials = array(
//         array(
//             "username" => "telekom",
//             "password" => "1234"
//         ),
//         array(
//             "username" => "telekom2",
//             "password" => "1234"
//         )
//     );
//     return $credentials;
// }
// session_destroy();
// session_start();
// $_SESSION['user']= $_POST['username'];
// $_SESSION["timeout"] = time()+ (60*2);
// session_start(); 
session_start();
$session_life = time() - $_SESSION['form_submitted_ts'];
$inactive = 0; 

if($session_life > $inactive){  
   session_destroy(); 
   echo 'Destroyed';
}
// session_destroy(); 
// session_start();
$credentials = array(
    'rishabh' => 'arya',
    'username2' => 'password2',
    'username3' => 'password3'
);
$_SESSION['username']=$_POST['username'];
$user=$_POST['username'];
$user = array();
echo $user;
$user['form_submitted_ts']=null;
$userinfo['username'] = $_POST['username'];
// $userinfo['UID'] = 1;
$userinfo['form_submitted_ts']=null;
$_SESSION['userinfo'] = $userinfo;
$_SESSION['user']=$user;
if($_SESSION['user']===$_SESSION['username']){
    echo $user;
}


// $credentials = [
//    'username' => 'test@example.com',
//    'password' => 'la'
// ];
// foreach ($credentials as $username=> $password){ 

// 	if ( $username === $_POST['username'] 
//       	&& $password === $_POST['password'] )
// 	{    
   
//     	// session_start();
//     	$_SESSION["isLogged"] = "1";
//     	// $_SESSION['username']= $username ;
//     	if($_SESSION['username']!==$username){
//     		header('Location:' . 'reg.php');
//     		$_SESSION['username']= $username ;
//     	}
//     	else{
//     		echo "string";
//     		header('Location:' . 'welcome.html');
//     		// $_SESSION['username']= $username ;
//     	}
    	


// 		exit();
// 	}
// }


// session_start();
// session_start();
 // $_SESSION['user'] = $_POST['username'];

//  if($_POST['username']===$_SESSION['username'])
// {
// 	session_destroy();
// }
// else{

// 	session_start();
// 	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $timestamp = isset($_SESSION['form_submitted_ts'])
//         ? $_SESSION['form_submitted_ts'] 
//         : null;
//     if(is_null($timestamp) || (time() - $timestamp) > 10 * 60) {
//         if(process_data($_POST)) {
//             $_SESSION['form_submitted_ts'] = time();
//             echo 'Success!';
//         }
//     } else {
//         // Form submitted in last 10 minutes.  Perhaps send HTTP 403 header.
//         die('Failure! (Form submissions are rate limited.)');
//     }
// }

// }
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $timestamp = isset($_SESSION['form_submitted_ts'])
        ? $_SESSION['form_submitted_ts'] 
        : null;
    if(is_null($timestamp) || (time() - $timestamp) > 5) {
    	// echo "time";
        if(process_data($_POST)) {
            $_SESSION['form_submitted_ts'] = time();
            echo 'Success!';
        }
    } else {
        // Form submitted in last 10 minutes.  Perhaps send HTTP 403 header.
        die('Failure! (Form submissions are rate limited.)');
    }
}

function process_data($data)
{
    // Your code here...
    // $_SESSION["isLogged"] = "1";
    // header('Location:' . 'reg.html');
    // return true;
    echo "string";
    $credentials = array(
    'rishabh' => 'arya',
    'username2' => 'password2',
    'username3' => 'password3'
	);
    $userinfo = array();
$userinfo['username'] = $_POST['username'];
$userinfo['UID'] = 1;
$_SESSION['userinfo'] = $userinfo;
    foreach ($credentials as $username=> $password){ 

		if ( $username === $data['username'] 
      	&& $password === $data['password'] )
		{    
   			echo "string";
            echo $_SESSION['userinfo']['username'];
    		$_SESSION["isLogged"] = "1";
            if($_SESSION['username']!==$username){
                $_SESSION['username']= $username ;
                header('Location:' . 'reg.php');
                return true;
            }
    		// $_SESSION['username']= $username ;
    		// header('Location:' . 'reg.php');
    		// exit();
    		// return true;
			// exit();
		}
	}

}
if(process_data($_POST)===True){
    exit();
}

// Storing session data
// $_SESSION["isLogged"] = "1";

// login successful - redirect user to any page you want
// replace 'home.php' with your landing page url
// echo "string";
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();

// header('Location:' . 'reg.html');

// exit();