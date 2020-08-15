<?php
session_start();
$cse = '17CS';
$ece = '17EC';
$eee = '17EE';
$mech = '17ME';
$tel = '17TE';
$aer = '17AS';
$chem = '17CH';
$civil ='17CV';
$usn = $_SESSION['usn'];
if(strpos($usn,$cse)!==false){
  header("Location:CSE.php");
} else if(strpos($usn,$ece)!==false){
  header("Location:ECE.php");
} else if(strpos($usn,$eee)!==false){
  header("Location:EEE.php");
} else if(strpos($usn,$mech)!==false){
  header("Location:Mech.php");
} else if(strpos($usn,$tel)!==false){
  header("Location:Telcom.php");
} else if(strpos($usn,$aer)!==false){
  header("Location: Aero.php");
} else if(strpos($usn,$chem)!==false){
  header("Location: Chem.php");
} else if(strpos($usn,$civil)!==false){
  header("Location:Civil.php");
}
  ?>
