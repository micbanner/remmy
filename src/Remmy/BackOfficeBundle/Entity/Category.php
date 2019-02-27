<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category", indexes={@ORM\Index(name="category_idCategory", columns={"category_idCategory"})})
 * @ORM\Entity
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCategory", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_idCategory", referencedColumnName="idCategory")
     * })
     */
    private $categorycategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Size", inversedBy="idCategory")
     * @ORM\JoinTable(name="category_has_size",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_category", referencedColumnName="idCategory")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_size", referencedColumnName="idSize")
     *   }
     * )
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
