<?php
  include "header.php";
?>

<div class="banner-card">
  <!-- <img src="images/index_bg.jpg" alt="background" height="658px;" width="1536px;"> -->
  <img src="images/index_bg.jpg" alt="background">
  <div class="banner-text">
    <h4>Welcome to placement portal</h4>
    <!-- <p>Learn with education partner</p> -->
  </div>
</div>

<?php
  include "footer.php";
?>


<style>
  .banner-card{
    position: relative;
    background-color: black;
   
  }
  .banner-card img{
    width: 100%;
    height: 620px;
    opacity: 0.6;
  }
  .banner-text{
    position: absolute;
    top: 40%;
    left: 30%;
    color: black;
    padding: 20px;
  }
  .banner-text h4{
    font-size: 35px;
    text-transform: uppercase;
    font-weight: bold;
    margin-bottom: 5px;
    transition: all 0.4s ease;
  }
</style>
