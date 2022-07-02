<!-- /*
* Template Name: Logis
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>GetMyCourier</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav mt-3">
        <div class="container">
            <div class="site-navigation">
                <a href="index.php" class="logo m-0 float-start"><img src="images/logo.png" alt="" srcset="" class="logo"></a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-end">
                    <li><a href="index.php">Home</a></li>

                    <li><a href="track.php">Track</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="contacts.php">Contact</a></li>
                    <li><a href="privacy.php">Policy</a></li>
                    <li><a href="item.php">Prohibited Items</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>

                <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none dark">
                    <span></span>
                </a>

            </div>
        </div>
    </nav>





    <div class="hero">
        <div class="map">
            <img src="images/world-dotted-map.png" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mx-auto">

                    <div class="w-75 mx-auto text-center pb-5">
                        <h1 class="heading mb-3" data-aos="fade-up">Contact us</h1>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto contents ">



                    <div class="row justify-content-between">
                        <div class="col-lg-7">

                            <form action="contact.php" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="200">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label class="" for="fname">First name</label>
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="enter your first name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label class="" for="lname">Last name</label>
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="enter your last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="" for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="enter your email">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="" for="message">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5"></textarea>
                                </div>

                                <input type="submit" name="contact" class="btn btn-success" value="Send Message">
                            </form>
                        </div> <!-- /.col-lg-7 -->

                        <div class="col-lg-4">
                            <div class="row">

                                <div class="col-12">
                                    <div class="service-2 no-shadow link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                        <div class="service-icon color-1 mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                            </svg>
                                        </div> <!-- /.icon -->
                                        <div class="service-contents">
                                            <p> <?php include "sinfo.php";
                                                echo $_SESSION['system']['address']; ?></p>
                                        </div> <!-- /.service-contents-->
                                    </div> <!-- /.service -->
                                </div>

                                <div class="col-12">
                                    <div class="service-2 no-shadow link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                        <div class="service-icon color-1 mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                            </svg>
                                        </div> <!-- /.icon -->
                                        <div class="service-contents">
                                            <p><?php echo $_SESSION['system']['email1']; ?></p>
                                        </div> <!-- /.service-contents-->
                                    </div> <!-- /.service -->
                                </div>

                                <div class="col-12">
                                    <div class="service-2 no-shadow link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                        <div class="service-icon color-1 mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </div> <!-- /.icon -->
                                        <div class="service-contents">
                                            <p><?php echo $_SESSION['system']['contact1']; ?></p>
                                        </div> <!-- /.service-contents-->
                                    </div> <!-- /.service -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->


                </div>
            </div>
        </div>
    </div>



    <div class="section bg-light">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5" data-aos="fade-up">
                        <!-- <span class="subheading d-block">Testimonials</span> -->
                    <h2 class="heading mb-5">Happy Customer</h2>


                    <div class="testimonial-slide-wrap">



                        <div class="testimonial-slide">
                            <?php
                            include "config.php";
                            echo $query = "SELECT * FROM `customer_review`";

                            $query_run = mysqli_query($conn, $query);
                            $i = 1;
                            if (mysqli_num_rows($query_run) > 0) {
                                while ($row = mysqli_fetch_assoc($query_run)) {


                            ?>

                                    <div class="item">
                                        <blockquote class="block-testimonial">
                                            <div class="author">
                                                <img src="images/person_1.jpg">
                                                <h3> <?php echo $row["customer_name"] ?></h3>
                                                <p class="position">

                                                    <?php

                                                    $star = $row["rating_star"];
                                                    for ($x = 1; $x <= $star; $x++) {
                                                        echo "<i class='fa fa-star text-success'> </i>";
                                                    }

                                                    ?>

                                                </p>
                                            </div>
                                            <p>
                                                &ldquo; <?php echo $row["comments"]; ?>&rdquo;</p>

                                        </blockquote>
                                    </div>

                            <?php   }
                            }
                            ?>




                        </div>

                        <div id="prevnext-testimonial">
                            <span class="prev"><span class="icon-keyboard_arrow_left"></span></span>
                            <span class="next"><span class="icon-keyboard_arrow_right"></span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <span class="subheading d-block">Why Us</span>
                    <h2 class="heading mb-5">Why Choose Us</h2>


                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Easily Find Logistics</button>
                            </h2>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    <div class="d-flex">

                                        <div>
                                            <p> Offering Desk pickups and Door deliveries at no extra cost.</p>
                                            <p> Monthly billing facility for bulk volume customers.
                                            </p>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Delivering Results for Industry Leaders</button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    <div class="d-flex">

                                        <div>
                                            <p>Efficient and safe delivery
                                                of your consignments. </p>
                                            <p>Delight customers with quality service by setting new trends through innovation and technology.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Fast and Secure Transportation</button>
                            </h2>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    <div class="d-flex">

                                        <div>
                                            <p>Customized service packages to fit specific needs.</p>
                                            <p>Cargo service by Air/Surface available to all destinations.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div> <!-- .accordion-item -->

                    </div>

                </div>
            </div>
        </div>
    </div>



    <?php
    include "footer.php";
    ?>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>