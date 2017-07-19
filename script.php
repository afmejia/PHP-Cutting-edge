<?php
namespace Fred;
use \shop\shipping as s;
require 'courier.php';

$courier = new s\PigeonPost();
$indian_couriers = s\PigeonPost::getCouriersByCountry('India');
?>
