<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/f0fe9ca510.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- <img class="logo" src="#" alt="logo"> -->
        <h2 class="logo" style="color:white;">Think Big!</h2>
        <nav>
            <ul class="nav__links">
                <?php
                    $pname=basename($_SERVER['PHP_SELF']);
                ?>
                <?php session_start(); ?>
                <?php if(isset($_SESSION['studentlogin'])){ ?>
                    <?php
                    if($pname=="anotherpage.php"){
                    ?>
                        <li class="active"><a href="anotherpage.php">Home</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="anotherpage.php">Home</a></li>
                        <?php
                    }
                ?>
                <?php
                    if($pname=="contact.php"){
                    ?>
                        <li class="active"><a href="contact.php">Contact Us</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="contact.php">Contact Us</a></li>
                        <?php
                    }
                ?>
                <?php
                    if($pname=="viewcompanyeligible.php"){
                    ?>
                        <li class="active"><a href="viewcompanyeligible.php">Company Eligible</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="viewcompanyeligible.php">Company Eligible</a></li>
                        <?php
                    }
                ?>
                    <!-- <li><a href="viewcompanyeligible.php">Company Eligible</a></li> -->
                    <li class="active"></i> <i class="fas fa-user-circle"></i> <?php echo $_SESSION['studentname'] ?>&nbsp;&nbsp;</li>
                    <li>
                    <div class="dropdown">
                        <i class="fas fa-cog" style="cursor: pointer;"></i>
                        <div class="dropdown-content">
                            <a href="password.php">Change Password</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                    </li>
                <?php }else if(isset($_SESSION['companylogin'])){?> 
                    <?php
                    if($pname=="company_home.php"){
                    ?>
                        <li class="active"><a href="company_home.php">Home</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="company_home.php">Home</a></li>
                        <?php
                    }
                    ?> 
                    <?php
                    if($pname=="viewstudenteligible.php"){
                    ?>
                        <li class="active"><a href="viewstudenteligible.php">Eligible Students</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="viewstudenteligible.php">Eligible Students</a></li>
                        <?php
                    }
                    ?>
                    <?php
                    if($pname=="viewenqueries.php"){
                    ?>
                        <li class="active"><a href="viewenqueries.php">View Queries</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="viewenqueries.php">View Queries</a></li>
                        <?php
                    }
                    ?>
                    <li></i> <i class="fas fa-user-circle"></i> Welcome&nbsp;&nbsp;</li>
                    <li>
                    <div class="dropdown">
                        <i class="fas fa-cog" style="cursor: pointer;"></i>
                        <div class="dropdown-content">
                            <a href="editcompanydata.php">Edit Details</a>
                            <a href="password.php">Change Password</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                    </li>  
                <?php }else { ?>
                    <!-- Home -->
                <?php
                    if($pname=="index.php"){
                    ?>
                        <li class="active"><a href="index.php">Home</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="index.php">Home</a></li>
                        <?php
                    }
                ?>
                <!-- Contact Us -->
                <?php
                    if($pname=="contact.php"){
                    ?>
                        <li class="active"><a href="contact.php">Contact Us</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="contact.php">Contact Us</a></li>
                        <?php
                    }
                ?>
                    <li><a class="cta" href="main_login_page.php"><button>LogIn</button></a></li>
                    
                <?php } ?>    
            </ul>
        </nav>

    <style>
        .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        width: 200px;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
            text-decoration: none;
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }

        .dropdown:hover .dropbtn {
        background-color: #3e8e41;
        }
    </style>
        
        
    </header>
</body>
</html>
