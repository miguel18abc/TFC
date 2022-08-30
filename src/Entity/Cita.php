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

    #[ORM\OneToOne(mappedBy: 'cita', targetEntity: Reserva::class)]
    private $reserva;

    #[ORM\ManyToOne(inversedBy: 'citas')]
    private ?Servicios $Servicio = null;

    #[ORM\Column(length: 255)]
    private ?string $Titulo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Descripcion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha_de_inicio = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha_de_fin = null;

    #[ORM\ManyToOne(inversedBy: 'citas')]
    private ?User $User = null;
    
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

    public function getReserva(): ?Reserva
    {
        return $this->reserva;
    }

    public function setReserva(?Reserva $reserva): self
    {
        $this->reserva = $reserva;

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

    public function getTitulo(): ?string
    {
        return $this->Titulo;
    }

    public function setTitulo(string $Titulo): self
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(?string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getFechaDeInicio(): ?\DateTimeInterface
    {
        return $this->fecha_de_inicio;
    }

    public function setFechaDeInicio(?\DateTimeInterface $fecha_de_inicio): self
    {
        $this->fecha_de_inicio = $fecha_de_inicio;

        return $this;
    }

    public function getFechaDeFin(): ?\DateTimeInterface
    {
        return $this->fecha_de_fin;
    }

    public function setFechaDeFin(?\DateTimeInterface $fecha_de_fin): self
    {
        $this->fecha_de_fin = $fecha_de_fin;

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

}
