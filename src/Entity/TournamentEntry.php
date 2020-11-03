<?php

namespace App\Entity;

use App\Repository\TournamentEntryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * @ORM\Entity(repositoryClass=TournamentEntryRepository::class)
 */
class TournamentEntry
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $travel_distance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $flight_duration;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTravelDistance()
    {
        return $this->travel_distance;
    }

    /**
     * @param mixed $travel_distance
     */
    public function setTravelDistance($travel_distance): void
    {
        $this->travel_distance = $travel_distance;
    }

    /**
     * @return mixed
     */
    public function getFlightDuration()
    {
        return $this->flight_duration;
    }

    /**
     * @param mixed $flight_duration
     */
    public function setFlightDuration($flight_duration): void
    {
        $this->flight_duration = $flight_duration;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }


}
