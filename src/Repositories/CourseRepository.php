<?php

class CourseRepository extends Database
{
    public function getAll()
    {
        $req = $this->getDb()->query('SELECT * FROM course');

        $data = $req->fetchAll(PDO::FETCH_CLASS, Course::class);

        return $data;
    }

    public function findById($courseId)
    {
        $req = $this->getDb()->prepare('SELECT * FROM course WHERE id = :id');

        $req->execute([
            'id' => $courseId
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, Course::class);

        return $req->fetch();
    }
}