<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Size
 *
 * @ORM\Table(name="size")
 * @ORM\Entity
 */
class Size
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSize", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsize;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="idsize")
     */
    private $idcategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcategory = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add idcategory.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category $idcategory
     *
     * @return Size
     */
    public function addIdcategory(\Remmy\BackOfficeBundle\Entity\Category $idcategory)
    {
        $this->idcategory[] = $idcategory;
    
        return $this;
    }

    /**
     * Remove idcategory.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category $idcategory
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdcategory(\Remmy\BackOfficeBundle\Entity\Category $idcategory)
    {
        return $this->idcategory->removeElement($idcategory);
    }

    /**
     * Get idcategory.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdcategory()
    {
        return $this->idcategory;
    }
}
