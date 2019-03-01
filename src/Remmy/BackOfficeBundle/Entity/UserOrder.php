<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserOrder
 *
 * @ORM\Table(name="user_order", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class UserOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="idOrder", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorder;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateStart", type="date", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateStop", type="date", nullable=true)
     */
    private $datestop;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     */
    private $statut;

    /**
     * @var int
     *
     * @ORM\Column(name="QuantityTotal", type="integer", nullable=false)
     */
    private $quantitytotal;

    /**
     * @var int
     *
     * @ORM\Column(name="totalAmount", type="integer", nullable=false)
     */
    private $totalamount;

    /**
     * @var int
     *
     * @ORM\Column(name="taxes", type="integer", nullable=false)
     */
    private $taxes;

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
