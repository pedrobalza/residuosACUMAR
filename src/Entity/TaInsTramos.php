<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * TaInsTramos
 *
 * @ORM\Table(name="ta_ins_tramos")
 * @ORM\Entity(repositoryClass="App\Repository\TaInsTramosRepository")
 */
class TaInsTramos
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
     * @ORM\Column(name="tramos_id", type="integer", nullable=false)
     */
    private $tramosId;

    /**
     * @var int
     *
     * @ORM\Column(name="extraccion_rsf", type="smallint", nullable=false)
     */
    private $extraccionRsf;

    /**
     * @var int
     *
     * @ORM\Column(name="transporte_rsf", type="smallint", nullable=false)
     */
    private $transporteRsf;

    /**
     * @var int
     *
     * @ORM\Column(name="extraccion_nfu", type="smallint", nullable=false)
     */
    private $extraccionNfu;

    /**
     * @var int
     *
     * @ORM\Column(name="extraccion_solidos", type="smallint", nullable=false)
     */
    private $extraccionSolidos;

    /**
     * @var int
     *
     * @ORM\Column(name="control_vuelcos", type="smallint", nullable=false)
     */
    private $controlVuelcos;

    /**
     * @var string
     *
     * @ORM\Column(name="otras_tareas", type="string", length=255, nullable=false)
     */
    private $otrasTareas;

    /**
     * @var string
     *
     * @ORM\Column(name="otras_tareas_observaciones", type="string", length=255, nullable=false)
     */
    private $otrasTareasObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="nave_impacto", type="smallint", nullable=false)
     */
    private $naveImpacto;

    /**
     * @var string
     *
     * @ORM\Column(name="nave_impacto_observaciones", type="string", length=255, nullable=false)
     */
    private $naveImpactoObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="nave_charito_iii", type="smallint", nullable=false)
     */
    private $naveCharitoIii;

    /**
     * @var string
     *
     * @ORM\Column(name="nave_charito_iii_observaciones", type="string", length=255, nullable=false)
     */
    private $naveCharitoIiiObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="nave_data_travel_i", type="smallint", nullable=false)
     */
    private $naveDataTravelI;

    /**
     * @var string
     *
     * @ORM\Column(name="nave_data_travel_i_observaciones", type="string", length=255, nullable=false)
     */
    private $naveDataTravelIObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="nave_data_travel_vi", type="smallint", nullable=false)
     */
    private $naveDataTravelVi;

    /**
     * @var string
     *
     * @ORM\Column(name="nave_data_travel_vi_observaciones", type="string", length=255, nullable=false)
     */
    private $naveDataTravelViObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="nave_don_raul", type="smallint", nullable=false)
     */
    private $naveDonRaul;

    /**
     * @var string
     *
     * @ORM\Column(name="nave_don_raul_observaciones", type="string", length=255, nullable=false)
     */
    private $naveDonRaulObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="nave_don_tomas", type="smallint", nullable=false)
     */
    private $naveDonTomas;

    /**
     * @var string
     *
     * @ORM\Column(name="nave_don_tomas_observaciones", type="string", length=255, nullable=false)
     */
    private $naveDonTomasObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="nave_artasa_viii", type="smallint", nullable=false)
     */
    private $naveArtasaViii;

    /**
     * @var string
     *
     * @ORM\Column(name="nave_artasa_viii_observaciones", type="string", length=255, nullable=false)
     */
    private $naveArtasaViiiObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="obrador_guinche", type="smallint", nullable=false)
     */
    private $obradorGuinche;

    /**
     * @var string
     *
     * @ORM\Column(name="obrador_guinche_observaciones", type="string", length=255, nullable=false)
     */
    private $obradorGuincheObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="obrador_bateas", type="smallint", nullable=false)
     */
    private $obradorBateas;

    /**
     * @var string
     *
     * @ORM\Column(name="obrador_bateas_observaciones", type="string", length=255, nullable=false)
     */
    private $obradorBateasObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="obrador_servicios", type="smallint", nullable=false)
     */
    private $obradorServicios;

    /**
     * @var string
     *
     * @ORM\Column(name="obrador_servicios_observaciones", type="string", length=255, nullable=false)
     */
    private $obradorServiciosObservaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="obrador_otros", type="smallint", nullable=false)
     */
    private $obradorOtros;

    /**
     * @var string
     *
     * @ORM\Column(name="obrador_otros_observaciones", type="string", length=255, nullable=false)
     */
    private $obradorOtrosObservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="tramo_latitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $tramoLatitud;

    /**
     * @var string
     *
     * @ORM\Column(name="tramo_longitud", type="decimal", precision=11, scale=7, nullable=false)
     */
    private $tramoLongitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetime", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="audito_alta", type="string", length=255, nullable=false)
     */
    private $auditoAlta;

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

    public function getTramosId(): ?int
    {
        return $this->tramosId;
    }

    public function setTramosId(int $tramosId): self
    {
        $this->tramosId = $tramosId;

        return $this;
    }

    public function getExtraccionRsf(): ?int
    {
        return $this->extraccionRsf;
    }

    public function setExtraccionRsf(int $extraccionRsf): self
    {
        $this->extraccionRsf = $extraccionRsf;

        return $this;
    }

    public function getTransporteRsf(): ?int
    {
        return $this->transporteRsf;
    }

    public function setTransporteRsf(int $transporteRsf): self
    {
        $this->transporteRsf = $transporteRsf;

        return $this;
    }

    public function getExtraccionNfu(): ?int
    {
        return $this->extraccionNfu;
    }

    public function setExtraccionNfu(int $extraccionNfu): self
    {
        $this->extraccionNfu = $extraccionNfu;

        return $this;
    }

    public function getExtraccionSolidos(): ?int
    {
        return $this->extraccionSolidos;
    }

    public function setExtraccionSolidos(int $extraccionSolidos): self
    {
        $this->extraccionSolidos = $extraccionSolidos;

        return $this;
    }

    public function getControlVuelcos(): ?int
    {
        return $this->controlVuelcos;
    }

    public function setControlVuelcos(int $controlVuelcos): self
    {
        $this->controlVuelcos = $controlVuelcos;

        return $this;
    }

    public function getOtrasTareas(): ?string
    {
        return $this->otrasTareas;
    }

    public function setOtrasTareas(string $otrasTareas): self
    {
        $this->otrasTareas = $otrasTareas;

        return $this;
    }

    public function getOtrasTareasObservaciones(): ?string
    {
        return $this->otrasTareasObservaciones;
    }

    public function setOtrasTareasObservaciones(string $otrasTareasObservaciones): self
    {
        $this->otrasTareasObservaciones = $otrasTareasObservaciones;

        return $this;
    }

    public function getNaveImpacto(): ?int
    {
        return $this->naveImpacto;
    }

    public function setNaveImpacto(int $naveImpacto): self
    {
        $this->naveImpacto = $naveImpacto;

        return $this;
    }

    public function getNaveImpactoObservaciones(): ?string
    {
        return $this->naveImpactoObservaciones;
    }

    public function setNaveImpactoObservaciones(string $naveImpactoObservaciones): self
    {
        $this->naveImpactoObservaciones = $naveImpactoObservaciones;

        return $this;
    }

    public function getNaveCharitoIii(): ?int
    {
        return $this->naveCharitoIii;
    }

    public function setNaveCharitoIii(int $naveCharitoIii): self
    {
        $this->naveCharitoIii = $naveCharitoIii;

        return $this;
    }

    public function getNaveCharitoIiiObservaciones(): ?string
    {
        return $this->naveCharitoIiiObservaciones;
    }

    public function setNaveCharitoIiiObservaciones(string $naveCharitoIiiObservaciones): self
    {
        $this->naveCharitoIiiObservaciones = $naveCharitoIiiObservaciones;

        return $this;
    }

    public function getNaveDataTravelI(): ?int
    {
        return $this->naveDataTravelI;
    }

    public function setNaveDataTravelI(int $naveDataTravelI): self
    {
        $this->naveDataTravelI = $naveDataTravelI;

        return $this;
    }

    public function getNaveDataTravelIObservaciones(): ?string
    {
        return $this->naveDataTravelIObservaciones;
    }

    public function setNaveDataTravelIObservaciones(string $naveDataTravelIObservaciones): self
    {
        $this->naveDataTravelIObservaciones = $naveDataTravelIObservaciones;

        return $this;
    }

    public function getNaveDataTravelVi(): ?int
    {
        return $this->naveDataTravelVi;
    }

    public function setNaveDataTravelVi(int $naveDataTravelVi): self
    {
        $this->naveDataTravelVi = $naveDataTravelVi;

        return $this;
    }

    public function getNaveDataTravelViObservaciones(): ?string
    {
        return $this->naveDataTravelViObservaciones;
    }

    public function setNaveDataTravelViObservaciones(string $naveDataTravelViObservaciones): self
    {
        $this->naveDataTravelViObservaciones = $naveDataTravelViObservaciones;

        return $this;
    }

    public function getNaveDonRaul(): ?int
    {
        return $this->naveDonRaul;
    }

    public function setNaveDonRaul(int $naveDonRaul): self
    {
        $this->naveDonRaul = $naveDonRaul;

        return $this;
    }

    public function getNaveDonRaulObservaciones(): ?string
    {
        return $this->naveDonRaulObservaciones;
    }

    public function setNaveDonRaulObservaciones(string $naveDonRaulObservaciones): self
    {
        $this->naveDonRaulObservaciones = $naveDonRaulObservaciones;

        return $this;
    }

    public function getNaveDonTomas(): ?int
    {
        return $this->naveDonTomas;
    }

    public function setNaveDonTomas(int $naveDonTomas): self
    {
        $this->naveDonTomas = $naveDonTomas;

        return $this;
    }

    public function getNaveDonTomasObservaciones(): ?string
    {
        return $this->naveDonTomasObservaciones;
    }

    public function setNaveDonTomasObservaciones(string $naveDonTomasObservaciones): self
    {
        $this->naveDonTomasObservaciones = $naveDonTomasObservaciones;

        return $this;
    }

    public function getNaveArtasaViii(): ?int
    {
        return $this->naveArtasaViii;
    }

    public function setNaveArtasaViii(int $naveArtasaViii): self
    {
        $this->naveArtasaViii = $naveArtasaViii;

        return $this;
    }

    public function getNaveArtasaViiiObservaciones(): ?string
    {
        return $this->naveArtasaViiiObservaciones;
    }

    public function setNaveArtasaViiiObservaciones(string $naveArtasaViiiObservaciones): self
    {
        $this->naveArtasaViiiObservaciones = $naveArtasaViiiObservaciones;

        return $this;
    }

    public function getObradorGuinche(): ?int
    {
        return $this->obradorGuinche;
    }

    public function setObradorGuinche(int $obradorGuinche): self
    {
        $this->obradorGuinche = $obradorGuinche;

        return $this;
    }

    public function getObradorGuincheObservaciones(): ?string
    {
        return $this->obradorGuincheObservaciones;
    }

    public function setObradorGuincheObservaciones(string $obradorGuincheObservaciones): self
    {
        $this->obradorGuincheObservaciones = $obradorGuincheObservaciones;

        return $this;
    }

    public function getObradorBateas(): ?int
    {
        return $this->obradorBateas;
    }

    public function setObradorBateas(int $obradorBateas): self
    {
        $this->obradorBateas = $obradorBateas;

        return $this;
    }

    public function getObradorBateasObservaciones(): ?string
    {
        return $this->obradorBateasObservaciones;
    }

    public function setObradorBateasObservaciones(string $obradorBateasObservaciones): self
    {
        $this->obradorBateasObservaciones = $obradorBateasObservaciones;

        return $this;
    }

    public function getObradorServicios(): ?int
    {
        return $this->obradorServicios;
    }

    public function setObradorServicios(int $obradorServicios): self
    {
        $this->obradorServicios = $obradorServicios;

        return $this;
    }

    public function getObradorServiciosObservaciones(): ?string
    {
        return $this->obradorServiciosObservaciones;
    }

    public function setObradorServiciosObservaciones(string $obradorServiciosObservaciones): self
    {
        $this->obradorServiciosObservaciones = $obradorServiciosObservaciones;

        return $this;
    }

    public function getObradorOtros(): ?int
    {
        return $this->obradorOtros;
    }

    public function setObradorOtros(int $obradorOtros): self
    {
        $this->obradorOtros = $obradorOtros;

        return $this;
    }

    public function getObradorOtrosObservaciones(): ?string
    {
        return $this->obradorOtrosObservaciones;
    }

    public function setObradorOtrosObservaciones(string $obradorOtrosObservaciones): self
    {
        $this->obradorOtrosObservaciones = $obradorOtrosObservaciones;

        return $this;
    }

    public function getTramoLatitud(): ?string
    {
        return $this->tramoLatitud;
    }

    public function setTramoLatitud(string $tramoLatitud): self
    {
        $this->tramoLatitud = $tramoLatitud;

        return $this;
    }

    public function getTramoLongitud(): ?string
    {
        return $this->tramoLongitud;
    }

    public function setTramoLongitud(string $tramoLongitud): self
    {
        $this->tramoLongitud = $tramoLongitud;

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

    public function getAuditoAlta(): ?string
    {
        return $this->auditoAlta;
    }

    public function setAuditoAlta(string $auditoAlta): self
    {
        $this->auditoAlta = $auditoAlta;

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
