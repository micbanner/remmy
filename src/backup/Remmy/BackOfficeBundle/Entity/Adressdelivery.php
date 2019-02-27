<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * Adressdelivery
 */
class Adressdelivery
{
    /**
     * @var int
     */
    private $iddelivery;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var int
     */
    private $zip;

    /**
     * @var string|null
     */
    private $adressetype;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\FosUser
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
