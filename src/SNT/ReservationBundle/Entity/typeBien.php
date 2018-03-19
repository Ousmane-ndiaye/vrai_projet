<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * typeBien.
 *
 * @ORM\Table(name="type_bien")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\typeBienRepository")
 */
class typeBien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomTypeBien", type="string", length=50, unique=true)
     */
    private $nomTypeBien;

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
     * Set nomTypeBien.
     *
     * @param string $nomTypeBien
     *
     * @return typeBien
     */
    public function setNomTypeBien($nomTypeBien)
    {
        $this->nomTypeBien = $nomTypeBien;

        return $this;
    }

    /**
     * Get nomTypeBien.
     *
     * @return string
     */
    public function getNomTypeBien()
    {
        return $this->nomTypeBien;
    }
}
