<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP!</title>
  </head>
  <body>
      <?php
      //require 'courier.php';

      function __autoload($classname) {
        include strtolower($classname) . '.php';
      }

      $mono = new Courier('Monospace Delivery');
      var_dump($mono);
     ?>
  </body>
</html>
