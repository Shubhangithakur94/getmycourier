<!-- <link href="testing_files/style.css" rel="stylesheet"> -->

<style>
    .float {
        position: fixed;
        width: 140px;
        height: 100px;
        bottom: 10px;
        /* left: 10px; */
        right: 30px;
        background-color: rgba(51, 51, 51, 0.8);
        color: #FFF;
        border-radius: 10px;
        text-align: center;
        font-size: 16px;
        box-shadow: 2px 2px 3px #999;
        z-index: 1000;
    }
</style>

<div class="site-footer">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>About GetMyCourier<span class="text-primary">.</span> </h3>
                    <p>Get My Courier is a simple and very convenient to send across priceless treasures to your loved ones from the comforts of your home/ workshops / offices.</p>
                </div> <!-- /.widget -->
                <div class="widget">
                    <h3>Connect</h3>
                    <ul class="list-unstyled social">
                        <li><a href="https://www.instagram.com/<?php include "sinfo.php";
                                                                echo $_SESSION['social']['instagram']; ?>"><span class="icon-instagram"></span></a></li>
                        <li><a href="https://twitter.com/<?php echo $_SESSION['social']['twitter']; ?>"><span class="icon-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/<?php echo $_SESSION['social']['facebook']; ?>"><span class="icon-facebook"></span></a></li>
                        <!-- <li><a href="https://www.linkedin.com/in/<?php echo $_SESSION['social']['linkedin']; ?>"><span class="icon-linkedin"></span></a></li> -->

                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->







            <div class="col-lg-2 ml-auto">
                <div class="widget">
                    <h3>Information</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="privacy.php">Shiping Policy</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>

                        <li><a href="item.php">Prohibited Items</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

            <div class="col-lg-2">
                <div class="widget">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="track.php">Track</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->


            <div class="col-lg-3">
                <div class="widget">
                    <h3>Contact</h3>
                        <h3>Head Office</h3>
                    <address><?php include "sinfo.php";
                                echo $_SESSION['system']['address']; ?> </address>
                    <ul class="list-unstyled links mb-4">
                    <h3>Mobile</h3>
                        <li><a href="tel://<?php echo $_SESSION['system']['contact1']; ?>"> <?php echo $_SESSION['system']['contact1']; ?></a></li>
                        <li><a href="tel:// <?php echo $_SESSION['system']['contact2']; ?>"><?php echo $_SESSION['system']['contact2']; ?></a></li>
                        <h3>Email</h3>
                        <li><a href="mailto: <?php echo $_SESSION['system']['email1']; ?>"><?php echo $_SESSION['system']['email1']; ?></a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

        </div> <!-- /.row -->

        <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="copyright">Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://techsoftor.com">Techsoftor</a> <!-- License information: https://untree.co/license/ -->
                </p>

            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->

<!-- <a href="#" class="scrollup" style="display: block;"><i class="fa fa-angle-up active"></i></a> -->
<a href="https://wa.me/<?php $contactno = str_replace("+", "", $_SESSION['system']['contact1']);
                        echo $contactnum = str_replace(" ", "", $contactno); ?>" target="_blank" class="float">We are online<br><img src="./assets/whatsup.png" alt="online courier pickup" width="30%" class="img-rounded my-float"><br>What's app chat</a>
<link rel="stylesheet" href="./assets/jquery-ui.min.css" type="text/css">
