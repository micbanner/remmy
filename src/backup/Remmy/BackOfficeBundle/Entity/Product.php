<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * Product
 */
class Product
{
    /**
     * @var int
     */
    private $idproduct;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image;

    /**
     * @var int
     */
    private $price;

    /**
     * @var int|null
     */
    private $categoryCategoryIdcategory;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Category
     */
    private $categorycategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $colorcolor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stockstock;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->colorcolor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->stockstock = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idproduct.
     *
     * @return int
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set price.
     *
     * @param int $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set categoryCategoryIdcategory.
     *
     * @param int|null $categoryCategoryIdcategory
     *
     * @return Product
     */
    public function setCategoryCategoryIdcategory($categoryCategoryIdcategory = null)
    {
        $this->categoryCategoryIdcategory = $categoryCategoryIdcategory;

        return $this;
    }

    /**
     * Get categoryCategoryIdcategory.
     *
     * @return int|null
     */
    public function getCategoryCategoryIdcategory()
    {
        return $this->categoryCategoryIdcategory;
    }

    /**
     * Set categorycategory.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category|null $categorycategory
     *
     * @return Product
     */
    public function setCategorycategory(\Remmy\BackOfficeBundle\Entity\Category $categorycategory = null)
    {
        $this->categorycategory = $categorycategory;

        return $this;
    }

    /**
     * Get categorycategory.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Category|null
     */
    public function getCategorycategory()
    {
        return $this->categorycategory;
    }

    /**
     * Add colorcolor.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Color $colorcolor
     *
     * @return Product
     */
    public function addColorcolor(\Remmy\BackOfficeBundle\Entity\Color $colorcolor)
    {
        $this->colorcolor[] = $colorcolor;

        return $this;
    }

    /**
     * Remove colorcolor.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Color $colorcolor
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeColorcolor(\Remmy\BackOfficeBundle\Entity\Color $colorcolor)
    {
        return $this->colorcolor->removeElement($colorcolor);
    }

    /**
     * Get colorcolor.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColorcolor()
    {
        return $this->colorcolor;
    }

    /**
     * Add stockstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\ProductStock $stockstock
     *
     * @return Product
     */
    public function addStockstock(\Remmy\BackOfficeBundle\Entity\ProductStock $stockstock)
    {
        $this->stockstock[] = $stockstock;

        return $this;
    }

    /**
     * Remove stockstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\ProductStock $stockstock
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeStockstock(\Remmy\BackOfficeBundle\Entity\ProductStock $stockstock)
    {
        return $this->stockstock->removeElement($stockstock);
    }

    /**
     * Get stockstock.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStockstock()
    {
        return $this->stockstock;
    }
}
