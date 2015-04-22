<?php

/**
 * @Entity @Table(name="city")
 **/
class City {
    
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $name;
    
    /** @ManyToOne(targetEntity="Province", inversedBy="cities") **/    
    protected $province;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getProvince() {
        return $this->province;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setProvince($province) {
        $this->province = $province;
    }

}
