<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * UserOrder
 */
class UserOrder
{
    /**
     * @var \DateTime
     */
    private $datestart;

    /**
     * @var \DateTime
     */
    private $datestop;

    /**
     * @var string
     */
    private $statut;

    /**
     * @var integer
     */
    private $quantitytotal;

    /**
     * @var integer
     */
    private $totalamount;

    /**
     * @var integer
     */
    private $taxes;

    /**
     * @var integer
     */
    private $idorder;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\FosUser
     */
    private $iduser;


    /**
     * Set datestart
     *
     * @param \DateTime $datestart
     *
     * @return UserOrder
     */
    public function setDatestart($datestart)
    {
        $this->datestart = $datestart;

        return $this;
    }

    /**
     * Get datestart
     *
     * @return \DateTime
     */
    public function getDatestart()
    {
        return $this->datestart;
    }

    /**
     * Set datestop
     *
     * @param \DateTime $datestop
     *
     * @return UserOrder
     */
    public function setDatestop($datestop)
    {
        $this->datestop = $datestop;

        return $this;
    }

    /**
     * Get datestop
     *
     * @return \DateTime
     */
    public function getDatestop()
    {
        return $this->datestop;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return UserOrder
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set quantitytotal
     *
     * @param integer $quantitytotal
     *
     * @return UserOrder
     */
    public function setQuantitytotal($quantitytotal)
    {
        $this->quantitytotal = $quantitytotal;

        return $this;
    }

    /**
     * Get quantitytotal
     *
     * @return integer
     */
    public function getQuantitytotal()
    {
        return $this->quantitytotal;
    }

    /**
     * Set totalamount
     *
     * @param integer $totalamount
     *
     * @return UserOrder
     */
    public function setTotalamount($totalamount)
    {
        $this->totalamount = $totalamount;

        return $this;
    }

    /**
     * Get totalamount
     *
     * @return integer
     */
    public function getTotalamount()
    {
        return $this->totalamount;
    }

    /**
     * Set taxes
     *
     * @param integer $taxes
     *
     * @return UserOrder
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Get taxes
     *
     * @return integer
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Get idorder
     *
     * @return integer
     */
    public function getIdorder()
    {
        return $this->idorder;
    }

    /**
     * Set iduser
     *
     * @param \Remmy\BackOfficeBundle\Entity\FosUser $iduser
     *
     * @return UserOrder
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

