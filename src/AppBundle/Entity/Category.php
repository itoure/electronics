<?php

namespace AppBundle\Entity;

/**
 * Categories
 */
class Category
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
     * @return Categories
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

    /**
    * Format entity into a simple object
    */
    public function getData()
    {
        $object = (object)[];
        $object->id = $this->id;
        $object->name = $this->name;
        $object->created_at = $this->created_at;
        $object->modified_at = $this->modified_at;

        return $object;
    }

}
