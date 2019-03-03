<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review", indexes={@ORM\Index(name="idProduct", columns={"idProduct"})})
 * @ORM\Entity
 */
class Review
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReview", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreview;

    /**
     * @var int
     *
     * @ORM\Column(name="ReviewStar", type="integer", nullable=false)
     */
    private $reviewstar;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

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
     * Get idreview.
     *
     * @return int
     */
    public function getIdreview()
    {
        return $this->idreview;
    }

    /**
     * Set reviewstar.
     *
     * @param int $reviewstar
     *
     * @return Review
     */
    public function setReviewstar($reviewstar)
    {
        $this->reviewstar = $reviewstar;
    
        return $this;
    }

    /**
     * Get reviewstar.
     *
     * @return int
     */
    public function getReviewstar()
    {
        return $this->reviewstar;
    }

    /**
     * Set comment.
     *
     * @param string $comment
     *
     * @return Review
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set idproduct.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product|null $idproduct
     *
     * @return Review
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
