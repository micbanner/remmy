<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * InfosPayement
 */
class InfosPayement
{
    /**
     * @var string
     */
    private $typepayement;

    /**
     * @var integer
     */
    private $cardnumber;

    /**
     * @var integer
     */
    private $idpayement;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\FosUser
     */
    private $iduser;


    /**
     * Set typepayement
     *
     * @param string $typepayement
     *
     * @return InfosPayement
     */
    public function setTypepayement($typepayement)
    {
        $this->typepayement = $typepayement;

        return $this;
    }

    /**
     * Get typepayement
     *
     * @return string
     */
    public function getTypepayement()
    {
        return $this->typepayement;
    }

    /**
     * Set cardnumber
     *
     * @param integer $cardnumber
     *
     * @return InfosPayement
     */
    public function setCardnumber($cardnumber)
    {
        $this->cardnumber = $cardnumber;

        return $this;
    }

    /**
     * Get cardnumber
     *
     * @return integer
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }

    /**
     * Get idpayement
     *
     * @return integer
     */
    public function getIdpayement()
    {
        return $this->idpayement;
    }

    /**
     * Set iduser
     *
     * @param \Remmy\BackOfficeBundle\Entity\FosUser $iduser
     *
     * @return InfosPayement
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

