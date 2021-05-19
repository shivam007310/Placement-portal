<?php
  include "header.php";
?>

<div class="head">
    <h2>Select Student</h2>
</div>
<div class="underline"></div>

<form method="post">
  	<select name="s1" id="s1">        <!--  //dropdown start -->
		<option value="" selected disabled hidden>Select Student</option>
		<?php
			session_start();
			if(isset($_SESSION["companylogin"])){
				$id=$_SESSION["companylogin"];
				$db=mysqli_connect("localhost","root","","dbplacement");
				$q="SELECT a.fname,a.Skills,b.Skills_Preferred FROM tbstudent a,tbcompany b WHERE a.tenth>=b.tenth AND a.twel>=b.twel AND a.grad>=b.grad AND a.Skills=b.Skills_Preferred AND b.id='$id'";
				$query=mysqli_query($db,$q);
				while($res=mysqli_fetch_array($query)){
					extract($res);
					echo "<option>$fname</option>";
				}
			}else{
				header("Location:anotherpage.php");
			}
    	?>
  	</select>
    <input type="submit" value="View Details" name="b1" id="b1"/><br><br><br>
  <?php
    if(isset($_REQUEST["b1"])){	
		$s1=$_REQUEST["s1"];
		$db=mysqli_connect("localhost","root","","dbplacement");
		$q="select * from tbstudent where fname='$s1'";
		$query=mysqli_query($db,$q);
      echo "
        <div class='table-box'>
          <div class='table-row table-head'>
            <div class='table-cell'>
              <p>Name</p>
            </div>
            <div class='table-cell'>
              <p>Email</p>
            </div>
            <div class='table-cell'>
              <p>Mobile Number</p>
            </div>
            <div class='table-cell'>
              <p>Address</p>
            </div>
            <div class='table-cell'>
              <p>Skills</p>
            </div>
        </div>
      ";
      while($res=mysqli_fetch_array($query)){
		extract($res);
        echo"
          <div class='table-row'>
            <div class='table-cell'>
              <p>$fname</p>
            </div>
            <div class='table-cell'>
              <p>$email</p>
            </div>
            <div class='table-cell'>
              <p>$contact</p>
            </div>
            <div class='table-cell'>
              <p>$address</p>
            </div>
            <div class='table-cell'>
              <p>$Skills</p>
            </div>
          </div>
			  ";
      }
    }
  ?>
</form>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
    .head{
      font-family: "Montserrat", sans-serif;
      margin-top: 50px;
      width: 100%;
      height: 50px;
    }
    .head h2{
      text-align: center;
      letter-spacing: 2px;
    }
    .underline{
      border: 1px solid black;
      height: 5px;
      width: 300px;
      border-radius: 5px;
      background-color: rgba(5, 77, 95, 0.8);
      position: absolute;
      top: 150px;
      left: 615px;
    }
    #s1{
      position: absolute;
      top: 30%;
      left: 37%;
      width: 15%;
      height: 5%;
      border: none;
      font-size: 17px;
      border: 2px solid rgba(0,0,0,0.12);
      border-radius: 5px;
      outline: none;
    }
    #b1{
      position: absolute;
      top: 30%;
      left: 54%;
      background: none;
      width: 9%;
      height: 5%;
      font-size: 17px;
      text-transform: uppercase;
      letter-spacing: 1px;
      cursor: pointer;
      border: 2px solid rgba(0,0,0,0.12);
      border-radius: 2px;
      outline: none;
      background-color: rgba(5, 77, 95, 0.8);
    }
    .table-box{
      margin: 120px auto;
    }
	.table-row{
      display: table;
      width: 80%;
      margin: 10px auto;
      font-family: "Montserrat", sans-serif;
      background: transparent;
      padding: 12px 0;
      color: #555;
      font-size: 13px;
      box-shadow: 0 1px 4px 0 rgba(0,0,50,0.3);
    }
	.table-cell{
      display: table-cell;
      width: 20%;
      text-align: center;
      padding: 4px 0;
      border-right: 1px solid #d6d4d4;
      vertical-align: middle;
    }
	.table-head{
		background: rgba(5, 77, 95, 0.8);
		box-shadow: none;
		color: #fff;
		font-weight: 600;
	}
</style>