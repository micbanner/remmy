<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * StockProduct
 */
class StockProduct
{
    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $idstock;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Product
     */
    private $idproduct;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Color
     */
    private $idcolor;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Size
     */
    private $idsize;


    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return StockProduct
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
     * Get idstock
     *
     * @return integer
     */
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * Set idproduct
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $idproduct
     *
     * @return StockProduct
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

    /**
     * Set idcolor
     *
     * @param \Remmy\BackOfficeBundle\Entity\Color $idcolor
     *
     * @return StockProduct
     */
    public function setIdcolor(\Remmy\BackOfficeBundle\Entity\Color $idcolor = null)
    {
        $this->idcolor = $idcolor;

        return $this;
    }

    /**
     * Get idcolor
     *
     * @return \Remmy\BackOfficeBundle\Entity\Color
     */
    public function getIdcolor()
    {
        return $this->idcolor;
    }

    /**
     * Set idsize
     *
     * @param \Remmy\BackOfficeBundle\Entity\Size $idsize
     *
     * @return StockProduct
     */
    public function setIdsize(\Remmy\BackOfficeBundle\Entity\Size $idsize = null)
    {
        $this->idsize = $idsize;

        return $this;
    }

    /**
     * Get idsize
     *
     * @return \Remmy\BackOfficeBundle\Entity\Size
     */
    public function getIdsize()
    {
        return $this->idsize;
    }
}

