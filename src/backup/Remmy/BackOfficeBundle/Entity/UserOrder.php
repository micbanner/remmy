<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * UserOrder
 */
class UserOrder
{
    /**
     * @var int
     */
    private $idorder;

    /**
     * @var \DateTime|null
     */
    private $datestart;

    /**
     * @var \DateTime|null
     */
    private $datestop;

    /**
     * @var string
     */
    private $statut;

    /**
     * @var int
     */
    private $quantitytotal;

    /**
     * @var int
     */
    private $totalamount;

    /**
     * @var int
     */
    private $taxes;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\FosUser
     */
    private $iduser;


    /**
     * Get idorder.
     *
     * @return int
     */
    public function getIdorder()
    {
        return $this->idorder;
    }

    /**
     * Set datestart.
     *
     * @param \DateTime|null $datestart
     *
     * @return UserOrder
     */
    public function setDatestart($datestart = null)
    {
        $this->datestart = $datestart;

        return $this;
    }

    /**
     * Get datestart.
     *
     * @return \DateTime|null
     */
    public function getDatestart()
    {
        return $this->datestart;
    }

    /**
     * Set datestop.
     *
     * @param \DateTime|null $datestop
     *
     * @return UserOrder
     */
    public function setDatestop($datestop = null)
    {
        $this->datestop = $datestop;

        return $this;
    }

    /**
     * Get datestop.
     *
     * @return \DateTime|null
     */
    public function getDatestop()
    {
        return $this->datestop;
    }

    /**
     * Set statut.
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
     * Get statut.
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set quantitytotal.
     *
     * @param int $quantitytotal
     *
     * @return UserOrder
     */
    public function setQuantitytotal($quantitytotal)
    {
        $this->quantitytotal = $quantitytotal;

        return $this;
    }

    /**
     * Get quantitytotal.
     *
     * @return int
     */
    public function getQuantitytotal()
    {
        return $this->quantitytotal;
    }

    /**
     * Set totalamount.
     *
     * @param int $totalamount
     *
     * @return UserOrder
     */
    public function setTotalamount($totalamount)
    {
        $this->totalamount = $totalamount;

        return $this;
    }

    /**
     * Get totalamount.
     *
     * @return int
     */
    public function getTotalamount()
    {
        return $this->totalamount;
    }

    /**
     * Set taxes.
     *
     * @param int $taxes
     *
     * @return UserOrder
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Get taxes.
     *
     * @return int
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Set iduser.
     *
     * @param \Remmy\BackOfficeBundle\Entity\FosUser|null $iduser
     *
     * @return UserOrder
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
