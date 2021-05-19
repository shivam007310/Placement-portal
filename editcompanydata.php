<?php
include "header.php";
?>

<div class="head">
    <h2>Update Details</h2>
</div>
<div class="underline"></div>

<form method="post">
	<table border=1>
<?php
// session_start();
if(isset($_SESSION["companylogin"]))
{
	$id=$_SESSION["companylogin"];
$db=mysqli_connect("localhost","root","","dbplacement");
$q="select * from tbcompany where id=$id";
$result=mysqli_query($db,$q);
	while($res=mysqli_fetch_array($result))
	{
		extract($res);
		echo "<tr><td class='table-head'>Company ID </td><td> <input type='text' id='t1' name='t1' value='$id' readonly/></td></tr>";
		echo "<tr><td class='table-head'>Company name </td><td> <input type='text' id='t2' name='t2' value='$cname'/></td></tr>";
		echo "<tr><td class='table-head'>Email address </td><td> <input type='text' id='t3' name='t3' value='$email'/></td></tr>";	
		echo "<tr><td class='table-head'>Contact number </td><td> <input type='text' id='t4' name='t4' value='$contact'/></td></tr>";	
		echo "<tr><td class='table-head'>Marks required in tenth </td><td> <input type='text' id='t5' name='t5' value='$tenth'/></td></tr>";	
		echo "<tr><td class='table-head'>Marks required in twelfth </td><td> <input type='text' id='t6' name='t6' value='$twel'/></td></tr>";	
		echo "<tr><td class='table-head'>Graduation marks required </td><td> <input type='text' id='t7' name='t7' value='$grad'/></td></tr>";
		echo "<tr><td class='table-head'>Job Description </td><td> <input type='text' id='t8' name='t8' value='$Job_Description'/></td></tr>";
		echo "<tr><td class='table-head'>Skills Required </td><td> <input type='text' id='t9' name='t9' value='$Skills_Preferred'/></td></tr>";
		echo "<tr><td class='table-head'>Drive Date </td><td> <input type='text' id='t10' name='t10' value='$Drive_date'/></td></tr>";	
		echo "<tr><td class='table-head'>Address of the company </td><td> <input type='text' id='t11' name='t11' value='$address'/></td></tr>";
		echo"<input type='submit' id='b1'name='b1' value='Update'/>";
	}
	if(isset($_REQUEST["b1"]))
	{
		$id=$_SESSION["companylogin"];
		$c=$_REQUEST["t2"];
		$e=$_REQUEST["t3"];
		$con=$_REQUEST["t4"];
		$ten=$_REQUEST["t5"];
		$twel=$_REQUEST["t6"];
		$grad=$_REQUEST["t7"];
		$job=$_REQUEST["t8"];
		$skl=$_REQUEST["t9"];
		$drv=$_REQUEST["t10"];
		$ad=$_REQUEST["t11"];
		$db1=mysqli_connect("localhost","root","","dbplacement");
		$q1="UPDATE tbcompany SET cname='$c',email='$e',contact='$con',tenth='$ten',twel='$twel',grad='$grad',Job_Description='$job',Skills_Preferred='$skl',Drive_date='$drv',address='$ad' WHERE id='$id'";
		$query=mysqli_query($db1,$q1);
		echo "<p id='p1'>Data successfully updated!</p>";
	}
}
?>
</table>
</form>
</body>

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
		left: 620px;
	}
	table
	{
		border-collapse: collapse;
		position: absolute;
		top: 240px;
		left: 420px;
		border-radius: 5px;
		margin:auto;
		font-size: 20px;
		font-family: "Montserrat", sans-serif;
		text-align: center;
		border: 1px solid grey;
		box-shadow: 5px 10px 18px #888888;
	}
	.table-head{
		width: 400px;
		font-family: "Montserrat", sans-serif;
		background-color: rgba(5, 77, 95, 0.8);
		color: white;
	}
	#t1,#t2,#t3,#t4,#t5,#t6,#t7,#t8,#t9,#t10,#t11
	{
		border:0;
		height: 30px;
		text-align: center;
		width: 300px;
	}
	#b1
	{
		border-radius: 3px;
		background-color: rgba(5, 77, 95, 0.8);
		position: absolute;
		color: white;
		width: 180px;
		height: 30px;
		top: 600px;
		left: 46%;
	}
	#b1:hover{
		background-color: rgba(5, 77, 95);
		cursor: pointer;
	}
	#a1
	{
		margin-bottom: 50%;
		margin-left:44%;
		color:white;
	}
	#a1:hover
	{
		color:red;
	}
	#p1
	{
		text-align: center;
		margin:auto;
	}
</style>