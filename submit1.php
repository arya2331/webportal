<?php 
session_start();   
$data = array( 
    $_POST['name'], 
    $_POST['email'], 
    $_POST['phone'],
    $_POST['symptom1'], 
    $_POST['symptom2']
); 
// if(isset($_POST['submit'])&&($_SESSION['username']===$username)){
// $_SESSION["timeout"] = time()+ (60*2);
// }
$to= "rishabharya32@gmail.com";
$subject= "Hello";
$message="I have corona";
date_default_timezone_set('Asia/Dhaka');
// $timein = $_POST["timein"];

if (($_POST['symptom1']=='Yes')||($_POST['symptom2']=='Yes')){
	mail($to,$subject,$message);
  // echo $_SESSION['userinfo']['username'];
	echo "string";
	echo $_SESSION['username'];
  // echo($timein);
}
// $result = mail($to,$subject,$message);
  
// Open file in append mode 
$filename = "databse.csv";
$fp = fopen($filename , 'a'); 
  
// Append input data to the file   
fputcsv($fp, $data); 
  
// close the file 
fclose($fp); 
// header('Location:' . 'welcome.html');

?> 