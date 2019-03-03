<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductHasStock
 *
 * @ORM\Table(name="product_has_stock", uniqueConstraints={@ORM\UniqueConstraint(name="idProduct", columns={"idProduct"})}, indexes={@ORM\Index(name="idStock", columns={"idStock"})})
 * @ORM\Entity
 */
class ProductHasStock
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
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduct", referencedColumnName="idProduct")
     * })
     */
    private $idproduct;

    /**
     * @var \ProductStock
     *
     * @ORM\ManyToOne(targetEntity="ProductStock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStock", referencedColumnName="idStock")
     * })
     */
    private $idstock;



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
     * Set idproduct.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product|null $idproduct
     *
     * @return ProductHasStock
     */
    public function setIdproduct(\Remmy\BackOfficeBundle\Entity\Product $idproduct = null)
    {
        $this->idproduct = $idproduct;
    
        return $this;
    }

    /**
     * Get idproduct.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Product|null
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set idstock.
     *
     * @param \Remmy\BackOfficeBundle\Entity\ProductStock|null $idstock
     *
     * @return ProductHasStock
     */
    public function setIdstock(\Remmy\BackOfficeBundle\Entity\ProductStock $idstock = null)
    {
        $this->idstock = $idstock;
    
        return $this;
    }

    /**
     * Get idstock.
     *
     * @return \Remmy\BackOfficeBundle\Entity\ProductStock|null
     */
    public function getIdstock()
    {
        return $this->idstock;
    }
}
