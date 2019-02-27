<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * Category
 */
class Category
{
    /**
     * @var int
     */
    private $idcategory;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Remmy\BackOfficeBundle\Entity\Category
     */
    private $categorycategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idSize;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSize = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idcategory.
     *
     * @return int
     */
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Category
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
     * Set categorycategory.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category|null $categorycategory
     *
     * @return Category
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
     * Add idSize.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Size $idSize
     *
     * @return Category
     */
    public function addIdSize(\Remmy\BackOfficeBundle\Entity\Size $idSize)
    {
        $this->idSize[] = $idSize;

        return $this;
    }

    /**
     * Remove idSize.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Size $idSize
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdSize(\Remmy\BackOfficeBundle\Entity\Size $idSize)
    {
        return $this->idSize->removeElement($idSize);
    }

    /**
     * Get idSize.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdSize()
    {
        return $this->idSize;
    }
}
