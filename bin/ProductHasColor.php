<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductHasColor
 *
 * @ORM\Table(name="product_has_color", indexes={@ORM\Index(name="color_idColor", columns={"idColor"})})
 * @ORM\Entity
 */
class ProductHasColor
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
     * @ORM\Column(name="idColor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcolor;



    /**
     * Set idproduct.
     *
     * @param int $idproduct
     *
     * @return ProductHasColor
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
     * Set idcolor.
     *
     * @param int $idcolor
     *
     * @return ProductHasColor
     */
    public function setIdcolor($idcolor)
    {
        $this->idcolor = $idcolor;
    
        return $this;
    }

    /**
     * Get idcolor.
     *
     * @return int
     */
    public function getIdcolor()
    {
        return $this->idcolor;
    }
}
