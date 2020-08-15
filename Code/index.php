<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Make website work on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A webpage for student teacher interaction</title>
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
          background-color: white;
          padding: 20px;
          margin-top: 20px;
        }
        .leftcolumn {
          float: left;
          width: 75%;
          padding: 20px;
        }
        .rightcolumn {
          float: left;
          width: 25%;
          padding: 20px;
        }
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .footer {
          text-align: center;
          color: white;
          position: fixed;
          bottom: 0;
          width: 100%
        }
        .imglist ul{
          margin: 0px;
        }
        .imglist li {
          font-size:14px;
          margin-left:25px;
          padding:0px;
          list-style: url(images/arrow.png);
          line-height:30px;
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
    <div class ="row">
      <div class = "leftcolumn">
        <div class ="card">
        <h2> About</h2>
        <p>This is website allows the students to interact with their faculties and have access to materials easily.</p>
      </div>
    </div>
      <div class = "rightcolumn">
        <div class = "card">
        <h2> <center>Annoucements</center> </h2>
        <div class ="imglist">
          <ul>
            <li> All Classes are canceled till 30/04/2020 </li>
            <li> Assignment submission due on 14/04/2020 </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
   <div class = "footer">
     <p>All Rights Reserved. &copy; 2020  Design By : Sagar, Shreyans, Shreyas</p>
   </div>
  </body>
</html>
