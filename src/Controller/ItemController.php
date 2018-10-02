<?php

namespace Controller;

// src/Model/ItemManager.php

use Model;

class ItemController {

    public function index(){
        $itemManager = new Model\ItemManager();
        $item = $itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';
        return $item;
    }
}

?>