<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Color
 *
 * @ORM\Table(name="color")
 * @ORM\Entity
 */
class Color
{
    /**
     * @var int
     *
     * @ORM\Column(name="idColor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="codeColor", type="string", length=10, nullable=false)
     */
    private $codecolor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="idcolor")
     */
    private $idproduct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idproduct = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Color
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
     * Set codecolor.
     *
     * @param string $codecolor
     *
     * @return Color
     */
    public function setCodecolor($codecolor)
    {
        $this->codecolor = $codecolor;
    
        return $this;
    }

    /**
     * Get codecolor.
     *
     * @return string
     */
    public function getCodecolor()
    {
        return $this->codecolor;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Color
     */
    public function setDescription($description = null)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add idproduct.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $idproduct
     *
     * @return Color
     */
    public function addIdproduct(\Remmy\BackOfficeBundle\Entity\Product $idproduct)
    {
        $this->idproduct[] = $idproduct;
    
        return $this;
    }

    /**
     * Remove idproduct.
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $idproduct
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdproduct(\Remmy\BackOfficeBundle\Entity\Product $idproduct)
    {
        return $this->idproduct->removeElement($idproduct);
    }

    /**
     * Get idproduct.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }
}
