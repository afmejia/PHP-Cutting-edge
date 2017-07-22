<?php
namespace Fred;
/*$myCourier = new s\Courier("cou");
$parcel = new s\Parcel();

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
