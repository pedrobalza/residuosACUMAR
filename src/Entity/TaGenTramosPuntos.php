<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaGenTramosPuntos
 *
 * @ORM\Table(name="ta_gen_tramos_puntos")
 * @ORM\Entity(repositoryClass="App\Repository\TaGenTramosPuntossRepository")
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
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="punto_latitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $puntoLatitud;

    /**
     * @var string
     *
     * @ORM\Column(name="punto_longitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $puntoLongitud;

    /**
     * @var int
     *
     * @ORM\Column(name="ad_hoc", type="integer", nullable=false)
     */
    private $adHoc;

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
     * @var \DateTime
     *
     * @ORM\Column(name="auditor_actualizacion", type="datetime", nullable=false)
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

    public function getAuditorActualizacion(): ?\DateTimeInterface
    {
        return $this->auditorActualizacion;
    }

    public function setAuditorActualizacion(\DateTimeInterface $auditorActualizacion): self
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
