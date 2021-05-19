<?php
include "header.php";
?>

<div class="head">
    <h2>Company Details</h2>
</div>
<div class="underline"></div>

<div class="table-box">
  <?php
    // session_start();
    if(isset($_SESSION["companylogin"])){
	    $id=$_SESSION["companylogin"];
        $db=mysqli_connect("localhost","root","","dbplacement");
        $q="select * from tbcompany where id=$id";
        $result=mysqli_query($db,$q);
        while($res=mysqli_fetch_array($result)){
		    extract($res);
            echo"
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Company Id</p>
                    </div>
                    <div class='table-cell'>
                        <p>$id</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Company Name</p>
                    </div>
                    <div class='table-cell'>
                        <p>$cname</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Email Id</p>
                    </div>
                    <div class='table-cell'>
                        <p>$email</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Mobile Number</p>
                    </div>
                    <div class='table-cell'>
                        <p>$contact</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Marks required in 10th</p>
                    </div>
                    <div class='table-cell'>
                        <p>$tenth</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Marks required in 12th</p>
                    </div>
                    <div class='table-cell'>
                        <p>$twel</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Graduation Marks Required</p>
                    </div>
                    <div class='table-cell'>
                        <p>$grad</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Job Description</p>
                    </div>
                    <div class='table-cell'>
                        <p>$Job_Description</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Skills Required</p>
                    </div>
                    <div class='table-cell'>
                        <p>$Skills_Preferred</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Drive Date</p>
                    </div>
                    <div class='table-cell'>
                        <p>$Drive_date</p>
                    </div>
                </div>
                <div class='table-row'>
                    <div class='table-cell col-bg'>
                        <p>Address of the company</p>
                    </div>
                    <div class='table-cell'>
                        <p>$address</p>
                    </div>
                </div>
            ";
        }
  }
  ?> 
  </div>

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
    .table-box{
      margin: 50px auto;
    }
    .col-bg{
      background: #778899;
      color: white;
    }
    .table-row{
      display: table;
      width: 60%;
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
      width: 30%;
      text-align: center;
      padding: 4px 0;
      border-right: 1px solid #d6d4d4;
      vertical-align: middle;
    }
  </style>












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
</style>