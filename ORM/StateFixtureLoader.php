<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Interfaces\DataFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Regional\State;

/**
 * Description of StateFixtureLoader
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class StateFixtureLoader extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface, DataFixtureInterface 
{
    public function load(ObjectManager $manager)
    {
        $state = new State();
        $state->setName('Amazonas');
        $state->setCode('VE-X');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-X',$state);


        $state = new State();
        $state->setName('Anzoátegui');
        $state->setCode('VE-B');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-B',$state);


        $state = new State();
        $state->setName('Apure');
        $state->setCode('VE-C');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-C',$state);


        $state = new State();
        $state->setName('Aragua');
        $state->setCode('VE-D');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-D',$state);


        $state = new State();
        $state->setName('Barinas');
        $state->setCode('VE-E');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-E',$state);


        $state = new State();
        $state->setName('Bolívar');
        $state->setCode('VE-F');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-F',$state);


        $state = new State();
        $state->setName('Carabobo');
        $state->setCode('VE-G');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-G',$state);


        $state = new State();
        $state->setName('Cojedes');
        $state->setCode('VE-H');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-H',$state);


        $state = new State();
        $state->setName('Delta Amacuro');
        $state->setCode('VE-Y');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-Y',$state);


        $state = new State();
        $state->setName('Falcón');
        $state->setCode('VE-I');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-I',$state);


        $state = new State();
        $state->setName('Guárico');
        $state->setCode('VE-J');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-J',$state);


        $state = new State();
        $state->setName('Lara');
        $state->setCode('VE-K');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-K',$state);


        $state = new State();
        $state->setName('Mérida');
        $state->setCode('VE-L');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-L',$state);


        $state = new State();
        $state->setName('Miranda');
        $state->setCode('VE-M');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-M',$state);


        $state = new State();
        $state->setName('Monagas');
        $state->setCode('VE-N');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-N',$state);


        $state = new State();
        $state->setName('Nueva Esparta');
        $state->setCode('VE-O');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-O',$state);


        $state = new State();
        $state->setName('Portuguesa');
        $state->setCode('VE-P');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-P',$state);


        $state = new State();
        $state->setName('Sucre');
        $state->setCode('VE-R');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-R',$state);


        $state = new State();
        $state->setName('Táchira');
        $state->setCode('VE-S');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-S',$state);


        $state = new State();
        $state->setName('Trujillo');
        $state->setCode('VE-T');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-T',$state);


        $state = new State();
        $state->setName('Vargas');
        $state->setCode('VE-W');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-W',$state);


        $state = new State();
        $state->setName('Yaracuy');
        $state->setCode('VE-U');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-U',$state);


        $state = new State();
        $state->setName('Zulia');
        $state->setCode('VE-V');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-V',$state);


        $state = new State();
        $state->setName('Distrito Capital');
        $state->setCode('VE-A');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-A',$state);


        $state = new State();
        $state->setName('Dependencias Federales');
        $state->setCode('VE-Z');
        $state->setCountry($this->getReference('COUNTRY-VEN'));
        $manager->persist($state);
        $manager->flush();
        $this->addReference('VEN-STATE-VE-Z',$state);
        
    }
    
    public function getOrder() 
    {
        return 2;
    }
    
    public function getNameTrans()
    {
        return 'dataFixtures.state';
    }
    
    public function getAlias() 
    {
        return 'state';
    }
}
