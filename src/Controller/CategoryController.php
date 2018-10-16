<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 03/10/18
 * Time: 17:05
 */

namespace Controller;

use Model\CategoryManager;

class CategoryController extends AbstractController
{

    public function index()
    {
        $categoryManager = new CategoryManager($this->pdo);
        $category = $categoryManager->selectAll();
        return $this->twig->render('category.html.twig', ['category' => $category]);
    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager($this->pdo);
        $showCategory = $categoryManager->selectOneById($id);
        return $this->twig->render('showCategory.html.twig', ['showCategory' => $showCategory]);
    }


    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Item et hydratation avec les données du formulaire
            $category = new Category();
            $category->setName($_POST['name']);

            $itemManager = new CategoryManager($this->pdo);
            // l'objet $item hydraté est simplement envoyé en paramètre de insert()
            $itemManager->insert($category);
            // si tout se passe bien, redirection
            header('Location: /');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return;
    }
}