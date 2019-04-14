<?php

namespace AppBundle\Entity;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;



    /**
     * @var string
     */
    private $barcode;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var string
     */
    private $vatClass;


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
     * Set barcode
     *
     * @param string $barcode
     *
     * @return Product
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set cost
     *
     * @param integer $cost
     *
     * @return Product
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set vatClass
     *
     * @param string $vatClass
     *
     * @return Product
     */
    public function setVatClass($vatClass)
    {
        $this->vatClass = $vatClass;

        return $this;
    }

    /**
     * Get vatClass
     *
     * @return string
     */
    public function getVatClass()
    {
        return $this->vatClass;
    }
}

