<?php
session_start();
if(isset($_SESSION['username'])){
  header("location:viewresult.php");
} else {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <style>
      * {
        box-sizing: border-box;
      }
      h1{
        font-size:25pt;
        font-family: 'Times New Roman';
        color:#33FF99;
        text-shadow:2px 2px #ff0000;
      }
      body{
        margin: 0;
        padding: 10px;
        background: #ddd;
        background-image: url(images/body_bg.jpg);;
      }
      .header{
        background-image: url(images/header_bg.jpg);
        color: #d75813;
        padding: 20px;
        text-align: left;
      }
      .login a:link{
        background-color: #333;
        color: #ff6600;
        padding: 14px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
      }
      .login a:hover{
        background-color: #ccff66;
      }
      .topnav {
        overflow: hidden;
        background-color: #333;
      }
      .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        text-decoration: none;
        padding: 14px 16px;
        }
      .topnav a:hover {
         background-color: #ddd;
         color: black;
        }
        .footer {
          text-align: center;
          color: white;
          position: fixed;
          bottom: 0;
          width: 100%
        }
      .container{
        margin: auto;
        width: 60%;
        border:3px solid #73AD21;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
      input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body onload="generateCaptcha()">
    <script>
      var captcha;
      function generateCaptcha() {
        var a = Math.floor(Math.random() * 10);
        var b = Math.floor(Math.random() * 10);
        captcha = a+b;
        document.getElementById("a").innerHTML = a;
        document.getElementById("b").innerHTML = b;
      }
      function check() {
        var input = document.getElementById("input").value;
        if(input==captcha){

        }
        else {
          window.location = "result.html";
          alert("Incorrect Captcha");
        }
      }
    </script>
    <div class ="header">
      <h1><center>LECT'S INTERACT</center></h1>
      <p style ="float:right">Date: <span id ="date"></span></p>
      <script>
        var dt = new Date();
        document.getElementById("date").innerHTML = dt.toLocaleDateString();
      </script>
      <div class ="topnav">
        <a href = "index.php">Home</a>
        <a href = "faculty.php">Faculty</a>
        <a href = "result.php">Results</a>
        <div class ="login">
        <a href = "signup.html"style = "float:right">Sign up</a>
        <a href = "login.html" style = "float:right">Log in</a>
      </div>
      </div>
    </div>
    <div class ="container">
      <form action = "viewresult.php" method="post">
        <h2><center> Autonomous Provisional Results<center></h2>
        <label> Enter your USN </label><br>
        <input name="usn" placeholder="eg.1RV16MCA01" type="text" required="required" pattern="[0-9]{1}[A-Z]{1,2}[0-9]{1,2}[A-Z]{3,2}[0-9]{2,3}" width="100px"><br>
        <label>What is <span id ="a"></span> + <span id="b"></span> ? </label><br>
        <input id="input" name="captcha" type="text" placeholder="Enter Answer Here" required="required"><br>
        <input id="submit" type="submit" value="Search Result" onclick = "check()">
        </form>
      </div>
      <div class = "footer">
        <p>All Rights Reserved. &copy; 2020  Design By : Sagar, Shreyans, Shreyas</p>
      </div>
  </body>
</html>
<?php } ?>
