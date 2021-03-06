<?php
namespace Myapp\GestionProjetBundle\Entity;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;
use Doctrine\ORM\Mapping as ORM;
/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;
    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="text")
     */
    private $sujet;
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
     * @return Contact
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
     * Set email
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Contact
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
        return $this;
    }
    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }
    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Contact
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
        return $this;
    }
    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }
}