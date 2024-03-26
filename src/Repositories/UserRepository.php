<?php

class UserRepository extends Database
{
    public function getAll()
    {
        $req = $this->getDb()->query('SELECT * FROM user');

        $data = $req->fetchAll(PDO::FETCH_CLASS, User::class);

        return $data;
    }

    public function findById($userId)
    {
        $req = $this->getDb()->prepare('SELECT * FROM user WHERE id = :id');

        $req->execute([
            'id' => $userId
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, User::class);

        return $req->fetch();
    }

    public function findByUsername($username)
    {
        $req = $this->getDb()->prepare('SELECT * FROM user WHERE username = :username');

        $req->execute([
            'username' => $username
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, User::class);

        return $req->fetch();
    }

    public function create($username, $password, $email)
    {
        $query = 'INSERT INTO user (username, password, email) 
        VALUES (:username, :password, :email)';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'username' => $username,
            'password' => $password,
            'email' => $email,
        ]);
    }

    public function delete($userId)
    {
        $query = 'DELETE FROM user WHERE id = :id';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id' => $userId
        ]);
    }

    public function update($id, $username, $password, $email)
    {
        $query = 'UPDATE user SET username = :username, password = :password, email = :email
        WHERE id = :id';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'email' => $email,
        ]);
    }
}
