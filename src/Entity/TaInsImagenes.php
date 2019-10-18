<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * TaInsImagenes
 *
 * @ORM\Table(name="ta_ins_imagenes")
 * @ORM\Entity(repositoryClass="App\Repository\TaInsImagenesRepository")
 */
class TaInsImagenes
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
     * @var int
     *
     * @ORM\Column(name="tramo_id", type="integer", nullable=false)
     */
    private $tramoId;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=255, nullable=false)
     */
    private $ruta;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_latitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $imagenLatitud;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_longitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $imagenLongitud;

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

    public function getTramoId(): ?int
    {
        return $this->tramoId;
    }

    public function setTramoId(int $tramoId): self
    {
        $this->tramoId = $tramoId;

        return $this;
    }

    public function getRuta(): ?string
    {
        return $this->ruta;
    }

    public function setRuta(string $ruta): self
    {
        $this->ruta = $ruta;

        return $this;
    }

    public function getImagenLatitud(): ?string
    {
        return $this->imagenLatitud;
    }

    public function setImagenLatitud(string $imagenLatitud): self
    {
        $this->imagenLatitud = $imagenLatitud;

        return $this;
    }

    public function getImagenLongitud(): ?string
    {
        return $this->imagenLongitud;
    }

    public function setImagenLongitud(string $imagenLongitud): self
    {
        $this->imagenLongitud = $imagenLongitud;

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


}
