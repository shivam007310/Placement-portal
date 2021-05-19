<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.css">
  <script src="https://kit.fontawesome.com/f0fe9ca510.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="center">
    <h1>Recover Password</h1>
    <!-- FORM -->
    <form method="post">
      <div class="txt_field">
        <input type="text" name="t1" id="t1" required>
        <span></span>
        <label>Roll Number</label>
      </div>
      <div class="txt_field">
        <input type="email" name="t2" id="t2" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="number" name="t3" id="t3" required>
        <span></span>
        <label>Contact</label>
      </div>
      <input type="submit" name="b1" id="b1" value="Recover Password" contact_submitted" >
      <div class="signup_link">
		    <p><a href="page.php">LogIn to your account?</a></p>
      </div> 
      </div>
      <?php
        if(isset($_REQUEST{"b1"})){
          $roll=$_REQUEST["t1"];
          $e=$_REQUEST["t2"];
          $c=$_REQUEST["t3"];
          $db=mysqli_connect("localhost","root","","dbplacement");
          $q="select * from tbstudent where rollno=$roll and email='$e' and contact='$c'";
          $result=mysqli_query($db,$q);
	        while($res=mysqli_fetch_array($result)){
            extract($res);
            echo"<div class='display'><p><a href='stdrecoverpassword.php'><i class='fas fa-times-circle'></i></a></p><h2>Your Password :</h2><p>$password</p></div>";
          }
        }
        if(isset($_REQUEST["b2"])){
          header('Location:page.php');
        }
      ?>
    </form>
  </div>
</body>
<style>
  .display{
    width: 400px;
    height: 200px;
    border: 1px solid black;
    position: absolute;
    top: 30%;
    left: 38%;
    text-align: center;
    padding-top: 50px;
    background: white;
    border-radius: 5px;
    outline: none;
    box-shadow: 5px 10px 18px #888888;
  }
  .fas{
    position: absolute;
    top: 5%;
    right: 5%;
    font-weight: 20px;
    cursor: pointer;
  }
  .signup_link{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;  
}
.signup_link a:hover{
    text-decoration: underline;
}
</style>
</html>