<?php

namespace Remmy\BackOfficeBundle\Entity\backup;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="category_idCategory", columns={"category_idCategory"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
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
     * 
     * @Assert\NotBlank(message="Please, upload the product image as a jpg/jpeg/png file.")
     * @Assert\File(mimeTypes={ "image/jpg", "image/jpeg", "image/png" })
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var integer
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Color", inversedBy="productproduct")
     * @ORM\JoinTable(name="product_has_color",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_idProduct", referencedColumnName="idProduct")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="color_idColor", referencedColumnName="idColor")
     *   }
     * )
     */
    private $colorcolor;

    /**
     * Constructor
     */

         /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProductStock", inversedBy="productstock")
     * @ORM\JoinTable(name="product_has_stock",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_idstock", referencedColumnName="idProduct")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="stock_idstock", referencedColumnName="idStock")
     *   }
     * )
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

    /**
     * Add stockstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\backup\ProductStock $stockstock
     *
     * @return Product
     */
    public function addStockstock(\Remmy\BackOfficeBundle\Entity\backup\ProductStock $stockstock)
    {
        $this->stockstock[] = $stockstock;

        return $this;
    }

    /**
     * Remove stockstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\backup\ProductStock $stockstock
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeStockstock(\Remmy\BackOfficeBundle\Entity\backup\ProductStock $stockstock)
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
