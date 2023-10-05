<?php

namespace App\Entity;

use App\Repository\PassagersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PassagersRepository::class)]
class Passagers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $NumReservation;

    #[ORM\Column(type: 'datetime')]
    private $Date_et_heure;

    #[ORM\Column(type: 'string', length: 255)]
    private $Compagnie;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nom_et_Prenom;

    #[ORM\Column(type: 'string', length: 255)]
    private $Etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumReservation(): ?string
    {
        return $this->NumReservation;
    }

    public function setNumReservation(string $NumReservation): self
    {
        $this->NumReservation = $NumReservation;

        return $this;
    }

    public function getDateEtHeure(): ?\DateTimeInterface
    {
        return $this->Date_et_heure;
    }

    public function setDateEtHeure(\DateTimeInterface $Date_et_heure): self
    {
        $this->Date_et_heure = $Date_et_heure;

        return $this;
    }

    public function getCompagnie(): ?string
    {
        return $this->Compagnie;
    }

    public function setCompagnie(string $Compagnie): self
    {
        $this->Compagnie = $Compagnie;

        return $this;
    }

    public function getNomEtPrenom(): ?string
    {
        return $this->Nom_et_Prenom;
    }

    public function setNomEtPrenom(string $Nom_et_Prenom): self
    {
        $this->Nom_et_Prenom = $Nom_et_Prenom;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }
}
