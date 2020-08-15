<?php
session_start();
?>
<html>
<head><title>Courses-Electrical and Electronics Engineering</title></head>
<style type="text/css">
@keyframes anim1{
0% {background-color:#ff0000;}
10% {background-color:#ff3300;}
20% {background-color:#ff6600;}
30% {background-color:#ff9900;}
40% {background-color:#ffcc00;}
50% {background-color:#ffff00;}
60% {background-color:#ffcc00;}
70% {background-color:#ff9900;}
80% {background-color:#ff6600;}
90% {background-color:#ff3300;}
100% {background-color:#ff0000;}
}
p.one {
margin-left:0.1in;
padding:0.6in;
}
table{text-align:center;background-color:black;}
h1{font-size:25pt; font-family: 'Times New Roman'; color:#33FF99; text-shadow:2px 2px #ff0000;}
h2{font-size:18pt; font-family: 'Times New Roman'; color: white; text-shadow:3px 3px #000000;}
select{background-color:black; color:white; font-size:13pt; text-shadow:2px 2px #000000;}
select:hover{background-color:#0099FF;}
td{transition:transform .5s;}
td:hover{transform: scale(1.1); background-color:#990000; border-radius:20px;
animation-name:anim1; animation-duration:5s; animation-iteration-count: 4;}
body {background-color:#2f4562 ;background-image:url(images/header_bg.jpg);}
.topleft{
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
transition:transform 0.3s;
background-color:black; color:white;
padding: 2px 16px;
width: 100px;
height:100px;
border-radius:25px;
}
.topleft:hover{
box-shadow: 0 20px 40px 0 rgba(0,0,0,0.2);
background-color: #000000;
transform: scale(1.1);
text-shadow:2px 2px #ff0000;
color:#33ff99
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
</style>
<body>
  <div class ="header">
    <h1><center>ELECTRICAL AND ELECTRONICS ENGINEERING</center></h1>
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
      <a href = "logout.php"style = "float:right">LOG OUT</a>
      <a href = "redirect.php" style = "float:right"> Welcome <?php echo $_SESSION['username']; ?> </a>
    </div>
    </div>
  </div>
<p class="one">
<table border="border">
<caption><h1><b>CHOOSE ANY COURSE</b></h1></caption>
<tr>
<td><a href="course.php"><h2>Foundations of Management and Economics (16HEM61)</h2></a></td>
<td><a href="course.php"><h2>Power Systems Analysis I (16EE62)</h2></a></td>
<td><a href="course.php"><h2>Power Electronics (16EE63)</h2></a></td>
</tr>
<tr>
<td><a href=""><h2>Modern Control Theory (16EE64)</h2></a></td>
<td><h2>Elective - C</h2>
<select name="Elective-C" onchange="location=this.options[this.selectedIndex].value">
<option value="" disabled selected>Select your option</option>
<option value="course.php"><h2>VLSI Circuit and Design (16EE6C1)</h2></option>
<option value="course.php"><h2>FLC and Applications (16EE6C2)</h2></option>
<option value="course.php"><h2>Utilization of Electrical Power (16EE6C3)</h2></option>
<option value="course.php"><h2>H.V.D.C Power Transmission (16EE6C4)</h2></option>
</td>
<td><h2>Elective - D</h2>
<select name="Elective-D" onchange="location=this.options[this.selectedIndex].value">
<option value="" disabled selected>Select your option</option>
<option value="course.php"><h2>Computer Organization (16EE6D1)</h2></option>
<option value="course.php"><h2>Design and Analysis of Algorithms (16EE6D2)</h2></option>
<option value="course.php"><h2>Discrete Control System (16EE6D3)</h2></option>
<option value="course.php"><h2>Power Quality and RPM (16EE6D4)</h2></option>
</td>
</tr>
<tr>
<td colspan="3"><h2>Global Elective</h2>
<select name="Global Elective" onchange="location=this.options[this.selectedIndex].value">
<option value="" disabled selected>Select your option</option>
<option value="course.php"><h2>Bioinspired Engineering (16G6E01)</h2></option>
<option value="course.php"><h2>Green Technology(16G6E02)</h2></option>
<option value="course.php"><h2>Solid Waste Management (16G6E03)</h2></option>
<option value="course.php"><h2>Introduction to Web Programming (16G6E04)</h2></option>
<option value="course.php"><h2>Automotive Electronics (16G6E05)</h2></option>
<option value="course.php"><h2>Industrial Electronics (16G6E06)</h2></option>
<option value="course.php"><h2>Project Management (16G6E07)</h2></option>
<option value="course.php"><h2>Virtual Instrumentation (16G6E08)</h2></option>
<option value="course.php"><h2>Introduction to Mobile Application Development (16G6E09)</h2></option>
<option value="course.php"><h2>Automotive Engineering (16G6E10)</h2></option>
<option value="course.php"><h2>Mobile Network System and Standards (16G6E11)</h2></option>
<option value="course.php"><h2>Partial Differential Equations (16G6E12)</h2></option>
<option value="course.php"><h2>Aircraft System (16G6E13)</h2></option>
</td>
</tr>
</table>
</p>
<div class = "footer">
  <p>All Rights Reserved. &copy; 2020  Design By : Sagar, Shreyans, Shreyas</p>
</div>
</body>
</html>
