<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Category;
use AppBundle\Service\CategoryService;
use AppBundle\Utils\Utils;

class CategoryController extends Controller
{
    public function __construct(Utils $utils, CategoryService $categoryService)
    {
        $this->utils = $utils;
        $this->categoryService = $categoryService;
    }

    public function getAllAction()
    {
        try{
            $data = $this->categoryService->getAll();
            return $this->json($this->utils->success($data));
        }
        catch (Exception $e) {
            return $this->json($this->utils->error($e->getMessage()));
        }
    }
}
