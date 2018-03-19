<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * proprietaire.
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\proprietaireRepository")
 */
class proprietaire
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
     * @ORM\Column(name="numPiece", type="string", length=50, unique=true)
     */
    private $numPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=50)
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", unique=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, unique=true)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="codeBanque", type="integer", nullable=true, unique=true)
     */
    private $codeBanque;

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
     * Set numPiece.
     *
     * @param int $numPiece
     *
     * @return proprietaire
     */
    public function setNumPiece($numPiece)
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    /**
     * Get numPiece.
     *
     * @return int
     */
    public function getNumPiece()
    {
        return $this->numPiece;
    }

    /**
     * Set nomComplet.
     *
     * @param string $nomComplet
     *
     * @return proprietaire
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet.
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return proprietaire
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
     * Set tel.
     *
     * @param int $tel
     *
     * @return proprietaire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return proprietaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set codeBanque.
     *
     * @param int $codeBanque
     *
     * @return proprietaire
     */
    public function setCodeBanque($codeBanque)
    {
        $this->codeBanque = $codeBanque;

        return $this;
    }

    /**
     * Get codeBanque.
     *
     * @return int
     */
    public function getCodeBanque()
    {
        return $this->codeBanque;
    }
}
