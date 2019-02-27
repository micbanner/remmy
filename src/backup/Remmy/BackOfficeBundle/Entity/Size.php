<?php

namespace Remmy\BackOfficeBundle\Entity;

/**
 * Size
 */
class Size
{
    /**
     * @var int
     */
    private $idsize;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idCategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCategory = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idsize.
     *
     * @return int
     */
    public function getIdsize()
    {
        return $this->idsize;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Size
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
     * @return Size
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
     * Add idCategory.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category $idCategory
     *
     * @return Size
     */
    public function addIdCategory(\Remmy\BackOfficeBundle\Entity\Category $idCategory)
    {
        $this->idCategory[] = $idCategory;

        return $this;
    }

    /**
     * Remove idCategory.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category $idCategory
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdCategory(\Remmy\BackOfficeBundle\Entity\Category $idCategory)
    {
        return $this->idCategory->removeElement($idCategory);
    }

    /**
     * Get idCategory.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}
