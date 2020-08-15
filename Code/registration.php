<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
$usn = $_POST['usn'];
$name = $_POST['name'];
$pass = $_POST['psw'];
$rpass = $_POST['psw-repeat'];
if($pass == $rpass){
$s = " select * from table1 where name = '$usn'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
 echo '<script>alert("USN already exists.. Try logging in"); window.location.href="login.html"</script> ';
}else{
$reg = "insert into table1(name , usn , password) values ('$name' , '$usn' , '$pass')";
mysqli_query($con,$reg);
echo '<script>alert("Registration Successfull !!"); window.location.href="login.html"</script> ';
}
}else {
  echo '<script>alert("Registration Failed! Check password"); window.location.href="signup.html"</script> ';
}

?>
