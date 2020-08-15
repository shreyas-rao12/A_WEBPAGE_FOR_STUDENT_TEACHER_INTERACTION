<?php
session_start();

$con = mysqli_connect('localhost','root','');
if(!$con){
  echo 'Connection error: ' . mysqli_connect_error();
}
mysqli_select_db($con,'test');
$usn = $_POST['usn'];
$pass = $_POST['psw'];
$cse = '17CS';
$ece = '17EC';
$eee = '17EE';
$mech = '17ME';
$tel = '17TC';
$aer = '17AS';
$chem = '17CH';
$civil ='17CV';
$s = " select * from table1 where usn = '$usn' && password = '$pass'";
$result = mysqli_query($con,$s);
$row = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);
if($num == 1){
  $_SESSION['username'] = $row['name'];
  $_SESSION['usn'] = $usn;
  if(strpos($usn,$cse)!==false){
    header("Location:CSE.php");
  } else if(strpos($usn,$ece)!==false){
    header("Location:ECE.php");
  } else if(strpos($usn,$eee)!==false){
    header("Location:EEE.php");
  } else if(strpos($usn,$mech)!==false){
    header("Location:Mech.php");
  } else if(strpos($usn,$tel)!==false){
    header("Location:Telecom.php");
  } else if(strpos($usn,$aer)!==false){
    header("Location: Aero.php");
  } else if(strpos($usn,$chem)!==false){
    header("Location: Chem.php");
  } else if(strpos($usn,$civil)!==false){
    header("Location:Civil.php");
  } else {
    echo "Invalid Username";
  }
}else{
echo '<script>alert("Login failed !! Check USN and password"); window.location.href="login.html"</script> ';
}
?>
