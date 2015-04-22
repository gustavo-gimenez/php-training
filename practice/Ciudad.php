<?php 
namespace practice;

class Ciudad
{
    private $name;
    private $postal;

    public function __construct($name, $postal)
    {
      $this->name = $name;
      $this->postal = $postal;
    }

    public function getName()
    {
       return $this->name;
    }

    public function getPostal()
    {
       return $this->postal;
    }
}
