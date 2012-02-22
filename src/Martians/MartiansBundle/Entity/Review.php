<?php
namespace Martians\MartiansBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class Review
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @Assert\Min(0)
	*/
	protected $id;
	
	/**
	* @ORM\Id
	* @ORM\Column(type="date")
	* @Assert\Date()
	* @Assert\NotBlank()
	*/
	protected $date;
	
	/** 
	* @ORM\Column(type="string", length=100)
	* @Assert\NotBlank()
	*/
	protected $reviewer;
	
	/** @ORM\ManyToOne(targetEntity="Martians\MartiansBundle\Entity\Aircraft") */
	protected $aircraft_id;
	
    /**
     * @ORM\ManyToMany(targetEntity="Passenger")
     * @ORM\JoinTable(name="passenger_review",
     *      joinColumns={@ORM\JoinColumn(name="review_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="passenger_id", referencedColumnName="id")}
     *      )
     **/
	protected $passangers;

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
     * Set reviewer
     *
     * @param string $reviewer
     */
    public function setReviewer($reviewer)
    {
        $this->reviewer = $reviewer;
    }

    /**
     * Get reviewer
     *
     * @return string 
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
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
    public function __construct()
    {
        $this->passangers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add passangers
     *
     * @param Martians\MartiansBundle\Entity\Passenger $passangers
     */
    public function addPassenger(\Martians\MartiansBundle\Entity\Passenger $passangers)
    {
        $this->passangers[] = $passangers;
    }

    /**
     * Get passangers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPassangers()
    {
        return $this->passangers;
    }
}