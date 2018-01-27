<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Product;
use AppBundle\Service\ProductService;
use AppBundle\Utils\Utils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function __construct(Utils $utils, ProductService $productService)
    {
        $this->utils = $utils;
        $this->productService = $productService;
    }

    /**
    * Retrieve all products
    */
    public function getAllAction()
    {
        try{
            $data = $this->productService->getAll();
            return $this->json($this->utils->success($data));
        }
        catch (Exception $e) {
            return $this->json($this->utils->error($e->getMessage()));
        }
    }

    /**
    * Retrieve one product
    */
    public function getOneAction($product_id)
    {
        try{
            $data = $this->productService->getOne($product_id);
            return $this->json($this->utils->success($data));
        }
        catch (Exception $e) {
            return $this->json($this->utils->error($e->getMessage()));
        }
    }

    /**
    * create product
    */
    public function createAction(Request $request)
    {
        try{
            $data = (object)[];
            $data->name = $request->request->get('name');
            $data->category = $request->request->get('category');
            $data->sku = $request->request->get('sku');
            $data->quantity = $request->request->get('quantity');
            $data->price = $request->request->get('price');

            $product_id = $this->productService->create($data);
            return $this->json($this->utils->success($product_id));
        }
        catch (Exception $e) {
            return $this->json($this->utils->error($e->getMessage()));
        }
    }

    /**
    * Update product
    */
    public function updateAction(Request $request, $product_id)
    {
        try{
            $data = (object)[];
            $data->id = $product_id;
            $data->name = $request->request->get('name');
            $data->category = $request->request->get('category');
            $data->sku = $request->request->get('sku');
            $data->quantity = $request->request->get('quantity');
            $data->price = $request->request->get('price');

            $product = $this->productService->update($data);
            return $this->json($this->utils->success($product));
        }
        catch (Exception $e) {
            return $this->json($this->utils->error($e->getMessage()));
        }
    }

    /**
    * Delete product
    */
    public function deleteAction($product_id)
    {
        try{
            $data = $this->productService->delete($product_id);
            return $this->json($this->utils->success($data));
        }
        catch (Exception $e) {
            return $this->json($this->utils->error($e->getMessage()));
        }
    }

}
