<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acta_presidencial
 *
 * @ORM\Table(name="acta_presidencial")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Acta_presidencialRepository")
 */
class Acta_presidencial
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="fmln", type="integer", nullable=true)
     */
    private $fmln;

    /**
     * @var int
     *
     * @ORM\Column(name="ds", type="integer", nullable=true)
     */
    private $ds;

    /**
     * @var int
     *
     * @ORM\Column(name="pdc", type="integer", nullable=true)
     */
    private $pdc;

    /**
     * @var int
     *
     * @ORM\Column(name="pcn", type="integer", nullable=true)
     */
    private $pcn;



    /**
     * @var int
     *
     * @ORM\Column(name="gana", type="integer", nullable=true)
     */
    private $gana;

  

    /**
     * @var int
     *
     * @ORM\Column(name="vamos", type="integer", nullable=true)
     */
    private $vamos;

    /**
     * @var int
     *
     * @ORM\Column(name="arena", type="integer", nullable=true)
     */
    private $arena;
    
    /**
     * @var int
     *
     * @ORM\Column(name="coalicion", type="integer", nullable=true)
     */
    private $coalicion;

    /**
     * @var int
     *
     * @ORM\Column(name="sobrantes", type="integer", nullable=true)
     */
    private $sobrantes;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="escrutados", type="integer", nullable=true)
     */
    private $escrutados;

    /**
     * @var int
     *
     * @ORM\Column(name="inutilizadas", type="integer", nullable=true)
     */
    private $inutilizadas;

    /**
     * @var int
     *
     * @ORM\Column(name="faltantes", type="integer", nullable=true)
     */
    private $faltantes;

    /**
     * @var int
     *
     * @ORM\Column(name="nulo", type="integer", nullable=true)
     */
    private $nulo;

    /**
     * @var int
     *
     * @ORM\Column(name="impugnados", type="integer", nullable=true)
     */
    private $impugnados;

    /**
     * @var int
     *
     * @ORM\Column(name="abstenciones", type="integer", nullable=true)
     */
    private $abstenciones;

    /**
     * @var int
     *
     * @ORM\Column(name="entregados", type="integer", nullable=true)
     */
    private $entregados;


    /**
     * @var int
     *
     * @ORM\Column(name="municipioid", type="integer", nullable=true)
     */
    private $municipioid;

    /**
     * @var string
     *
     * @ORM\Column(name="useradic", type="string", length=255, nullable=true)
     */
    private $useradic;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaadic", type="string", length=255, nullable=true)
     */
    private $fechaadic;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Centrovotacion")
     * @ORM\JoinColumn(name="centrovotacion", referencedColumnName="id")
     */
    private $centrovotacion;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Jrv")
     * @ORM\JoinColumn (name="jrv", referencedColumnName="id")
     */
    private $jrv;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="deviceid", type="string", length=555, nullable=true)
     */
    private $deviceid;

    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fmln
     *
     * @param integer $fmln
     *
     * @return Acta_presidencial
     */
    public function setFmln($fmln)
    {
        $this->fmln = $fmln;

        return $this;
    }

    /**
     * Get fmln
     *
     * @return int
     */
    public function getFmln()
    {
        return $this->fmln;
    }

    /**
     * Set ds
     *
     * @param integer $ds
     *
     * @return Acta_presidencial
     */
    public function setDs($ds)
    {
        $this->ds = $ds;

        return $this;
    }

    /**
     * Get ds
     *
     * @return int
     */
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * Set pdc
     *
     * @param integer $pdc
     *
     * @return Acta_presidencial
     */
    public function setPdc($pdc)
    {
        $this->pdc = $pdc;

        return $this;
    }

    /**
     * Get pdc
     *
     * @return int
     */
    public function getPdc()
    {
        return $this->pdc;
    }

    /**
     * Set pcn
     *
     * @param integer $pcn
     *
     * @return Acta_presidencial
     */
    public function setPcn($pcn)
    {
        $this->pcn = $pcn;

        return $this;
    }

    /**
     * Get pcn
     *
     * @return int
     */
    public function getPcn()
    {
        return $this->pcn;
    }

    

    /**
     * Set gana
     *
     * @param integer $gana
     *
     * @return Acta_presidencial
     */
    public function setGana($gana)
    {
        $this->gana = $gana;

        return $this;
    }

    /**
     * Get gana
     *
     * @return int
     */
    public function getGana()
    {
        return $this->gana;
    }


    /**
     * Set vamos
     *
     * @param integer $vamos
     *
     * @return Acta_presidencial
     */
    public function setVamos($vamos)
    {
        $this->vamos = $vamos;

        return $this;
    }

    /**
     * Get vamos
     *
     * @return int
     */
    public function getVamos()
    {
        return $this->vamos;
    }

    /**
     * Set arena
     *
     * @param integer $arena
     *
     * @return Acta_presidencial
     */
    public function setArena($arena)
    {
        $this->arena = $arena;

        return $this;
    }

    /**
     * Get arena
     *
     * @return int
     */
    public function getArena()
    {
        return $this->arena;
    }
    
    
    
    /**
     * Set coalicion
     *
     * @param integer $coalicion
     *
     * @return Acta_presidencial
     */
    public function setCoalicion($coalicion)
    {
        $this->coalicion = $coalicion;

        return $this;
    }

    /**
     * Get coalicion
     *
     * @return int
     */
    public function getCoalicion()
    {
        return $this->coalicion;
    }

    /**
     * Set sobrantes
     *
     * @param integer $sobrantes
     *
     * @return Acta_presidencial
     */
    public function setSobrantes($sobrantes)
    {
        $this->sobrantes = $sobrantes;

        return $this;
    }

    /**
     * Get sobrantes
     *
     * @return int
     */
    public function getSobrantes()
    {
        return $this->sobrantes;
    }

    /**
     * Set inutilizadas
     *
     * @param integer $inutilizadas
     *
     * @return Acta_presidencial
     */
    public function setInutilizadas($inutilizadas)
    {
        $this->inutilizadas = $inutilizadas;

        return $this;
    }

    /**
     * Get inutilizadas
     *
     * @return int
     */
    public function getInutilizadas()
    {
        return $this->inutilizadas;
    }

    /**
     * Set faltantes
     *
     * @param integer $faltantes
     *
     * @return Acta_presidencial
     */
    public function setFaltantes($faltantes)
    {
        $this->faltantes = $faltantes;

        return $this;
    }

    /**
     * Get faltantes
     *
     * @return int
     */
    public function getFaltantes()
    {
        return $this->faltantes;
    }

    /**
     * Set nulo
     *
     * @param integer $nulo
     *
     * @return Acta_presidencial
     */
    public function setNulo($nulo)
    {
        $this->nulo = $nulo;

        return $this;
    }

    /**
     * Get nulo
     *
     * @return int
     */
    public function getNulo()
    {
        return $this->nulo;
    }

    /**
     * Set impugnados
     *
     * @param integer $impugnados
     *
     * @return Acta_presidencial
     */
    public function setImpugnados($impugnados)
    {
        $this->impugnados = $impugnados;

        return $this;
    }

    /**
     * Get impugnados
     *
     * @return int
     */
    public function getImpugnados()
    {
        return $this->impugnados;
    }

    /**
     * Set abstenciones
     *
     * @param integer $abstenciones
     *
     * @return Acta_presidencial
     */
    public function setAbstenciones($abstenciones)
    {
        $this->abstenciones = $abstenciones;

        return $this;
    }

    /**
     * Get abstenciones
     *
     * @return int
     */
    public function getAbstenciones()
    {
        return $this->abstenciones;
    }

    /**
     * Set entregados
     *
     * @param integer $entregados
     *
     * @return Acta_presidencial
     */
    public function setEntregados($entregados)
    {
        $this->entregados = $entregados;

        return $this;
    }

    /**
     * Get entregados
     *
     * @return int
     */
    public function getEntregados()
    {
        return $this->entregados;
    }



    /**
     * Set municipioid
     *
     * @param integer $municipioid
     *
     * @return Acta_presidencial
     */
    public function setMunicipioid($municipioid)
    {
        $this->municipioid = $municipioid;

        return $this;
    }

    /**
     * Get municipioid
     *
     * @return int
     */
    public function getMunicipioid()
    {
        return $this->municipioid;
    }

    /**
     * Set useradic
     *
     * @param string $useradic
     *
     * @return Acta_presidencial
     */
    public function setUseradic($useradic)
    {
        $this->useradic = $useradic;

        return $this;
    }

    /**
     * Get useradic
     *
     * @return string
     */
    public function getUseradic()
    {
        return $this->useradic;
    }

    /**
     * Set fechaadic
     *
     * @param string $fechaadic
     *
     * @return Acta_presidencial
     */
    public function setFechaadic($fechaadic)
    {
        $this->fechaadic = $fechaadic;

        return $this;
    }

    /**
     * Get fechaadic
     *
     * @return string
     */
    public function getFechaadic()
    {
        return $this->fechaadic;
    }

    /**
     * Set jrv
     *
     * @param \AppBundle\Entity\Jrv $jrv
     *
     * @return Acta_presidencial
     */
    public function setJrv(\AppBundle\Entity\Jrv $jrv)
    {
        $this->jrv = $jrv;

        return $this;
    }

    /**
     * Get jrv
     *
     * @return integer
     */
    public function getJrv()
    {
        return $this->jrv;
    }

    /**
     * Set centrovotacion
     *
     * @param integer $centrovotacion
     *
     * @return Acta_presidencial
     */
    public function setCentrovotacion($centrovotacion)
    {
        $this->centrovotacion = $centrovotacion;

        return $this;
    }

    /**
     * Get centrovotacion
     *
     * @return integer
     */
    public function getCentrovotacion()
    {
        return $this->centrovotacion;
    }
    
    
      /**
     * Set escrutados
     *
     * @param integer $escrutados
     *
     * @return Acta_presidencial
     */
    public function setEscrutados($escrutados)
    {
        $this->escrutados = $escrutados;

        return $this;
    }

    /**
     * Get escrutados
     *
     * @return int
     */
    public function getEscrutados()
    {
        return $this->escrutados;
    }
    
    
    /**
     * Set deviceid
     *
     * @param string $deviceid
     *
     * @return Acta_presidencial
     */
    public function setDeviceid($deviceid)
    {
        $this->deviceid = $deviceid;

        return $this;
    }

    /**
     * Get deviceid
     *
     * @return string
     */
    public function getDeviceid()
    {
        return $this->deviceid;
    }

}
