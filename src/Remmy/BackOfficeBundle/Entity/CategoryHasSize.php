<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryHasSize
 *
 * @ORM\Table(name="category_has_size", indexes={@ORM\Index(name="idSize", columns={"idSize"}), @ORM\Index(name="idCategory", columns={"idCategory"})})
 * @ORM\Entity
 */
class CategoryHasSize
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategory", referencedColumnName="idCategory")
     * })
     */
    private $idcategory;

    /**
     * @var \Size
     *
     * @ORM\ManyToOne(targetEntity="Size")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSize", referencedColumnName="idSize")
     * })
     */
    private $idsize;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idcategory.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Category|null $idcategory
     *
     * @return CategoryHasSize
     */
    public function setIdcategory(\Remmy\BackOfficeBundle\Entity\Category $idcategory = null)
    {
        $this->idcategory = $idcategory;
    
        return $this;
    }

    /**
     * Get idcategory.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Category|null
     */
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * Set idsize.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Size|null $idsize
     *
     * @return CategoryHasSize
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
}
