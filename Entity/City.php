<?php

namespace AppBundle\Entity\Regional;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Ciudad
 * @see https://drive.google.com/open?id=0B2_iIJT0Ssv0NVFMa2p3aVJOU1k
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @ORM\Table(name="regional_city")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Entity()
 */
class City
{   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Nombre de la Ciudad
     * @var string
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;
    
    /**
     * ¿La ciudad es capital del estado?
     * @var boolean
     * @ORM\Column(name="capital", type="boolean")
     */
    private $capital = false;
    
    /**
     * Estado
     * @var \AppBundle\Entity\Regional\State
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Regional\State", inversedBy="cities")
     */
    private $state;
    
    /**
     * Municipio
     * @var \AppBundle\Entity\Regional\Municipality
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Regional\Municipality", inversedBy="cities", cascade={"persist"})
     */
    private $municipality;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    public function __toString() 
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     *
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set capital
     *
     * @param boolean $capital
     *
     * @return City
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return boolean
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set state
     *
     * @param \AppBundle\Entity\Regional\State $state
     *
     * @return City
     */
    public function setState(\AppBundle\Entity\Regional\State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \AppBundle\Entity\Regional\State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set municipality
     *
     * @param \AppBundle\Entity\Regional\Municipality $municipality
     *
     * @return City
     */
    public function setMunicipality(\AppBundle\Entity\Regional\Municipality $municipality = null)
    {
        $this->municipality = $municipality;

        return $this;
    }

    /**
     * Get municipality
     *
     * @return \AppBundle\Entity\Regional\Municipality
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }
}
