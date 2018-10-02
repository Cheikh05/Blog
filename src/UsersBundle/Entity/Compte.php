<?php

namespace UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity(repositoryClass="UsersBundle\Repository\CompteRepository")
 */
class Compte
{
    /**
     * @var int
     *
     * @ORM\Column(name="idd", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idd;

    /**
     * @var string
     *
     * @ORM\Column(name="usernamee", type="string", length=100, unique=true)
     */
    private $usernamee;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordd", type="string", length=255)
     */
    private $passwordd;


    /**
     * Get idd
     *
     * @return int
     */
    public function getIdd()
    {
        return $this->idd;
    }

    /**
     * Set usernamee
     *
     * @param string $usernamee
     *
     * @return Compte
     */
    public function setUsername($usernamee)
    {
        $this->usernamee = $usernamee;

        return $this;
    }

    /**
     * Get usernamee
     *
     * @return string
     */
    public function getUsernamee()
    {
        return $this->usernamee;
    }

    /**
     * Set passwordd
     *
     * @param string $passwordd
     *
     * @return Compte
     */
    public function setPasswordd($passwordd)
    {
        $this->passwordd = $passwordd;

        return $this;
    }

    /**
     * Get passwordd
     *
     * @return string
     */
    public function getPasswordd()
    {
        return $this->passwordd;
    }

    /**
     * Set usernamee
     *
     * @param string $usernamee
     *
     * @return Compte
     */
    public function setUsernamee($usernamee)
    {
        $this->usernamee = $usernamee;

        return $this;
    }
}
