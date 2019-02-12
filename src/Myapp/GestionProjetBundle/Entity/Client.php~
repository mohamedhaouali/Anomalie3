<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

  

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Client
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Client
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

   
  

  public function __toString()
    {
        return $this->titre1.' '.$this->nom1 ;
    }
   
 
    
    
    
    /**
     * Set nom1
     *
     * @param \Myapp\GestionProjetBundle\Entity\Module $nom1
     *
     * @return Client
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
     * @return Client
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
