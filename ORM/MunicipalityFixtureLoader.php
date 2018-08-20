<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Interfaces\DataFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Regional\Municipality;

/**
 * Description of MunicipalityFixtureLoader
 *
 * @author Máximo Sojo maxsojo13@gmail.com <maxtoan at atechnologies>
 */
class MunicipalityFixtureLoader extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface, DataFixtureInterface 
{
    public function load(ObjectManager $manager) 
    {
        $municipality = new Municipality();
        $municipality->setName('Alto orinoco');
        $municipality->setState($this->getReference('VEN-STATE-VE-X'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-X-MUNICIPALITY-2',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Atabapo');
        $municipality->setState($this->getReference('VEN-STATE-VE-X'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-X-MUNICIPALITY-3',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Atures');
        $municipality->setState($this->getReference('VEN-STATE-VE-X'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-X-MUNICIPALITY-4',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Autana');
        $municipality->setState($this->getReference('VEN-STATE-VE-X'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-X-MUNICIPALITY-5',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Maroa');
        $municipality->setState($this->getReference('VEN-STATE-VE-X'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-X-MUNICIPALITY-6',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Manapiare');
        $municipality->setState($this->getReference('VEN-STATE-VE-X'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-X-MUNICIPALITY-7',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Rio negro');
        $municipality->setState($this->getReference('VEN-STATE-VE-X'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-X-MUNICIPALITY-8',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Anaco');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-9',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Aragua');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-10',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Peñalver');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-11',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Carvajal');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-12',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Miranda');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-13',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Guanta');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-14',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Independencia');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-15',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sotillo');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-16',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cajigal');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-17',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Monagas');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-18',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertad');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-19',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bruzual');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-20',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Freites');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-21',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Piritu');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-22',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Guanipa');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-23',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Juan de Capistrano');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-24',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Santa Ana');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-25',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-26',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Simon Rodriguez');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-27',$municipality);


        $municipality = new Municipality();
        $municipality->setName('McGregor');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-28',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Diego Bautista Urbaneja');
        $municipality->setState($this->getReference('VEN-STATE-VE-B'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-B-MUNICIPALITY-29',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Achaguas');
        $municipality->setState($this->getReference('VEN-STATE-VE-C'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-C-MUNICIPALITY-30',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Biruaca');
        $municipality->setState($this->getReference('VEN-STATE-VE-C'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-C-MUNICIPALITY-31',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Muñoz');
        $municipality->setState($this->getReference('VEN-STATE-VE-C'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-C-MUNICIPALITY-32',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Paez');
        $municipality->setState($this->getReference('VEN-STATE-VE-C'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-C-MUNICIPALITY-33',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pedro Camejo');
        $municipality->setState($this->getReference('VEN-STATE-VE-C'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-C-MUNICIPALITY-34',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Romulo Gallegos');
        $municipality->setState($this->getReference('VEN-STATE-VE-C'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-C-MUNICIPALITY-35',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Fernando');
        $municipality->setState($this->getReference('VEN-STATE-VE-C'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-C-MUNICIPALITY-36',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-37',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Gregorio Monagas');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-38',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Girardot');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-39',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Angel Lamas');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-40',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Felix Ribas');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-41',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Rafael Revenga');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-42',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertador');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-43',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Mario Briceño Iragorry');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-44',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Casimiro');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-45',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Sebastian');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-46',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Santiago Mariño');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-47',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Santos Michelena');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-48',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-49',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tovar');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-50',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Urdaneta');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-51',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Zamora');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-52',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Francisco Linares Alcantara');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-53',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ocumare de la Costa de Oro');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-54',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Camatagua');
        $municipality->setState($this->getReference('VEN-STATE-VE-D'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-D-MUNICIPALITY-55',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Alberto Arvelo Torrealba');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-56',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Antonio Jose de Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-57',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Arismendi');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-58',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Barinas');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-59',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-60',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cruz Paredes');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-61',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ezequiel Zamora');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-62',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Obispos');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-63',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pedraza');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-64',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Rojas');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-65',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sosa');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-66',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Andres Eloy Blanco');
        $municipality->setState($this->getReference('VEN-STATE-VE-E'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-E-MUNICIPALITY-67',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Caroni');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-68',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cedeño');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-69',$municipality);


        $municipality = new Municipality();
        $municipality->setName('El Callao');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-70',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Gran Sabana');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-71',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Heres');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-72',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Piar');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-73',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Angostura');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-74',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Roscio');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-75',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sifontes');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-76',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-77',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Padre Pedro Chien');
        $municipality->setState($this->getReference('VEN-STATE-VE-F'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-F-MUNICIPALITY-78',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bejuma');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-79',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Carlos Arvelo');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-80',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Diego Ibarra');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-81',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Guacara');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-82',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Juan Jose Mora');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-83',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertador');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-84',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Los Guayos');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-85',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Miranda');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-86',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Montalban');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-87',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Naguanagua');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-88',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Puerto Cabello');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-89',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Diego');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-90',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Joaquin');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-91',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Valencia');
        $municipality->setState($this->getReference('VEN-STATE-VE-G'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-G-MUNICIPALITY-92',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Anzoategui');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-93',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Girardot');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-94',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Lima Blanco');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-95',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pao de San Juan Bautista');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-96',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ricaurte');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-97',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Romulo Gallegos');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-98',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ezequiel Zamora');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-99',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tinaco');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-100',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tinaquillo');
        $municipality->setState($this->getReference('VEN-STATE-VE-H'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-H-MUNICIPALITY-101',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Antonio Diaz');
        $municipality->setState($this->getReference('VEN-STATE-VE-Y'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-Y-MUNICIPALITY-102',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Casacoima');
        $municipality->setState($this->getReference('VEN-STATE-VE-Y'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-Y-MUNICIPALITY-103',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pedernales');
        $municipality->setState($this->getReference('VEN-STATE-VE-Y'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-Y-MUNICIPALITY-104',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tucupita');
        $municipality->setState($this->getReference('VEN-STATE-VE-Y'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-Y-MUNICIPALITY-105',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Acosta');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-106',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-107',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Buchivacoa');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-108',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cacique Manaure');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-109',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Carirubana');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-110',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Colina');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-111',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Dabajuro');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-112',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Democracia');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-113',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Falcon');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-114',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Federacion');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-115',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jacura');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-116',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Los Taques');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-117',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Mauroa');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-118',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Miranda');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-119',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Monseñor Iturriza');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-120',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Palmasola');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-121',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Petit');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-122',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Piritu');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-123',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Francisco');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-124',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Silva');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-125',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-126',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tocopero');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-127',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Union');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-128',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Urumaco');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-129',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Zamora');
        $municipality->setState($this->getReference('VEN-STATE-VE-I'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-I-MUNICIPALITY-130',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Camaguan');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-131',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Chaguaramas');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-132',$municipality);


        $municipality = new Municipality();
        $municipality->setName('El socorro');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-133',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Geronimo de Guayabal');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-134',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Federacion');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-135',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Leonardo Infante');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-136',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Las Mercedes');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-137',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Julian Mellado');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-138',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Francisco de Miranda');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-139',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Tadeo Monagas');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-140',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ortiz');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-141',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Felix Ribas');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-142',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Juan German Roscio');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-143',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Jose de Guaribe');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-144',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Santa Maria de Ipire');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-145',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pedro Zaraza');
        $municipality->setState($this->getReference('VEN-STATE-VE-J'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-J-MUNICIPALITY-146',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Andres Eloy Blanco');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-147',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Crespo');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-148',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Iribarren');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-149',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jimenez');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-150',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Moran');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-151',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Palavecino');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-152',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Simon Planas');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-153',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Torres');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-154',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Urdaneta');
        $municipality->setState($this->getReference('VEN-STATE-VE-K'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-K-MUNICIPALITY-155',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Alberto Adriani');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-156',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Andres Bello');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-157',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Antonio Pinto Salinas');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-158',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Aricagua');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-159',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Arzobispo Chacon');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-160',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Caraccilo Parra y Olmedo');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-161',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Campo Elias');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-162',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Felix Ribas');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-163',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cardenal Quintero');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-164',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Guaraque');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-165',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Julio Cesar Salas');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-166',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Justo Briceño');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-167',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertador');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-168',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Miranda');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-169',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Obispo Ramos de Lora');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-170',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Padre Noguera');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-171',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pueblo Llano');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-172',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Rangel');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-173',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Rivas Davila');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-174',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Santos Marquina');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-175',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-176',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tovar');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-177',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tulio Febres Cordero');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-178',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Zea');
        $municipality->setState($this->getReference('VEN-STATE-VE-L'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-L-MUNICIPALITY-179',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Acevedo');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-180',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Andres Bello');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-181',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Baruta');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-182',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Brion');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-183',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Buroz');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-184',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Carrizal');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-185',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Chacao');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-186',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cristobal Rojas');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-187',$municipality);


        $municipality = new Municipality();
        $municipality->setName('El Hatillo');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-188',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Guaicaipuro');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-189',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Independencia');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-190',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tomas Lander');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-191',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Los Salias');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-192',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Paez');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-193',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Paz Castillo');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-194',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pedro Gual');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-195',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Plaza');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-196',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Simon Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-197',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-198',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Urdaneta');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-199',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Zamora');
        $municipality->setState($this->getReference('VEN-STATE-VE-M'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-M-MUNICIPALITY-200',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Acosta');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-201',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Aguasay');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-202',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-203',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Caripe');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-204',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cedeño');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-205',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ezequiel Zamora');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-206',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertador');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-207',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Maturin');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-208',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Piar');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-209',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Punceres');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-210',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Santa Barbara');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-211',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sotillo');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-212',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Uracoa');
        $municipality->setState($this->getReference('VEN-STATE-VE-N'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-N-MUNICIPALITY-213',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Antolin del Campo');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-214',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Arismendi');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-215',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Diaz');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-216',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Garcia');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-217',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Gomez');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-218',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Maneiro');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-219',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Marcano');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-220',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Mariño');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-221',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Peninsula de Macanao');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-222',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Tubores');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-223',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Villalba');
        $municipality->setState($this->getReference('VEN-STATE-VE-O'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-O-MUNICIPALITY-224',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Agua Blanca');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-225',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Araure');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-226',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Esteller');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-227',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Guanare');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-228',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Guanarito');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-229',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Monseñor');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-230',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ospino');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-231',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Paez');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-232',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Papelon');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-233',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Genaro de Boconoito');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-234',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Rafael de Onoto');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-235',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Santa Rosalia');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-236',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-237',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Turen');
        $municipality->setState($this->getReference('VEN-STATE-VE-P'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-P-MUNICIPALITY-238',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Andres Eloy Blanco');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-239',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Andres Mata');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-240',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Arismendi');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-241',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Benítez');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-242',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bermudez');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-243',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-244',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cajigal');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-245',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cruz Salmeron Acosta');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-246',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertador');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-247',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Mariño');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-248',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Mejia');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-249',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Montes');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-250',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ribero');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-251',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-252',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Valdez');
        $municipality->setState($this->getReference('VEN-STATE-VE-R'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-R-MUNICIPALITY-253',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Andres Bello');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-254',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Antonio Romulo Costa');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-255',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Ayacucho');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-256',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-257',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cardenas');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-258',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cordoba');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-259',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Fernandez Feo');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-260',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Francisco de Miranda');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-261',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Garcia de Hevia');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-262',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bermudez');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-263',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Independencia');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-264',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jauregui');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-265',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Maria Vargas');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-266',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Junin');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-267',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertad');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-268',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertador');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-269',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Lobatera');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-270',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Michelena');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-271',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Panamericano');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-272',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pedro Maria Ureña');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-273',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Rafael Urdaneta');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-274',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Samuel Dario Maldonado');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-275',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Cristobal');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-276',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Seboruco');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-277',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Simon Rodriguez');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-278',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-279',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Torbes');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-280',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Uribante');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-281',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Guasimo');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-282',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Judas Tadeo');
        $municipality->setState($this->getReference('VEN-STATE-VE-S'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-S-MUNICIPALITY-283',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Andres Bello');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-284',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bocono');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-285',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-286',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Candelaria');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-287',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Carache');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-288',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Escuque');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-289',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Marquez Caziñales');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-290',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Campo Elias');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-291',$municipality);


        $municipality = new Municipality();
        $municipality->setName('La Ceiba');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-292',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Miranda');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-293',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Monte Carmelo');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-294',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Motatan');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-295',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pampan');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-296',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Pampanito');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-297',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Rafael Rangel');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-298',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Rafael de Carvajal');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-299',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-300',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Trujillo');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-301',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Urdaneta');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-302',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Valera');
        $municipality->setState($this->getReference('VEN-STATE-VE-T'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-T-MUNICIPALITY-303',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Vargas');
        $municipality->setState($this->getReference('VEN-STATE-VE-W'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-W-MUNICIPALITY-339',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bastidas');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-304',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-305',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Bruzual');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-306',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cocorote');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-307',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Independencia');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-308',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jose Antonio Paez');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-309',$municipality);


        $municipality = new Municipality();
        $municipality->setName('La Trinidad');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-310',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Manuel Monge');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-311',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Nirgua');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-312',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Peña');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-313',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Felipe');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-314',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-315',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Urachiche');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-316',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Veroes');
        $municipality->setState($this->getReference('VEN-STATE-VE-U'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-U-MUNICIPALITY-317',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Almirante Padilla');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-318',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Baralt');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-319',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Cabimas');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-320',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Catatumbo');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-321',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Colon');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-322',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Francisco Javier Pulgar');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-323',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jesus Enrique Lossada ');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-324',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Jesus Maria Semprun');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-325',$municipality);


        $municipality = new Municipality();
        $municipality->setName('La Cañada de Urdaneta');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-326',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Lagunillas');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-327',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Machiques de Perija');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-328',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Mara');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-329',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Maracaibo');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-330',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Miranda');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-331',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Indígena Bolivariano Guajira');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-332',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Rosario de Perija');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-333',$municipality);


        $municipality = new Municipality();
        $municipality->setName('San Francisco');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-334',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Santa Rita');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-335',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Simon Bolivar');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-336',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Sucre');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-337',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Valmore Rodriguez');
        $municipality->setState($this->getReference('VEN-STATE-VE-V'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-V-MUNICIPALITY-338',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Libertador');
        $municipality->setState($this->getReference('VEN-STATE-VE-A'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-A-MUNICIPALITY-1',$municipality);


        $municipality = new Municipality();
        $municipality->setName('Dependencias Federales');
        $municipality->setState($this->getReference('VEN-STATE-VE-Z'));
        $manager->persist($municipality);
        $manager->flush();
        $this->addReference('VEN-VE-Z-MUNICIPALITY-340',$municipality);
        
    }
    
    public function getOrder() 
    {
        return 3;
    }
    
    public function getNameTrans()
    {
        return 'dataFixtures.municipality';
    }
    
    public function getAlias() 
    {
        return 'municipality';
    }
}