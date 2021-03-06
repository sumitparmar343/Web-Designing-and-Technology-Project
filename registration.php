<?php
 $insert = false;
 if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   //  echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $country = $_POST['country'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    // $gender = $_POST['gender'];
    // $id = isset($_GET['id']) ? $_GET['id'] : '';
    $tandc = isset($_POST['tandc']) ? $_POST['tandc'] : '';
    // $tandc = $_POST['tandc'];

    // $sql = "INSERT INTO `mumbaiindians`.`registration` (`name`, `email`, `password`, `birthday`, `country`, `gender` , `tandc` , `date` ) VALUES ( '$name', '$email', '$password', '$birthday', '$country', '$gender' , '$tandc', current_timestamp());";

    $sql = "INSERT INTO `mi`.`mi` (`sno`, `name`, `email`, `password`, `birthday`, `country`, `gender`, `tandc`) VALUES ( '0', '$name', '$email', '$password', '$birthday', '$country', '$gender', '$tandc');";
   
    // echo $sql;
   
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>



<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>Registration</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Registration form css js -->
<link rel="stylesheet" href="css/registration.css">
<script src="js/registration.js"></script>
<!-- Site Icons -->
<link rel="shortcut icon" href="" type="image/x-icon" />
<link rel="apple-touch-icon" href="">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- font family -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="css/3dslider.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="js/3dslider.js"></script>
</head>


