<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * InfosPayement
 */
class InfosPayement
{
    /**
     * @var int
     */
    private $idpayement;

    /**
     * @var string
     */
    private $typepayement;

    /**
     * @var int|null
     */
    private $cardnumber;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\FosUser
     */
    private $iduser;


    /**
     * Get idpayement.
     *
     * @return int
     */
    public function getIdpayement()
    {
        return $this->idpayement;
    }

    /**
     * Set typepayement.
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
     * Get typepayement.
     *
     * @return string
     */
    public function getTypepayement()
    {
        return $this->typepayement;
    }

    /**
     * Set cardnumber.
     *
     * @param int|null $cardnumber
     *
     * @return InfosPayement
     */
    public function setCardnumber($cardnumber = null)
    {
        $this->cardnumber = $cardnumber;

        return $this;
    }

    /**
     * Get cardnumber.
     *
     * @return int|null
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }

    /**
     * Set iduser.
     *
     * @param \Remmy\BackOfficeBundle\Entity\FosUser|null $iduser
     *
     * @return InfosPayement
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
