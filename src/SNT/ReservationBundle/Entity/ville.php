<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ville.
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\villeRepository")
 */
class ville
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
     * @ORM\Column(name="nomVille", type="string", length=50, unique=true)
     */
    private $nomVille;

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
     * Set nomVille.
     *
     * @param string $nomVille
     *
     * @return ville
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get nomVille.
     *
     * @return string
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }
}
