<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP!</title>
  </head>
  <body>
      <?php
      require 'courier.php';

      //without namespace
      /*function __autoload($classname) {
        include strtolower($classname) . '.php';
      }*/

      $mono = new shipping\Courier('Monospace Delivery');
      var_dump($mono);
      echo "<br>Courier Name: " . $mono->name;

      // Calling a method
      $mono->ship($parcel);
      $spanish_couriers = shipping\Courier::getCouriersByCountry('Spain');
     ?>
  </body>
</html>
