<?php
	include "header.php";
?>

<div class="container">
    <h1>Matching great developers with world-class companies</h1>
</div>
<div class="container-main">
    <div class="contact-box">
        <div class="contact-left">
            <button class="btn">Companies</button>
            <h2>For Companies</h2>
            <p>Engage, source, assess and interview top developer talent for your tech team</p>
            <a href="login.php"><button class="btn-1">Log In</button></a>
        </div>
        <div class="contact-right">
            <h2>For Students</h2>
            <button class="btn">Students</button>
            <p>Sharpen your coding skills and prepare for interviews along with a community of 5 million passionate developers.</p>
            <a href="page.php"><button class="btn-2">Log In</button></a>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
    .container{
        font-family: "Montserrat", sans-serif;
        margin-top: 90px;
        width: 100%;
        height: 50px;
        /* background-color: black;
        color: white; */
    }
    .container h1{
        text-align: center;
        letter-spacing: 2px;
    }
    .container-main{
        font-family: "Montserrat", sans-serif;
        width: 60%;
        margin: 50px auto;
    }
    .contact-box{
        background: #fff;
        display: flex;
        /* border: 1px solid black; */
        margin-top: 40px;
    }
    .contact-left{
        flex-basis: 50%;
        padding: 40px 60px;
        border: 1px solid black;
        margin: 23px 10px 10px 10px;
        height: 270px;
        text-align: center;
    }
    .contact-left .btn{
        position: absolute;
        top: 260px;
        left: 450px;
        background: #191970;
    }
    .contact-left h2{
        padding-top: 20px;
    }
    .contact-left p{
        padding-top: 20px;
        color: 	#808080;
    }
    .contact-left .btn-1{
        margin-top: 40px;
    }
    .contact-right{
        flex-basis: 50%;
        padding: 40px;
        border: 1px solid black;
        margin: 23px 10px 10px 10px;
        text-align: center;
    }
    .contact-right .btn{
        position: absolute;
        top: 260px;
        left: 920px;
        background: #191970;
    }
    .contact-right h2{
        padding-top: 20px;
    }
    .contact-right p{
        padding-top: 20px;
        color: 	#808080;
    }
    .contact-right .btn-2{
        margin-top: 25px;
    }
</style>

<?php
	include "footer.php";
?>