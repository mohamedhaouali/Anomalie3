<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * intervenant
 *
 * @ORM\Table(name="intervenant")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\intervenantRepository")
 */
class intervenant
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
     * @ORM\Column(name="nom4", type="string", length=255)
     */
    private $nom4;


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
     * Set nom4
     *
     * @param string $nom4
     *
     * @return intervenant
     */
    public function setNom4($nom4)
    {
        $this->nom4 = $nom4;

        return $this;
    }

    /**
     * Get nom4
     *
     * @return string
     */
    public function getNom4()
    {
        return $this->nom4;
    }
    
      public function __toString(){
        // to show the name of the Category in the select
        return $this->nom4;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