<body onload="document.registration.userid.focus();" class="game_info" data-spy="scroll" data-target=".header">
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loading-img.gif" alt="">
    </div>
    <!-- END LOADER -->
    <section id="top">
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" style="width: 227px;height: 57px ;" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right_top_section">
                                <!-- social icon -->
                                <ul class="social-icons pull-left">
                                    <li><a class="facebook" href="https://www.facebook.com/mumbaiindians/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="https://twitter.com/mipaltan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="https://www.youtube.com/channel/UCl23mvQ3321L7zO6JyzhVmg"><i class="fa fa-youtube-play"></i></a></li>

                                </ul>
                                <!-- end social icon -->
                                <!-- button section -->
                                <ul class="login">
                                    <li class="login-modal">
                                        <a href="login.html" class="login"><i class="fa fa-user"></i>Login</a>
                                    </li>
                                    <li>
                                        <div class="cart-option">
                                            <a href="registration.html"><i class="fa fa-user-plus"></i>Register</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end button section -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main-menu-section">
                                    <div class="menu">
                                        <nav class="navbar navbar-inverse">
                                            <div class="navbar-header">
                                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                                <a class="navbar-brand" href="#">Menu</a>
                                            </div>
                                            <div class="collapse navbar-collapse js-navbar-collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="active"><a href="index.html">Home</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="news.html">News</a></li>
                                                    <li class="dropdown mega-dropdown">
                                                        <a href="match" class="dropdown-toggle" data-toggle="dropdown">Match<span class="caret"></span></a>
                                                        <ul class="dropdown-menu mega-dropdown-menu">
                                                            <li class="col-sm-8">
                                                                <ul>
                                                                    <li class="dropdown-header">Men Collection</li>
                                                                    <div id="menCollection" class="carousel slide" data-ride="carousel">
                                                                        <div class="carousel-inner">
                                                                            <div class="item active">
                                                                                <div class="banner-for-match">
                                                                                    <a href="#"><img class="img-responsive" src="images/match-banner1.jpg" alt="#" /></a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                            <div class="item">
                                                                                <div class="banner-for-match">
                                                                                    <a href="#"><img class="img-responsive" src="images/match-banner2.jpg" alt="#" /></a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                            <div class="item">
                                                                                <div class="banner-for-match">
                                                                                    <a href="#"><img class="img-responsive" src="images/match-banner1.jpg" alt="#" /></a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Item -->
                                                                        </div>
                                                                        <!-- End Carousel Inner -->
                                                                        <!-- Controls -->
                                                                        <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.carousel -->
                                                                </ul>
                                                            </li>
                                                            <li class="col-sm-4">
                                                                <ul class="menu-inner">
                                                                    <li class="dropdown-header">Next Matchs</li>
                                                                    <li><a href="#">Mumbai Indians vs Chennai Super Kings</a></li>
                                                                    <li><a href="#">Mumbai Indians vs Delhi Daredevils</a></li>
                                                                    <li><a href="#">Mumbai Indians vs Kings XI Punjab</a></li>
                                                                    <li><a href="#">Mumbai Indians vs Sunrisers Hyderabad</a></li>
                                                                    <li><a href="#">Mumbai Indians vs Royal Challanger Banglore</a></li>
                                                                    <li><a href="#">Mumbai Indians vs Kolkata Knight Riders</a></li>
                                                                    <li><a href="#">Mumbai Indians vs Chennai Super Kings</a></li>
                                                                    <li><a href="#">Mumbai Indians vs Delhi Daredevils</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="Winners.html">Winners</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.nav-collapse -->
                                        </nav>
                                        <div class="search-bar">
                                            <div id="imaginary_container">
                                                <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>  
                                          </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- First slide -->
                    <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                        <div class="carousel-caption">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="slider-contant" data-animation="animated fadeInRight">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.carousel-inner -->
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>


    <div class="container">
        <h1>Welcome to Mumbai Indians Registration Box</h3>
            <p>We are happy to see you joining us.</p>
            <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us.</p>";
        }
        ?>

                <form action="registration.php" method="post">
                    <!-- onclick=" return formValidation();"> -->
                    <input type="text" name="name" id="name" placeholder="Enter your name"><br>
                    <input type="email" name="email" id="email" placeholder="Enter your email"><br>
                    <input type="password" name="password" id="password" placeholder="Enter New Password">
                    <p style="margin-left:-70% !important;"><strong>Date of Birth</strong></p>
                    <input type="date" id="birthday" name="birthday" style="margin-top: -1%;">
                    <p style="margin-left:-73% !important;"><strong>Country:</strong></p>
                    <li><select name="country" style="margin-left:-118% !important;">
                        <option selected="" value="Default">(Please select a country)</option>
                        <option value="AF">Australia</option>
                        <option value="AL">Canada</option>
                        <option value="DZ">India</option>
                        <option value="AS">Russia</option>
                        <option value="AD">USA</option>
                        </select></li>
                    <p style="margin-left:-74% !important;"><strong>Gender</strong></p>
                    <input type="radio" name="gender" id="gender" value="Male" style="margin-left:-70% !important;">
                    <span style="margin-top: -2%;
                    margin-left: -64%;">Male</span>
                    <input type="radio" name="gender" id="gender" value="Female" style="margin-left:-70% !important;">
                    <span style="margin-top: -2%;margin-left: -62%;">Female</span>
                    <br>
                    <input type="checkbox" id="tandc" name="tandc" style="margin-left:-77% !important;" value="tandc">
                    <label style="margin-left: -34% !important;margin-top: -21px;">I agree to your Terms, Data Policy and Cookie Policy.</label><br>
                    <button type="reset" class="btn">Reset</button>
                    <button class="btn">Submit</button>
                </form>
                <!-- INSERT INTO `registration` (`S.No.`, `name`, `email`, `password`, `date of birth`, `country`, `male`, `female`, `date`) VALUES ('1', 'Sumit Parmar', 'sumitpawar343@gmail.com', '1234567@yehd', '14/03/1998', 'India', 'male', '', current_timestamp()); -->
                <!-- INSERT INTO `registration` (`s no`, `name`, `email`, `password`, `birthday`, `country`, `gender`, `tandc`, `date`) VALUES (NULL, 'akshay', 'akshay@akshay.com', 'humityhh', '13/23/7897', 'klaoa', 'male', '78', current_timestamp()); -->
    </div>
    <script src="js/registration.js"></script>




    <footer id="footer " class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-4 ">
                    <div class="full ">
                        <div class="footer-widget ">
                            <div class="footer-logo ">
                                <a href="# "><img src="images/footer-logo.png " alt="# " /></a>
                            </div>
                            <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                            <ul class="social-icons style-4 pull-left ">
                                <li><a class="facebook " href="# "><i class="fa fa-facebook "></i></a></li>
                                <li><a class="twitter " href="# "><i class="fa fa-twitter "></i></a></li>
                                <li><a class="youtube " href="# "><i class="fa fa-youtube-play "></i></a></li>
                                <li><a class="pinterest " href="# "><i class="fa fa-pinterest-p "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="full ">
                        <div class="footer-widget ">
                            <h3>Menu</h3>
                            <ul class="footer-menu ">
                                <li><a href="about.html ">About Us</a></li>
                                <li><a href="team.html ">Our Team</a></li>
                                <li><a href="news.html ">Latest News</a></li>
                                <li><a href="matche.html ">Recent Matchs</a></li>
                                <li><a href="blog.html ">Our Blog</a></li>
                                <li><a href="contact.html ">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="full ">
                        <div class="footer-widget ">
                            <h3>Contact us</h3>
                            <ul class="address-list ">
                                <li><i class="fa fa-map-marker "></i> Lorem Ipsum is simply dummy text of the printing..</li>
                                <li><i class="fa fa-phone "></i> 123 456 7890</li>
                                <li><i style="font-size:20px;top:5px; " class="fa fa-envelope "></i> demo@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="full ">
                        <div class="contact-footer ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404 " width="600
            " height="350 " frameborder="0 " style="border:0 " allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ">
            <div class="container ">
                <p>Copyright ?? 2021 Mumbai Indians - Sumit Parmar .All rights reserved.</p>
            </div>
        </div>
    </footer>
    <a href="#home " data-scroll class="dmtop global-radius "><i class="fa fa-angle-up "></i></a>
    <!-- ALL JS FILES -->
    <script src="js/all.js "></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js "></script>
</body>

</html>