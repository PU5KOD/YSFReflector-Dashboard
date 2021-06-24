<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
include "config/config.php";
include "include/tools.php";
include "include/functions.php";
$configs = getYSFReflectorConfig();
$logLines = getShortYSFReflectorLog();
$reverseLogLines = $logLines;
array_multisort($reverseLogLines,SORT_DESC);
$lastHeard = getLastHeard($reverseLogLines, True);
$listElem = $lastHeard[0];
if (strlen($listElem[1]) !== 0) {
	echo "transmitting";
} else {
	//echo"<tr><td colspan=\"5\"></tr>";
	echo "idle";
}
?>
