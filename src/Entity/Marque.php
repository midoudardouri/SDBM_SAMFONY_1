<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarqueRepository::class)]
class Marque
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_fabricant = null;

    #[ORM\Column]
    private ?int $id_pays = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_marque = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFabricant(): ?int
    {
        return $this->id_fabricant;
    }

    public function setIdFabricant(int $id_fabricant): static
    {
        $this->id_fabricant = $id_fabricant;

        return $this;
    }

    public function getIdPays(): ?int
    {
        return $this->id_pays;
    }

    public function setIdPays(int $id_pays): static
    {
        $this->id_pays = $id_pays;

        return $this;
    }

    public function getNomMarque(): ?string
    {
        return $this->nom_marque;
    }

    public function setNomMarque(string $nom_marque): static
    {
        $this->nom_marque = $nom_marque;

        return $this;
    }
}
