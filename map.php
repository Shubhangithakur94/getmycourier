
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);






for ($i = 1; $i <= 6; $i++)
{
   $months[] = date("Y-m%", strtotime( date( 'Y-m-01' )." -$i months"));
}
var_dump($months);
$time=strtotime('$months[0.-1]');
echo $month=date("F",$time);
echo $year=date("Y",$time);


?>
