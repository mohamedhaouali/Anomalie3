<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\ModuleRepository")
 */
class Module
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

   
    
    public function __toString(){
        // to show the name of the Category in the select
        return $this->nom1;
        // to show the id of the Category in the select
        // return $this->id;
    }

    /**
     * Set nom1
     *
     * @param string $nom1
     *
     * @return Module
     */
    public function setNom1($nom1)
    {
        $this->nom1 = $nom1;

        return $this;
    }

    /**
     * Get nom1
     *
     * @return string
     */
    public function getNom1()
    {
        return $this->nom1;
    }
}
