<?php

namespace App\Reservation;


class Reservation
{
    private $id;
    private $description;
    private $reservationDate;
    private $returnDate;
    private $isReturned;
    private $userId;
    private $bookId;

    public function __construct($description, $reservationDate, $returnDate, $isReturned, $userId, $bookId)
    {
        $this->description = $description;
        $this->reservationDate = $reservationDate;
        $this->returnDate = $returnDate;
        $this->isReturned = $isReturned;
        $this->userId = $userId;
        $this->bookId = $bookId;
    }

    // Getter methods
    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getReservationDate()
    {
        return $this->reservationDate;
    }

    public function getReturnDate()
    {
        return $this->returnDate;
    }

    public function getIsReturned()
    {
        return $this->isReturned;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getBookId()
    {
        return $this->bookId;
    }

    // Setter methods
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setReservationDate($reservationDate)
    {
        $this->reservationDate = $reservationDate;
    }

    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;
    }

    public function setIsReturned($isReturned)
    {
        $this->isReturned = $isReturned;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function setBookId($bookId)
    {
        $this->bookId = $bookId;
    }
}
?>
