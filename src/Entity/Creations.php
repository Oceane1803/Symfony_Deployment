<?php

namespace App\Entity;

use App\Repository\CreationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CreationsRepository::class)]
class Creations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagePath = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column]
    private ?int $Taille = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?int $Prix = null;

    /**
     * @var Collection<int, PersonnalisationCreation>
     */
    #[ORM\OneToMany(mappedBy: 'creation', targetEntity: PersonnalisationCreation::class)]
    private Collection $personnalisationCreations;

    public function __construct()
    {
        $this->personnalisationCreations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): static
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->Taille;
    }

    public function setTaille(int $Taille): static
    {
        $this->Taille = $Taille;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }

    /**
     * @return Collection<int, PersonnalisationCreation>
     */
    public function getPersonnalisationCreations(): Collection
    {
        return $this->personnalisationCreations;
    }

    public function addPersonnalisationCreation(PersonnalisationCreation $personnalisationCreation): static
    {
        if (!$this->personnalisationCreations->contains($personnalisationCreation)) {
            $this->personnalisationCreations->add($personnalisationCreation);
            $personnalisationCreation->setCreation($this);
        }

        return $this;
    }

    public function removePersonnalisationCreation(PersonnalisationCreation $personnalisationCreation): static
    {
        if ($this->personnalisationCreations->removeElement($personnalisationCreation)) {
            // set the owning side to null (unless already changed)
            if ($personnalisationCreation->getCreation() === $this) {
                $personnalisationCreation->setCreation(null);
            }
        }

        return $this;
    }
}
