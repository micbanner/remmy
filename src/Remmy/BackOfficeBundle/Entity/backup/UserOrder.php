<?php

namespace Remmy\BackOfficeBundle\Entity\backup;
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
     * @var integer
     *
     * @ORM\Column(name="idOrder", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="date", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime
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
     * @var integer
     *
     * @ORM\Column(name="QuantityTotal", type="integer", nullable=false)
     */
    private $quantitytotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalAmount", type="integer", nullable=false)
     */
    private $totalamount;

    /**
     * @var integer
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
