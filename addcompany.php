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
    <h1>For Companies</h1>
    <p>Hire the candidates</p>
  </div>
  <div class="container">
    <h1>SignUp</h1>
    <!-- FORM -->
    <form method="post">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Company Name</span>
          <input type="text" placeholder="Enter company name" name="t1" id="t1" required>
        </div>
        <div class="input-box">
          <span class="details">Email Address</span>
          <input type="text" placeholder="Enter email address" name="t2" id="t2" required>
        </div>
        <div class="input-box">
          <span class="details">Mobile Number</span>
          <input type="number" placeholder="Enter mobile number" name="t3" id="t3" required>
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="password" placeholder="Enter password" name="t4" id="t4" required>
        </div>
        <div class="input-box">
          <span class="details">Marks in 10th</span>
          <input type="number" placeholder="Enter your 10th marks" name="t5" id="t5" required>
        </div>
        <div class="input-box">
          <span class="details">Marks in 12th</span>
          <input type="number" placeholder="Enter your 12th marks" name="t6" id="t6" required>
        </div>
        <div class="input-box">
          <span class="details">Graduation Marks</span>
          <input type="number" placeholder="Enter your graduation marks" name="t7" id="t7" required>
        </div>
        <div class="input-box">
          <span class="details">Job Profile</span>
          <input type="text" placeholder="Enter Job Profile" name="t8" id="t8" required>
        </div>
        <div class="input-box">
          <span class="details">Preferred Skills</span>
          <select id="drop-down" name="t9" id="t9">
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
          <span class="details">Drive Date</span>
          <input type="date" placeholder="Enter drive date" name="t10" id="t10" required>
        </div>
        <div class="input-box">
          <span class="details">Address</span>
          <input type="text" placeholder="Enter your address" id="t11" name="t11" required>
        </div>
      </div>
      <div class="button">
        <input class="submit" type="submit" value="Register" name="b1" contact_submitted" >
        <?php
              if(isset($_REQUEST{"b1"}))
              {
              $cname=$_REQUEST["t1"];
              $e=$_REQUEST["t2"];
              $con=$_REQUEST["t3"];
              $p=$_REQUEST["t4"];
              $ten=$_REQUEST["t5"];
              $twel=$_REQUEST["t6"];
              $grad=$_REQUEST["t7"];
              $job=$_REQUEST["t8"];
              $skl=$_REQUEST["t9"];
              $drv=$_REQUEST["t10"];
              $ad=$_REQUEST["t11"];
              $db=mysqli_connect("localhost","root","","dbplacement");
              $q="insert into tbcompany(cname,email,contact,password,tenth,twel,grad,Job_Description,Skills_Preferred,Drive_date,address)values('$cname','$e','$con','$p','$ten','$twel','$grad','$job','$skl','$drv','$ad')";
              mysqli_query($db,$q);
              }
              if(isset($_REQUEST["b2"]))
              {
                header('Location:page.php');
              }
             ?>
      </div>
    </form>
  </div>
</body>
</html>