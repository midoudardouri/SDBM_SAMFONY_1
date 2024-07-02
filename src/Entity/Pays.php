<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaysRepository::class)]
class Pays
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_continent = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_pays = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdContinent(): ?int
    {
        return $this->id_continent;
    }

    public function setIdContinent(int $id_continent): static
    {
        $this->id_continent = $id_continent;

        return $this;
    }

    public function getNomPays(): ?string
    {
        return $this->nom_pays;
    }

    public function setNomPays(string $nom_pays): static
    {
        $this->nom_pays = $nom_pays;

        return $this;
    }
}
