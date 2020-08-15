<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Make website work on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course - Details</title>
    <style>
      #p1{
      font-size:15pt;
      font-style:italic;
      }
      * {
        box-sizing: border-box;
      }
      body{
        margin: 0;
        padding: 10px;
        background: #ddd;
        background-image: url(images/body_bg.jpg);
        display: grid;
      }
      a {
        text-decoration: none;
        color: inherit;
      }
      h1{
        font-size:25pt;
        font-family: 'Times New Roman';
        color:#33FF99;
        text-shadow:2px 2px #ff0000;
      }
      h2 {

        text-align: center;
        font-family="Times New Roman";
        font-weight=bold;
        font-size=80pt;
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
          width: 20%;
          padding: 20px;
        }
        .midcolumn{
          float: left;
          width: 50%;
          padding: 20px;
        }
        .rightcolumn {
          float: left;
          width: 30%;
          padding: 20px;
        }
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .cta {
          position: relative;
          margin: auto;
          padding: 19px 22px;
          transition: all 0.2s ease;
        }
        .cta:before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          display: block;
          border-radius: 28px;
          background: rgba(140, 255, 26, 0.5);
          width: 56px;
          height: 56px;
          transition: all 0.3s ease;
        }
        .cta span {
          position: relative;
          font-size: 20px;
          line-height: 18px;
          font-weight: 900;
          letter-spacing: 0.25em;
          text-transform: uppercase;
          vertical-align: middle;
        }
        .cta:hover:before {
          width: 100%;
          background:rgba(140, 255, 26, 0.5);
        }
        .cta:hover svg {
          transform: translateX(0);
        }
        .cta:active {
          transform: scale(0.96);
        }
        #dialogoverlay{
        display:none;
        opacity:.8;
        position:fixed;
        top:0px;
        left:0px;
        background:#FFF;
        width:100%;
        z-index:10;
        }
        #dialogbox{
        display:none;
        position:fixed;
        background:#000;
        border-radius:7px;
        width:550px;
        z-index:10;
        }
        #dialogbox > div{ background:#fff; margin:8px; }
        #dialogbox > div > #dialogboxhead{ background:#666; font-size:19px; padding:10px; color:#ccc; }
        #dialogbox > div > #dialogboxbody{ background:#333; font-size:20px; color:#fff; }
        #dialogbox > div > #dialogboxfoot{ background:#666; padding:10px; text-align:right; }
        .footer {
          text-align: center;
          color: white;
          position: static;
          bottom: 0;
          width: 100%
        }
    </style>
    <script type="text/javascript">
    function CustomPrompt(){
    this.render = function(func){
    var winW = window.innerWidth;
    var winH = window.innerHeight;
    var dialogoverlay = document.getElementById('dialogoverlay');
    var dialogbox = document.getElementById('dialogbox');
    dialogoverlay.style.display = "block";
    dialogoverlay.style.height = winH+"px";
    dialogbox.style.left = (winW/2) - (550*.5)+"px";
    dialogbox.style.top = "100px";
    dialogbox.style.display = "block";
    document.getElementById('dialogboxhead').innerHTML = "Enter the quiz password";
    document.getElementById('dialogboxbody').innerHTML = '<input type="password" id="prompt_value1"/>';
    document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Prompt.ok(\''+func+'\')">OK</button><button onclick="Prompt.cancel()">Cancel</button>';
    }
    this.cancel = function(){
    document.getElementById('dialogbox').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
    }
    this.ok = function(func){
    var prompt_value1 = document.getElementById('prompt_value1').value;
    window[func](prompt_value1);
    document.getElementById('dialogbox').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
    }
    }
    var Prompt = new CustomPrompt();
    function match(val){
    if(val!="Web_Development"){
    window.alert("Password Incorrect!");
    }
    else{
    window.open('https://www.sanfoundry.com/object-oriented-programming-questions-answers-entrance-exams/');
    }
    }
    </script>
  </head>
  <body>
    <div class ="header">
      <h1><center>COURSE DETAILS</center></h1>
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
    <div id="dialogoverlay"></div>
    <div id="dialogbox">
    <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
    </div>
    </div>
    <div class ="row">
      <div class = "leftcolumn">
        <div class ="card">
          <figure>
            	<img src="images/lec.png" alt="lecture1" style="width:80px; height:80px; ">
            	<figcaption align="center"><h3 style ="text-align: center">Lecture1</h3></figcaption>
            </figure>
      </div>
      <div class="card">

        <OL> QUIZZES
        <ul>
        <br><br><li id="p1"> <a onclick="Prompt.render('match')" target="desc" class = "cta" >QUIZ-1</a> </li><br>
        </br>
        <li  id="p1"> <a onclick="Prompt.render('match')" target="desc" class = "cta">QUIZ-2</a> </li><br>
        </br>
        <li  id="p1"> <a onclick="Prompt.render('match')" target="desc" class = "cta">QUIZ-3 </a> </li><br>
        </br>
        </ul>
        </OL>
      </div>
    </div>
    <div class = "midcolumn">
      <div class = "card">
        <a href="https://drive.google.com/open?id=1b7UTgXKO43ld53mYIEEbmUVlu_RBiLsg" target="desc" ><h2 class = "cta">UNIT 1 </h2></a>
    </div>
    <div class = "card">
      <a href="https://drive.google.com/open?id=1dO4Tga7MkYT0kLMxfesAgr6xjTTx05Sr" target="desc" ><h2 class = "cta">UNIT 2 </h2></a>
    </div>
    <div class = "card">
     <a href="https://drive.google.com/open?id=1XJet_nejLrQ95nkjTAeYwSOOl2vipSK7" target="desc" ><h2 class = "cta">UNIT 3 </h2></a>
    </div>
    <div class = "card">
     <a href="https://drive.google.com/open?id=1yzeM8ufaJAqxwCFGEQ_D0xnfeBz15WHW" target="desc" ><h2 class = "cta">UNIT 4 </h2></a>
     </div>
    <div class = "card">
      <a href="https://drive.google.com/open?id=1xM-wpIvGveTiYxVcRxVXIED3cOQlxUnv" target="desc" ><h2 class = "cta">UNIT 5 </h2></a>
     </div>
  </div>
  <div class = "rightcolumn">
    <div class = "card">
      <h2>SELF STUDY</h2>
      <ol>
        <ul>
          <br><br><li id="p1"> <a href="https://www.instructables.com/id/Toolbox-PC/" target="desc" class = "cta">Self study phase 1</a> </li><br>
        </br>
        <li  id="p1"> <a href="https://www.instructables.com/id/An-Easy-to-Build-Real-Homemade-Computer-Z80-MBC2/" target="desc" class = "cta">Self study phase 2</a> </li><br>
        </ul>
      </ol>
    </div>
    <div class = "card">
      <h4 align="center" > UPCOMING TASKS</h4>
      <OL> ASSIGNMENTS
      <ul>
      <br><br><li id="p1"> <a href="https://practice.geeksforgeeks.org/problems/depth-first-traversal-for-a-graph/1" target="desc" class = "cta">TASK-1</a> </li><br>
      </br>
      <li  id="p1"> <a href="https://practice.geeksforgeeks.org/problems/bfs-traversal-of-graph/1" target="desc" class = "cta">TASK-2</a> </li><br>
      </br>
      <li  id="p1"> <a href="https://practice.geeksforgeeks.org/problems/detect-cycle-in-an-undirected-graph/1/" target="desc" class = "cta">TASK-3 </a> </li><br>
      </br>
      <li  id="p1"> <a href="https://practice.geeksforgeeks.org/problems/detect-cycle-in-a-directed-graph/1"  target="desc" class = "cta">TASK-4</a> </li><br>
      </ul>
      </OL>
    </div>
    <div class="card">
      <ol>
        <ul>
          <br><br><li id="p1"> <a href="faculty_apprisal.html" target="desc" class = "cta">Faculty Feedback</a> </li><br>
          <br>
          <li id="p1"> <a href="contact.html" target="desc" class = "cta">Contact Faculty</a> </li><br>
        </ul>
      </ol>
    </div>
  </div>
    </div>
   <div class = "footer">
     <p>All Rights Reserved. &copy; 2020  Design By : Sagar, Shreyans, Shreyas</p>
   </div>
  </body>
</html>
