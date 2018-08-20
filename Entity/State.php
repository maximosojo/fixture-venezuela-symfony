<?php

namespace AppBundle\Entity\Regional;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Estados
 * @see https://drive.google.com/open?id=0B2_iIJT0Ssv0UFY5TFE5Z1libWs
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @ORM\Table(name="regional_state")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Entity()
 */
class State
{   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Nombre del Estado
     * @var string
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * Código ISO 3166-2
     * @see http://es.wikipedia.org/wiki/ISO_3166-2
     * @var string 
     * @ORM\Column(name="code", type="string", length=5,nullable=true)
     */
    private $code;
    
    /**
     * País
     * @var \AppBundle\Entity\Regional\Country
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Regional\Country", inversedBy="states")
     */
    private $country;
    
    /**
     * Municipios
     * @var \AppBundle\Entity\Regional\Municipality
     * @ORM\OneToMany(targetEntity="\AppBundle\Entity\Regional\Municipality", mappedBy="state")
     */
    private $municipalities;
    
    /**
     * Parroquias
     * @var \AppBundle\Entity\Regional\Parish
     * @ORM\OneToMany(targetEntity="\AppBundle\Entity\Regional\Parish", mappedBy="state")
     */
    private $parishes;
    
    /**
     * Ciudades
     * @var \AppBundle\Entity\Regional\City
     * @ORM\OneToMany(targetEntity="\AppBundle\Entity\Regional\City", mappedBy="state")
     */
    private $cities;
    
    public function __construct() 
    {
        $this->municipalities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return State
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
     * Set code
     *
     * @param string $code
     *
     * @return State
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set country
     *
     * @param \AppBundle\Entity\Regional\Country $country
     *
     * @return State
     */
    public function setCountry(\AppBundle\Entity\Regional\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Regional\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add municipality
     *
     * @param \AppBundle\Entity\Regional\Municipality $municipality
     *
     * @return State
     */
    public function addMunicipality(\AppBundle\Entity\Regional\Municipality $municipality)
    {
        $this->municipalities[] = $municipality;

        return $this;
    }

    /**
     * Remove municipality
     *
     * @param \AppBundle\Entity\Regional\Municipality $municipality
     */
    public function removeMunicipality(\AppBundle\Entity\Regional\Municipality $municipality)
    {
        $this->municipalities->removeElement($municipality);
    }

    /**
     * Get municipalities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMunicipalities()
    {
        return $this->municipalities;
    }

    /**
     * Add parish
     *
     * @param \AppBundle\Entity\Regional\Parish $parish
     *
     * @return State
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
     * @return State
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
