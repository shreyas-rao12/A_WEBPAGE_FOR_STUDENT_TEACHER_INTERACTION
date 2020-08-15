<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Make website work on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faculty details</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body{
        margin: 0;
        padding: 10px;
        background: #ddd;
        background-image: url(images/body_bg.jpg);;
      }
      h1{
        font-size:25pt;
        font-family: 'Times New Roman';
        color:#33FF99;
        text-shadow:2px 2px #ff0000;
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
        .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          height: 300px;
          width: 200px;
          border-style: outset;
          border-color: red;
          background-color: white;

        }

        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
          padding: 2px 16px;
        }
        .images{
          width: 150px;
          height: 150px;
          padding-left: 25px;
          padding-top: 15px;
        }
        .footer {
          text-align: center;
          color: white;
          position: fixed;
          bottom: 0;
          width: 100%
        }
    </style>
  </head>
  <body>
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
          <?php
          session_start();
          if(isset($_SESSION['username'])){ ?>
            <a href = "logout.php"style = "float:right">LOG OUT</a>
            <a href = "redirect.php" style = "float:right"> Welcome <?php echo $_SESSION['username']; ?> </a>
        <?php } else {?>
        <a href = "signup.html"style = "float:right">Sign up</a>
        <a href = "login.html" style = "float:right">Log in</a>
      <?php } ?>
      </div>
      </div>
    </div>
    <h2 style ="color: #d75813"><center> Faculty Details </center></h2>
    <div style="column-count: 4">
    <div class ="card">
      <img src="images/lec.png" alt="" class = "images">
      <div class="container">
   <h4><b>Professor 1</b></h4>
   <p>Assistant Professor, ECE</p>
 </div>
    </div>
    <div class ="card">
      <img src="images/lec.png" alt="" class = "images">
      <div class="container">
   <h4><b>Professor 2</b></h4>
   <p>Assistant Professor, ECE</p>
 </div>
  </div>
  <div class ="card">
    <img src="images/lec.png" alt="" class = "images">
    <div class="container">
 <h4><b>Professor 3</b></h4>
 <p>Assistant Professor, ECE</p>
</div>
</div>
<div class ="card">
  <img src="images/lec.png" alt="" class = "images">
  <div class="container">
<h4><b>Professor 4</b></h4>
<p>Associate Professor, ECE</p>
</div>
</div>
  </div>
  <div class = "footer">
    <p>All Rights Reserved. &copy; 2020  Design By : Sagar, Shreyans, Shreyas</p>
  </div>
  </body>
</html>
