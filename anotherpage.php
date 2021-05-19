<?php
include "header.php";
?>

  <div class="head">
    <h2>Student's Details</h2>
  </div> 

  <div class="table-box">
  <?php
    // session_start();
    if(isset($_SESSION["studentlogin"])){	
      $r=$_SESSION["studentlogin"];
      $db=mysqli_connect("localhost","root","","dbplacement");
      $q="select * from tbstudent where rollno=$r";
      $result=mysqli_query($db,$q);
      while($res=mysqli_fetch_array($result)){
        extract($res);
        echo"
          <div class='table-row'>
            <div class='table-cell col-bg'>
              <p>First Name</p>
            </div>
            <div class='table-cell'>
              <p>$fname</p>
            </div>
          </div>
          <div class='table-row'>
            <div class='table-cell col-bg'>
              <p>Last Name</p>
            </div>
            <div class='table-cell'>
              <p>$lname</p>
            </div>
          </div>
          <div class='table-row'>
            <div class='table-cell col-bg'>
              <p>Roll Number</p>
            </div>
            <div class='table-cell'>
              <p>$rollno</p>
            </div>
        </div>
        <div class='table-row'>
          <div class='table-cell col-bg'>
            <p>Email</p>
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
          <p>Fathers Name</p>
        </div>
        <div class='table-cell'>
          <p>$father</p>
        </div>
    </div>
    <div class='table-row'>
      <div class='table-cell col-bg'>
        <p>Password</p>
      </div>
      <div class='table-cell'>
        <p>$password</p>
      </div>
    </div>
    <div class='table-row'>
      <div class='table-cell col-bg'>
        <p>Tenth Marks</p>
      </div>
      <div class='table-cell'>
        <p>$tenth</p>
      </div>
    </div>
    <div class='table-row'>
      <div class='table-cell col-bg'>
        <p>Twelth Marks</p>
      </div>
      <div class='table-cell'>
        <p>$twel</p>
      </div>
    </div>
    <div class='table-row'>
      <div class='table-cell col-bg'>
        <p>Graduation Marks</p>
      </div>
      <div class='table-cell'>
        <p>$grad</p>
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