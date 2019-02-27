<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * RetailsOrder
 */
class RetailsOrder
{
    /**
     * @var int
     */
    private $idretail;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $priceUnit;

    /**
     * @var int
     */
    private $taxeUnit;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\UserOrder
     */
    private $idorder;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Product
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
