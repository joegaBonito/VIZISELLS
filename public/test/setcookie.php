<?php
include_once('ip2locationlite.class.php');
 
//Set geolocation cookie
if(!$_COOKIE["geolocation"]){
  $ipLite = new ip2location_lite;
  $ipLite->setKey('239493602d86db252cf667f5121ad2ec98c88127e4cdc4f25208ad1535119b2c');
 
  $visitorGeolocation = $ipLite->getCountry($_SERVER['REMOTE_ADDR']);
  if ($visitorGeolocation['statusCode'] == 'OK') {
    $data = base64_encode(serialize($visitorGeolocation));
    setcookie("geolocation", $data, time()+3600*24*7); //set cookie for 1 week
  }
}else{
  $visitorGeolocation = unserialize(base64_decode($_COOKIE["geolocation"]));
}
echo $visitorGeolocation; 
var_dump($visitorGeolocation);
