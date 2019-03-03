<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Basket
 *
 * @ORM\Table(name="basket")
 * @ORM\Entity
 */
class Basket
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="date", nullable=false)
     */
    private $creationdate;

    /**
     * @var int
     *
     * @ORM\Column(name="idBasket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbasket;

    /**
     * @var int
     *
     * @ORM\Column(name="idSession", type="integer", nullable=false)
     */
    private $idsession;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="date", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer", nullable=false)
     */
    private $statut;



    /**
     * Set creationdate.
     *
     * @param \DateTime $creationdate
     *
     * @return Basket
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;
    
        return $this;
    }

    /**
     * Get creationdate.
     *
     * @return \DateTime
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Get idbasket.
     *
     * @return int
     */
    public function getIdbasket()
    {
        return $this->idbasket;
    }

    /**
     * Set idsession.
     *
     * @param int $idsession
     *
     * @return Basket
     */
    public function setIdsession($idsession)
    {
        $this->idsession = $idsession;
    
        return $this;
    }

    /**
     * Get idsession.
     *
     * @return int
     */
    public function getIdsession()
    {
        return $this->idsession;
    }

    /**
     * Set lastUpdate.
     *
     * @param \DateTime $lastUpdate
     *
     * @return Basket
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    
        return $this;
    }

    /**
     * Get lastUpdate.
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set statut.
     *
     * @param int $statut
     *
     * @return Basket
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut.
     *
     * @return int
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
