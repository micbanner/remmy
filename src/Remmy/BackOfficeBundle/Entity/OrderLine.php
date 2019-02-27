<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderLine
 *
 * @ORM\Table(name="order_line", indexes={@ORM\Index(name="idSize", columns={"idSize"}), @ORM\Index(name="idColor", columns={"idColor"}), @ORM\Index(name="idOrder", columns={"idOrder"}), @ORM\Index(name="idProduct", columns={"idProduct"})})
 * @ORM\Entity
 */
class OrderLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="idOrderLine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorderline;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitPrice", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $unitprice;

    /**
     * @var string
     *
     * @ORM\Column(name="totalPrice", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $totalprice;

    /**
     * @var bool
     *
     * @ORM\Column(name="taxable", type="boolean", nullable=false)
     */
    private $taxable;

    /**
     * @var string
     *
     * @ORM\Column(name="taxeAmount", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $taxeamount;

    /**
     * @var \Color
     *
     * @ORM\ManyToOne(targetEntity="Color")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idColor", referencedColumnName="idColor")
     * })
     */
    private $idcolor;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduct", referencedColumnName="idProduct")
     * })
     */
    private $idproduct;

    /**
     * @var \Size
     *
     * @ORM\ManyToOne(targetEntity="Size")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSize", referencedColumnName="idSize")
     * })
     */
    private $idsize;

    /**
     * @var \OrderHeader
     *
     * @ORM\ManyToOne(targetEntity="OrderHeader")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOrder", referencedColumnName="idOrder")
     * })
     */
    private $idorder;



    /**
     * Get idorderline.
     *
     * @return int
     */
    public function getIdorderline()
    {
        return $this->idorderline;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return OrderLine
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
     * Set unitprice.
     *
     * @param string $unitprice
     *
     * @return OrderLine
     */
    public function setUnitprice($unitprice)
    {
        $this->unitprice = $unitprice;

        return $this;
    }

    /**
     * Get unitprice.
     *
     * @return string
     */
    public function getUnitprice()
    {
        return $this->unitprice;
    }

    /**
     * Set totalprice.
     *
     * @param string $totalprice
     *
     * @return OrderLine
     */
    public function setTotalprice($totalprice)
    {
        $this->totalprice = $totalprice;

        return $this;
    }

    /**
     * Get totalprice.
     *
     * @return string
     */
    public function getTotalprice()
    {
        return $this->totalprice;
    }

    /**
     * Set taxable.
     *
     * @param bool $taxable
     *
     * @return OrderLine
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * Get taxable.
     *
     * @return bool
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * Set taxeamount.
     *
     * @param string $taxeamount
     *
     * @return OrderLine
     */
    public function setTaxeamount($taxeamount)
    {
        $this->taxeamount = $taxeamount;

        return $this;
    }

    /**
     * Get taxeamount.
     *
     * @return string
     */
    public function getTaxeamount()
    {
        return $this->taxeamount;
    }

    /**
     * Set idcolor.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Color|null $idcolor
     *
     * @return OrderLine
     */
    public function setIdcolor(\Remmy\BackOfficeBundle\Entity\Color $idcolor = null)
    {
        $this->idcolor = $idcolor;

        return $this;
    }

    /**
     * Get idcolor.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Color|null
     */
    public function getIdcolor()
    {
        return $this->idcolor;
    }

    /**
     * Set idproduct.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product|null $idproduct
     *
     * @return OrderLine
     */
    public function setIdproduct(\Remmy\BackOfficeBundle\Entity\Product $idproduct = null)
    {
        $this->idproduct = $idproduct;

        return $this;
    }

    /**
     * Get idproduct.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Product|null
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set idsize.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Size|null $idsize
     *
     * @return OrderLine
     */
    public function setIdsize(\Remmy\BackOfficeBundle\Entity\Size $idsize = null)
    {
        $this->idsize = $idsize;

        return $this;
    }

    /**
     * Get idsize.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Size|null
     */
    public function getIdsize()
    {
        return $this->idsize;
    }

    /**
     * Set idorder.
     *
     * @param \Remmy\BackOfficeBundle\Entity\OrderHeader|null $idorder
     *
     * @return OrderLine
     */
    public function setIdorder(\Remmy\BackOfficeBundle\Entity\OrderHeader $idorder = null)
    {
        $this->idorder = $idorder;

        return $this;
    }

    /**
     * Get idorder.
     *
     * @return \Remmy\BackOfficeBundle\Entity\OrderHeader|null
     */
    public function getIdorder()
    {
        return $this->idorder;
    }
}
