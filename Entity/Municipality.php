<?php

namespace AppBundle\Entity\Regional;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Municipio
 * @see https://drive.google.com/open?id=0B2_iIJT0Ssv0UU56SWstQUVhdVU
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @ORM\Table(name="regional_municipality")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Entity()
 */
class Municipality
{   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Nombre del Municipio
     * @var string
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * Estado
     * @var \AppBundle\Entity\Regional\State
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Regional\State", inversedBy="municipalities")
     */
    private $state;
    
    /**
     * Parroquias
     * @var \AppBundle\Entity\Regional\Parish
     * @ORM\OneToMany(targetEntity="\AppBundle\Entity\Regional\Parish", mappedBy="municipality")
     */
    private $parishes;
    
    /**
     * Ciudades
     * @var \AppBundle\Entity\Regional\City
     * @ORM\OneToMany(targetEntity="\AppBundle\Entity\Regional\City", mappedBy="municipality")
     */
    private $cities;
    
    public function __construct() 
    {
        $this->parishes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Municipality
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
     * @return Municipality
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
     * Add parish
     *
     * @param \AppBundle\Entity\Regional\Parish $parish
     *
     * @return Municipality
     */
    public function addParish(\AppBundle\Entity\Regional\Parish $parish)
    {
        $this->parishes[] = $parish;

        return $this;
    }

    /**
     * Remove parish
     *
     * @param \AppBundle\Entity\Regional\Parish $parish
     */
    public function removeParish(\AppBundle\Entity\Regional\Parish $parish)
    {
        $this->parishes->removeElement($parish);
    }

    /**
     * Get parishes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParishes()
    {
        return $this->parishes;
    }

    /**
     * Add city
     *
     * @param \AppBundle\Entity\Regional\City $city
     *
     * @return Municipality
     */
    public function addCity(\AppBundle\Entity\Regional\City $city)
    {
        $this->cities[] = $city;

        return $this;
    }

    /**
     * Remove city
     *
     * @param \AppBundle\Entity\Regional\City $city
     */
    public function removeCity(\AppBundle\Entity\Regional\City $city)
    {
        $this->cities->removeElement($city);
    }

    /**
     * Get cities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCities()
    {
        return $this->cities;
    }
}
