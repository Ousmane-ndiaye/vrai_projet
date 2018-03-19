<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien.
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\BienRepository")
 */
class Bien
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
     * @ORM\Column(name="nomBien", type="string", length=50)
     */
    private $nomBien;

    /**
     * @var int
     *
     * @ORM\Column(name="prixLoc", type="integer", length=15, nullable=false, unique=false)
     */
    private $prixLoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date")
     */
    private $dateAjout;

    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=50)
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="nbreChambre", type="string", length=50, nullable=true)
     */
    private $nbreChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="nbreEtage", type="string", length=50, nullable=true)
     */
    private $nbreEtage;

    /**
     * @var string
     *
     * @ORM\Column(name="nbreSalon", type="string", length=50, nullable=true)
     */
    private $nbreSalon;

    /**
     * @var string
     *
     * @ORM\Column(name="nbreSallebain", type="string", length=50, nullable=true)
     */
    private $nbreSallebain;

    /**
     * @var bool
     *
     * @ORM\Column(name="balcon", type="boolean", nullable=true)
     */
    private $balcon;

    /**
     * @var bool
     *
     * @ORM\Column(name="meuble", type="boolean", nullable=true)
     */
    private $meuble;

    /**
     * @var bool
     *
     * @ORM\Column(name="parking", type="boolean", nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponibilite", type="boolean")
     */
    private $disponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\proprietaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $proprietaire;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\Bien")
     * @ORM\JoinColumn(name="idSousBien", referencedColumnName="id", nullable=true)
     */
    private $sousBien;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\typeBien")
     * @ORM\JoinColumn(name="idTypeBien", referencedColumnName="id")
     */
    private $typeBien;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\ReservationBundle\Entity\quartier")
     * @ORM\JoinColumn(name="idQuartier", referencedColumnName="id")
     */
    private $quartier;

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
     * Set prixLoc.
     *
     * @param int $prixLoc
     *
     * @return Bien
     */
    public function setPrixLoc($prixLoc)
    {
        $this->prixLoc = $prixLoc;

        return $this;
    }

    /**
     * Get prixLoc.
     *
     * @return int
     */
    public function getPrixLoc()
    {
        return $this->prixLoc;
    }

    /**
     * Set dateAjout.
     *
     * @param \DateTime $dateAjout
     *
     * @return Bien
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout.
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set surface.
     *
     * @param string $surface
     *
     * @return Bien
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface.
     *
     * @return string
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set nbreChambre.
     *
     * @param string $nbreChambre
     *
     * @return Bien
     */
    public function setNbreChambre($nbreChambre)
    {
        $this->nbreChambre = $nbreChambre;

        return $this;
    }

    /**
     * Get nbreChambre.
     *
     * @return string
     */
    public function getNbreChambre()
    {
        return $this->nbreChambre;
    }

    /**
     * Set nbreEtage.
     *
     * @param string $nbreEtage
     *
     * @return Bien
     */
    public function setNbreEtage($nbreEtage)
    {
        $this->nbreEtage = $nbreEtage;

        return $this;
    }

    /**
     * Get nbreEtage.
     *
     * @return string
     */
    public function getNbreEtage()
    {
        return $this->nbreEtage;
    }

    /**
     * Set nbreSalon.
     *
     * @param string $nbreSalon
     *
     * @return Bien
     */
    public function setNbreSalon($nbreSalon)
    {
        $this->nbreSalon = $nbreSalon;

        return $this;
    }

    /**
     * Get nbreSalon.
     *
     * @return string
     */
    public function getNbreSalon()
    {
        return $this->nbreSalon;
    }

    /**
     * Set nbreSallebain.
     *
     * @param string $nbreSallebain
     *
     * @return Bien
     */
    public function setNbreSallebain($nbreSallebain)
    {
        $this->nbreSallebain = $nbreSallebain;

        return $this;
    }

    /**
     * Get nbreSallebain.
     *
     * @return string
     */
    public function getNbreSallebain()
    {
        return $this->nbreSallebain;
    }

    /**
     * Set balcon.
     *
     * @param string $balcon
     *
     * @return Bien
     */
    public function setBalcon($balcon)
    {
        $this->balcon = $balcon;

        return $this;
    }

    /**
     * Get balcon.
     *
     * @return string
     */
    public function getBalcon()
    {
        return $this->balcon;
    }

    /**
     * Set meuble.
     *
     * @param string $meuble
     *
     * @return Bien
     */
    public function setMeuble($meuble)
    {
        $this->meuble = $meuble;

        return $this;
    }

    /**
     * Get meuble.
     *
     * @return string
     */
    public function getMeuble()
    {
        return $this->meuble;
    }

    /**
     * Set parking.
     *
     * @param string $parking
     *
     * @return Bien
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking.
     *
     * @return string
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set disponibilite.
     *
     * @param string $disponibilite
     *
     * @return Bien
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite.
     *
     * @return string
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Bien
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set proprietaire.
     *
     * @param \SNT\ReservationBundle\Entity\Proprietaire $proprietaire
     *
     * @return Bien
     */
    public function setProprietaire(\SNT\ReservationBundle\Entity\proprietaire $proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire.
     *
     * @return \SNT\ReservationBundle\Entity\proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set sousBien.
     *
     * @param \SNT\ReservationBundle\Entity\Bien $sousBien
     *
     * @return Bien
     */
    public function setSousBien(\SNT\ReservationBundle\Entity\Bien $sousBien = null)
    {
        $this->SousBien = $sousBien;

        return $this;
    }

    /**
     * Get sousBien.
     *
     * @return \SNT\ReservationBundle\Entity\Bien
     */
    public function getSousBien()
    {
        return $this->SousBien;
    }

    /**
     * Set typeBien.
     *
     * @param \SNT\ReservationBundle\Entity\typeBien $typeBien
     *
     * @return Bien
     */
    public function setTypeBien(\SNT\ReservationBundle\Entity\typeBien $typeBien = null)
    {
        $this->TypeBien = $typeBien;

        return $this;
    }

    /**
     * Get typeBien.
     *
     * @return \SNT\ReservationBundle\Entity\typeBien
     */
    public function getTypeBien()
    {
        return $this->TypeBien;
    }

    /**
     * Set quartier.
     *
     * @param \SNT\ReservationBundle\Entity\quartier $quartier
     *
     * @return Bien
     */
    public function setQuartier(\SNT\ReservationBundle\Entity\quartier $quartier = null)
    {
        $this->quartier = $quartier;

        return $this;
    }

    /**
     * Get quartier.
     *
     * @return \SNT\ReservationBundle\Entity\quartier
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set nomBien.
     *
     * @param string $nomBien
     *
     * @return Bien
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    /**
     * Get nomBien.
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }
}
