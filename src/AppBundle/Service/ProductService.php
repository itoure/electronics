<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;

class ProductService
{
	
	public function __construct(EntityManagerInterface $manager)
	{
		$this->manager = $manager;
	}

	/**
	* Retieve all products from the database
	*/
	public function getAll()
	{
        $data = [];

        $products = $this->manager->getRepository(Product::class)
            ->findAll();

        if(empty($products)){
            return $data;
        }

        foreach($products as $product){
            $data[] = $product->getData();
        }

        return $data;
	}

	/**
	* Retieve one product from the database
	*/
	public function getOne($product_id)
	{

        $product = $this->manager->getRepository(Product::class)
            ->find($product_id);

        if(empty($product)){
            return [];
        }

        return $product->getData();

	}

	/**
	* Insert a product into the database
	*/
	public function create($data)
	{
		try{
			$category = $this->manager->getRepository(Category::class)
	            ->find($data->category);

	        $product = new Product();
	        $product->setName($data->name);
	        $product->setCategory($category);
	        $product->setSku($data->sku);
	        $product->setPrice($data->price);
	        $product->setQuantity($data->quantity);
	        $product->setCreatedAt(time());
        	$product->setModifiedAt(time());
	        $this->manager->persist($product);

	        $this->manager->flush();

	        return array('product_id' => $product->getId());
		}
		catch (Doctrine\DBAL\Exception $e) {
			throw new \Exception($e->getMessage());
		}
		
	}

	/**
	* Update a product from the database
	*/
	public function update($data)
	{
		try{
			$product = $this->manager->getRepository(Product::class)
	            ->find($data->id);

			$category = $this->manager->getRepository(Category::class)
	            ->find($data->category);

	        $product->setName($data->name);
	        $product->setCategory($category);
	        $product->setSku($data->sku);
	        $product->setPrice($data->price);
	        $product->setQuantity($data->quantity);
        	$product->setModifiedAt(time());
	        $this->manager->persist($product);

	        $this->manager->flush();

	        return $product->getData();
		}
		catch (Doctrine\DBAL\Exception $e) {
			throw new \Exception($e->getMessage());
		}
		
	}

	/**
	* Delete a product from the database
	*/
	public function delete($product_id)
	{
		try{
			$product = $this->manager->getRepository(Product::class)
	            ->find($product_id);

	        $this->manager->remove($product);

	        $this->manager->flush();

	        return true;
		}
		catch (Doctrine\DBAL\Exception $e) {
			throw new \Exception($e->getMessage());
		}
		
	}




















}