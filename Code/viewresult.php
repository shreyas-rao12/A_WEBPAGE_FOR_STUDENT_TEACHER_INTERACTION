<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student result</title>
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
    .header{
      background-image: url(images/header_bg.jpg);
      color: #d75813;
      padding: 20px;
      text-align: left;
    }
      table {
        border-collapse: collapse;
        background-color: white;
        margin:auto;
        width: 80%
      }

      table, td, th {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
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
      <?php
        session_start();
        $con = mysqli_connect('localhost','root','','test');
        if(!$con){
          echo 'Connection error: ' . mysqli_connect_error();
        }
        //mysqli_select_db($con,'test');
        if(isset($_SESSION['username'])){
          $usn = $_SESSION['usn'];
        } else {
        $usn = $_POST['usn'];
        }
        $s = "select * from table1 where usn = '$usn'";
        $result = mysqli_query($con,$s);
        $row = mysqli_fetch_array($result);
        if(isset($row['name'])){
        if(isset($row['sgpa']))
        {
       ?>
       <table>
         <thead>
           <tr>
             <th>PROGRAMME</th>
             <th>USN</th>
             <th>NAME</th>
             <th>SEMESTER</th>
             <th>SGPA</th>
           </tr>
         </thead>
       <tbody>
         <td>
          <?php
          $cse = '17CS';
          $ece = '17EC';
          $eee = '17EE';
          $mech = '17ME';
          $tel = '17TE';
          $aer = '17AS';
          $chem = '17CH';
          $civil ='17CV';
          if(strpos($usn,$cse)!==false){
            echo "COMPUTER SCIENCE ENGINEERING";
            $code = array("16HEM61","16CS62","16CS63","16CS64","16CS6C1","16CS6D1","16G6E01");
            $sub = array("Foundations of Management and Economics","Compiler Design", "Computer Networks", "Computer Architecture", "Elective - C", "Elective - D", "Global Elective");
          } else if(strpos($usn,$ece)!==false){
            echo "ELECTRONICS AND COMMUNICATION ENGINEERING";
            $code = array("16HEM61","16EC62","16EC63","16EC64","16EC6C1","16EC6D1","16G6E01");
            $sub = array("Foundations of Management and Economics","Communication System II", "Computer Communication Networks", "Analog and Mixed Signal IC Design", "Elective - C", "Elective - D", "Global Elective");
          } else if(strpos($usn,$eee)!==false){
            echo "ELECTRICAL AND ELCTRONICS ENGINEERING";
            $code = array("16HEM61","16EE62","16EE63","16EE64","16EE6C1","16EE6D1","16G6E01");
            $sub = array("Foundations of Management and Economics","Power Systems Analysis I", "Power Electronics", "Modern Control Theory", "Elective - C", "Elective - D", "Global Elective");
          } else if(strpos($usn,$mech)!==false){
            echo "MECHANICAL ENGINEERING";
            $code = array("16HSI61","16ME62","16ME63","16ME64","16ME6C1","16ME6D1","16G6E01");
            $sub = array("Intellectual Property Rights and Entrepreneurship","Design of Machine Elements II", "Turbo Machinery", "Finite Element Methods", "Elective - C", "Elective - D", "Global Elective");
          } else if(strpos($usn,$tel)!==false){
            echo "TELECOMMUNICATION ENGINEERING";
            $code = array("16HEM61","16TE62","16TE63","16TE64","16TE6C1","16TE6D1","16G6E01");
            $sub = array("Foundations of Management and Economics","Computer Communication Networks", "Information Theory and Coding", "Radiating Systems", "Elective - C", "Elective - D", "Global Elective");
          } else if(strpos($usn,$aer)!==false){
            echo "AEROSPACE ENGINEERING";
            $code = array("16HEM61","16AS62","16AS63","16AS64","16AS6C1","16AS6D1","16G6E01");
            $sub = array("Foundations of Management and Economics","Aerospace Propulsion", "Vibration Engineering", "Aircraft Instrumentation", "Elective - C", "Elective - D", "Global Elective");
          } else if(strpos($usn,$chem)!==false){
            echo "CHEMICAL ENGINEERING";
            $code = array("16HSI61","16CH62","16CH63","16CH64","16CH6C1","16CH6D1","16G6E01");
            $sub = array("Intellectual property Rights and Entrepreneurship","Chemical Equipment Design and Drawing", "Process Simulation and Modeling", "Heterogenous Reaction Systems", "Elective - C", "Elective - D", "Global Elective");
          } else if(strpos($usn,$civil)!==false){
            echo "CIVIL ENGINEERING";
            $code = array("16HSI61","16CV62","16CV63","16CV64","16CV6C1","16CV6D1","16G6E01");
            $sub = array("Intellectual Property Rights and Entrepreneurship","Geotechnical Engineering", "Prestressed Concrete Structures", "Transportation Engineering", "Elective - C", "Elective - D", "Global Elective");
          } else {
            echo "Invalid Username";
          }
          ?>
        </td>
        <td><b><?php echo $usn ?></b></td>
        <td><b><?php echo $row['name'] ?></b></td>
        <td>6</td>
        <td><b><?php echo $row['sgpa'] ?></b></td>
       </tbody>
    </table>
    <table>
      <thead>
        <tr bgcolor = "red">
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th>COURSE CODE</th>
          <th>COURSE TITLE</th>
          <th>GRADE</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $code[0] ?></td>
          <td><?php echo $sub[0] ?></td>
          <td><?php echo $row['sub0'] ?></td>
        </tr>
        <tr>
          <td><?php echo $code[1] ?></td>
          <td><?php echo $sub[1] ?></td>
          <td><?php echo $row['sub1'] ?></td>
        </tr>
        <tr>
          <td><?php echo $code[2] ?></td>
          <td><?php echo $sub[2] ?></td>
          <td><?php echo $row['sub2'] ?></td>
        </tr>
        <tr>
          <td><?php echo $code[3] ?></td>
          <td><?php echo $sub[3] ?></td>
          <td><?php echo $row['sub3'] ?></td>
        </tr>
        <tr>
          <td><?php echo $code[4] ?></td>
          <td><?php echo $sub[4] ?></td>
          <td><?php echo $row['sub4'] ?></td>
        </tr>
        <tr>
          <td><?php echo $code[5] ?></td>
          <td><?php echo $sub[5] ?></td>
          <td><?php echo $row['sub5'] ?></td>
        </tr>
        <tr>
          <td><?php echo $code[6] ?></td>
          <td><?php echo $sub[6] ?></td>
          <td><?php echo $row['sub6'] ?></td>
        </tr>
      </tbody>
    </table>
  <?php } else{
    echo "<center style = 'color: white;font-size: 45px; margin: 0;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);'>Result not yet declared</center>";
  } }else{
    echo "<center style = 'color: white;font-size: 45px; margin: 0;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);'>Invalid USN</center>";
  }?>
    <div class = "footer">
      <p>All Rights Reserved. &copy; 2020  Design By : Sagar, Shreyans, Shreyas</p>
    </div>
  </body>
</html>
