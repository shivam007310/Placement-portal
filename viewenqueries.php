<?php
	include "header.php";
?>

<?php
	// session_start();
	$db=mysqli_connect("localhost","root","","dbplacement");
	$cid=$_SESSION["companylogin"];
	$q="select * from tbcontact where companyid=$cid";
	$query=mysqli_query($db,$q);
	if(mysqli_num_rows($query)>0){
		echo"
			<div class='head'>
				<h2>Queries</h2>
			</div>
			<div class='underline'></div>

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
					<p>Query</p>
				</div>
			</div>
		";
		while($res=mysqli_fetch_array($query)){
			extract($res);
			echo"
				<div class='table-row'>
					<div class='table-cell'>
						<p>$name</p>
					</div>
					<div class='table-cell'>
						<p>$email</p>
					</div>
					<div class='table-cell'>
						<p>$contact</p>
					</div>
					<div class='table-cell'>
						<p>$queries</p>
					</div>
				</div>
			";
		}
	}else{
		echo"<div class='empty'><h1>No queries found</h1></div>";
	}
	
	
	?>



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
	.table-box{
      margin: 50px auto;
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
      width: 25%;
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
	.empty h1{
		text-align: center;
		position: absolute;
		top: 40%;
		left: 40%;
	}
</style>