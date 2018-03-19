<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * paiement.
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\paiementRepository")
 */
class paiement
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
     * @ORM\Column(name="datePaiement", type="datetime")
     */
    private $datePaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=25)
     */
    private $periode;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\contrat")
     * @ORM\JoinColumn(name="idContrat", referencedColumnName="id")
     */
    private $idContrat;

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
     * Set datePaiement.
     *
     * @param \DateTime $datePaiement
     *
     * @return paiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement.
     *
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set montant.
     *
     * @param int $montant
     *
     * @return paiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant.
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set periode.
     *
     * @param \DateTime $periode
     *
     * @return paiement
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode.
     *
     * @return \DateTime
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set idContrat.
     *
     * @param \SNT\ReservationBundle\Entity\contrat $idContrat
     *
     * @return paiement
     */
    public function setIdContrat(\SNT\ReservationBundle\Entity\contrat $idContrat = null)
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    /**
     * Get idContrat.
     *
     * @return \SNT\ReservationBundle\Entity\contrat
     */
    public function getIdContrat()
    {
        return $this->idContrat;
    }
}
