<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * TaGenTramos
 *
 * @ORM\Table(name="ta_gen_tramos")
 * @ORM\Entity(repositoryClass="App\Repository\TaGenTramosRepository")
 */
class TaGenTramos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"service"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     * @Groups({"service"})
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetime", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="auditor_alta", type="string", length=10, nullable=false)
     */
    private $auditorAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_actualizacion", type="datetime", nullable=false)
     */
    private $fechaActualizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="auditor_actualizacion", type="string", length=10, nullable=false)
     */
    private $auditorActualizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_baja", type="datetime", nullable=false)
     */
    private $fechaBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="auditor_baja", type="string", length=10, nullable=false)
     */
    private $auditorBaja;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFechaAlta(): ?\DateTimeInterface
    {
        return $this->fechaAlta;
    }

    public function setFechaAlta(\DateTimeInterface $fechaAlta): self
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    public function getAuditorAlta(): ?string
    {
        return $this->auditorAlta;
    }

    public function setAuditorAlta(string $auditorAlta): self
    {
        $this->auditorAlta = $auditorAlta;

        return $this;
    }

    public function getFechaActualizacion(): ?\DateTimeInterface
    {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion(\DateTimeInterface $fechaActualizacion): self
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    public function getAuditorActualizacion(): ?string
    {
        return $this->auditorActualizacion;
    }

    public function setAuditorActualizacion(string $auditorActualizacion): self
    {
        $this->auditorActualizacion = $auditorActualizacion;

        return $this;
    }

    public function getFechaBaja(): ?\DateTimeInterface
    {
        return $this->fechaBaja;
    }

    public function setFechaBaja(\DateTimeInterface $fechaBaja): self
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    public function getAuditorBaja(): ?string
    {
        return $this->auditorBaja;
    }

    public function setAuditorBaja(string $auditorBaja): self
    {
        $this->auditorBaja = $auditorBaja;

        return $this;
    }


}
