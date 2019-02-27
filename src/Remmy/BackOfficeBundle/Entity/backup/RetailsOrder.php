<?php

namespace Remmy\BackOfficeBundle\Entity\backup;
use Doctrine\ORM\Mapping as ORM;

/**
 * RetailsOrder
 *
 * @ORM\Table(name="retails_order", indexes={@ORM\Index(name="idOrder", columns={"idOrder"}), @ORM\Index(name="idProduct", columns={"idProduct"})})
 * @ORM\Entity
 */
class RetailsOrder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRetail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idretail;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_unit", type="integer", nullable=false)
     */
    private $priceUnit;

    /**
     * @var integer
     *
     * @ORM\Column(name="taxe_unit", type="integer", nullable=false)
     */
    private $taxeUnit;

    /**
     * @var \UserOrder
     *
     * @ORM\ManyToOne(targetEntity="UserOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOrder", referencedColumnName="idOrder")
     * })
     */
    private $idorder;

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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return RetailsOrder
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set priceUnit
     *
     * @param integer $priceUnit
     *
     * @return RetailsOrder
     */
    public function setPriceUnit($priceUnit)
    {
        $this->priceUnit = $priceUnit;

        return $this;
    }

    /**
     * Get priceUnit
     *
     * @return integer
     */
    public function getPriceUnit()
    {
        return $this->priceUnit;
    }

    /**
     * Set taxeUnit
     *
     * @param integer $taxeUnit
     *
     * @return RetailsOrder
     */
    public function setTaxeUnit($taxeUnit)
    {
        $this->taxeUnit = $taxeUnit;

        return $this;
    }

    /**
     * Get taxeUnit
     *
     * @return integer
     */
    public function getTaxeUnit()
    {
        return $this->taxeUnit;
    }

    /**
     * Get idretail
     *
     * @return integer
     */
    public function getIdretail()
    {
        return $this->idretail;
    }

    /**
     * Set idorder
     *
     * @param \Remmy\BackOfficeBundle\Entity\UserOrder $idorder
     *
     * @return RetailsOrder
     */
    public function setIdorder(\Remmy\BackOfficeBundle\Entity\UserOrder $idorder = null)
    {
        $this->idorder = $idorder;

        return $this;
    }

    /**
     * Get idorder
     *
     * @return \Remmy\BackOfficeBundle\Entity\UserOrder
     */
    public function getIdorder()
    {
        return $this->idorder;
    }

    /**
     * Set idproduct
     *
     * @param \Remmy\BackOfficeBundle\Entity\Product $idproduct
     *
     * @return RetailsOrder
     */
    public function setIdproduct(\Remmy\BackOfficeBundle\Entity\Product $idproduct = null)
    {
        $this->idproduct = $idproduct;

        return $this;
    }

    /**
     * Get idproduct
     *
     * @return \Remmy\BackOfficeBundle\Entity\Product
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }
}
