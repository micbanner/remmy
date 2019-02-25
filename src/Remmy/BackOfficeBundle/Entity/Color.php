<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * Color
 */
class Color
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $codecolor;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $idcolor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $productproduct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productproduct = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Color
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
     * Set codecolor
     *
     * @param string $codecolor
     *
     * @return Color
     */
    public function setCodecolor($codecolor)
    {
        $this->codecolor = $codecolor;

        return $this;
    }

    /**
     * Get codecolor
     *
     * @return string
     */
    public function getCodecolor()
    {
        return $this->codecolor;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Color
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
     * Get idcolor
     *
     * @return integer
     */
    public function getIdcolor()
    {
        return $this->idcolor;
    }

    /**
     * Add productproduct
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $productproduct
     *
     * @return Color
     */
    public function addProductproduct(\Remmy\BackOfficeBundle\Entity\Product $productproduct)
    {
        $this->productproduct[] = $productproduct;

        return $this;
    }

    /**
     * Remove productproduct
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $productproduct
     */
    public function removeProductproduct(\Remmy\BackOfficeBundle\Entity\Product $productproduct)
    {
        $this->productproduct->removeElement($productproduct);
    }

    /**
     * Get productproduct
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductproduct()
    {
        return $this->productproduct;
    }
}

