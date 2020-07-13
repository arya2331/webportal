<?php

session_start();

date_default_timezone_set('Asia/Kolkata');
$scheduletime="12:00:00";
// $hr = date("H");
// $min = date("i");
if(time()>=strtotime($scheduletime)&&!isset($_SESSION['submit'])){
  $to="arya12@gmail.com";
  $subject="Reminder to fill form";
  $messsage = "Pls fill the form";
  mail($to,$subject,$messsage);
}


