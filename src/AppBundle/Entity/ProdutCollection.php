<?php

namespace AppBundle\Entity;

class ProductCollection
{
    /**
     * @var Note[]
     */
    public $products;

    /**
     * @var integer
     */
    public $offset;

    /**
     * @var integer
     */
    public $limit;

    /**
     * @param Note[]  $notes
     * @param integer $offset
     * @param integer $limit
     */
    public function __construct($products = array(), $offset = null, $limit = null)
    {
        $this->products = $products;
        $this->offset = $offset;
        $this->limit = $limit;
    }
}
