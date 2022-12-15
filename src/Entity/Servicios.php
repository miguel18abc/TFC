<?php

namespace App\Entity;

use App\Repository\ServiciosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiciosRepository::class)]
class Servicios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\OneToMany(mappedBy: 'servicios', targetEntity: Calendar::class)]
    private Collection $calendars;

    #[ORM\OneToMany(mappedBy: 'servicios', targetEntity: Tutor::class)]
    private Collection $tutor;

    public function __construct()
    {
        $this->citas = new ArrayCollection();
        $this->calendars = new ArrayCollection();
        $this->tutor = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    /**
     * @return Collection<int, Calendar>
     */
    public function getCalendars(): Collection
    {
        return $this->calendars;
    }

    public function addCalendar(Calendar $calendar): self
    {
        if (!$this->calendars->contains($calendar)) {
            $this->calendars->add($calendar);
            $calendar->setServicios($this);
        }

        return $this;
    }

    public function removeCalendar(Calendar $calendar): self
    {
        if ($this->calendars->removeElement($calendar)) {
            // set the owning side to null (unless already changed)
            if ($calendar->getServicios() === $this) {
                $calendar->setServicios(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tutor>
     */
    public function getTutor(): Collection
    {
        return $this->tutor;
    }

    public function addTutor(Tutor $tutor): self
    {
        if (!$this->tutor->contains($tutor)) {
            $this->tutor->add($tutor);
            $tutor->setServicios($this);
        }

        return $this;
    }

    public function removeTutor(Tutor $tutor): self
    {
        if ($this->tutor->removeElement($tutor)) {
            // set the owning side to null (unless already changed)
            if ($tutor->getServicios() === $this) {
                $tutor->setServicios(null);
            }
        }

        return $this;
    }

}
