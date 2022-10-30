<?php

namespace App\Entity;

use App\Repository\ReservaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservaRepository::class)]
class Reserva
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Username = null;

    #[ORM\OneToOne(inversedBy: 'Reserva', targetEntity: Cita::class)]
    private ?Cita $cita = null;

    #[ORM\ManyToOne(inversedBy: 'reservas')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getCita(): ?Cita
    {
        return $this->cita;
    }

    public function setCita(?Cita $cita): self
    {
        // unset the owning side of the relation if necessary
        if ($cita === null && $this->cita !== null) {
            $this->cita->setReserva(null);
        }

        // set the owning side of the relation if necessary
        if ($cita !== null && $cita->getReserva() !== $this) {
            $cita->setReserva($this);
        }

        $this->cita = $cita;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
