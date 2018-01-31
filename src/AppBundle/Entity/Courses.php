<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courses
 *
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoursesRepository")
 */
class Courses
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
     * @ORM\Column(name="cou_Distance", type="integer")
     */
    private $distance;


    /**
     * Get id
     *
     * @return int
     */
    
     /**
     * @ORM\ManyToOne(targetEntity="Chauffeurs", inversedBy="Courses")
     * @ORM\JoinColumn(name="Chauffeurs_id", referencedColumnName="id")
     */
    
    private $Chauffeurs;



    public function getId()
    {
        return $this->id;
    }

    /**
     * Set distance
     *
     * @param integer $distance
     *
     * @return Courses
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }
}
