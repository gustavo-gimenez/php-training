<?php
use Doctrine\Common\Collections\ArrayCollection;
class Provincia
{
    
    private $name;
    private $cities;

    public function __construct()
    {
      $this->cities = new ArrayCollection();
    }
 
    public function getName()
    {
      return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCapital($city)
    {
        return true;
    }

    public function setCities($cities)
    {
        $cities = is_array($cities) ? $cities: array($cities);

        $this->cities = $cities;
    }

    public function getCities()
    {
        return $this->cities;
    }
}
