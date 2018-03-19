<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * quartier.
 *
 * @ORM\Table(name="quartier")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\quartierRepository")
 */
class quartier
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
     * @ORM\Column(name="nomQuartier", type="string", length=50)
     */
    private $nomQuartier;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\ville")
     * @ORM\JoinColumn(name="idVille", referencedColumnName="id")
     */
    private $ville;

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
     * Set nomQuartier.
     *
     * @param string $nomQuartier
     *
     * @return quartier
     */
    public function setNomQuartier($nomQuartier)
    {
        $this->nomQuartier = $nomQuartier;

        return $this;
    }

    /**
     * Get nomQuartier.
     *
     * @return string
     */
    public function getNomQuartier()
    {
        return $this->nomQuartier;
    }

    /**
     * Set ville.
     *
     * @param \SNT\ReservationBundle\Entity\ville $ville
     *
     * @return quartier
     */
    public function setVille(\SNT\ReservationBundle\Entity\ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return \SNT\ReservationBundle\Entity\ville
     */
    public function getVille()
    {
        return $this->ville;
    }
}
