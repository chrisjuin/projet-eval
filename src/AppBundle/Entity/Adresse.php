<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adr_adresse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdresseRepository")
 */
class Adresse
{
    /**
     * @var int
     *
     * @ORM\Column(name="adr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_street", type="string", length=255, unique=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_city", type="string", length=60, unique=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_arriver", type="string", length=255, unique=true)
     */
    private $arriver;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_depart", type="string", length=255, unique=true)
     */
    private $depart;


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
     * Set street
     *
     * @param string $street
     *
     * @return Adresse
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Adresse
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set arriver
     *
     * @param string $arriver
     *
     * @return Adresse
     */
    public function setArriver($arriver)
    {
        $this->arriver = $arriver;

        return $this;
    }

    /**
     * Get arriver
     *
     * @return string
     */
    public function getArriver()
    {
        return $this->arriver;
    }

    /**
     * Set depart
     *
     * @param string $depart
     *
     * @return Adresse
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }
}

