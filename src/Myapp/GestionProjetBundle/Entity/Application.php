<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\ApplicationRepository")
 */
class Application
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
     * @ORM\Column(name="titre1", type="string", length=255)
     */
    private $titre1;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Application
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

  




    
        
   
    
    
    public function __toString(){
        // to show the name of the Category in the select
        return $this->nom1.' '.$this->titre1;
        // to show the id of the Category in the select
        // return $this->id;
    }

    /**
     * Set titre1
     *
     * @param string $titre1
     *
     * @return Application
     */
    public function setTitre1($titre1)
    {
        $this->titre1 = $titre1;

        return $this;
    }

    /**
     * Get titre1
     *
     * @return string
     */
    public function getTitre1()
    {
        return $this->titre1;
    }

 

    /**
     * Set nom1
     *
     * @param \Myapp\GestionProjetBundle\Entity\Module $nom1
     *
     * @return Application
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
}
