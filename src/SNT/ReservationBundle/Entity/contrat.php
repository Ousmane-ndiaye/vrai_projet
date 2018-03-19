<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contrat.
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\contratRepository")
 */
class contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateContrat", type="datetime")
     */
    private $dateContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=25)
     */
    private $duree;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\client")
     * @ORM\JoinColumn(name="idClient", unique=false, referencedColumnName="id")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\Bien")
     * @ORM\JoinColumn(name="idBien", unique=false, referencedColumnName="id")
     */
    private $bien;

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
     * Set dateContrat.
     *
     * @param \DateTime $dateContrat
     *
     * @return contrat
     */
    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;

        return $this;
    }

    /**
     * Get dateContrat.
     *
     * @return \DateTime
     */
    public function getDateContrat()
    {
        return $this->dateContrat;
    }

    /**
     * Set caution.
     *
     * @param int $caution
     *
     * @return contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution.
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree.
     *
     * @param \DateTime $duree
     *
     * @return contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree.
     *
     * @return \DateTime
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set client.
     *
     * @param \SNT\ReservationBundle\Entity\client $client
     *
     * @return contrat
     */
    public function setClient(\SNT\ReservationBundle\Entity\client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return \SNT\ReservationBundle\Entity\client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set bien.
     *
     * @param \SNT\ReservationBundle\Entity\Bien $bien
     *
     * @return contrat
     */
    public function setBien(\SNT\ReservationBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien.
     *
     * @return \SNT\ReservationBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }
}
