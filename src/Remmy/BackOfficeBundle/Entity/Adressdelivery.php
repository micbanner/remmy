<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * Adressdelivery
 */
class Adressdelivery
{
    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $zip;

    /**
     * @var string
     */
    private $adressetype;

    /**
     * @var integer
     */
    private $iddelivery;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\FosUser
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

