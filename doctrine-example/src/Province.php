<?php
// src/Product.php
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="province")
 **/
class Province
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /** @OneToMany(targetEntity="City", mappedBy="province")**/
    protected $cities;
    
    function __construct() {
        $this->cities = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getCities()
    {
        return $this->cities;
    }
}
