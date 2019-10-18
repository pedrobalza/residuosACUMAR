<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * TaGenTramosPuntos
 *
 * @ORM\Table(name="ta_gen_tramos_puntos")
 * @ORM\Entity(repositoryClass="App\Repository\TaGenTramosPuntosRepository")
 */
class TaGenTramosPuntos
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
     * @ORM\Column(name="tramo_id", type="integer", nullable=false)
     */
    private $tramoId;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     * @Groups({"default","service"})
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="punto_latitud", type="decimal", precision=11, scale=7, nullable=true)
     */
    private $puntoLatitud;

    /**
     * @var string
     *
     * @ORM\Column(name="punto_longitud", type="decimal", precision=11, scale=7, nullable=true)
     */
    private $puntoLongitud;

    /**
     * @var int
     *
     * @ORM\Column(name="ad_hoc", type="integer", nullable=true)
     * @Groups({"default","service"})
     */
    private $adHoc;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_alta", type="string", length=50, nullable=true)
     * @Groups({"default","service"})
     */
    private $fechaAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="auditor_alta", type="string", length=50, nullable=true)
     * @Groups({"default","service"})
     */
    private $auditorAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_actualizacion", type="string", length=50, nullable=true)
     * @Groups({"default","service"})
     */
    private $fechaActualizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="auditor_actualizacion", type="string", length=50, nullable=true)
     * @Groups({"default","service"})
     */
    private $auditorActualizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_baja", type="string", length=50, nullable=true)
     * @Groups({"default","service"})
     */
    private $fechaBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="auditor_baja", type="string", length=50, nullable=true)
     * @Groups({"default","service"})
     */
    private $auditorBaja;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

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

    public function getPuntoLongitud(): ?string
    {
        return $this->puntoLongitud;
    }

    public function setPuntoLongitud(string $puntoLongitud): self
    {
        $this->puntoLongitud = $puntoLongitud;

        return $this;
    }

    public function getAdHoc(): ?int
    {
        return $this->adHoc;
    }

    public function setAdHoc(int $adHoc): self
    {
        $this->adHoc = $adHoc;

        return $this;
    }

    public function getFechaAlta(): ?string
    {
        return $this->fechaAlta;
    }

    public function setFechaAlta(string $fechaAlta): self
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

    public function getFechaActualizacion(): ?string
    {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion(string $fechaActualizacion): self
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

    public function getFechaBaja(): ?string
    {
        return $this->fechaBaja;
    }

    public function setFechaBaja(string $fechaBaja): self
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
