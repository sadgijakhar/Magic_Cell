<?php
include('includes/connect.php');
if($_GET['id']){
    $id = $_GET['id'];
    if(isset($_POST['enter1'])){
        $new = $_POST['password'];
        $confirm = $_POST['confirm_password'];
        // echo"$query  $pass";
        if($new == $confirm){
            $run = "UPDATE `users` SET `password` = '$new' WHERE `id` ='$id'";
            $run1 = mysqli_query($con,$run);
            if($run1){
                header("Location: login.php");
            }
            
        }
        else{
            
            echo "<script>alert('confirm password not equal to new password')</script>";
            
        }  
    }
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>

<div class="box">
        <div class="form">
            <h2>New Password</h2>
            <form method="post">
            <div class="inputbox">
                <input type="text" id ="password" name ="password" required ="required">
                <span>New Password</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" id ="confirm_password" name ="confirm_password" required ="required">
                <span>Confirm Password</span>
                <i></i>
            </div>
            
            <div class="links">
                
            </div>
            
            <input type="submit" name="enter1" id="enter1" value="Send">
            </form>
        </div>
    </div>
    <div class="image">
        <ul>
            <li> <img src="img/logo.png">
            </li>
        </ul> 
     </div> 
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magic Cell</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">

    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">

    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  works css file  -->
    <link rel="stylesheet" href="./css/pages/Login.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>

    <!------------------------------------------------------------------------------------------------------------------------------------------------>

    <!--  ========================================================= START NAVBAR =========================================================== -->

    <!------------------------------------------------------------------------------------------------------------------------------------------------>


    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <img src="./img/banner/SU-Logo.jpg" alt="logo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://127.0.0.1:5501/index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/New_Project/about.php">who are we</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:5501/Works.html">our works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:5501/Problems.html">explore problems</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:5501/Process.html">process</a>
                        </li>
                        
                        
                    </ul>
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="submit" href="http://localhost/New_Project/submit.php">submit issue</a>
                        </li>
                        <li class="nav-item">
                            <a class="submit ml-2" href="login.php">Login<span class="sr-only">(current)</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>



    <!------------------------------------------------------------------------------------------------------------------------------------------------>

    <!--  ========================================================= END NAVBAR =========================================================== -->

    <!------------------------------------------------------------------------------------------------------------------------------------------------>

    <section class="pt-8 pt-md-12 pb-12 pb-md-10">
        <div class="container-1">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <h1 class="display-1 fw-bold">
                        LOGIN
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container-login">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form" method="post">
                    <h2 class="title">Create New Password</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id ="password" name ="password" placeholder="New Password" required ="required">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id ="confirm_password" name ="confirm_password" placeholder="Confirm Password" required ="required"/>
                    </div>
                    <input type="submit" class="btn solid"  name="enter1" id="enter1" value="Send">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <img src="img/Login.jpg" class="image" alt="" />
            </div>
        </div>
    </div>


    <!------------------------------------------------------------------------------------------------------------------------------------------------>

    <!--  ========================================================= START FOOTERS AREA =========================================================== -->

    <!------------------------------------------------------------------------------------------------------------------------------------------------>


    <footer class="footer">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="img/logo-dark.png" alt="logo"></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        Copyright ©2019 All rights reserved
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>About Sushant University</h4>
                    <p style="color:rgb(184, 184, 184)">
                        Sushant University (Erstwhile Ansal University) was established in 2012 under the Haryana
                        Private Universities Act 2006. Located in the heart of Gurugram, India’s largest hub of National
                        and Fortune 500 companies. We have eight schools offering programmes in Architecture, Design,
                        Law, Management, Hospitality, Engineering, Health Sciences and Planning & Development.
                    </p>
                </div>
                <div class="footer-col">
                    <h4>ADMISSIONS</h4>
                    <ul>
                        <li><a href="https://sushantuniversity.edu.in/education-loan">Education Loans</a></li>
                        <li><a href="https://sushantuniversity.edu.in/payment-procedure">Payment Procedure</a></li>
                        <li><a href="https://sushantuniversity.edu.in/feestructure-refund-policy">Fee Structure and
                                Refund Policy</a></li>
                        <li><a href="https://sushantuniversity.edu.in/academics/online-fee-depositing">Online Fee
                                Depositing</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>EXAMINATION</h4>
                    <ul>
                        <li><a href="https://sushantuniversity.edu.in/academics/examination/rules">Rules</a></li>
                        <li><a href="https://sushantuniversity.edu.in/academics/examination/notice">Notices</a></li>
                        <li><a href="https://sushantuniversity.edu.in/academics/examination/datesheets">Datesheets</a>
                        </li>
                        <li><a href="https://sushantuniversity.edu.in/academics/examination/result">Results</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>QUICK LINKS</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/SushantUniversity/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/SushantUni"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/sushant.university/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/school/sushant-university/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!------------------------------------------------------------------------------------------------------------------------------------------------>

    <!--  ========================================================= END FOOTERS AREA =========================================================== -->

    <!------------------------------------------------------------------------------------------------------------------------------------------------>



    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>


</body>

</html>