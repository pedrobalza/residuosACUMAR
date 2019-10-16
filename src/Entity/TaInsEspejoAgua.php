<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaInsEspejoAgua
 *
 * @ORM\Table(name="ta_ins_espejo_agua")
 * @ORM\Entity(repositoryClass="App\Repository\TaInsEspejoAguaRepository")
 */
class TaInsEspejoAgua
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
     * @ORM\Column(name="inspector_id", type="integer", nullable=false)
     */
    private $inspectorId;

    /**
     * @var string
     *
     * @ORM\Column(name="modalidad", type="string", length=10, nullable=false)
     */
    private $modalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=10, nullable=false)
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="viento_velocidad", type="string", length=10, nullable=false)
     */
    private $vientoVelocidad;

    /**
     * @var string
     *
     * @ORM\Column(name="viento_direccion", type="string", length=2, nullable=false)
     */
    private $vientoDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="rio_altura", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $rioAltura;

    /**
     * @var string
     *
     * @ORM\Column(name="rio_marea", type="string", length=10, nullable=false)
     */
    private $rioMarea;

    /**
     * @var string
     *
     * @ORM\Column(name="inspeccion_latitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $inspeccionLatitud;

    /**
     * @var string
     *
     * @ORM\Column(name="inspeccion_longitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $inspeccionLongitud;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInspectorId(): ?int
    {
        return $this->inspectorId;
    }

    public function setInspectorId(int $inspectorId): self
    {
        $this->inspectorId = $inspectorId;

        return $this;
    }

    public function getModalidad(): ?string
    {
        return $this->modalidad;
    }

    public function setModalidad(string $modalidad): self
    {
        $this->modalidad = $modalidad;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
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

    public function getVientoVelocidad(): ?string
    {
        return $this->vientoVelocidad;
    }

    public function setVientoVelocidad(string $vientoVelocidad): self
    {
        $this->vientoVelocidad = $vientoVelocidad;

        return $this;
    }

    public function getVientoDireccion(): ?string
    {
        return $this->vientoDireccion;
    }

    public function setVientoDireccion(string $vientoDireccion): self
    {
        $this->vientoDireccion = $vientoDireccion;

        return $this;
    }

    public function getRioAltura(): ?string
    {
        return $this->rioAltura;
    }

    public function setRioAltura(string $rioAltura): self
    {
        $this->rioAltura = $rioAltura;

        return $this;
    }

    public function getRioMarea(): ?string
    {
        return $this->rioMarea;
    }

    public function setRioMarea(string $rioMarea): self
    {
        $this->rioMarea = $rioMarea;

        return $this;
    }

    public function getInspeccionLatitud(): ?string
    {
        return $this->inspeccionLatitud;
    }

    public function setInspeccionLatitud(string $inspeccionLatitud): self
    {
        $this->inspeccionLatitud = $inspeccionLatitud;

        return $this;
    }

    public function getInspeccionLongitud(): ?string
    {
        return $this->inspeccionLongitud;
    }

    public function setInspeccionLongitud(string $inspeccionLongitud): self
    {
        $this->inspeccionLongitud = $inspeccionLongitud;

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


}
