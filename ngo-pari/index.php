<?php

// Start the session
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pari Foundation</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css.css" />
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
</head>

<body>
    <!-- covif button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button">
            <span class="blink"><i class="fa fa-medkit blink" ></i> Covid Relief</span>
        </button>
    </a>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe our Newsletter</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="pb-3">Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                    <form method="post">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
                <!-- send mail for subscriptoion -->
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (!empty($_POST['name']) && !empty($_POST['email'])) {

                        $reciever_name = $_POST['name'];
                        $reciever_email = $_POST['email'];

                        include('sendemail.php');
                    }
                }
                ?>
                <br>
            </div>
        </div>
    </div>
    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                Parifoundation@gmail.com
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                +999999999
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 folouws">

                        <ul class="ulright">
                            <li> <small>Folow Us </small>:</li>
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                        <a href="volunteer.php"><button class="btn btn-sm btn-success">Join Us</button></a>
                        <a href="donate1.php"><button class="btn btn-sm btn-success">Donate</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-3 col-md-12 logo">
                        <a href="index.php">
                            <img src="assets/images/logo.png" alt="">
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                        </a>

                    </div>
                    <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                        <ul class="navbad">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_us.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Our Work</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_us.php">Contact US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <i class="fas fa-user"></i>
                                    <?php
                                    if (isset($_SESSION["login"])) {
                                        echo $_SESSION['user_name'];
                                    } ?>
                                </a>
                            </li>




                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your html -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/slider-3.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">lorem </h1>
                                <p class="slider-text hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque repudiandae quisquam qui cupiditate officiis, ex laudantium unde nisi ipsa sequi culpa earum. Provident quia beatae in eaque vitae ut.</p>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">lorem </h1>
                                <p class="slider-text hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque repudiandae quisquam qui cupiditate officiis, ex laudantium unde nisi ipsa sequi culpa earum. Provident quia beatae in eaque vitae ut.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider-captions ">
                                <h1 class="slider-title">lorem </h1>
                                <p class="slider-text hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque repudiandae quisquam qui cupiditate officiis, ex laudantium unde nisi ipsa sequi culpa earum. Provident quia beatae in eaque vitae ut.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--  ************************* About Us Starts Here ************************** -->

    <div class="about-us container-fluid">
        <div class="container">

            <div class="row natur-row no-margin w-100">
                <div class="text-part col-md-6">
                    <h2>About Our Foundation</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, amet? Impedit similique nemo velit earum quod, pariatur laudantium, voluptas voluptatibus soluta magnam officiis laboriosam labore? Omnis aperiam aliquam voluptas qui!</p>
                </div>
                <div class="image-part col-md-6">
                    <div class="about-quick-box row">
                        <div class="col-md-6">
                            <div class="about-qcard">
                                <i class="fas fa-user"></i>
                                <p>Become a Volunteer</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-search-dollar red"></i>
                                <p>Fundraising</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-donate yell"></i>
                                <p>Donate for a Cause</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-hands-helping blu"></i>
                                <p>Help Someone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ################# Mission Vision Start Here #######################--->

    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="row mission">
                <div class="col-md-6 mv-det">
                    <h1>Our Mission</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa libero molestias perferendis nulla, veniam corporis architecto numquam, maxime neque in debitis quod aperiam, ipsa officia! Quaerat nam dolor rem soluta!</p>
                </div>
                <div class="col-md-6 mv-img">
                    <img src="assets/images/misin.jpg" alt="">
                </div>
            </div>
            <div class="row vision">
                <div class="col-md-6 mv-img">
                    <img src="assets/images/vision.jpg" alt="">
                </div>
                <div class="col-md-6 mv-det">
                    <h1>Our Vision</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At consequuntur ipsa voluptatibus odio? Maiores mollitia veniam ipsum voluptates autem, dolorum at itaque quibusdam, nisi consequatur beatae, ipsam provident incidunt necessitatibus?</p>
                </div>
            </div>
        </div>
    </section>



    <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Popular Causes</h2>
                <p>We are a non-profital & Charity raising money for child education</p>
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>lroem ipsum</h4>
                        <p class="raises"><span>lolrem</span> / lorem </p>
                        <p class="desic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rem dolore sunt inventore laudantium voluptas, ullam aspernatur? Ipsum dolore, sed ullam perferendis consectetur sit eaque vero beatae, mollitia optio quas.</p>
                        <button class="btn btn-success btn-sm">lorem</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>lroem ipsum</h4>
                        <p class="raises"><span>lolrem</span> / lorem </p>
                        <p class="desic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rem dolore sunt inventore laudantium voluptas, ullam aspernatur? Ipsum dolore, sed ullam perferendis consectetur sit eaque vero beatae, mollitia optio quas.</p>
                        <button class="btn btn-success btn-sm">lorem</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>lroem ipsum</h4>
                        <p class="raises"><span>lolrem</span> / lorem </p>
                        <p class="desic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rem dolore sunt inventore laudantium voluptas, ullam aspernatur? Ipsum dolore, sed ullam perferendis consectetur sit eaque vero beatae, mollitia optio quas.</p>
                        <button class="btn btn-success btn-sm">lorem</button>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
            <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>lroem ipsum</h4>
                        <p class="raises"><span>lolrem</span> / lorem </p>
                        <p class="desic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rem dolore sunt inventore laudantium voluptas, ullam aspernatur? Ipsum dolore, sed ullam perferendis consectetur sit eaque vero beatae, mollitia optio quas.</p>
                        <button class="btn btn-success btn-sm">lorem</button>
                    </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11">
        <div class="container">
        <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                    <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                    <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                    <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                    <div class="col-sm-3 numb">
                        <h3>lorem</h3>
                        <span>lorem</span>
                    </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
        <div class="container">
            <div class="row session-title">
                <h2> Our Blogs </h2>
                <p>Take a look at what people say about US </p>
            </div>
            <div class="blog-row row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_01.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                           
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                       
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Pari Foundation, a non-profit organization in india is to empower underprivileged children, youth and women through relevant education, innovative healthcare and market-focused livelihood programmes.
                    </p>
                    <p>We aim to achieve behavioural, social and economic transformation for all girls towards an India where all children have equal opportunities to access quality education.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="about_us.php">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="blog.php">Blogs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="services.php">Our Work</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="gallery.php">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="contact_us.php">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Pari Foundation <br>
                        Mumbai <br>
                        Email: <a href="mailto:Parifoundation@gmail.com" class="">Parifoundation@gmail.com</a><br>
                        Web: <a href="index.php" class="">www.Parifoundation.org</a>
                    </address>

                </div>
            </div>
            <!-- php code for form validation -->
            <?php

            $errorname = $erroremail = "";
            $name = $email = "";

            $anyErr = false;

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                // name
                if (empty($_POST["name"])) {
                    $errorname = "Name is required";
                    $anyErr = true;
                } else {
                    $name = $_POST["name"];
                    $name = trim($name);
                    if (ctype_alpha(str_replace(' ', '', $name)) === false) {
                        $errorname = "Please write a valid name";
                        $anyErr = true;
                    }
                }

                // email
                if (empty($_POST["email"])) {
                    $erroremail = "Email is required";
                    $anyErr = true;
                } else {
                    $email = trim($_POST["email"]);
                    // $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                        $erroremail = "Enter valid email";
                        $anyErr = true;
                    }
                }
            }

            function checkSubmission()
            {
                global $anyErr;
                if ($anyErr == false) {
                    return true;
                }
            }

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            ?>

            <h2>Subscribe to our Newsletter</h2>
            <form action="" method="post">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Full name">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email Address">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>

            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About US</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="services.php">Our Work</a></li>
                        <li><a href="blog.php">Blogs</a></li>
                        <li><a href="contact_us.php">Contact US</a></li>
                    </ul>
                </div>
                <div class="donate-link col-md-3"><a href="donate1.php" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
            </div>

        </div>


    </footer>
    <div class="copy">
        <div class="container">
            <a href="index.php">@year &copy; All Rights Reserved </a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-mail"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>