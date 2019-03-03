<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BasketLine
 *
 * @ORM\Table(name="basket_line", indexes={@ORM\Index(name="idbasket", columns={"idbasket"})})
 * @ORM\Entity
 */
class BasketLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="idLine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idline;

    /**
     * @var int
     *
     * @ORM\Column(name="idColor", type="integer", nullable=false)
     */
    private $idcolor;

    /**
     * @var int
     *
     * @ORM\Column(name="idOrder", type="integer", nullable=false)
     */
    private $idorder;

    /**
     * @var int
     *
     * @ORM\Column(name="idSize", type="integer", nullable=false)
     */
    private $idsize;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="taxable", type="integer", nullable=false)
     */
    private $taxable;

    /**
     * @var int
     *
     * @ORM\Column(name="taxeamount", type="integer", nullable=false)
     */
    private $taxeamount;

    /**
     * @var \Basket
     *
     * @ORM\ManyToOne(targetEntity="Basket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idbasket", referencedColumnName="idbasket")
     * })
     */
    private $idbasket;



    /**
     * Get idline.
     *
     * @return int
     */
    public function getIdline()
    {
        return $this->idline;
    }

    /**
     * Set idcolor.
     *
     * @param int $idcolor
     *
     * @return BasketLine
     */
    public function setIdcolor($idcolor)
    {
        $this->idcolor = $idcolor;
    
        return $this;
    }

    /**
     * Get idcolor.
     *
     * @return int
     */
    public function getIdcolor()
    {
        return $this->idcolor;
    }

    /**
     * Set idorder.
     *
     * @param int $idorder
     *
     * @return BasketLine
     */
    public function setIdorder($idorder)
    {
        $this->idorder = $idorder;
    
        return $this;
    }

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
     * Set idsize.
     *
     * @param int $idsize
     *
     * @return BasketLine
     */
    public function setIdsize($idsize)
    {
        $this->idsize = $idsize;
    
        return $this;
    }

    /**
     * Get idsize.
     *
     * @return int
     */
    public function getIdsize()
    {
        return $this->idsize;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return BasketLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set taxable.
     *
     * @param int $taxable
     *
     * @return BasketLine
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
    
        return $this;
    }

    /**
     * Get taxable.
     *
     * @return int
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * Set taxeamount.
     *
     * @param int $taxeamount
     *
     * @return BasketLine
     */
    public function setTaxeamount($taxeamount)
    {
        $this->taxeamount = $taxeamount;
    
        return $this;
    }

    /**
     * Get taxeamount.
     *
     * @return int
     */
    public function getTaxeamount()
    {
        return $this->taxeamount;
    }

    /**
     * Set idbasket.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Basket|null $idbasket
     *
     * @return BasketLine
     */
    public function setIdbasket(\Remmy\BackOfficeBundle\Entity\Basket $idbasket = null)
    {
        $this->idbasket = $idbasket;
    
        return $this;
    }

    /**
     * Get idbasket.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Basket|null
     */
    public function getIdbasket()
    {
        return $this->idbasket;
    }
}
