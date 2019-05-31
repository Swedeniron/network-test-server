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
echo '    <th align=left><a href="index.php">Ping Test</a><br><a href="telnet.php">Telnet Test</a><br><a href="traceroute.php">Traceroute Test</a></th>';
echo '  </tr>';
echo '</table> ';



// Form Curl Test
echo '<h3>Curl Test</h3><br>Grabbing a webpage and show it';
echo '<form action="curl.php">';
echo '<label for="text">Type a IP address or www address:</label><br>';
echo '<input type="text" name="ip" id="ip"><br><br>';
echo '<input type="submit" value="Curl Test">';
echo '</form>';



// Get IP from form
$ip_value =  $_GET['ip'];

//if ($ip_value == 0){
	// Form is not filled in
//echo $ip_value;

//} else {
	// Form has a value

	
	
//CHECK IF THE IP HAS A WEBSERVER	
//$url = 'www.google.com';
$ch = curl_init($ip_value);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


if($httpcode>=200 && $httpcode<300){
  echo '<h3 style="color:#008000">Worked HTTP Code=';
  echo $httpcode;
  echo '</h3><br><br>';
  echo $data;
} else {
//  echo '<h3 style="color:#FF0000">No connection to the host</h3>';
}



//}

echo '</body>';
echo '</html>';

?>
