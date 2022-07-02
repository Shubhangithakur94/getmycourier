<?php



include "config.php";
$id = "";
if (isset($_GET["id"])) {

    $id = $_GET["id"];
}

?>



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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/timeline.css">
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

                    <li class="active"><a href="track.php">Track</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contacts.php">Contact</a></li>
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
                        <h1 class="heading mb-3" data-aos="fade-up">Tracking</h1>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">

        <div class="overlay"></div>

        <div class="container">

            <div class="row no-gutters slider-text align-items-center justify-content-center">

                <div class="col-md-9 ftco-animate text-center">

                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2">Booking <i class="fa fa-chevron-right"></i></span></p>
                    <?php
                    if (isset($_GET["v"])) {

                    ?>
                        <h1 class="mb-0 bread thnk">Thank You !</h1>
                    <?php  } ?>
                </div>

            </div>

        </div>

    </section>



    <section class="ftco-section bg-light">

        <div class="container">

            <?php
            if (isset($_GET["v"])) {

            ?>


                <div class="row p-1">

                    <div class="col-md-12 d-flex services align-self-stretch px-1 ftco-animate p-1 text-center">

                        <div class="d-block services-wrap">

                            <div class="media-body">

                                <h3 class="textt">Successfully !!! Your Courier has been Booked .<br> Soon Our Pickup Expert will get in touch with you. <br> Booking AWB No : <?php echo $id; ?> </h3>

                            </div>

                        </div>

                    </div>

                </div>

            <?php
            }


            ?>

            <div class="row p-1">

                <div class="col-md-12 d-flex services align-self-stretch px-1 ftco-animate p-1 justify-content-center">

                    <div class="d-block services-wrap text-left">

                        <div class="media-body ">

                            <form method="post" action="">

                                <div class="row">

                                    <div class="col-md-4 text-center">

                                        <h3 class="heading" style="color: #070d59;">AWB Tracking</h3>

                                        <i>Booking Ref.No</i>

                                    </div>

                                    <div class="col-md-4 text-right">

                                        <div class="form-group">

                                            <input type="text" id="awbno" name="awbno" class="form-control" placeholder="AWB No" value="<?php echo $id; ?>">

                                        </div>

                                    </div>

                                    <div class="col-md-4 text-center">

                                        <div class="form-group tn">

                                            <input type="submit" name="trackid" class="btn btn-success" value="Track Now !">

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>







            <?php
            if (isset($_POST["awbno"])) {
                $id = $_POST["awbno"];
            }


            if ($id == "") {
            } else {
                $query = "SELECT * FROM `pickup_info` where  pickup_id=$id ";
                $query_run = mysqli_query($conn, $query);
                $i = 1;
                $agentrow = mysqli_num_rows($query_run);
                if ($agentrow > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {



            ?>

























                        <div class="row p-1">
                            <div class="col-md-12 d-flex services align-self-stretch px-1 ftco-animate fadeInUp ftco-animated">
                                <div class="d-block services-wrap text-left">
                                    <div class="media-body py-1 px-1">
                                        <div class="row">
                                            <div class="col-md-4 text-right">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3 style="color: #070d59;">Courier Tracking</h3>
                                                        <div class="row1">



                                                            <table class="table table-striped table-bordered" style="border: 2px solid green; height: 350px;">

                                                                <tr>

                                                                    <td colspan="2" align="" style="color: #070d59; border: 1px solid   #070d59;"><b> Domestic Consignment </b></td>

                                                                </tr>

                                                                <tr>

                                                                    <td>AWB No :</td>

                                                                    <td><?php echo $id; ?></td>

                                                                </tr>

                                                                <tr>

                                                                    <td>Origin :</td>

                                                                    <td><?php echo $row["source_pincode"]; ?></td>

                                                                </tr>

                                                                <tr>

                                                                    <td>Destination :</td>

                                                                    <td><?php echo $row["destination_pincode"]; ?></td>

                                                                </tr>

                                                                <tr>

                                                                    <td>Sender :</td>

                                                                    <td><?php echo $row["sender_name"]; ?></td>

                                                                </tr>

                                                                <tr>

                                                                    <td>Receiver :</td>

                                                                    <td><?php echo $row["receiver_name"]; ?></td>

                                                                </tr>

                                                                <tr>

                                                                    <td>Package Details :</td>

                                                                    <td><?php echo $row["package_type"]; ?>, <?php echo $row["package_weight"]; ?> Kgs </td>

                                                                </tr>



                                                            </table>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 table-responsive">
                                                <h2 style="color: #070d59;">Tracking Of Your Consignment</h2>
                                                <div class="row">
                                                    <div class="col-md-12 bg-dark p-4" style=" border-radius: 5px;">
                                                        <ul class="timeline">
                                                            <!-- timeline time label -->
                                                            <li class="time-label">
                                                                <span class="bg-primary text-white">
                                                                    <?php echo $row["book_date"]; ?> </span>
                                                            </li>
                                                            <!-- /.timeline-label -->
                                                            <!-- timeline item -->
                                                            <li>
                                                                <!-- <i class="fa fa-envelope bg-success text-white"></i> -->
                                                                <i class="fa fa-paper-plane bg-success text-white"></i>
                                                                <div class="timeline-item">
                                                                    <span class="time float-end"><i class="fa fa-clock-o"></i> <?php echo $row["book_date"]; ?></span>

                                                                    <h3 class="timeline-header"><a>Booked</a></h3>

                                                                    <div class="timeline-body">

                                                                        <p>Origin Pincode : <?php echo $row["source_pincode"]; ?> , Sender : <?php echo $row["sender_name"]; ?></p>

                                                                        <p>Destination Pincode : <?php echo $row["destination_pincode"]; ?> , Receiver : <?php echo $row["receiver_name"]; ?></p>

                                                                        <p>Package Details : <?php echo $row["package_type"]; ?>,<?php echo $row["package_weight"]; ?> Kgs </p>



                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- END timeline item -->
                                                            <?php
                                                            if ($row["status"] == 'Delivered') {
                                                                ?>
                                                                   <li class="time-label">
                                                                    <span class="bg-primary text-white">
                                                                        <?php echo $row['pickup_date']; ?></span>
                                                                </li>
                                                                <!-- timeline item -->
                                                                <li>
                                                                    <i class="fa fa-paper-plane bg-success text-white"></i>

                                                                    <div class="timeline-item">
                                                                        <span class="time"><i class="fa fa-clock-o"></i> <?php echo $row['pickup_date']; ?></span>

                                                                        <h3 class="timeline-header no-border"><a>Picked</a></h3>
                                                                    </div>
                                                                </li>


                                                                  <li class="time-label">
                                                                    <span class="bg-primary text-white">
                                                                        <?php echo $row['delivered_date']; ?></span>
                                                                </li>
                                                                <!-- timeline item -->
                                                                <li>
                                                                    <i class="fa fa-paper-plane bg-success text-white"></i>

                                                                    <div class="timeline-item">
                                                                        <span class="time"><i class="fa fa-clock-o"></i> <?php echo $row['delivered_date']; ?></span>

                                                                        <h3 class="timeline-header no-border"><a>Delivered</a></h3>
                                                                    </div>
                                                                </li>
                                                                <?php

                                                            }
                                                            elseif ($row["status"] == 'Picked') {

                                                            ?>




                                                                <li class="time-label">
                                                                    <span class="bg-primary text-white">
                                                                        <?php echo $row['pickup_date']; ?></span>
                                                                </li>
                                                                <!-- timeline item -->
                                                                <li>
                                                                    <i class="fa fa-paper-plane bg-success text-white"></i>

                                                                    <div class="timeline-item">
                                                                        <span class="time"><i class="fa fa-clock-o"></i> <?php echo $row['pickup_date']; ?></span>

                                                                        <h3 class="timeline-header no-border"><a>Picked</a></h3>
                                                                    </div>
                                                                </li>
                                                                <!-- END timeline item -->


                                                            <?php
                                                            }
                                                              elseif ($row["status"] == 'Cancelled') {

                                                            ?>




                                                                <li class="time-label">
                                                                    <span class="bg-primary text-white">
                                                                        <?php // echo $row['pickup_date']; ?></span>
                                                                </li>
                                                                <!-- timeline item -->
                                                                <li>
                                                                    <i class="fa fa-paper-plane bg-success text-white"></i>

                                                                    <div class="timeline-item">
                                                                        <span class="time"><i class="fa fa-clock-o"></i> <?php // echo $row['pickup_date']; ?></span>

                                                                        <h3 class="timeline-header no-border"><a>Cancelled</a></h3>
                                                                    </div>
                                                                </li>
                                                                <!-- END timeline item -->


                                                            <?php
                                                            }



                                                            ?>












                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




























            <?php
                    }
                }
            }



            ?>










        </div>

    </section>

































































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
