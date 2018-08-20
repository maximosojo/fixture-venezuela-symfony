<?php

namespace AppBundle\Entity\Regional;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Parroquias
 * @see https://drive.google.com/open?id=0B2_iIJT0Ssv0a182M1ZZYUx5bE0
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @ORM\Table(name="regional_parish")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Entity()
 */
class Parish
{   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Nombre de la Parroquia
     * @var string
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;
    
    /**
     * Estado
     * @var \AppBundle\Entity\Regional\State
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Regional\State", inversedBy="parishes")
     */
    private $state;
    
    /**
     * Municipio
     * @var \AppBundle\Entity\Regional\Municipality
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Regional\Municipality", inversedBy="parishes",cascade={"persist"})
     */
    private $municipality;

    public function __toString() 
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     *
     * @return Parish
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
     * Set state
     *
     * @param \AppBundle\Entity\Regional\State $state
     *
     * @return Parish
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
     * @return Parish
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
