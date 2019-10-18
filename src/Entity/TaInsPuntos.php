<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * TaInsPuntos
 *
 * @ORM\Table(name="ta_ins_puntos")
 * @ORM\Entity(repositoryClass="App\Repository\TaInsPuntosRepository")
 */
class TaInsPuntos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"default","service"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="inspeccion_id", type="integer", nullable=false)
     */
    private $inspeccionId;

    /**
     * @var int
     *
     * @ORM\Column(name="punto_id", type="integer", nullable=false)
     */
    private $puntoId;

    /**
     * @var string
     *
     * @ORM\Column(name="punto_nombre", type="string", length=100, nullable=false)
     */
    private $puntoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=10, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="punto_latitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $puntoLatitud;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInspeccionId(): ?int
    {
        return $this->inspeccionId;
    }

    public function setInspeccionId(int $inspeccionId): self
    {
        $this->inspeccionId = $inspeccionId;

        return $this;
    }

    public function getPuntoId(): ?int
    {
        return $this->puntoId;
    }

    public function setPuntoId(int $puntoId): self
    {
        $this->puntoId = $puntoId;

        return $this;
    }

    public function getPuntoNombre(): ?string
    {
        return $this->puntoNombre;
    }

    public function setPuntoNombre(string $puntoNombre): self
    {
        $this->puntoNombre = $puntoNombre;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getPuntoLatitud(): ?string
    {
        return $this->puntoLatitud;
    }

    public function setPuntoLatitud(string $puntoLatitud): self
    {
        $this->puntoLatitud = $puntoLatitud;

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


}
