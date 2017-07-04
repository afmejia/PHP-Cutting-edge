<?php
namespace shipping;

class Courier
{
    public $name;
    public $home_country;

    public function __construct($name)
    {
        $this -> name = $name;
        return true;
    }

    public function ship($parcel)
    {
        // Sends the parcel to its destination
        return true;
    }

    public static function getCouriersByCountry($country)
    {
        // Get a list of couriers with their home_country = $country
      // create a Courier object for each result
      // return an array of the results
      return $courier_list;
    }
}
