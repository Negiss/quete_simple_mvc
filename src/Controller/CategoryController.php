<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 03/10/18
 * Time: 17:05
 */

namespace Controller;

use Model;

class CategoryController
{
    public function index(){
        $categoryManager = new Model\CategoryManager();
        $category = $categoryManager->selectAllCategories();
        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id){
        $categoryManager = new Model\CategoryManager();
        $showCategory = $categoryManager->selectOneCategory($id);
        require __DIR__ . '/../View/showCategory.php';
    }
}