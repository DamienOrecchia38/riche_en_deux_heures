<?php

class CoachRepository extends Database
{
    public function getAll()
    {
        $req = $this->getDb()->query('SELECT * FROM coach');

        $data = $req->fetchAll(PDO::FETCH_CLASS, Coach::class);

        return $data;
    }

    public function findById($coachId)
    {
        $req = $this->getDb()->prepare('SELECT * FROM coach WHERE id = :id');

        $req->execute([
            'id' => $coachId
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, Coach::class);

        return $req->fetch();
    }

    public function create($firstname, $lastname)
    {
        $query = 'INSERT INTO coach (firstname, lastname) 
        VALUES (:firstname, :lastname)';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
        ]);
    }

    public function delete($coachId)
    {
        $query = 'DELETE FROM coach WHERE id = :id';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id' => $coachId
        ]);
    }

    public function update($id, $firstname, $lastname)
    {
        $query = 'UPDATE coach SET firstname = :firstname, lastname = :lastname
        WHERE id = :id';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id' => $id,
            'firstname' => $firstname,
            'lastname' => $lastname,
        ]);
    }
}
