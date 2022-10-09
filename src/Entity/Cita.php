<?php

namespace App\Entity;

use App\Repository\CitaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CitaRepository::class)]
class Cita
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $fecha;

    #[ORM\Column(type: 'time')]
    private $hora;

    #[ORM\ManyToOne(inversedBy: 'citas')]
    private ?Servicios $Servicio = null;

    #[ORM\ManyToOne(inversedBy: 'citas')]
    private ?User $User = null;

    #[ORM\Column]
    private ?bool $disabled = null;

    #[ORM\OneToOne(mappedBy: 'cita', targetEntity: Reserva::class)]
    private ?Reserva $Reserva = null;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    public function getServicio(): ?Servicios
    {
        return $this->Servicio;
    }

    public function setServicio(?Servicios $Servicio): self
    {
        $this->Servicio = $Servicio;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function isDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }

    public function getReserva(): ?Reserva
    {
        return $this->Reserva;
    }

    public function setReserva(?Reserva $Reserva): self
    {
        $this->Reserva = $Reserva;

        return $this;
    }

}
