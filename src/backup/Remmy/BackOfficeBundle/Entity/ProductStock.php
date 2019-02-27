<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * ProductStock
 */
class ProductStock
{
    /**
     * @var int
     */
    private $idstock;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Color
     */
    private $idcolor;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Size
     */
    private $idsize;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $productstock;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productstock = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idstock.
     *
     * @return int
     */
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return ProductStock
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
     * Set idcolor.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Color|null $idcolor
     *
     * @return ProductStock
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
     * Set idsize.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Size|null $idsize
     *
     * @return ProductStock
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
     * Add productstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $productstock
     *
     * @return ProductStock
     */
    public function addProductstock(\Remmy\BackOfficeBundle\Entity\Product $productstock)
    {
        $this->productstock[] = $productstock;

        return $this;
    }

    /**
     * Remove productstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $productstock
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProductstock(\Remmy\BackOfficeBundle\Entity\Product $productstock)
    {
        return $this->productstock->removeElement($productstock);
    }

    /**
     * Get productstock.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductstock()
    {
        return $this->productstock;
    }
}
