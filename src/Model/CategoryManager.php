<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 03/10/18
 * Time: 17:05
 */

namespace Model;

class CategoryManager extends AbstractManager
{
    const TABLE = 'category';

    public function __construct($pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Item $item): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`name`) VALUES (:name)");
        $statement->bindValue('name', $category->getName(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}