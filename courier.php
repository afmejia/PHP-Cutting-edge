<?php
namespace shop\shipping;

interface Trackable
{
  public function getTrackInfo($parcelId);
}

class Parcel
{
  protected $weight;
  protected $destinationCountry;

  public function setWeight($weight)
  {
    echo "weight set to: " . $weight . "<br>";
    $this->weight = $weight;
    return $this;
  }

  public function setCountry($country)
  {
    echo "destination country is: " . $country . "<br>";
    $this->destinationCountry = $country;
    return $this;
  }
}

class Courier implements \Countable
{
    public $name;
    public $home_country;
    protected $count = 0;

    public function __construct($name)
    {
        $this -> name = $name;
        return true;
    }

    public function ship(Parcel $parcel)
    {
        // Sends the parcel to its destination
        $this->count++;
        return true;
    }

    public function calculateShipping($parcel)
    {
      // look up the rate for the destination, we'll invent one
      $rate = 1.78;

      // calculate the courier_list
      $rate = $this->getShippingRateForCountry($parcel->destinationCountry);
      // calculate the cost
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

    public function count()
    {
      return $this->count;
    }
    private function getShippingRateForCountry($country)
    {
      // Some excelent rate calculating code goes here for the example, we'll
      // just think of a Number
      return 1.2;
    }
}

class MonotypeDelivery extends Courier implements Trackable
{
  public function ship($parcel)
  {
    // put in box
    // send and get parcel ID
    $parcelId = 42;
    return true;
  }

  public function getTrackInfo($parcelId)
  {
    // look ups some information
    return(array("status" => "in transit"));
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
