<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServicesRepository::class)
 */
class Services
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $dataAos;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $dataAosDuration;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(string $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDataAos(): ?string
    {
        return $this->dataAos;
    }

    public function setDataAos(?string $dataAos): self
    {
        $this->dataAos = $dataAos;

        return $this;
    }

    public function getDataAosDuration(): ?string
    {
        return $this->dataAosDuration;
    }

    public function setDataAosDuration(?string $dataAosDuration): self
    {
        $this->dataAosDuration = $dataAosDuration;

        return $this;
    }
}
