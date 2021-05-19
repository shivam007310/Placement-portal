<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div class="student">
    <h1>For Students</h1>
    <p>Prepare for interviews and get hired.</p>
  </div>
  <div class="container">
    <h1>SignUp</h1>
    <!-- FORM -->
    <form method="post">
      <div class="user-details">
        <div class="input-box">
          <span class="details">First Name</span>
          <input type="text" placeholder="Enter your first name" name="t1" id="t1" required>
        </div>
        <div class="input-box">
          <span class="details">Last Name</span>
          <input type="text" placeholder="Enter your last name" name="t2" id="t2" required>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" placeholder="Enter your email" name="t3" id="t3" required>
        </div>
        <div class="input-box">
          <span class="details">Mobile Number</span>
          <input type="number" placeholder="Enter your mobile number" name="t4" id="t4" required>
        </div>
        <div class="input-box">
          <span class="details">Father's Name</span>
          <input type="text" placeholder="Enter your father's name" name="t5" id="t5" required>
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="password" placeholder="Enter your password" name="t6" id="t6" required>
        </div>
        <div class="input-box">
          <span class="details">Marks in 10th</span>
          <input type="number" placeholder="Enter your 10th marks" name="t7" id="t7" required>
        </div>
        <div class="input-box">
          <span class="details">Marks in 12th</span>
          <input type="number" placeholder="Enter your 12th marks" name="t8" id="t8" required>
        </div>
        <div class="input-box">
          <span class="details">Graduation Marks</span>
          <input type="number" placeholder="Enter your graduation marks" name="t9" id="t9" required>
        </div>
        <div class="input-box">
          <span class="details">Select Skills</span>
          <select id="drop-down" name="t10" id="t10">
            <option>Front End Development</option>
            <option>Backend Development</option>
            <option>Java</option>
            <option>C++</option>
            <option>Python</option>
            <option>C</option>
            <option>Cyber Security</option>
            <option>Cloud Computing</option>
            <option>Devops Engineer</option>
          </select>
        </div>
        <div class="input-box">
          <span class="details">Address</span>
          <input type="text" placeholder="Enter your address" id="t11" name="t11" required>
        </div>
      </div>
      <div class="button">
        <input class="submit" type="submit" value="Register" name="b1" >
        <?php
          if(isset($_REQUEST{"b1"})){
            $f=$_REQUEST["t1"];
            $l=$_REQUEST["t2"];
            $e=$_REQUEST["t3"];
            $c=$_REQUEST["t4"];
            $fa=$_REQUEST["t5"];
            $p=$_REQUEST["t6"];
            $ten=$_REQUEST["t7"];
            $twel=$_REQUEST["t8"];
            $grad=$_REQUEST["t9"];
            $sk=$_REQUEST["t10"];
            $ad=$_REQUEST["t11"];
            $db=mysqli_connect("localhost","root","","dbplacement");
            $q="insert into tbstudent(fname,lname,email,contact,father,password,tenth,twel,grad,Skills,address)values('$f','$l','$e','$c','$fa','$p','$ten','$twel','$grad','$sk','$ad')";
            mysqli_query($db,$q);
          }
          // if(isset($_REQUEST["b2"])){
          //   header('Location:page.php');
          // }
        ?>
      </div>
    </form>
  </div>
</body>
</html>