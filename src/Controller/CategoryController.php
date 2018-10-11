<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 03/10/18
 * Time: 17:05
 */

namespace Controller;

use Model\CategoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class CategoryController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectAllCategories();
        return $this->twig->render('category.html.twig', ['category' => $category]);
    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $showCategory = $categoryManager->selectOneCategory($id);
        return $this->twig->render('showCategory.html.twig', ['showCategory' => $showCategory]);
    }
}