<?php

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
echo '    <th align=left><a href="curl.php">Curl Test</a><br><a href="telnet.php">Telnet Test</a><br><a href="traceroute.php">Traceroute Test</a></th>';
echo '  </tr>';
echo '</table> ';



// Form IP Test
echo '<h3>Ping Test</h3><br>';
echo '<form action="index.php">';
echo '<label for="text">Type a IP address here:</label><br>';
echo '<input type="text" name="ip" id="ip"><br><br>';
echo '<input type="submit" value="Ping Test">';
echo '</form>';


// Get IP from form
$ip_value =  $_GET['ip'];

if ($ip_value == 0){
	// Form is not filled in
} else {
	// Form has a value

	
$ping = exec($ip_value);


//exec("ping -c 1 " . $ip_value . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
exec("ping -c 3 " . $ip_value, $ping_time);
echo '<br><br>';
echo $ping_time[0]; // First item in array, since exec returns an array.
echo '<br>';
echo $ping_time[1]; // Second item in array, since exec returns an array.
echo '<br>';
echo $ping_time[2]; // Third item in array, since exec returns an array.
echo '<br>';
echo $ping_time[3]; // Four'd item in array, since exec returns an array.
}

echo '</body>';
echo '</html>';


?>