<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// $source_pincode = $_POST["source_pincode"];
// $destination_pincode = $_POST["destination_pincode"];
// $package_type = $_POST["package_type"];
// $package_weight = $_POST["package_weight"];
// $t_type = $_POST["t_type"];
// $packing_required = $_POST["packing_required"];



// $price = 80;



// include "config.php";
// $query = "SELECT * FROM `packing_charge` LIMIT 1";
// $query_run = mysqli_query($conn, $query);
// if (mysqli_num_rows($query_run) > 0) {

//   while ($row = mysqli_fetch_assoc($query_run)) {

//     $packing_price = $row["packing_charge_per_kg"];
//   }
// }

// $courier_charge = $price * $package_weight;
// $gst = ($courier_charge * 18) / 100;

// if ($packing_required == 1) {
//   $packing_charge = $packing_price * $package_weight;
// } else {
//   $packing_charge = 0;
// }

// $total = $packing_charge + $gst + $courier_charge;



// include "config.php";
// $sql = "INSERT INTO `rate_check_list`( `source_pincode`, `destination_pincode`, `package_type`, `package_weight`, `t_type`, `packing_required`, `approx_charges`) VALUES ('$source_pincode','$destination_pincode','$package_type','$package_weight','$t_type','$packing_required','$total') ";
// $query = mysqli_query($conn, $sql);
// if ($query == True) {
//   // header("location:track.php?v=true&id=$delid");
// } else {
//   exit;
// }

include "Admin/check_rate.php";

?>





