<?php
namespace Martians\MartiansBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class AirCraft
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	*/
	protected $id;
	
	/** @ORM\Column(type="string", length=100) */
	protected $name;
	
	/** @ORM\Column(type="integer") */
	protected $max_passenger;
	
	/**
	* @ORM\ManyToOne(targetEntity="Martians\MartiansBundle\Entity\Mothership")
	* @ORM\JoinColumn(name="mothership_origin_id", referencedColumnName="id")
	*/
	protected $mothership_origin_id;
	
	/**
	* @ORM\ManyToOne(targetEntity="Martians\MartiansBundle\Entity\Mothership")
	* @ORM\JoinColumn(name="mothership_destination_id", referencedColumnName="id")
	*/
	protected $mothership_destination_id;

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set max_passenger
     *
     * @param integer $maxPassenger
     */
    public function setMaxPassenger($maxPassenger)
    {
        $this->max_passenger = $maxPassenger;
    }

    /**
     * Get max_passenger
     *
     * @return integer 
     */
    public function getMaxPassenger()
    {
        return $this->max_passenger;
    }

    /**
     * Set mothership_origin_id
     *
     * @param Martians\MartiansBundel\Entity\Mothership $mothershipOriginId
     */
    public function setMothershipOriginId(\Martians\MartiansBundel\Entity\Mothership $mothershipOriginId)
    {
        $this->mothership_origin_id = $mothershipOriginId;
    }

    /**
     * Get mothership_origin_id
     *
     * @return Martians\MartiansBundel\Entity\Mothership 
     */
    public function getMothershipOriginId()
    {
        return $this->mothership_origin_id;
    }

    /**
     * Set mothership_destination_id
     *
     * @param Martians\MartiansBundel\Entity\Mothership $mothershipDestinationId
     */
    public function setMothershipDestinationId(\Martians\MartiansBundel\Entity\Mothership $mothershipDestinationId)
    {
        $this->mothership_destination_id = $mothershipDestinationId;
    }

    /**
     * Get mothership_destination_id
     *
     * @return Martians\MartiansBundel\Entity\Mothership 
     */
    public function getMothershipDestinationId()
    {
        return $this->mothership_destination_id;
    }
}