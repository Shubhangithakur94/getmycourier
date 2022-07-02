<?php
session_abort();
session_start();
include "config.php";
$system = $conn->query("SELECT * FROM `site` where id='1' ")->fetch_array();
foreach ($system as $k => $v) {
  $_SESSION['system'][$k] = $v;
  // echo $k."<br>";
}
// }
//echo $_SESSION['system']['contact'];



//include "../../php/config.php";


$social = $conn->query("SELECT * FROM `social` where id='1' ")->fetch_array();
foreach ($social as $k => $v) {
  $_SESSION['social'][$k] = $v;
  // echo $k."<br>";
}



?>



<?php // secho $_SESSION['system']['contact']; 
?>

