<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP!</title>
  </head>
  <body>
      <?php
<<<<<<< HEAD
      require 'script.php';
      //without namespace
      /*function __autoload($classname) {
        include strtolower($classname) . '.php';
      }

=======
      require 'courier.php';
      //without namespace
      /*function __autoload($classname) {
        include strtolower($classname) . '.php';
      }*/
>>>>>>> cb74eba8a78ad4e6e9555b9624e734ffa6f9946b
      $mono = new shipping\Courier('Monospace Delivery');
      var_dump($mono);
      echo "<br>Courier Name: " . $mono->name;
      // Calling a method
      $mono->ship($parcel);
      $spanish_couriers = shipping\Courier::getCouriersByCountry('Spain');*/
     ?>
  </body>
</html>
