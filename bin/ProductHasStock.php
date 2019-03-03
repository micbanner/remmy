<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductHasStock
 *
 * @ORM\Table(name="product_has_stock", indexes={@ORM\Index(name="id_stock", columns={"idStock"}), @ORM\Index(name="IDX_DE1FF053C4E56C3", columns={"idproduct"})})
 * @ORM\Entity
 */
class ProductHasStock
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProduct", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idproduct;

    /**
     * @var int
     *
     * @ORM\Column(name="idStock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idstock;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproduct", referencedColumnName="idProduct")
     * })
     */
    private $idproduct2;

    /**
     * @var \ProductStock
     *
     * @ORM\ManyToOne(targetEntity="ProductStock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idstock", referencedColumnName="idStock")
     * })
     */
    private $idstock2;



    /**
     * Set idproduct.
     *
     * @param int $idproduct
     *
     * @return ProductHasStock
     */
    public function setIdproduct($idproduct)
    {
        $this->idproduct = $idproduct;
    
        return $this;
    }

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
     * Set idstock.
     *
     * @param int $idstock
     *
     * @return ProductHasStock
     */
    public function setIdstock($idstock)
    {
        $this->idstock = $idstock;
    
        return $this;
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
     * Set idproduct2.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product|null $idproduct2
     *
     * @return ProductHasStock
     */
    public function setIdproduct2(\Remmy\BackOfficeBundle\Entity\Product $idproduct2 = null)
    {
        $this->idproduct2 = $idproduct2;
    
        return $this;
    }

    /**
     * Get idproduct2.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Product|null
     */
    public function getIdproduct2()
    {
        return $this->idproduct2;
    }

    /**
     * Set idstock2.
     *
     * @param \Remmy\BackOfficeBundle\Entity\ProductStock|null $idstock2
     *
     * @return ProductHasStock
     */
    public function setIdstock2(\Remmy\BackOfficeBundle\Entity\ProductStock $idstock2 = null)
    {
        $this->idstock2 = $idstock2;
    
        return $this;
    }

    /**
     * Get idstock2.
     *
     * @return \Remmy\BackOfficeBundle\Entity\ProductStock|null
     */
    public function getIdstock2()
    {
        return $this->idstock2;
    }
}
