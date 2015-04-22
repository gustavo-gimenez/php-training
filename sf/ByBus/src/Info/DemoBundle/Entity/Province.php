<?php

namespace Info\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Province
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Province
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var array
     *
     * @ORM\Column(name="cities", type="array")
     */
    private $cities;

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="string", length=255)
     */
    private $capital;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set string
     *
     * @param string $string
     * @return Province
     */
    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Get string
     *
     * @return string 
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Province
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set cities
     *
     * @param array $cities
     * @return Province
     */
    public function setCities($cities)
    {
        $this->cities = $cities;

        return $this;
    }

    /**
     * Get cities
     *
     * @return array 
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * Set capital
     *
     * @param string $capital
     * @return Province
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string 
     */
    public function getCapital()
    {
        return $this->capital;
    }
}
