<?php

namespace App\Entity;

use App\Repository\TournamentEntryRepository;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="float")
     */
    private $traveldistance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTraveldistance(): ?float
    {
        return $this->traveldistance;
    }

    public function setTraveldistance(float $traveldistance): self
    {
        $this->traveldistance = $traveldistance;

        return $this;
    }
}
