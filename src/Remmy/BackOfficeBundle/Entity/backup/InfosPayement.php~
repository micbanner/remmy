<?php

namespace Remmy\BackOfficeBundle\Entity\backup;
use Doctrine\ORM\Mapping as ORM;

/**
 * InfosPayement
 *
 * @ORM\Table(name="infos_payement", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class InfosPayement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPayement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpayement;

    /**
     * @var string
     *
     * @ORM\Column(name="typePayement", type="string", length=255, nullable=false)
     */
    private $typepayement;

    /**
     * @var integer
     *
     * @ORM\Column(name="cardNumber", type="integer", nullable=true)
     */
    private $cardnumber;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;



    /**
     * Set typepayement
     *
     * @param string $typepayement
     *
     * @return InfosPayement
     */
    public function setTypepayement($typepayement)
    {
        $this->typepayement = $typepayement;

        return $this;
    }

    /**
     * Get typepayement
     *
     * @return string
     */
    public function getTypepayement()
    {
        return $this->typepayement;
    }

    /**
     * Set cardnumber
     *
     * @param integer $cardnumber
     *
     * @return InfosPayement
     */
    public function setCardnumber($cardnumber)
    {
        $this->cardnumber = $cardnumber;

        return $this;
    }

    /**
     * Get cardnumber
     *
     * @return integer
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }

    /**
     * Get idpayement
     *
     * @return integer
     */
    public function getIdpayement()
    {
        return $this->idpayement;
    }

    /**
     * Set iduser
     *
     * @param \Remmy\BackOfficeBundle\Entity\FosUser $iduser
     *
     * @return InfosPayement
     */
    public function setIduser(\Remmy\BackOfficeBundle\Entity\FosUser $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Remmy\BackOfficeBundle\Entity\FosUser
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
