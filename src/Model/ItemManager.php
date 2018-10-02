<?php

namespace Model;

// serc/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

/**
 * Class ItemManager
 */

class ItemManager
{
// récupération de tous les items
    function selectAllItems()
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }
}

?>