<!DOCTYPE html>
<!-- saved from url=(0036)http://pickmycourier.com/booking.php -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Tamiselvan.S">
  <title>GetMyCourier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />
  <!-- css -->
  <link href="./assets/css" rel="stylesheet">
  <!-- <link href="./assets/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
  <!-- <link href="./assets/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" type="text/css" href="./assets/cubeportfolio.min.css">
  <link href="./assets/nivo-lightbox.css" rel="stylesheet">
  <link href="./assets/default.css" rel="stylesheet" type="text/css">
  <link href="./assets/owl.carousel.css" rel="stylesheet" media="screen">
  <link href="./assets/owl.theme.css" rel="stylesheet" media="screen">
  <link href="./assets/animate.css" rel="stylesheet">
  <link href="./assets/style.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/tiny-slider.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/glightbox.min.css">
  <link rel="stylesheet" href="css/style.css">







  <!-- boxed bg -->
  <link id="bodybg" href="./assets/bg1.css" rel="stylesheet" type="text/css">
  <!-- template skin -->
  <link id="t-colors" href="./assets/pmc.css" rel="stylesheet">
  <style>
    #intro {
      color: #000;
      font-weight: bold;
    }

    select option {
      color: black;
      font-weight: bold;
    }

    select {
      color: black;
      font-weight: bold;
    }

    .input-group-addon {
      background-color: #EE9134;
      color: #000;
      font-weight: bold;
    }

    input[type="text"]::-webkit-input-placeholder {
      /*for webkit */

      opacity: 1;
      font-size: 14px;
      font-weight: bold;
      color: #FF6600;
    }

    input[type="text"]:-moz-placeholder {
      /*for mozilla */
      opacity: 1;
      font-size: 14px;
      font-weight: bold;
      color: #FF6600;
    }

    input[type="text"]:-ms-input-placeholder {
      /*for for internet exprolar */
      opacity: 1;
      font-size: 14px;
      font-weight: bold;
      color: #FF6600;
    }

    input[type="number"]::-webkit-input-placeholder {
      /*for webkit */
      opacity: 1;
      font-size: 14px;
      font-weight: bold;
      color: #FF6600;
    }

    input[type="number"]:-moz-placeholder {
      /*for mozilla */
      opacity: 1;
      font-size: 14px;
      font-weight: bold;
      color: #FF6600;
    }

    input[type="number"]:-ms-input-placeholder {
      /*for for internet exprolar */
      opacity: 1;
      font-size: 14px;
      font-weight: bold;
      color: #FF6600;
    }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script type="text/javascript" async="" src="./assets/f.txt"></script>
  <script type="text/javascript" async="" src="./assets/js"></script>
  <script async="" src="./assets/js(1)">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    /*gtag('config', 'UA-151688149-1');
    gtag('config', 'UA-127796593-1');*/
    gtag('config', 'AW-733818795');
  </script>
  <script>
    gtag('event', 'conversion', {
      'send_to': 'AW-733818795/eE1vCOKpkYACEKvf9N0C'
    });
  </script>
  <meta http-equiv="origin-trial" content="A9wkrvp9y21k30U9lU7MJMjBj4USjLrGwV+Z8zO3J3ZBH139DOnCv3XLK2Ii40S94HG1SZ/Zeg2GSHOD3wlWngYAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
  <script src="./assets/f(1).txt"></script>
  <meta http-equiv="origin-trial" content="Azy2GzGQxPvGmQwVDdEL1jRuKSXIdSSASA06JCA6PCeaVHpFYf8Rw5/q+9adc9CrBTxfCeUwxkuDM4PWEmdqywwAAACKeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZWFkc2VydmljZXMuY29tOjQ0MyIsImZlYXR1cmUiOiJQcml2YWN5U2FuZGJveEFkc0FQSXMiLCJleHBpcnkiOjE2NjEyOTkxOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <script src="./assets/f(2).txt"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="">



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
          <li><a href="service.php">Services</a></li>
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
            <h1 class="heading mb-3" data-aos="fade-up">Booking</h1>

          </div>

        </div>

      </div>
    </div>
  </div>

  <!-- Section: intro -->
  <section id="intro" class="intro">
    <div class="intro-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 well well-trans11">
            <div class="well well-trans">
              <div class="wow fadeInRight animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                <div class="wow fadeInDown animated" data-wow-offset="0" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
                  <p class="h-ultra text-center"><span class="pmc2">GET MY COURIER</span></p>
                </div>
                <ul class="lead-list">
                  <li><strong>Source </strong><br> <?php echo $source_pincode; ?>
                    <!-- li-->
                  </li>
                  <li><strong>Destination </strong><br><?php echo $destination_pincode; ?>
                    <!-- li-->
                  </li>
                  <li><strong>Package Details : </strong><br> <?php echo $package_type; ?> <span style="color:red;"><?php echo $t_type; ?></span> <br>Actual Weight : <?php echo $package_weight; ?>
                    <!-- <br>Volumetric Weight: 0.968 Kgs. <br>Dimention : 10x22x22 -->
                  </li>
                  <li><strong>Approx.Charges</strong><br> <span class="set_amt" style="color: blue;">
                      <table class="table table-striped table-bordered">
                        <tbody>
                          <tr>
                            <th colspan="2" class="text-center">Charges BreakUp</th>
                          </tr>
                          <tr>
                            <td class="text-right">Courier Charges : </td>
                            <td class="text-right"><i class="fa fa-rupee"></i> <?php echo $courier_charge + 0.00 ?> </td>
                          </tr>
                          <tr>
                            <td class="text-right">GST 18% : </td>
                            <td class="text-right"><i class="fa fa-rupee"></i> <?php echo $gst + 0.00 ?></td>
                          </tr>
                          <tr>
                            <td class="text-right">Packing Charges : </td>
                            <td class="text-right"><i class="fa fa-rupee"></i> <?php echo $packing_charge + 0.00 ?> </td>
                          </tr>
                          <tr>
                            <td class="text-right">Total : </td>
                            <td class="text-right"><i class="fa fa-rupee"></i> <?php echo $total + 0.00 ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </span></li>
                  <li><span style="color: red;"><strong>* These Freight Charges are for estimation only. The actual charges are subject to change in lieu of other factors / special pricing</strong></span></li>
                </ul>

              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="form-wrapper">
              <div class="wow fadeInRight animated" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInRight;">

                <div class="panel">
                  <div class="panel-heading" style="background-color: darkorange; color:white">
                    <h3 class="panel-title text-center">Get My Courier Details</h3>
                  </div>
                  <div class="panel-body">
                    <form action="sub.php" method="post">

                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Sender Name</label>
                            <input class="form-control " type="text" name="sender_name" id="sender_name" data-rule="minlen:3" data-msg="Please enter Sender Name" placeholder="Sender Name">
                            <div class="validation"></div>
                          </div>
                          <div class="form-group">
                            <label>Sender Contact No</label>
                            <div class="input-group">
                              <div class="input-group-addon" style="background-color: #FFF;"><img src="./assets/whatsup.png" alt="online courier pickup" width="20" class="img-rounded"></div>
                              <input type="number" name="sender_phone" id="sender_phone" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter Sender Mobile" placeholder="Whats App Number">
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Sender Address</label>
                            <textarea class="form-control" name="sender_address" placeholder="Sender Address" data-rule="minlen:3" data-msg="Please Enter Sender Address"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Receiver Name</label>
                            <input class="form-control " type="text" name="receiver_name" id="receiver_name" data-rule="minlen:3" data-msg="Please enter Receiver Name" placeholder="Receiver Name">
                            <div class="validation"></div>
                          </div>
                          <div class="form-group">
                            <label>Receiver Contact No</label>
                            <div class="input-group">
                              <div class="input-group-addon" style="background-color: #FFF;"><img src="./assets/whatsup.png" alt="online courier pickup" width="20" class="img-rounded"></div>
                              <input type="number" name="receiver_phone" id="receiver_phone" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter Receiver Mobile" placeholder="Whats App Number">
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Receiver Address</label>
                            <textarea class="form-control" name="receiver_address" placeholder="Receiver Address" data-rule="minlen:3" data-msg="Please Enter Receiver Address"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <!--<label class="checkbox-inline"><input type="checkbox" name="same_as_sender_address" id="same_as_sender_address" value="1" checked="true">Pick Up Address is same as Sender Address </label>
                                <div class="validation"></div>-->
                          <label>PickUp Registered By</label><br>
                          <label for="pickup_registered_by1" style="padding-right: 20px;">
                            <input type="radio" id="pickup_registered_by1" name="pickup_registered_by" value="Sender" class="form-check-input pickup_registered_by" checked="true"> Sender
                          </label>
                          <label for="pickup_registered_by2" class="form-check-label">
                            <input type="radio" id="pickup_registered_by2" name="pickup_registered_by" value="Receiver" class="form-check-input pickup_registered_by"> Receiver
                          </label>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Package Content</label>
                            <textarea class="form-control" name="special_instruction" placeholder="Package Content" data-rule="minlen:3"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Schedule your Courier Pickup Date</label>
                          <div class="form-group">
                            <div class="input-group date">
                              <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                              </span>
                              <input type="date" class="form-control input-md" id="pickup_schedule_timing" name="pickup_schedule_timing">

                            </div>
                          </div>
                        </div>

                      </div>
                      <br>





                      <input type="hidden" class="clshd" id="courier_type" name="courier_type" value="Domestic">
                      <input type="hidden" class="clshd" name="source_pincode" value="<?php echo $source_pincode; ?>">
                      <input type="hidden" class="clshd" name="source_pin_area" value="<?php echo $source_pincode; ?>">
                      <input type="hidden" class="clshd" name="destination_pincode" value="<?php echo $destination_pincode; ?>">
                      <input type="hidden" class="clshd" name="destination_pin_area" value="<?php echo $destination_pincode; ?>">
                      <input type="hidden" class="clshd" name="destination_country" value="">
                      <input type="hidden" class="clshd" name="package_type" value="<?php echo $package_type; ?>">
                      <input type="hidden" class="clshd" name="package_weight" value="<?php echo $package_weight; ?>">
                      <input type="hidden" class="clshd" name="package_weight_int" value="">
                      <input type="hidden" class="clshd" name="package_purpose" value="">
                      <input type="hidden" class="clshd" name="package_value" value="">
                      <input type="hidden" class="clshd" name="length" value="">
                      <input type="hidden" class="clshd" name="width" value="">
                      <input type="hidden" class="clshd" name="height" value="">
                      <input type="hidden" class="clshd" name="weight_int" value="">
                      <input type="hidden" class="clshd" name="country_name" value="">
                      <input type="hidden" class="clshd" name="transport_mode" value="<?php echo $t_type; ?>">
                      <input type="hidden" class="clshd" name="packing_required" value="<?php echo $packing_required; ?>">
                      <input type="hidden" class="clshd" name="approx_charges" id="approx_chargesaa" value="<?php echo $total; ?>">
                      <input type="hidden" class="clshd" name="charges_breakup" id="charges_breakup" value="&lt;table class=&#39;table table-striped table-bordered&#39;&gt;
                                            &lt;tr&gt;&lt;th colspan=&#39;2&#39; class=&#39;text-center&#39;&gt;Charges BreakUp&lt;/th&gt;&lt;/tr&gt;
                                            &lt;tr&gt;&lt;td class=&#39;text-right&#39;&gt;Courier Charges : &lt;/td&gt;&lt;td class=&#39;text-right&#39;&gt;&lt;i class=&#39;fa fa-rupee&#39;&gt;&lt;/i&gt; 600.00&lt;/td&gt;&lt;/tr&gt;
                                            &lt;tr&gt;&lt;td class=&#39;text-right&#39;&gt;GST 18% : &lt;/td&gt;&lt;td class=&#39;text-right&#39;&gt;&lt;i class=&#39;fa fa-rupee&#39;&gt;&lt;/i&gt; 108.00&lt;/td&gt;&lt;/tr&gt;
                                            &lt;tr&gt;&lt;td class=&#39;text-right&#39;&gt;Packing Charges : &lt;/td&gt;&lt;td class=&#39;text-right&#39;&gt;&lt;i class=&#39;fa fa-rupee&#39;&gt;&lt;/i&gt; 80.00&lt;/td&gt;&lt;/tr&gt;
                                            &lt;tr&gt;&lt;td class=&#39;text-right&#39;&gt;Total : &lt;/td&gt;&lt;td class=&#39;text-right&#39;&gt;&lt;i class=&#39;fa fa-rupee&#39;&gt;&lt;/i&gt; 788.00&lt;/td&gt;&lt;/tr&gt;
                                          &lt;/table&gt;">
                      <input type="hidden" class="clshd" name="booking_type" id="booking_type" value="Online">
                      <input type="hidden" class="clshd" name="same_as_sender_address" id="same_as_sender_address" value="1">

                      <input type="submit" value="Confirm" name="pickup_info" class="btn btn-skin btn-block btn-lg" style="background-color: green;">
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  </div>

  <!-- Core JavaScript Files -->
  <script src="./assets/jquery.min.js.download"></script>
  <script src="./assets/bootstrap.min.js.download"></script>
  <script src="./assets/jquery.easing.min.js.download"></script>
  <script src="./assets/wow.min.js.download"></script>
  <script src="./assets/jquery.scrollTo.js.download"></script>
  <script src="./assets/jquery.appear.js.download"></script>
  <script src="./assets/stellar.js.download"></script>
  <script src="./assets/jquery.cubeportfolio.min.js.download"></script>
  <script src="./assets/owl.carousel.min.js.download"></script>
  <script src="./assets/nivo-lightbox.min.js.download"></script>

  <script src="./assets/custom.js.download"></script>
  <script src="./assets/bookingform.js.download"></script>
  <script src="./assets/jquery-ui.min.js.download"></script>
  <script>
    $(function() {
      // $('.select2').select2();
      //$("#source_pincode > option ").remove();  
      /*
      $.ajax({
               url:  '/pickmycourier/back-end/index.php/pin'  ,            
               success: function(d) {  alert(d);                               
                   $.each(d,function(id,val){
                          
                           $('#source_pincode').append($('<option />', { 
                               value: id,
                               text : val
                           }));
                          
                     });
               }
       }); */


      $("#source_pincode").autocomplete({
        source: '/pickmycourier/back-end/index.php/pin',
        minLength: 1
      });

      $("#destination_pincode").autocomplete({
        source: '/pickmycourier/back-end/index.php/pin',
        minLength: 1
      });

      $('#package_type').change(function() {
        if ($(this).val() == 'Non-Document' || $(this).val() == 'Medicine') {
          $('.cls_lwh').removeClass('hide').show();
        } else {
          $('.cls_lwh').hide();
        }
        //alert($(this).val());
      });


      $('#same_as_sender_address').click(function() {
        if (!$(this).is(":checked")) {
          $('.pickup_cls').removeClass('hide').show();
        } else {
          $('.pickup_cls').hide();
        }
        //alert($(this).is(":checked"));
      });


      $("#franchisee_state").change(function() {
        //alert($(this).val());
        $("#franchisee_city > option").remove();
        $.ajax({
          url: "back-end/index.php/location/" + $(this).val(),
          success: function(country) {
            //alert(country);
            //$('#cnt_account_head').html(services);  
            var opt1 = $('<option />');
            opt1.val('');
            opt1.text('Select');
            $('#franchisee_city').append(opt1);

            $.each(country, function(id, service) {
              var opt = $('<option />');
              opt.val(id);
              opt.text(service);
              $('#franchisee_city').append(opt);
            });

          }

        });

      });


      /* $('#pmc').click(function() { 
           
            $.ajax({
                       type : 'post',
                       url: "back-end/index.php/book-my-courier" , 
                       data :  $('#frmpmc').serializeArray(),
                       success: function(msg) 
                       {      
                           //alert(msg); 
                           $('.alert-dismissable').removeClass('hide').show(); 
                           $('.msg').html(msg); 
                       }
                        
               });
           
       });*/


      $('#franchisees_srch').click(function() {


        $.ajax({
          type: 'post',
          url: "back-end/index.php/franchisee-info",
          data: {
            state_id: $("#franchisee_state").val(),
            location_id: $("#franchisee_city").val()
          },
          success: function(country) {
            //alert(country.length); 
            if (country.length > 0) {
              var frch = "<dt>Name :</dt><dd class='text-primary'>" + country[0].name + "</dd>" +
                "<dt>Address : </dt><dd class='text-primary'>" + country[0].address + "</dd>" +
                "<dt>Email : </dt><dd class='text-primary'>" + country[0].email + "</dd>" +
                "<dt>Contact : </dt><dd class='text-primary'>" + country[0].contact + "</dd>";
            } else {

              var frch = "<br /><br /><span style='color:red;'>No Record Found</span><br /><br /><br /><br />";

            }

            $(".franchisee_info").html(frch);
          }

        });

      });

      // alert('j');
      //var chrg = 0;
      $.ajax({
        url: 'admin/index.php/get-charges-v3',
        type: 'post',
        data: {
          courier_type: 'Domestic',
          source: '458339',
          destination: '458001',
          weight: '3',
          package_type: 'Non-Document',
          c_type: 'Air',
          packing_required: '1'
        },
        success: function(d) {
          //alert(d.tot_charges); 
          /*if($('#courier_type').val() == 'Domestic')  {
              //$('.set_amt').html("<b>" + d.tot_charges + ' + GST </b>')   ;
               $('.set_amt').html(d.charges_breakup)   ;
               $('#approx_charges').val(d.total);
          } else  {                           
             // $('.set_amt').html("<b>" + d.tot_charges + '</b>')   ;   
              $('.set_amt').html(d.charges_breakup)   ;                      
              $('#approx_charges').val(d.total);
          }*/

          $('.set_amt').html(d.charges_breakup);
          $('#charges_breakup').val(d.charges_breakup);
          $('#approx_charges').val(d.total);

          // chrg = d.tot_charges;
        }

      });

      /*   $.ajax({
                 url: "admin/index.php/get-distance" ,
                 type : 'post',
                 data : {  source_pincode :  '458339', destination_pincode : '458001'  },           
                 success: function(dist) {  
                      $('.set_distance').html(dist);                          
                     
                 }  
         });  */

      setTimeout(function() {
        //alert($('.clshd').serialize() );
        $.ajax({
          url: 'back-end/index.php/visitor-in/booking',
          type: 'post',
          data: $('.clshd').serializeArray(),
          success: function(d1) {
            //alert(d1); 
            $('.visitor').html(d1);
            //alert(d);  
          }
        });
      }, 500);



    });
  </script>



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