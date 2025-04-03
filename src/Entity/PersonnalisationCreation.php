<?php

namespace App\Entity;

use App\Repository\PersonnalisationCreationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonnalisationCreationRepository::class)]
class PersonnalisationCreation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'personnalisationCreations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Creations $creation = null;

    #[ORM\Column(length: 20)]
    private ?string $couleur = null;

    #[ORM\Column]
    private ?int $taille = null;

    #[ORM\Column(length: 1000)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreation(): ?Creations
    {
        return $this->creation;
    }

    public function setCreation(?Creations $creation): static
    {
        $this->creation = $creation;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
