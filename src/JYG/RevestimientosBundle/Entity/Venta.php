<?php

namespace JYG\RevestimientosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Venta
 *
 * @ORM\Table(name="venta")
 * @ORM\Entity(repositoryClass="JYG\RevestimientosBundle\Entity\VentaRepository")
 * @ORM\Entity
 */
class Venta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="identificador")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $comprador;

    /**
     * @ORM\OneToMany(targetEntity="Material", mappedBy="venta")
     */
    private $materiales;   

    /**
     * @var \float
     *
     * @ORM\Column(name="cantmatvendido", type="float")
     */
    private $cantmatvendido;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Venta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set comprador
     *
     * @param \JYG\RevestimientosBundle\Entity\Cliente $comprador
     * @return Venta
     */
    public function setComprador(\JYG\RevestimientosBundle\Entity\Cliente $comprador = null)
    {
        $this->comprador = $comprador;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->materiales = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fecha = new \DateTime();
    }

    /**
     * Add materiales
     *
     * @param \JYG\RevestimientosBundle\Entity\Material $materiales
     * @return Venta
     */
    public function addMateriale(\JYG\RevestimientosBundle\Entity\Material $materiales)
    {
        $this->materiales[] = $materiales;
    }

    /**
     * Get comprador
     *
     * @return \JYG\RevestimientosBundle\Entity\Cliente 
     */
    public function getComprador()
    {
        return $this->comprador;
    }

    public function __toString()
    {
        return $this->comprador->getNombre();
    }

     /**
     * Remove materiales
     *
     * @param \JYG\RevestimientosBundle\Entity\Material $materiales
     */
    public function removeMateriale(\JYG\RevestimientosBundle\Entity\Material $materiales)
    {
        $this->materiales->removeElement($materiales);
    }

    /**
     * Get materiales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMateriales()
    {
        return $this->materiales;
    }

    /**
     * Set cantmatvendido
     *
     * @param float $cantmatvendido
     * @return Venta
     */
    public function setCantmatvendido($cantmatvendido)
    {
        $this->cantmatvendido = $cantmatvendido;
    
        return $this;
    }

    /**
     * Get cantmatvendido
     *
     * @return float 
     */
    public function getCantmatvendido()
    {
        return $this->cantmatvendido;
    }
}
