<?php

/* 
   -------------------------------------------------
   Stellan Eriksson micro_se@hotmail.com 2019-05-31
   -------------------------------------------------
*/

echo '<!DOCTYPE html>';
echo '<html>';
echo '<body>';


// Table for header and links
echo '<table>';
echo '  <tr>';
echo '    <th><img src="tele2.jpg" alt="" /></th>';
echo '    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>';
echo '    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>';
echo '    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>';
echo '    <th align=left><a href="curl.php">Curl Test</a><br><a href="index.php">Ping Test</a><br><a href="traceroute.php">Traceroute Test</a></th>';
echo '  </tr>';
echo '</table> ';



// Form Telnet Test
echo '<h3>Telnet Test</h3><br>';
echo '<form action="telnet.php">';
echo '<label for="text">Type a IP address and port here:</label><br>';
echo '<input type="text" name="ip" id="ip"> <input type="text" name="port" id="port" size="5"><br><br>';
echo '<input type="submit" value="Telnet Test">';
echo '</form>';


// Get IP from form
$ip_value =  $_GET['ip'];
// Get Port from form
$port =  $_GET['port'];


exec("telnet " . $ip_value . " " . $port, $ping_time);

echo '<br><br>';
echo $ping_time[0]; 
echo '<br>';
echo $ping_time[1]; 
echo '<br>';
echo $ping_time[2]; 
echo '<br>';
echo $ping_time[3]; 
echo '<br>';
echo $ping_time[4];
echo '<br>';
echo $ping_time[5];
echo '<br>';
echo $ping_time[6];
echo '<br>';
echo $ping_time[7];
echo '<br>';
echo $ping_time[8];
echo '<br>';
echo $ping_time[9];


echo '</body>';
echo '</html>';


?>
