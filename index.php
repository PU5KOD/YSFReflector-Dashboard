<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
// do not touch this includes!!! Never ever!!!
include "config/config.php";
include "include/tools.php";
include "include/functions.php";
include "include/init.php";
include "version.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">
    -->
    <meta name="viewport" content="width=device-width, initial-scale=0.6,maximum-scale=1, user-scalable=yes">
    <meta http-equiv="refresh" content="<?php echo REFRESHAFTER?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <!-- Das neueste kompilierte und minimierte CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optionales Theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <!-- Das neueste kompilierte und minimierte JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Datatables -->
 	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
 	<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  	<style>
 	    h4 {
 		display: inline
 		}
            body{
                padding: 10px;
                }
 	</style>
    <title>• Brazil • YSF ID 77777 • WiRES-X YSF Reflector Dashboard •</title>
  </head>
  <body>
  <body style="background-color:#c0c0c0;">
  <div class="page-header" style="position:relative;">
  <h1 class="text-center">Brazil YSF77777</h1>
  <h6 class="text-right"><a href="https://api.whatsapp.com/send?phone=5541991912000">by PU5KOD</a></h6>
  <?php
  if (LOGO !== "") {
?>
<div id="Logo" style="position:absolute;top:-45px;left:10px;"><img src="<?php echo LOGO ?>" width="100px" style="width:100px; border-radius:10px;box-shadow:2px 2px 2px #808080; padding:1px;background:#FFFFFF;border:1px solid #808080;" border="0" hspace="10" vspace="10" align="absmiddle"></div>
<?php
  }
?>
</div>
<?php
checkSetup();
// Here you can feel free to disable info-sections by commenting out with // before include
include "include/txinfo.php";
//include "include/sysinfo.php";
//include "include/disk.php";
include "include/gateways.php";
include "include/lh.php";
include "include/allheard.php";
if (defined("SHOWOLDMHEARD")) {
include "include/oldheard.php";
}
//include "include/sysinfo.php";
?>
	<div class="panel panel-info">
<?php
$lastReload = new DateTime();
$lastReload->setTimezone(new DateTimeZone(TIMEZONE));
echo "Brazil YSF77777 Reflector Dashboard v".VERSION." | Last Reload ".$lastReload->format('Y-m-d, H:i:s')." (".TIMEZONE.")";
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo '<!--Page generated in '.$total_time.' seconds.-->';
?> | Customized by <a href="https://t.me/PU5KOD">PU5KOD</a> based on <a href="https://github.com/dg9vh/YSFReflector-Dashboard" target="_blank">DG9VH YSFReflector-Dashboard</a> | <a href="https://git.kd0ioe.com/alynch/ReflectorDashboard">Source</a>
	</div>
  </body>
</html>
