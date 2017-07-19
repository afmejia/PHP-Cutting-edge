<?php
<<<<<<< HEAD
namespace shop\shipping;

=======
namespace shipping;
>>>>>>> cb74eba8a78ad4e6e9555b9624e734ffa6f9946b
class Parcel
{
  public $weight;
  public $destinationAddress;
  public $destinationCountry;
}
class Courier
{
    public $name;
    public $home_country;
    public function __construct($name)
    {
        $this -> name = $name;
        echo "I am the constructor";
        return true;
    }
    public function ship($parcel)
    {
        // Sends the parcel to its destination
        echo "<br>I am in the ship method";
        return true;
    }
    public function calculateShipping($parcel)
    {
      // look up the rate for the destination, we'll invent one
      $rate = 1.78;
      // calculate the courier_list
      $cost = $rate * $parcel->weight;
      return $cost;
    }
    public static function getCouriersByCountry($country)
    {
        // Get a list of couriers with their home_country = $country
      // create a Courier object for each result
      // return an array of the results
      echo "<br>This is a static method whit the argument: " . $country;
      return $courier_list;
    }
}
class MonotypeDelivery extends Courier
{
  public function ship($parcel)
  {
    // put in box
    // send
    return true;
  }
}
class PigeonPost extends Courier
{
  public function ship(Parcel $parcel)
  {
    // fetch pigeon
    // attach parcel
    //send
    return true;
  }
}
