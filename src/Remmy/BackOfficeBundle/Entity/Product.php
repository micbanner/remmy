<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * Product
 */
class Product
{
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
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $categoryCategoryIdcategory;

    /**
     * @var integer
     */
    private $idproduct;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Category
     */
    private $categorycategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $colorcolor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->colorcolor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
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
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
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
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set categoryCategoryIdcategory
     *
     * @param integer $categoryCategoryIdcategory
     *
     * @return Product
     */
    public function setCategoryCategoryIdcategory($categoryCategoryIdcategory)
    {
        $this->categoryCategoryIdcategory = $categoryCategoryIdcategory;

        return $this;
    }

    /**
     * Get categoryCategoryIdcategory
     *
     * @return integer
     */
    public function getCategoryCategoryIdcategory()
    {
        return $this->categoryCategoryIdcategory;
    }

    /**
     * Get idproduct
     *
     * @return integer
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set categorycategory
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category $categorycategory
     *
     * @return Product
     */
    public function setCategorycategory(\Remmy\BackOfficeBundle\Entity\Category $categorycategory = null)
    {
        $this->categorycategory = $categorycategory;

        return $this;
    }

    /**
     * Get categorycategory
     *
     * @return \Remmy\BackOfficeBundle\Entity\Category
     */
    public function getCategorycategory()
    {
        return $this->categorycategory;
    }

    /**
     * Add colorcolor
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
     * Remove colorcolor
     *
     * @param \Remmy\BackOfficeBundle\Entity\Color $colorcolor
     */
    public function removeColorcolor(\Remmy\BackOfficeBundle\Entity\Color $colorcolor)
    {
        $this->colorcolor->removeElement($colorcolor);
    }

    /**
     * Get colorcolor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColorcolor()
    {
        return $this->colorcolor;
    }
}

