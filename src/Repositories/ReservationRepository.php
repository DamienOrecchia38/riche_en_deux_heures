<?php

class ReservationRepository extends Database
{
    public function getAll()
    {
        $req = $this->getDb()->query('SELECT * FROM reservation');

        $data = $req->fetchAll(PDO::FETCH_CLASS, Reservation::class);

        return $data;
    }

    public function findById($reservationId)
    {
        $req = $this->getDb()->prepare('SELECT * FROM reservation WHERE id = :id');

        $req->execute([
            'id' => $reservationId
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, Reservation::class);

        return $req->fetch();
    }
}