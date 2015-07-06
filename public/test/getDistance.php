<?php
include('ip2locationlite.class.php');
 
//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('239493602d86db252cf667f5121ad2ec98c88127e4cdc4f25208ad1535119b2c');
 
//Get errors and locations
$longitude = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
$errors = $ipLite->getError();
 
//Getting the result
echo "<p>\n";
echo "<strong>First result</strong><br />\n";
if (!empty($longitude) && is_array($longitude)) {
  foreach ($longitude as $field => $val) {
  if(strcmp($field, "longitude")==0){  
  	echo $val . "<br />\n";
    $lon1 = $val;
	}
if(strcmp($field, "latitude")==0){
    echo $val . "<br />\n";
    $lat1 = $val;
    }
  }
}
echo "</p>\n";
 
//Show errors
echo "<p>\n";
echo "<strong>Dump of all errors</strong><br />\n";
if (!empty($errors) && is_array($errors)) {
  foreach ($errors as $error) {
    echo var_dump($error) . "<br /><br />\n";
  }
} else {
  echo "No errors" . "<br />\n";
}
echo "</p>\n";

function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

echo distance($lat1, $lon1, 40.728157, -74.077642, "M") . " Miles<br>";
echo distance($lat1, $lon1, 40.728157, -74.077642, "K") . " Kilometers<br>";
echo distance($lat1, $lon1, 40.728157, -74.077642, "N") . " Nautical Miles<br>";

?>
