<?php
namespace Martians\MartiansBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class Passenger
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @Assert\Min(0)
	*/
	protected $id;
	
	/** 
	* @ORM\Column(type="string", length=100)
	* @Assert\NotBlank()
	*/
	protected $name;
	
	/** 
	*@ORM\ManyToOne(targetEntity="Martians\MartiansBundle\Entity\Aircraft") 
	*/
	protected $aircraft_id;

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
     * Set aircraft_id
     *
     * @param Martians\MartiansBundle\Entity\Aircraft $aircraftId
     */
    public function setAircraftId(\Martians\MartiansBundle\Entity\Aircraft $aircraftId)
    {
        $this->aircraft_id = $aircraftId;
    }

    /**
     * Get aircraft_id
     *
     * @return Martians\MartiansBundle\Entity\Aircraft 
     */
    public function getAircraftId()
    {
        return $this->aircraft_id;
    }
}