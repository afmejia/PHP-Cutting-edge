<?php
namespace Fred;
use \shop\shipping as s;
require 'courier.php';

$parcel = new s\Parcel();
$courier = new s\PigeonPost('Local Avian Delivery Ltd');

/*if ($courier instanceOf s\Courier)
{
  echo $courier->name . " is a Courier<br>";
}
if ($courier instanceOf s\PigeonPost)
{
  echo $courier->name . " is a PigeonPost<br>";
}
if ($courier instanceOf s\Parcel)
{
  echo $courier->name . " is a Parcel<br>";
}*/

$myparcel = new s\Parcel();
$myparcel->setWeight(5)->setCountry('Peru');
?>
