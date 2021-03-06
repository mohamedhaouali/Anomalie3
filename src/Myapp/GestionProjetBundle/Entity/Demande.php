<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\DemandeRepository")
 */
class Demande
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

     /**
   * @ORM\ManyToOne(targetEntity="intervenant", cascade={"remove"})
   * @ORM\JoinColumn(name="intervenant_id", referencedColumnName="id", onDelete="SET NULL")}
   * @Assert\NotBlank()
    */
    
     private $nom4; 
    
        /**
   * @ORM\ManyToOne(targetEntity="Client", cascade={"remove"})
   * @ORM\JoinColumn(name="client_id", referencedColumnName="id", onDelete="SET NULL")}
   * @Assert\NotBlank()
    */
    
     private $nom;
     
    
    /**
   * @ORM\ManyToOne(targetEntity="Module", cascade={"remove"})
   * @ORM\JoinColumn(name="module_id", referencedColumnName="id", onDelete="SET NULL")}
   * @Assert\NotBlank()
    */
    
     private $nom1;
 
       /**
   * @ORM\ManyToOne(targetEntity="Application", cascade={"remove"})
   * @ORM\JoinColumn(name="application_id", referencedColumnName="id", onDelete="SET NULL")}
   * @Assert\NotBlank()
    */
    
     private $titre1; 
     
     
 
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
     * @return Demande
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
     * @return Demande
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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Demande
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
        return $this->nom.' '.$this->nom4;
        // to show the id of the Category in the select
        // return $this->id;
    }
    
    
 

    /**
     * Set nom4
     *
     * @param \Myapp\GestionProjetBundle\Entity\intervenant $nom4
     *
     * @return Demande
     */
    public function setNom4(\Myapp\GestionProjetBundle\Entity\intervenant $nom4 = null)
    {
        $this->nom4 = $nom4;

        return $this;
    }

    /**
     * Get nom4
     *
     * @return \Myapp\GestionProjetBundle\Entity\intervenant
     */
    public function getNom4()
    {
        return $this->nom4;
    }


    /**
     * Set nom
     *
     * @param \Myapp\GestionProjetBundle\Entity\Client $nom
     *
     * @return Demande
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

    /**
     * Set nom1
     *
     * @param \Myapp\GestionProjetBundle\Entity\Module $nom1
     *
     * @return Demande
     */
    public function setNom1(\Myapp\GestionProjetBundle\Entity\Module $nom1 = null)
    {
        $this->nom1 = $nom1;

        return $this;
    }

    /**
     * Get nom1
     *
     * @return \Myapp\GestionProjetBundle\Entity\Module
     */
    public function getNom1()
    {
        return $this->nom1;
    }

    /**
     * Set titre1
     *
     * @param \Myapp\GestionProjetBundle\Entity\Application $titre1
     *
     * @return Demande
     */
    public function setTitre1(\Myapp\GestionProjetBundle\Entity\Application $titre1 = null)
    {
        $this->titre1 = $titre1;

        return $this;
    }

    /**
     * Get titre1
     *
     * @return \Myapp\GestionProjetBundle\Entity\Application
     */
    public function getTitre1()
    {
        return $this->titre1;
    }
}
