<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_couleur = null;

    #[ORM\Column]
    private ?int $id_marque = null;

    #[ORM\Column]
    private ?int $id_type = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_article = null;

    #[ORM\Column]
    private ?float $titrage = null;

    #[ORM\Column]
    private ?int $volume = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCouleur(): ?int
    {
        return $this->id_couleur;
    }

    public function setIdCouleur(int $id_couleur): static
    {
        $this->id_couleur = $id_couleur;

        return $this;
    }

    public function getIdMarque(): ?int
    {
        return $this->id_marque;
    }

    public function setIdMarque(int $id_marque): static
    {
        $this->id_marque = $id_marque;

        return $this;
    }

    public function getIdType(): ?int
    {
        return $this->id_type;
    }

    public function setIdType(int $id_type): static
    {
        $this->id_type = $id_type;

        return $this;
    }

    public function getNomArticle(): ?string
    {
        return $this->nom_article;
    }

    public function setNomArticle(string $nom_article): static
    {
        $this->nom_article = $nom_article;

        return $this;
    }

    public function getTitrage(): ?float
    {
        return $this->titrage;
    }

    public function setTitrage(float $titrage): static
    {
        $this->titrage = $titrage;

        return $this;
    }

    public function getVolume(): ?int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): static
    {
        $this->volume = $volume;

        return $this;
    }
}
