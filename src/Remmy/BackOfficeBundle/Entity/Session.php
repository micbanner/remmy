<?php

namespace Remmy\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSession", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsession;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idUser", type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="date", nullable=false)
     */
    private $datecreate;



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
     * Set iduser.
     *
     * @param int|null $iduser
     *
     * @return Session
     */
    public function setIduser($iduser = null)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser.
     *
     * @return int|null
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set datecreate.
     *
     * @param \DateTime $datecreate
     *
     * @return Session
     */
    public function setDatecreate($datecreate)
    {
        $this->datecreate = $datecreate;
    
        return $this;
    }

    /**
     * Get datecreate.
     *
     * @return \DateTime
     */
    public function getDatecreate()
    {
        return $this->datecreate;
    }
}
