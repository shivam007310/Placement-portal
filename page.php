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
    <h1>For Students</h1>
  </div>
  <div class="center">
    <h1>Log in</h1>
    <!-- FORM -->
    <form method="post">
      <div class="txt_field">
        <input type="text" name="t1" id="t1" required>
        <span></span>
        <label>ID</label>
      </div>
      <div class="txt_field">
        <input type="text" name="t3" id="t3" required>
        <span></span>
        <label>Name</label>
      </div>
      <div class="txt_field">
        <input type="password" name="t2" id="t2" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input type="submit" name="b1" id="b1" value="LogIn">
      <div class="signup_link">
        Don't have an account? <a href="addstudent.php">SignUp</a>
        <div>
         <a href="stdrecoverpassword.php">Forgot Password?</a>
        </div>
        
      </div>
      <?php
      session_start();
      if(!isset($_SESSION['is_login'])){
        if(isset($_REQUEST["b1"])){
          $roll=$_REQUEST["t1"];
          $pass=$_REQUEST["t2"];
          $name=$_REQUEST["t3"];
          $db=mysqli_connect("localhost","root","","dbplacement");
          $q="select * from tbstudent where rollno='$roll' and password='$pass' and fname='$name'";
          // mysqli_query is a function to execute a query(1st parameter = connection variable  2nd = query variable)
          $query=mysqli_query($db,$q);
          if(mysqli_num_rows($query)>0){
            //registering the session in studentlogin
            $_SESSION['is_login'] = true;
            $_SESSION["studentlogin"]=$roll;
            $_SESSION["studentname"]=$name;
            header('Location:anotherpage.php');
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