<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="category_category_idCategory", columns={"category_category_idCategory"}), @ORM\Index(name="category_idCategory", columns={"category_idCategory"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProduct", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduct;

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
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category_category_idCategory", type="integer", nullable=true)
     */
    private $categoryCategoryIdcategory;

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
}
