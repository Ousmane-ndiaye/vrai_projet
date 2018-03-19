<?php

namespace SNT\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client.
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="SNT\ReservationBundle\Repository\clientRepository")
 */
class client
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
     * @ORM\Column(name="nomClient", type="string", length=50)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="numCni", type="string", length=16, unique=true)
     */
    private $numCni;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", unique=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, unique=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    private $password;

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
     * Set nomClient.
     *
     * @param string $nomClient
     *
     * @return client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient.
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return client
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
     * Set telephone.
     *
     * @param int $telephone
     *
     * @return client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return client
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
     * Set login.
     *
     * @param string $login
     *
     * @return client
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set numCni.
     *
     * @param int $numCni
     *
     * @return client
     */
    public function setNumCni($numCni)
    {
        $this->numCni = $numCni;

        return $this;
    }

    /**
     * Get numCni.
     *
     * @return int
     */
    public function getNumCni()
    {
        return $this->numCni;
    }
}
