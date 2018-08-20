<?php

namespace AppBundle\Entity\Regional;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Pais
 * @see https://drive.google.com/open?id=0B2_iIJT0Ssv0UzR0eGFBVjg4ckU
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @ORM\Table(name="regional_country",uniqueConstraints={@ORM\UniqueConstraint(name="alphaCode_idx",columns={"alphaCode"}),@ORM\UniqueConstraint(name="numericalCode_idx",columns={"numericalCode"}) } )
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Entity()
 */
class Country
{   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Nombre del país
     * @var String 
     * @ORM\Column(name="name",type="string")
     */
    private $name;
    
    /**
     * Nombre ISO
     * @var String 
     * @ORM\Column(name="nameISO",type="string")
     */
    private $nameISO;
    
    /**
     * Código alfa
     * @var string
     * @ORM\Column(name="alphaCode",type="string",length=3)
     */
    private $alphaCode;
    
    /**
     * Código numérico
     * @var string
     * @ORM\Column(name="numericalCode",type="integer")
     */
    private $numericalCode;
    
    /**
     * Prefijo Telefónico del país
     * @var string
     * @ORM\Column(name="telephonePrefix", type="string", length=50, nullable=true)
     */
    private $telephonePrefix;
    
    /**
     * Estados
     * @var \AppBundle\Entity\Regional\State
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Regional\State", mappedBy="country")
     */
    private $states;
    
    public function __construct() 
    {
        $this->states = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Country
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
     * Set nameISO
     *
     * @param string $nameISO
     *
     * @return Country
     */
    public function setNameISO($nameISO)
    {
        $this->nameISO = $nameISO;

        return $this;
    }

    /**
     * Get nameISO
     *
     * @return string
     */
    public function getNameISO()
    {
        return $this->nameISO;
    }

    /**
     * Set alphaCode
     *
     * @param string $alphaCode
     *
     * @return Country
     */
    public function setAlphaCode($alphaCode)
    {
        $this->alphaCode = $alphaCode;

        return $this;
    }

    /**
     * Get alphaCode
     *
     * @return string
     */
    public function getAlphaCode()
    {
        return $this->alphaCode;
    }

    /**
     * Set numericalCode
     *
     * @param integer $numericalCode
     *
     * @return Country
     */
    public function setNumericalCode($numericalCode)
    {
        $this->numericalCode = $numericalCode;

        return $this;
    }

    /**
     * Get numericalCode
     *
     * @return integer
     */
    public function getNumericalCode()
    {
        return $this->numericalCode;
    }

    /**
     * Set telephonePrefix
     *
     * @param string $telephonePrefix
     *
     * @return Country
     */
    public function setTelephonePrefix($telephonePrefix)
    {
        $this->telephonePrefix = $telephonePrefix;

        return $this;
    }

    /**
     * Get telephonePrefix
     *
     * @return string
     */
    public function getTelephonePrefix()
    {
        return $this->telephonePrefix;
    }

    /**
     * Add state
     *
     * @param \AppBundle\Entity\Regional\State $state
     *
     * @return Country
     */
    public function addState(\AppBundle\Entity\Regional\State $state)
    {
        $this->states[] = $state;

        return $this;
    }

    /**
     * Remove state
     *
     * @param \AppBundle\Entity\Regional\State $state
     */
    public function removeState(\AppBundle\Entity\Regional\State $state)
    {
        $this->states->removeElement($state);
    }

    /**
     * Get states
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStates()
    {
        return $this->states;
    }
}
