 <?php
    date_default_timezone_set('Asia/Kolkata');
    session_start();
    if ($_SESSION["ipaddress"] == $_SERVER['REMOTE_ADDR']) {
        exit;
    } else {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $page = "http://" . $_SERVER['HTTP_HOST'] . "" . $_SERVER['PHP_SELF'];
        $referrer = $_SERVER['HTTP_REFERER'];
        // $date = date("d-m-Y");
        $datetime = date("d-m-Y, g:i a");
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        // echo "<p>IP Address : " . $ipaddress . "</p>";
        // echo "<p>Current Page : " . $page . "</p>";
        // echo "<p>Referrer : " . $referrer . "</p>";
        // echo "<p>Current Time : " . $datetime . "</p>";
        // echo "<p>Browser : " . $useragent . "</p>";
        $_SESSION["ipaddress"] = $ipaddress;
        include "php/config.php";
        $sql = "INSERT INTO `visitor_details`( `ip`, `current_page`, `referrer`, `time`, `user_agent`) values('$ipaddress','$page','$referrer','$datetime','$useragent')";
        $query = mysqli_query($conn, $sql);
        if ($query == True) {
            // header("location:visitor_details.php");
            // echo "success";
        }
    }
    ?>