<?php
namespace Fred;
use \shop\shipping as s;
require 'courier.php';

$courier = new s\Courier();
$courier->ship(new s\Parcel());
$courier->ship(new s\Parcel());
$courier->ship(new s\Parcel());
$courier->ship(new s\Parcel());
echo count($courier);
?>
