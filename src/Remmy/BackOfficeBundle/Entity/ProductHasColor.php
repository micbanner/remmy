<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductHasColor
 *
 * @ORM\Table(name="product_has_color", indexes={@ORM\Index(name="idProduct", columns={"idProduct"}), @ORM\Index(name="idColor", columns={"idColor"})})
 * @ORM\Entity
 */
class ProductHasColor
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
     * @var \Color
     *
     * @ORM\ManyToOne(targetEntity="Color")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idColor", referencedColumnName="idColor")
     * })
     */
    private $idcolor;

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idcolor.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Color|null $idcolor
     *
     * @return ProductHasColor
     */
    public function setIdcolor(\Remmy\BackOfficeBundle\Entity\Color $idcolor = null)
    {
        $this->idcolor = $idcolor;
    
        return $this;
    }

    /**
     * Get idcolor.
     *
     * @return \Remmy\BackOfficeBundle\Entity\Color|null
     */
    public function getIdcolor()
    {
        return $this->idcolor;
    }

    /**
     * Set idproduct.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product|null $idproduct
     *
     * @return ProductHasColor
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
}
