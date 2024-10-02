<html>
<body>
<div id="wrapper">

<div id="detail_div">
<?php
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
 $referrer = $_SERVER['HTTP_REFERER'];
 $datetime = date("F j, Y, g:i a");
 $useragent = $_SERVER['HTTP_USER_AGENT'];

 echo "<p>IP Address : ".$ipaddress."</p>";
 echo "<p>Current Page : ".$page."</p>";
 echo "<p>Referrer : ".$referrer."</p>";
 echo "<p>Current Time : ".$datetime."</p>";
 echo "<p>Browser : ".$useragent."</p>";

 $ip = getenv("HTTP_CLIENT_IP")?:
getenv("HTTP_X_FORWARDED_FOR")?:
getenv("HTTP_X_FORWARDED")?:
getenv("HTTP_FORWARDED_FOR")?:
getenv("HTTP_FORWARDED")?:
getenv("REMOTE_ADDR");

echo $ip;


function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
  
// Store the IP address 
$vis_ip = getVisIPAddr(); 
  
// Display the IP address 
echo $vis_ip; 


//$ip = '52.25.109.230'; 
  
// Use JSON encoded string and converts 
// it into a PHP variable 
// $ipdat = @json_decode(file_get_contents( 
//     "http://www.geoplugin.net/json.gp?ip=" . $ip)); 
   
// echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n"; 
// echo 'City Name: ' . $ipdat->geoplugin_city . "\n"; 
// echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "\n"; 
// echo 'Latitude: ' . $ipdat->geoplugin_latitude . "\n"; 
// echo 'Longitude: ' . $ipdat->geoplugin_longitude . "\n"; 
// echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n"; 
// echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n"; 
// echo 'Timezone: ' . $ipdat->geoplugin_timezone; 
   

//  $host="localhost";
//  $username="root";
//  $password="";
//  $databasename="sample";
//  $connect=mysql_connect($host,$username,$password);
//  $db=mysql_select_db($databasename);
 
//  mysql_query("insert into visitor_details values('','$ipaddress','$page','$referrer','$datetime','$useragent')");
 
?>
</div>

</div>
</body>
</html>