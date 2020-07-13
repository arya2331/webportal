<?php 
session_start();   

date_default_timezone_set('Asia/Kolkata');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $timestamp = isset($_SESSION['form_submitted_ts'])
        ? $_SESSION['form_submitted_ts'] 
        : null;
    if(is_null($timestamp) || (time() - $timestamp) > 5) {
      // echo "time";
        if(process_data($_POST)) {
            $_SESSION['submit']=$_POST['submit'];
            $_SESSION['form_submitted_ts'] = time();
            echo 'Succesfully submitted';
        }
    } else {
        // Form submitted in last 24 hours.  Perhaps send HTTP 403 header.
        die('Failure! (You have already submitted.)');
    }
}
function process_data($datanew)
{
  $data = array( 
    $datanew['name'], 
    $datanew['email'], 
    $datanew['phone'],
    $datanew['symptom1'], 
    $datanew['symptom2']
); 
// $_SESSION['submit']==$datanew['submit']; 
$to= "rishabharya32@gmail.com";
$subject= "Corona symptom found in".$datanew['name'] ;
$message="I have corona";
  if (($datanew['symptom1']=='Yes')||($datanew['symptom2']=='Yes')){
    mail($to,$subject,$message);
  // echo $_SESSION['userinfo']['username'];
  }  
// Open file in append mode 
  $filename = $_SESSION['username'].".csv";
  $fp = fopen($filename , 'a'); 
  
// Append input data to the file   
  fputcsv($fp, $data); 
  
// close the file 
  fclose($fp); 
  return True;
}

?> 