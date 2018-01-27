<?php

namespace AppBundle\Entity;

/**
 * Products
 */
class Product
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $created_at;

    /**
     * @var string
     */
    private $modified_at;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set category.
     *
     * @param string $category
     *
     * @return Products
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set sku.
     *
     * @param string $sku
     *
     * @return Products
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set price.
     *
     * @param float $price
     *
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return Products
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
    * Format entity into a simple object
    */
    public function getData()
    {
        $object = (object)[];
        $object->id = $this->id;
        $object->name = $this->name;
        $object->category = $this->getCategory()->getName();
        $object->sku = $this->sku;
        $object->price = $this->price;
        $object->quantity = $this->quantity;
        $object->created_at = $this->created_at;
        $object->modified_at = $this->modified_at;

        return $object;
    }


    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function setModifiedAt($modified_at)
    {
        $this->modified_at = $modified_at;

        return $this;
    }

}
