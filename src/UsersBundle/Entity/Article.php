<?php

namespace UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articlee
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="UsersBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateParution", type="date")
     */
    private $dateParution;

    /**
     * @var Utilisateur
       @ORM\ManyToOne(targetEntity="Utilisateur")
       @ORM\JoinColumn(name="ref_user", referencedColumnName="id")
     */
    private $auteur;

    /**
     * @var Categorie
     *
       @ORM\ManyToOne(targetEntity="Categorie")
       @ORM\JoinColumn(name="ref_cat", referencedColumnName="id")
     */
    private $categorie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat = false;

    /**
     * @var string
     *
     * @ORM\Column(name="imageUrl", type="string", length=255)
     */
    private $imageUrl;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateParution
     *
     * @param \DateTime $dateParution
     *
     * @return Article
     */
    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     * Get dateParution
     *
     * @return \DateTime
     */
    public function getDateParution()
    {
        return $this->dateParution;
    }

    /**
     * Set auteur
     *
     * @param Utilisateur $auteur
     *
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return Utilisateur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set categorie
     *
     * @param Categorie $categorie
     *
     * @return Article
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Article
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     *
     * @return Article
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
}

