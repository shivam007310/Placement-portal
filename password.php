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
    <!-- <h1>For Companies</h1> -->
    <!-- <p>Hire the Candidates</p> -->
  </div>
  <div class="center">
    <h1>Change Password</h1>
    <!-- FORM -->
    <form method="post" enctype="multipart/form-data">
      <div class="txt_field">
        <input type="password" name="t1" id="t1" required>
        <span></span>
        <label>Old Password</label>
      </div>
      <div class="txt_field">
        <input type="password" name="t2" id="t2" required>
        <span></span>
        <label>New Password</label>
      </div>
	  <div class="txt_field">
        <input type="password" name="t3" id="t3" required>
        <span></span>
        <label>Confirm New Password</label>
      </div>
      <!-- <div class="pass">Forgot Password?</div> -->
      <input type="submit" name="b1" id="b1" value="Change Password">
      <!-- <div class="signup_link">
        Don't have an account? <a href="addcompany.php">SignUp</a>
      </div> -->
	  <?php
		session_start();
		if(isset($_SESSION["studentlogin"])){
			// echo "<h1>Welcome ".$_SESSION["studentlogin"]."!</h1>";
			if(isset($_REQUEST["b1"])){
				$current=$_REQUEST["t1"];
				$r=$_SESSION["studentlogin"];
				$db=mysqli_connect("localhost","root","");
				mysqli_select_db($db,"dbplacement");
				$q="select * from tbstudent where password='$current'";
				$query=mysqli_query($db,$q);
				if(mysqli_num_rows($query)>0){
					$new=$_REQUEST["t2"];
					$new2=$_REQUEST["t3"];
					if($new==$new2){
						$db1=mysqli_connect("localhost","root","");
						mysqli_select_db($db1,"dbplacement");
						$q1="update tbstudent set password='$new' where rollno='$r'";
						mysqli_query($db1,$q1);
						echo "Password changed!<br>";
						echo "<a href='anotherpage.php'>Return back to my account</a><br>";
					}else {
						echo "<tr   id='z1'><td colspan=2>New passwords dont match !</td></tr>";
					}
				}else{
					echo "<tr    id='z1'><td colspan=2>Invalid current password !</td></tr>";
				}
			}
		}else if(isset($_SESSION["companylogin"])){
			if(isset($_REQUEST["b1"])){
				$current=$_REQUEST["t1"];
				$id=$_SESSION["companylogin"];
				$db=mysqli_connect("localhost","root","");
				mysqli_select_db($db,"dbplacement");
				$q="select * from tbcompany where password='$current' and id=$id";
				$query=mysqli_query($db,$q);
				if(mysqli_num_rows($query)>0){
					$new=$_REQUEST["t2"];
					$new2=$_REQUEST["t3"];
					if($new==$new2){
						$db1=mysqli_connect("localhost","root","");
						mysqli_select_db($db1,"dbplacement");
						$q1="update tbcompany set password='$new' where id=$id";
						mysqli_query($db1,$q1);
						echo "Password changed!<br>";
						echo "<a href='anotherpage.php'>Return back to my account</a><br>";
					}else {
						echo "<tr  id='z1'><td colspan=2>New passwords dont match !</td></tr>";
					}
				}else{
					echo "<tr  id='z1'><td colspan=2>invalid current password !</td></tr>";
				}
			}
		}else {
			header('Location:login.php');
		}

	?>
    </form>
  </div>
</body>
</html>