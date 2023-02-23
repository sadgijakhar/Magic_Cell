<?php

include('includes/connect.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $sql ="SELECT * FROM `users` WHERE `username`= '".$username."' AND `password` ='".$password."'";
    $result = mysqli_query($con , $sql);
    $row =mysqli_fetch_array($result);
    $query_id = $row["id"];
    $_SESSION["username"] = $username;
    $_SESSION['role'] = $row["role"];
    
    if($_SESSION['role']=="user"){
        $_SESSION['loggedin'] =true;
        // $_SESSION["username"] = $username;
        header(("Location:http://localhost/New_Project/skydash-free-bootstrap-admin-template/template/index_user.php?id=$query_id"));
    } 
    else if($_SESSION['role']=="admin"){
        $_SESSION['loggedin'] =true;
        header("Location: http://localhost/New_Project/skydash-free-bootstrap-admin-template/template/index.php?id=$query_id");
    }
    else{
        $_SESSION['loggedin'] =false;
        echo "<script> alert('username or password incorrect')</script>";
    }
}

?>
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
                <img src="./img/logo-1.png" width=15% alt="logo">
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
                    <h2 class="title">LOGIN</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id ="user" name ="user" placeholder="Username" required ="required"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id ="pass" name ="pass"  placeholder="Password" required ="required">
                    </div>
                    <div class="links">
                        <a href ="forgot.php">Forgot Password</a>
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="enter" id="enter" />
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