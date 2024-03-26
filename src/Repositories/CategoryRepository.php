<?php

class CategoryRepository extends Database
{
    public function getAll()
    {
        $req = $this->getDb()->query('SELECT * FROM category');

        $data = $req->fetchAll(PDO::FETCH_CLASS, Category::class);

        return $data;
    }

    public function findById($categoryId)
    {
        $req = $this->getDb()->prepare('SELECT * FROM category WHERE id = :id');

        $req->execute([
            'id' => $categoryId
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, Category::class);

        return $req->fetch();
    }
}