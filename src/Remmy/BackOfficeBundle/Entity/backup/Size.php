<?php

namespace Remmy\BackOfficeBundle\Entity\backup;
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
     * @var integer
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
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="idSize")
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
     * Set name
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
     * @return Size
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
     * Get idsize
     *
     * @return integer
     */
    public function getIdsize()
    {
        return $this->idsize;
    }

    /**
     * Add idCategory
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
     * Remove idCategory
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category $idCategory
     */
    public function removeIdCategory(\Remmy\BackOfficeBundle\Entity\Category $idCategory)
    {
        $this->idCategory->removeElement($idCategory);
    }

    /**
     * Get idCategory
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}
