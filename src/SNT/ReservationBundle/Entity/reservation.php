<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reservation.
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\reservationRepository")
 */
class reservation
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\Bien")
     * @ORM\JoinColumn(name="idBien", referencedColumnName="id")
     */
    private $bien;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\client")
     * @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     */
    private $client;

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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etat.
     *
     * @param bool $etat
     *
     * @return reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat.
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set bien.
     *
     * @param \SNT\ReservationBundle\Entity\Bien $bien
     *
     * @return reservation
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

    /**
     * Set client.
     *
     * @param \SNT\ReservationBundle\Entity\client $client
     *
     * @return reservation
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
}
