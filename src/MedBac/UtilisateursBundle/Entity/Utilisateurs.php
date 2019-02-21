<?php
// src/AppBundle/Entity/User.php
namespace MedBac\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    
     /**
   * @ORM\OneToMany(targetEntity="Myapp\GestionProjetBundle\Entity\UtilisateursAdress",mappedBy="utilisateur",cascade="remove")
   * @ORM\JoinColumn(nullable=true)
    */
   private $adresses;
   
  
   
    public function __construct()
    {
        parent::__construct();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enabled = false;
        $this->locked = false;
        $this->expired = false;
        $this->roles = array();
        $this->credentialsExpired = false;  
     
        
    }
    
    
    
    public function getParent() {
        return 'FOSUserBundle';
    }

}