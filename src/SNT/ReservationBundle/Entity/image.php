<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * image.
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\imageRepository")
 */
class image
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
     * @ORM\Column(name="chemin", type="string", length=60)
     */
    private $chemin;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\Bien")
     * @ORM\JoinColumn(name="idBien", referencedColumnName="id")
     */
    private $idBien;

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
     * Set chemin.
     *
     * @param string $chemin
     *
     * @return image
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin.
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Set idBien.
     *
     * @param \SNT\ReservationBundle\Entity\Bien $idBien
     *
     * @return image
     */
    public function setIdBien(\SNT\ReservationBundle\Entity\Bien $idBien = null)
    {
        $this->idBien = $idBien;

        return $this;
    }

    /**
     * Get idBien.
     *
     * @return \SNT\ReservationBundle\Entity\Bien
     */
    public function getIdBien()
    {
        return $this->idBien;
    }
}
