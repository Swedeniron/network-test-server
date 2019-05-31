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
echo '    <th align=left><a href="curl.php">Curl Test</a><br><a href="index.php">Ping Test</a><br><a href="telnet.php">Telnet Test</a></th>';
echo '  </tr>';
echo '</table> ';





// Form Traceroute Test
echo '<h3>Traceroute Test</h3><br>';
echo '<form action="traceroute.php">';
echo '<label for="text">Type a IP address here:</label><br>';
echo '<input type="text" name="ip" id="ip"><br><br>';
echo '<input type="submit" value="Traceroute Test">';
echo '</form>';



// Get IP from form
$ip_value =  $_GET['ip'];



if ($ip_value == 0){
	// Form is not filled in
    
} else {
	// Form has a value
   

echo '<br><br>';
//$output = shell_exec("/usr/sbin/traceroute 8.8.8.8");
$output = shell_exec("/usr/sbin/traceroute $ip_value");
echo "<pre>$output</pre>";
}

echo '</body>';
echo '</html>';


?>
