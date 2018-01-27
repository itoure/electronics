<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Category;

class CategoryService
{
	
	public function __construct(EntityManagerInterface $manager)
	{
		$this->manager = $manager;
	}


	/**
	* Retieve all categories from the database
	*/
	public function getAll()
	{
        $data = [];

        $categories = $this->manager->getRepository(Category::class)
            ->findAll();

        if(empty($categories)){
            return $data;
        }

        foreach($categories as $category){
            $data[] = $category->getData();
        }

        return $data;
	}

}