<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="student">
    <h1>For Companies</h1>
    <!-- <p>Hire the Candidates</p> -->
  </div>
  <div class="center">
    <h1>Log in</h1>
    <!-- FORM -->
    <form method="post" enctype="multipart/form-data">
      <div class="txt_field">
        <input type="text" name="t1" id="t1" required>
        <span></span>
        <label>Id</label>
      </div>
      <div class="txt_field">
        <input type="password" name="t2" id="t2" required>
        <span></span>
        <label>Password</label>
      </div>
      <!-- <div class="pass">Forgot Password?</div> -->
      <input type="submit" name="b1" id="b1" value="LogIn">
      <div class="signup_link">
        Don't have an account? <a href="addcompany.php">SignUp</a>
		<p><a href="cmprecoverpassword.php">Forgot Password?</a></p>
      </div>

<?php
      session_start();
      if(!isset($_SESSION['is_login'])){
        if(isset($_REQUEST["b1"])){
          $u=$_REQUEST["t1"];
          $p=$_REQUEST["t2"];
          $db=mysqli_connect("localhost","root","","dbplacement");
          $q="select * from tbcompany where id=$u and password='$p'";
          // mysqli_query is a function to execute a query(1st parameter = connection variable  2nd = query variable)
          $query=mysqli_query($db,$q);
          if(mysqli_num_rows($query)>0){
            //registering the session in studentlogin
            $_SESSION['is_login'] = true;
            $_SESSION["companylogin"]=$u;
            // $_SESSION["studentname"]=$name;
            header('Location:company_home.php');
          }else{
            echo "Invalid Username or Password";
          }
        }
      }else{
        header('Location: anotherpage.php');
      }
    ?>
    </form>
  </div>
</body>
</html>