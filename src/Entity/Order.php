<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $room;

    #[ORM\Column(type: 'integer')]
    private $beds;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\Column(type: 'date')]
    private $timeofarrival;

    #[ORM\Column(type: 'date')]
    private $timeofleaving;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoom(): ?string
    {
        return $this->room;
    }

    public function setRoom(string $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getBeds(): ?int
    {
        return $this->beds;
    }

    public function setBeds(int $beds): self
    {
        $this->beds = $beds;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTimeofarrival(): ?\DateTimeInterface
    {
        return $this->timeofarrival;
    }

    public function setTimeofarrival(\DateTimeInterface $timeofarrival): self
    {
        $this->timeofarrival = $timeofarrival;

        return $this;
    }

    public function getTimeofleaving(): ?\DateTimeInterface
    {
        return $this->timeofleaving;
    }

    public function setTimeofleaving(\DateTimeInterface $timeofleaving): self
    {
        $this->timeofleaving = $timeofleaving;

        return $this;
    }
}
