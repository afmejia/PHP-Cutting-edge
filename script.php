<?php
namespace Fred;
/*$myCourier = new s\Courier("cou");
$parcel = new s\Parcel();

<<<<<<< HEAD
//Add the adress if we have it
$parcel->weight = rand(1, 7);
try
{
  $myCourier->ship($parcel);
  echo "parcel shipped";
}
catch (s\HeavyParcelException $e)
{
  echo "Parcel weight error: " . $e->getMessage();
  // Redirect them to choose another courier
}
catch (\Exception $e)
{
  echo "Something went wrong. " . $e->getMessage();
  exit;
}*/

function handleMissedException($e)
{
    echo "Sorry, something is wrong. Please try again, or contact us if the problem persists";
    error_log('Unhandled Exception: ' . $e->getMessage() . ' in file ' . $e->getFile()) .
              ' on line ' . $e->getLine();
}

set_exception_handler('Fred\handleMissedException');
throw new Exception('just testing!');
echo "string";
=======
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
>>>>>>> 27f81226de3e1bdd763d670ee72b37968cc95e65
