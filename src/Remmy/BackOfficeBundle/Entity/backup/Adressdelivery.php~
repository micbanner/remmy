<?php

namespace Remmy\BackOfficeBundle\Entity\backup;

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
     * @var integer
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
     * @var integer
     *
     * @ORM\Column(name="zip", type="integer", nullable=false)
     */
    private $zip;

    /**
     * @var string
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
     * Set adresse
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
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set zip
     *
     * @param integer $zip
     *
     * @return Adressdelivery
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return integer
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set adressetype
     *
     * @param string $adressetype
     *
     * @return Adressdelivery
     */
    public function setAdressetype($adressetype)
    {
        $this->adressetype = $adressetype;

        return $this;
    }

    /**
     * Get adressetype
     *
     * @return string
     */
    public function getAdressetype()
    {
        return $this->adressetype;
    }

    /**
     * Get iddelivery
     *
     * @return integer
     */
    public function getIddelivery()
    {
        return $this->iddelivery;
    }

    /**
     * Set iduser
     *
     * @param \Remmy\BackOfficeBundle\Entity\FosUser $iduser
     *
     * @return Adressdelivery
     */
    public function setIduser(\Remmy\BackOfficeBundle\Entity\FosUser $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Remmy\BackOfficeBundle\Entity\FosUser
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
