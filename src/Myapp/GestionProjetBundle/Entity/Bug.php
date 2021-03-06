<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Bug
 *
 * @ORM\Table(name="bug")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\BugRepository")
 */
class Bug {

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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;
    
     
 
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
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads';
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Bug
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bug
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Bug
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Bug
     */
    public function setClient($client) {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient() {
        return $this->client;
    }

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
                $this->getUploadRootDir(), $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Film
     */
    public function setPath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath() {
        return $this->path;
    }




    /**
     * Set nom1
     *
     * @param \Myapp\GestionProjetBundle\Entity\Module $nom1
     *
     * @return Bug
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
     * @return Bug
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
