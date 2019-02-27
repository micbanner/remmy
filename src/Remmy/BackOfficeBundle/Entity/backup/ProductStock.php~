<?php

namespace Remmy\BackOfficeBundle\Entity\backup;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductStock
 *
 * @ORM\Table(name="product_stock", uniqueConstraints={@ORM\UniqueConstraint(name="idProduct", columns={"idColor", "idSize"})}, indexes={@ORM\Index(name="idSize", columns={"idSize"}), @ORM\Index(name="IDX_EA6A2D3C71920BF4", columns={"idColor"})})
 * @ORM\Entity
 */
class ProductStock
{
    /**
     * @var int
     *
     * @ORM\Column(name="idStock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstock;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \Color
     *
     * @ORM\ManyToOne(targetEntity="Color")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idColor", referencedColumnName="idColor")
     * })
     */
    private $idcolor;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="stockstock")
     */
    private $productstock;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productstock = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idstock.
     *
     * @return int
     */
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return ProductStock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set idcolor.
     *
     * @param \Remmy\BackOfficeBundle\Entity\backup\Color|null $idcolor
     *
     * @return ProductStock
     */
    public function setIdcolor(\Remmy\BackOfficeBundle\Entity\backup\Color $idcolor = null)
    {
        $this->idcolor = $idcolor;

        return $this;
    }

    /**
     * Get idcolor.
     *
     * @return \Remmy\BackOfficeBundle\Entity\backup\Color|null
     */
    public function getIdcolor()
    {
        return $this->idcolor;
    }

    /**
     * Set idsize.
     *
     * @param \Remmy\BackOfficeBundle\Entity\backup\Size|null $idsize
     *
     * @return ProductStock
     */
    public function setIdsize(\Remmy\BackOfficeBundle\Entity\backup\Size $idsize = null)
    {
        $this->idsize = $idsize;

        return $this;
    }

    /**
     * Get idsize.
     *
     * @return \Remmy\BackOfficeBundle\Entity\backup\Size|null
     */
    public function getIdsize()
    {
        return $this->idsize;
    }

    /**
     * Add productstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\backup\Product $productstock
     *
     * @return ProductStock
     */
    public function addProductstock(\Remmy\BackOfficeBundle\Entity\backup\Product $productstock)
    {
        $this->productstock[] = $productstock;

        return $this;
    }

    /**
     * Remove productstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\backup\Product $productstock
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeProductstock(\Remmy\BackOfficeBundle\Entity\backup\Product $productstock)
    {
        return $this->productstock->removeElement($productstock);
    }

    /**
     * Get productstock.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductstock()
    {
        return $this->productstock;
    }
}
