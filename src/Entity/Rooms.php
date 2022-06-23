<?php

namespace App\Entity;

use App\Repository\RoomsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoomsRepository::class)]
class Rooms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    

    #[ORM\ManyToMany(targetEntity: Extra::class, inversedBy: 'rooms')]
    private $extra;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $img;

    #[ORM\Column(type: 'text')]
    private $description;

    public function __construct()
    {
        $this->extra = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return Collection<int, extra>
     */
    public function getExtra(): Collection
    {
        return $this->extra;
    }

    public function addExtra(extra $extra): self
    {
        if (!$this->extra->contains($extra)) {
            $this->extra[] = $extra;
        }

        return $this;
    }

    public function removeExtra(extra $extra): self
    {
        $this->extra->removeElement($extra);

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
