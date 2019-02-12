<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="descriprtion", type="text")
     */
    private $descriprtion;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
    
    
    /**
   * @ORM\ManyToOne(targetEntity="Client", cascade={"remove"})
   * @ORM\JoinColumn(name="client_id", referencedColumnName="id", onDelete="SET NULL")}
   * @Assert\NotBlank()
    */
    
     private $nom;
    
    

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
     * @return Projet
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
     * Set descriprtion
     *
     * @param string $descriprtion
     *
     * @return Projet
     */
    public function setDescriprtion($descriprtion)
    {
        $this->descriprtion = $descriprtion;

        return $this;
    }

    /**
     * Get descriprtion
     *
     * @return string
     */
    public function getDescriprtion()
    {
        return $this->descriprtion;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Projet
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }
    
    public function __toString(){
        // to show the name of the Category in the select
        return $this->nom;
        // to show the id of the Category in the select
        // return $this->id;
    }

    /**
     * Set nom
     *
     * @param \Myapp\GestionProjetBundle\Entity\Client $nom
     *
     * @return Projet
     */
    public function setNom(\Myapp\GestionProjetBundle\Entity\Client $nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return \Myapp\GestionProjetBundle\Entity\Client
     */
    public function getNom()
    {
        return $this->nom;
    }
}
