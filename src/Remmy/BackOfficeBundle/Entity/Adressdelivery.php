<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adressdelivery
 *
 * @ORM\Table(name="adressdelivery", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Adressdelivery
{
    /**
     * @var int
     *
     * @ORM\Column(name="idDelivery", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddelivery;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", length=65535, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="zip", type="integer", nullable=false)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresseType", type="string", length=255, nullable=true)
     */
    private $adressetype;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;



    /**
     * Get iddelivery.
     *
     * @return int
     */
    public function getIddelivery()
    {
        return $this->iddelivery;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Adressdelivery
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set zip.
     *
     * @param int $zip
     *
     * @return Adressdelivery
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    
        return $this;
    }

    /**
     * Get zip.
     *
     * @return int
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set adressetype.
     *
     * @param string|null $adressetype
     *
     * @return Adressdelivery
     */
    public function setAdressetype($adressetype = null)
    {
        $this->adressetype = $adressetype;
    
        return $this;
    }

    /**
     * Get adressetype.
     *
     * @return string|null
     */
    public function getAdressetype()
    {
        return $this->adressetype;
    }

    /**
     * Set iduser.
     *
     * @param \Remmy\BackOfficeBundle\Entity\FosUser|null $iduser
     *
     * @return Adressdelivery
     */
    public function setIduser(\Remmy\BackOfficeBundle\Entity\FosUser $iduser = null)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser.
     *
     * @return \Remmy\BackOfficeBundle\Entity\FosUser|null
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
