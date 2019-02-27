<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetailsOrder
 *
 * @ORM\Table(name="retails_order", indexes={@ORM\Index(name="idProduct", columns={"idProduct"}), @ORM\Index(name="idOrder", columns={"idOrder"})})
 * @ORM\Entity
 */
class RetailsOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRetail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idretail;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="price_unit", type="integer", nullable=false)
     */
    private $priceUnit;

    /**
     * @var int
     *
     * @ORM\Column(name="taxe_unit", type="integer", nullable=false)
     */
    private $taxeUnit;

    /**
     * @var \UserOrder
     *
     * @ORM\ManyToOne(targetEntity="UserOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOrder", referencedColumnName="idOrder")
     * })
     */
    private $idorder;

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
     * Get idretail.
     *
     * @return int
     */
    public function getIdretail()
    {
        return $this->idretail;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return RetailsOrder
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
     * Set priceUnit.
     *
     * @param int $priceUnit
     *
     * @return RetailsOrder
     */
    public function setPriceUnit($priceUnit)
    {
        $this->priceUnit = $priceUnit;

        return $this;
    }

    /**
     * Get priceUnit.
     *
     * @return int
     */
    public function getPriceUnit()
    {
        return $this->priceUnit;
    }

    /**
     * Set taxeUnit.
     *
     * @param int $taxeUnit
     *
     * @return RetailsOrder
     */
    public function setTaxeUnit($taxeUnit)
    {
        $this->taxeUnit = $taxeUnit;

        return $this;
    }

    /**
     * Get taxeUnit.
     *
     * @return int
     */
    public function getTaxeUnit()
    {
        return $this->taxeUnit;
    }

    /**
     * Set idorder.
     *
     * @param \Remmy\BackOfficeBundle\Entity\UserOrder|null $idorder
     *
     * @return RetailsOrder
     */
    public function setIdorder(\Remmy\BackOfficeBundle\Entity\UserOrder $idorder = null)
    {
        $this->idorder = $idorder;

        return $this;
    }

    /**
     * Get idorder.
     *
     * @return \Remmy\BackOfficeBundle\Entity\UserOrder|null
     */
    public function getIdorder()
    {
        return $this->idorder;
    }

    /**
     * Set idproduct.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product|null $idproduct
     *
     * @return RetailsOrder
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
}
