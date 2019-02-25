<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * RetailsOrder
 */
class RetailsOrder
{
    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $priceUnit;

    /**
     * @var integer
     */
    private $taxeUnit;

    /**
     * @var integer
     */
    private $idretail;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\UserOrder
     */
    private $idorder;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Product
     */
    private $idproduct;


    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return RetailsOrder
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set priceUnit
     *
     * @param integer $priceUnit
     *
     * @return RetailsOrder
     */
    public function setPriceUnit($priceUnit)
    {
        $this->priceUnit = $priceUnit;

        return $this;
    }

    /**
     * Get priceUnit
     *
     * @return integer
     */
    public function getPriceUnit()
    {
        return $this->priceUnit;
    }

    /**
     * Set taxeUnit
     *
     * @param integer $taxeUnit
     *
     * @return RetailsOrder
     */
    public function setTaxeUnit($taxeUnit)
    {
        $this->taxeUnit = $taxeUnit;

        return $this;
    }

    /**
     * Get taxeUnit
     *
     * @return integer
     */
    public function getTaxeUnit()
    {
        return $this->taxeUnit;
    }

    /**
     * Get idretail
     *
     * @return integer
     */
    public function getIdretail()
    {
        return $this->idretail;
    }

    /**
     * Set idorder
     *
     * @param \Remmy\BackOfficeBundle\Entity\UserOrder $idorder
     *
     * @return RetailsOrder
     */
    public function setIdorder(\Remmy\BackOfficeBundle\Entity\UserOrder $idorder = null)
    {
        $this->idorder = $idorder;

        return $this;
    }

    /**
     * Get idorder
     *
     * @return \Remmy\BackOfficeBundle\Entity\UserOrder
     */
    public function getIdorder()
    {
        return $this->idorder;
    }

    /**
     * Set idproduct
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $idproduct
     *
     * @return RetailsOrder
     */
    public function setIdproduct(\Remmy\BackOfficeBundle\Entity\Product $idproduct = null)
    {
        $this->idproduct = $idproduct;

        return $this;
    }

    /**
     * Get idproduct
     *
     * @return \Remmy\BackOfficeBundle\Entity\Product
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }
}

