<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Interfaces\DataFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Regional\City;

/**
 * Description of CityFixtureLoader
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class CityFixtureLoader extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface, DataFixtureInterface 
{
    public function load(ObjectManager $manager) 
    {
        $city = new City();
        $city->setName('La Esmeralda');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-CITY-2',$city);


        $city = new City();
        $city->setName('Acanaña');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-CITY-3',$city);


        $city = new City();
        $city->setName('Toky-Shamanaña');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-CITY-4',$city);


        $city = new City();
        $city->setName('Mavaca');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-CITY-5',$city);


        $city = new City();
        $city->setName('Parimabé');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-CITY-6',$city);


        $city = new City();
        $city->setName('San Fernando de Atabapo');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-3'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-3-CITY-7',$city);


        $city = new City();
        $city->setName('Laja Lisa');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-3'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-3-CITY-8',$city);


        $city = new City();
        $city->setName('Macuruco');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-3'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-3-CITY-9',$city);


        $city = new City();
        $city->setName('Guarinuma');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-3'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-3-CITY-10',$city);


        $city = new City();
        $city->setName('Puerto Ayacucho');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-4'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-4-CITY-11',$city);


        $city = new City();
        $city->setName('Limón de Parhueña');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-4'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-4-CITY-12',$city);


        $city = new City();
        $city->setName('Platanillal');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-4'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-4-CITY-13',$city);


        $city = new City();
        $city->setName('Samariapo');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-5'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-5-CITY-14',$city);


        $city = new City();
        $city->setName('Pendare');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-5'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-5-CITY-15',$city);


        $city = new City();
        $city->setName('Munduapo');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-5'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-5-CITY-16',$city);


        $city = new City();
        $city->setName('San Pedro del Orinoco ');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-5'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-5-CITY-17',$city);


        $city = new City();
        $city->setName('Maroa');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-6'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-6-CITY-18',$city);


        $city = new City();
        $city->setName('Victorino');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-6'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-6-CITY-19',$city);


        $city = new City();
        $city->setName('Comunidad');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-6'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-6-CITY-20',$city);


        $city = new City();
        $city->setName('San Juan de Manapiare');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-7'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-7-CITY-21',$city);


        $city = new City();
        $city->setName('Cacurí');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-7'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-7-CITY-22',$city);


        $city = new City();
        $city->setName('Camani');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-7'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-7-CITY-23',$city);


        $city = new City();
        $city->setName('Marueta');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-7'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-7-CITY-24',$city);


        $city = new City();
        $city->setName('San Carlos de Río Negro');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-8'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-8-CITY-25',$city);


        $city = new City();
        $city->setName('Solano');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-8'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-8-CITY-26',$city);


        $city = new City();
        $city->setName('Curimacare');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-8'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-8-CITY-27',$city);


        $city = new City();
        $city->setName('Santa Lucía');
        $city->setState($this->getReference('VEN-STATE-VE-X'));
        $city->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-8'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-X-8-CITY-28',$city);


        $city = new City();
        $city->setName('Anaco');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-9'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-9-CITY-29',$city);


        $city = new City();
        $city->setName('San Joaquín');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-9'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-9-CITY-30',$city);


        $city = new City();
        $city->setName('Buena Vista');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-9'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-9-CITY-31',$city);


        $city = new City();
        $city->setName('Aragua de Barcelona');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-10'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-10-CITY-32',$city);


        $city = new City();
        $city->setName('Cachipo');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-10'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-10-CITY-33',$city);


        $city = new City();
        $city->setName('Puerto Píritu');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-11'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-11-CITY-34',$city);


        $city = new City();
        $city->setName('San Miguel');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-11'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-11-CITY-35',$city);


        $city = new City();
        $city->setName('El Hatillo');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-11'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-11-CITY-36',$city);


        $city = new City();
        $city->setName('Valle de Guanape');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-12'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-12-CITY-37',$city);


        $city = new City();
        $city->setName('Santa Bárbara');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-12'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-12-CITY-38',$city);


        $city = new City();
        $city->setName('Pariaguán');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-CITY-39',$city);


        $city = new City();
        $city->setName('Atapirire');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-CITY-40',$city);


        $city = new City();
        $city->setName('Boca del Pao');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-CITY-41',$city);


        $city = new City();
        $city->setName('El Pao de Barcelona');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-CITY-42',$city);


        $city = new City();
        $city->setName('Múcura');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-CITY-43',$city);


        $city = new City();
        $city->setName('Guanta');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-14'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-14-CITY-44',$city);


        $city = new City();
        $city->setName('Pertigalete');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-14'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-14-CITY-45',$city);


        $city = new City();
        $city->setName('Soledad');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-15'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-15-CITY-46',$city);


        $city = new City();
        $city->setName('Carapa');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-15'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-15-CITY-47',$city);


        $city = new City();
        $city->setName('Puerto La Cruz');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-16'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-16-CITY-48',$city);


        $city = new City();
        $city->setName('Pozuelos');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-16'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-16-CITY-49',$city);


        $city = new City();
        $city->setName('Onoto');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-17'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-17-CITY-50',$city);


        $city = new City();
        $city->setName('San Pablo');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-17'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-17-CITY-51',$city);


        $city = new City();
        $city->setName('Mapire');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-CITY-52',$city);


        $city = new City();
        $city->setName('Santa Cruz de Orinoco');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-CITY-53',$city);


        $city = new City();
        $city->setName('San Diego de Cabrutica');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-CITY-54',$city);


        $city = new City();
        $city->setName('Santa Clara');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-CITY-55',$city);


        $city = new City();
        $city->setName('Uverito');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-CITY-56',$city);


        $city = new City();
        $city->setName('Zuata');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-CITY-57',$city);


        $city = new City();
        $city->setName('San Mateo');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-19'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-19-CITY-58',$city);


        $city = new City();
        $city->setName('El Carito');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-19'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-19-CITY-59',$city);


        $city = new City();
        $city->setName('Santa Inés');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-19'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-19-CITY-60',$city);


        $city = new City();
        $city->setName('Clarines');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-20'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-20-CITY-61',$city);


        $city = new City();
        $city->setName('Guanape');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-20'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-20-CITY-62',$city);


        $city = new City();
        $city->setName('Sabana de Uchire');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-20'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-20-CITY-63',$city);


        $city = new City();
        $city->setName('Cantaura');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-21'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-21-CITY-64',$city);


        $city = new City();
        $city->setName('Mundo Nuevo');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-21'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-21-CITY-65',$city);


        $city = new City();
        $city->setName('Santa Rosa');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-21'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-21-CITY-66',$city);


        $city = new City();
        $city->setName('Urica');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-21'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-21-CITY-67',$city);


        $city = new City();
        $city->setName('Píritu');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-22'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-22-CITY-68',$city);


        $city = new City();
        $city->setName('San Francisco');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-22'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-22-CITY-69',$city);


        $city = new City();
        $city->setName('San José de Guanipa-El Tigrito');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-23'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-23-CITY-70',$city);


        $city = new City();
        $city->setName('Boca de Uchire');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-24'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-24-CITY-71',$city);


        $city = new City();
        $city->setName('Boca de Chávez');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-24'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-24-CITY-72',$city);


        $city = new City();
        $city->setName('Santa Ana');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-25'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-25-CITY-73',$city);


        $city = new City();
        $city->setName('Pueblo Nuevo');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-25'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-25-CITY-74',$city);


        $city = new City();
        $city->setName('Barcelona');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-CITY-75',$city);


        $city = new City();
        $city->setName('Barcelona');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-CITY-76',$city);


        $city = new City();
        $city->setName('Bergantín');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-CITY-77',$city);


        $city = new City();
        $city->setName('Caigua');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-CITY-78',$city);


        $city = new City();
        $city->setName('El Pilar');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-CITY-79',$city);


        $city = new City();
        $city->setName('Naricual');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-CITY-80',$city);


        $city = new City();
        $city->setName('El Tigre');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-27'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-27-CITY-81',$city);


        $city = new City();
        $city->setName('El Tigre');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-27'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-27-CITY-82',$city);


        $city = new City();
        $city->setName('El Chaparro');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-28'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-28-CITY-83',$city);


        $city = new City();
        $city->setName('José Gregorio Monagas');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-28'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-28-CITY-84',$city);


        $city = new City();
        $city->setName('Lecherías');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-29'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-29-CITY-85',$city);


        $city = new City();
        $city->setName('Lecherías');
        $city->setState($this->getReference('VEN-STATE-VE-B'));
        $city->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-29'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-B-29-CITY-86',$city);


        $city = new City();
        $city->setName('Achaguas');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-CITY-87',$city);


        $city = new City();
        $city->setName('Apurito');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-CITY-88',$city);


        $city = new City();
        $city->setName('El Yagual');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-CITY-89',$city);


        $city = new City();
        $city->setName('Guachara');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-CITY-90',$city);


        $city = new City();
        $city->setName('El Samán de Apure');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-CITY-91',$city);


        $city = new City();
        $city->setName('Guasimal');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-CITY-92',$city);


        $city = new City();
        $city->setName('Biruaca');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-31'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-31-CITY-93',$city);


        $city = new City();
        $city->setName('Bruzual');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-CITY-94',$city);


        $city = new City();
        $city->setName('Mantecal');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-CITY-95',$city);


        $city = new City();
        $city->setName('Quintero');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-CITY-96',$city);


        $city = new City();
        $city->setName('La Estacada');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-CITY-97',$city);


        $city = new City();
        $city->setName('San Vicente');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-CITY-98',$city);


        $city = new City();
        $city->setName('Guasdualito');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-CITY-99',$city);


        $city = new City();
        $city->setName('Palmarito');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-CITY-100',$city);


        $city = new City();
        $city->setName('El Amparo');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-CITY-101',$city);


        $city = new City();
        $city->setName('El Nula');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-CITY-102',$city);


        $city = new City();
        $city->setName('La Victoria');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-CITY-103',$city);


        $city = new City();
        $city->setName('San Juan de Payara');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-34'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-34-CITY-104',$city);


        $city = new City();
        $city->setName('Puerto Páez');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-34'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-34-CITY-105',$city);


        $city = new City();
        $city->setName('San Miguel de Cunaviche');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-34'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-34-CITY-106',$city);


        $city = new City();
        $city->setName('Elorza');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-35'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-35-CITY-107',$city);


        $city = new City();
        $city->setName('La Trinidad de Orichuna');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-35'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-35-CITY-108',$city);


        $city = new City();
        $city->setName('San Fernando de Apure');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-36'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-36-CITY-109',$city);


        $city = new City();
        $city->setName('El Recreo');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-36'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-36-CITY-110',$city);


        $city = new City();
        $city->setName('Arichuna');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-36'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-36-CITY-111',$city);


        $city = new City();
        $city->setName('San Rafael de Atamaica');
        $city->setState($this->getReference('VEN-STATE-VE-C'));
        $city->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-36'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-C-36-CITY-112',$city);


        $city = new City();
        $city->setName('San Mateo');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-37'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-37-CITY-113',$city);


        $city = new City();
        $city->setName('Camatagua');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-55'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-55-CITY-114',$city);


        $city = new City();
        $city->setName('Carmen de Cura');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-55'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-55-CITY-115',$city);


        $city = new City();
        $city->setName('Choroní');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-CITY-116',$city);


        $city = new City();
        $city->setName('Maracay');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-CITY-117',$city);


        $city = new City();
        $city->setName('Santa Cruz');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-40'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-40-CITY-118',$city);


        $city = new City();
        $city->setName('La Victoria');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-CITY-119',$city);


        $city = new City();
        $city->setName('Las Mercedes');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-CITY-120',$city);


        $city = new City();
        $city->setName('Las Guacamayas');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-CITY-121',$city);


        $city = new City();
        $city->setName('Pao de Zárate');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-CITY-122',$city);


        $city = new City();
        $city->setName('Zuata');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-CITY-123',$city);


        $city = new City();
        $city->setName('El Consejo');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-42'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-42-CITY-124',$city);


        $city = new City();
        $city->setName('Palo Negro');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-43'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-43-CITY-125',$city);


        $city = new City();
        $city->setName('La Pica');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-43'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-43-CITY-126',$city);


        $city = new City();
        $city->setName('El Limón');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-44'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-44-CITY-127',$city);


        $city = new City();
        $city->setName('Caña de Azúcar');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-44'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-44-CITY-128',$city);


        $city = new City();
        $city->setName('San Casimiro');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-45'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-45-CITY-129',$city);


        $city = new City();
        $city->setName('Güiripa');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-45'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-45-CITY-130',$city);


        $city = new City();
        $city->setName('Ollas de Caramacate');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-45'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-45-CITY-131',$city);


        $city = new City();
        $city->setName('Valle Morín');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-45'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-45-CITY-132',$city);


        $city = new City();
        $city->setName('San Sebastián de Los Reyes');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-46'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-46-CITY-133',$city);


        $city = new City();
        $city->setName('Turmero');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-CITY-134',$city);


        $city = new City();
        $city->setName('Rosario de Paya');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-CITY-135',$city);


        $city = new City();
        $city->setName('Chuao');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-CITY-136',$city);


        $city = new City();
        $city->setName('19 de Abril');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-CITY-137',$city);


        $city = new City();
        $city->setName('San Joaquín');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-CITY-138',$city);


        $city = new City();
        $city->setName('Las Tejerías');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-48'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-48-CITY-139',$city);


        $city = new City();
        $city->setName('Tiara');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-48'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-48-CITY-140',$city);


        $city = new City();
        $city->setName('Cagua');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-49'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-49-CITY-141',$city);


        $city = new City();
        $city->setName('Bella Vista');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-49'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-49-CITY-142',$city);


        $city = new City();
        $city->setName('La Colonia Tovar');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-50'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-50-CITY-143',$city);


        $city = new City();
        $city->setName('Barbacoas');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-51'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-51-CITY-144',$city);


        $city = new City();
        $city->setName('Las Peñitas');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-51'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-51-CITY-145',$city);


        $city = new City();
        $city->setName('San Francisco de Cara');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-51'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-51-CITY-146',$city);


        $city = new City();
        $city->setName('Taguay');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-51'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-51-CITY-147',$city);


        $city = new City();
        $city->setName('Villa de Cura');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-CITY-148',$city);


        $city = new City();
        $city->setName('Magdaleno');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-CITY-149',$city);


        $city = new City();
        $city->setName('San Francisco de Asís');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-CITY-150',$city);


        $city = new City();
        $city->setName('Los Bagres');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-CITY-151',$city);


        $city = new City();
        $city->setName('Tocorón');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-CITY-152',$city);


        $city = new City();
        $city->setName('Santa Rita');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-53'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-53-CITY-153',$city);


        $city = new City();
        $city->setName('Francisco de Miranda');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-53'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-53-CITY-154',$city);


        $city = new City();
        $city->setName('Paraparal');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-53'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-53-CITY-155',$city);


        $city = new City();
        $city->setName('Ocumare de la Costa');
        $city->setState($this->getReference('VEN-STATE-VE-D'));
        $city->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-54'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-D-54-CITY-156',$city);


        $city = new City();
        $city->setName('Sabaneta');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-56'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-56-CITY-157',$city);


        $city = new City();
        $city->setName('Veguitas');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-56'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-56-CITY-158',$city);


        $city = new City();
        $city->setName('Socopó');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-57'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-57-CITY-159',$city);


        $city = new City();
        $city->setName('Bum-Bum');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-57'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-57-CITY-160',$city);


        $city = new City();
        $city->setName('Chameta');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-57'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-57-CITY-161',$city);


        $city = new City();
        $city->setName('Arismendi');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-58'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-58-CITY-162',$city);


        $city = new City();
        $city->setName('Guadarrama');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-58'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-58-CITY-163',$city);


        $city = new City();
        $city->setName('La Unión');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-58'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-58-CITY-164',$city);


        $city = new City();
        $city->setName('San Antonio');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-58'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-58-CITY-165',$city);


        $city = new City();
        $city->setName('Quebrada Seca');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-166',$city);


        $city = new City();
        $city->setName('San Silvestre');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-167',$city);


        $city = new City();
        $city->setName('Santa Inés');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-168',$city);


        $city = new City();
        $city->setName('Santa Lucía');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-169',$city);


        $city = new City();
        $city->setName('Torunos');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-170',$city);


        $city = new City();
        $city->setName('Barinas');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-171',$city);


        $city = new City();
        $city->setName('La Caramuca');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-172',$city);


        $city = new City();
        $city->setName('El Corozo');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-173',$city);


        $city = new City();
        $city->setName('La Mula');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-CITY-174',$city);


        $city = new City();
        $city->setName('Barinitas');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-60'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-60-CITY-175',$city);


        $city = new City();
        $city->setName('Altamira');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-60'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-60-CITY-176',$city);


        $city = new City();
        $city->setName('Calderas');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-60'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-60-CITY-177',$city);


        $city = new City();
        $city->setName('Barrancas');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-61'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-61-CITY-178',$city);


        $city = new City();
        $city->setName('La Yuca');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-61'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-61-CITY-179',$city);


        $city = new City();
        $city->setName('Masparrito');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-61'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-61-CITY-180',$city);


        $city = new City();
        $city->setName('Santa Bárbara');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-62'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-62-CITY-181',$city);


        $city = new City();
        $city->setName('Pedraza La Vieja');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-62'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-62-CITY-182',$city);


        $city = new City();
        $city->setName('Capitanejo');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-62'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-62-CITY-183',$city);


        $city = new City();
        $city->setName('Punta de Piedra');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-62'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-62-CITY-184',$city);


        $city = new City();
        $city->setName('Obispos');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-63'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-63-CITY-185',$city);


        $city = new City();
        $city->setName('El Real');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-63'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-63-CITY-186',$city);


        $city = new City();
        $city->setName('La Luz');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-63'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-63-CITY-187',$city);


        $city = new City();
        $city->setName('Los Guasimitos');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-63'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-63-CITY-188',$city);


        $city = new City();
        $city->setName('Ciudad Bolivia');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-64'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-64-CITY-189',$city);


        $city = new City();
        $city->setName('Maporal');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-64'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-64-CITY-190',$city);


        $city = new City();
        $city->setName('Curbatí');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-64'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-64-CITY-191',$city);


        $city = new City();
        $city->setName('San Rafael de Canaguá');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-64'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-64-CITY-192',$city);


        $city = new City();
        $city->setName('Libertad');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-CITY-193',$city);


        $city = new City();
        $city->setName('Dolores');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-CITY-194',$city);


        $city = new City();
        $city->setName('Mijagual');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-CITY-195',$city);


        $city = new City();
        $city->setName('Santa Rosa');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-CITY-196',$city);


        $city = new City();
        $city->setName('Arauquita');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-CITY-197',$city);


        $city = new City();
        $city->setName('Ciudad de Nutrias');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-CITY-198',$city);


        $city = new City();
        $city->setName('El Regalo');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-CITY-199',$city);


        $city = new City();
        $city->setName('Puerto de Nutrias');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-CITY-200',$city);


        $city = new City();
        $city->setName('Santa Catalina');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-CITY-201',$city);


        $city = new City();
        $city->setName('Las Casitas del Vegón de Nutrias');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-CITY-202',$city);


        $city = new City();
        $city->setName('El Cantón');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-67'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-67-CITY-203',$city);


        $city = new City();
        $city->setName('Santa Cruz de Guacas');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-67'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-67-CITY-204',$city);


        $city = new City();
        $city->setName('Puerto Vivas');
        $city->setState($this->getReference('VEN-STATE-VE-E'));
        $city->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-67'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-E-67-CITY-205',$city);


        $city = new City();
        $city->setName('Ciudad Guayana');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-CITY-206',$city);


        $city = new City();
        $city->setName('Ciudad Guayana');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-CITY-207',$city);


        $city = new City();
        $city->setName('Pozo Verde');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-CITY-208',$city);


        $city = new City();
        $city->setName('El Rosario');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-CITY-209',$city);


        $city = new City();
        $city->setName('Moruca');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-CITY-210',$city);


        $city = new City();
        $city->setName('Caicara del Orinoco');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-CITY-211',$city);


        $city = new City();
        $city->setName('Las Bonitas');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-CITY-212',$city);


        $city = new City();
        $city->setName('Santa Rosalía');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-CITY-213',$city);


        $city = new City();
        $city->setName('El Milagro');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-CITY-214',$city);


        $city = new City();
        $city->setName('La Urbana');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-CITY-215',$city);


        $city = new City();
        $city->setName('Morichalito');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-CITY-216',$city);


        $city = new City();
        $city->setName('El Callao');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-70'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-70-CITY-217',$city);


        $city = new City();
        $city->setName('Santa Elena de Uairén');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-71'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-71-CITY-218',$city);


        $city = new City();
        $city->setName('Ikabarú');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-71'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-71-CITY-219',$city);


        $city = new City();
        $city->setName('Ciudad Bolívar');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-CITY-220',$city);


        $city = new City();
        $city->setName('Almacén');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-CITY-221',$city);


        $city = new City();
        $city->setName('San José de Bongo');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-CITY-222',$city);


        $city = new City();
        $city->setName('La Carolina');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-CITY-223',$city);


        $city = new City();
        $city->setName('Upata');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-73'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-73-CITY-224',$city);


        $city = new City();
        $city->setName('El Pao de El Hierro');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-73'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-73-CITY-225',$city);


        $city = new City();
        $city->setName('El Manteco');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-73'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-73-CITY-226',$city);


        $city = new City();
        $city->setName('Ciudad Piar');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-74'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-74-CITY-227',$city);


        $city = new City();
        $city->setName('La Paragua');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-74'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-74-CITY-228',$city);


        $city = new City();
        $city->setName('San Francisco');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-74'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-74-CITY-229',$city);


        $city = new City();
        $city->setName('Santa Bárbara de Centurión');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-74'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-74-CITY-230',$city);


        $city = new City();
        $city->setName('Guasipati');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-75'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-75-CITY-231',$city);


        $city = new City();
        $city->setName('El Miamo');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-75'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-75-CITY-232',$city);


        $city = new City();
        $city->setName('Tumeremo');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-76'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-76-CITY-233',$city);


        $city = new City();
        $city->setName('El Dorado');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-76'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-76-CITY-234',$city);


        $city = new City();
        $city->setName('Las Claritas');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-76'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-76-CITY-235',$city);


        $city = new City();
        $city->setName('Maripa');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-CITY-236',$city);


        $city = new City();
        $city->setName('Aripao');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-CITY-237',$city);


        $city = new City();
        $city->setName('Guarataro');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-CITY-238',$city);


        $city = new City();
        $city->setName('Las Majadas');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-CITY-239',$city);


        $city = new City();
        $city->setName('Moitaco');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-CITY-240',$city);


        $city = new City();
        $city->setName('El Palmar');
        $city->setState($this->getReference('VEN-STATE-VE-F'));
        $city->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-78'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-F-78-CITY-241',$city);


        $city = new City();
        $city->setName('Bejuma');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-79'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-79-CITY-242',$city);


        $city = new City();
        $city->setName('Canoabo');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-79'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-79-CITY-243',$city);


        $city = new City();
        $city->setName('Chirgua');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-79'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-79-CITY-244',$city);


        $city = new City();
        $city->setName('Güigüe');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-80'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-80-CITY-245',$city);


        $city = new City();
        $city->setName('Belén');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-80'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-80-CITY-246',$city);


        $city = new City();
        $city->setName('Central Tacarigua');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-80'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-80-CITY-247',$city);


        $city = new City();
        $city->setName('Mariara');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-81'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-81-CITY-248',$city);


        $city = new City();
        $city->setName('Guacara');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-82'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-82-CITY-249',$city);


        $city = new City();
        $city->setName('Yagua');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-82'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-82-CITY-250',$city);


        $city = new City();
        $city->setName('Morón');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-83'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-83-CITY-251',$city);


        $city = new City();
        $city->setName('Urama');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-83'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-83-CITY-252',$city);


        $city = new City();
        $city->setName('Tocuyito');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-84'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-84-CITY-253',$city);


        $city = new City();
        $city->setName('Los Guayos');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-85'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-85-CITY-254',$city);


        $city = new City();
        $city->setName('Miranda');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-86'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-86-CITY-255',$city);


        $city = new City();
        $city->setName('Montalbán');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-87'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-87-CITY-256',$city);


        $city = new City();
        $city->setName('Naguanagua');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-88'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-88-CITY-257',$city);


        $city = new City();
        $city->setName('Puerto Cabello');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-CITY-258',$city);


        $city = new City();
        $city->setName('Borburata');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-CITY-259',$city);


        $city = new City();
        $city->setName('Patanemo');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-CITY-260',$city);


        $city = new City();
        $city->setName('San Diego');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-90'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-90-CITY-261',$city);


        $city = new City();
        $city->setName('San Joaquín');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-91'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-91-CITY-262',$city);


        $city = new City();
        $city->setName('Valencia');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-CITY-263',$city);


        $city = new City();
        $city->setName('Valencia');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-CITY-264',$city);


        $city = new City();
        $city->setName('Los Naranjos');
        $city->setState($this->getReference('VEN-STATE-VE-G'));
        $city->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-CITY-265',$city);


        $city = new City();
        $city->setName('Cojedes');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-93'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-93-CITY-266',$city);


        $city = new City();
        $city->setName('Apartaderos');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-93'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-93-CITY-267',$city);


        $city = new City();
        $city->setName('Tinaquillo');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-101'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-101-CITY-268',$city);


        $city = new City();
        $city->setName('El Baúl');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-94'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-94-CITY-269',$city);


        $city = new City();
        $city->setName('Sucre');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-94'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-94-CITY-270',$city);


        $city = new City();
        $city->setName('Macapo');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-95'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-95-CITY-271',$city);


        $city = new City();
        $city->setName('La Aguadita');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-95'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-95-CITY-272',$city);


        $city = new City();
        $city->setName('El Pao');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-96'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-96-CITY-273',$city);


        $city = new City();
        $city->setName('Libertad');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-97'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-97-CITY-274',$city);


        $city = new City();
        $city->setName('El Amparo');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-97'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-97-CITY-275',$city);


        $city = new City();
        $city->setName('Las Vegas');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-98'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-98-CITY-276',$city);


        $city = new City();
        $city->setName('San Carlos');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-99'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-99-CITY-277',$city);


        $city = new City();
        $city->setName('La Sierra');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-99'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-99-CITY-278',$city);


        $city = new City();
        $city->setName('Manrique');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-99'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-99-CITY-279',$city);


        $city = new City();
        $city->setName('Tinaco');
        $city->setState($this->getReference('VEN-STATE-VE-H'));
        $city->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-100'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-H-100-CITY-280',$city);


        $city = new City();
        $city->setName('Curiapo');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-CITY-281',$city);


        $city = new City();
        $city->setName('Manoa');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-CITY-282',$city);


        $city = new City();
        $city->setName('Boca de Cuyubini');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-CITY-283',$city);


        $city = new City();
        $city->setName('Araguabisi');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-CITY-284',$city);


        $city = new City();
        $city->setName('San Francisco de Guayo');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-CITY-285',$city);


        $city = new City();
        $city->setName('Araguaimujo');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-CITY-286',$city);


        $city = new City();
        $city->setName('Sierra Imataca');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-CITY-287',$city);


        $city = new City();
        $city->setName('La Masa de Moriche');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-CITY-288',$city);


        $city = new City();
        $city->setName('Piacoa');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-CITY-289',$city);


        $city = new City();
        $city->setName('El Triunfo');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-CITY-290',$city);


        $city = new City();
        $city->setName('Santa Catalina');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-CITY-291',$city);


        $city = new City();
        $city->setName('Pedernales');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-104'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-104-CITY-292',$city);


        $city = new City();
        $city->setName('Capure');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-104'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-104-CITY-293',$city);


        $city = new City();
        $city->setName('Tucupita');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-CITY-294',$city);


        $city = new City();
        $city->setName('Hacienda del Medio');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-CITY-295',$city);


        $city = new City();
        $city->setName('Carapal de Guara');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-CITY-296',$city);


        $city = new City();
        $city->setName('Urbanización Leonardo Ruíz Pineda');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-CITY-297',$city);


        $city = new City();
        $city->setName('Paloma');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-CITY-298',$city);


        $city = new City();
        $city->setName('Urbanización Delfín Mendoza');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-CITY-299',$city);


        $city = new City();
        $city->setName('San Rafael');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-CITY-300',$city);


        $city = new City();
        $city->setName('La Horqueta');
        $city->setState($this->getReference('VEN-STATE-VE-Y'));
        $city->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-CITY-301',$city);


        $city = new City();
        $city->setName('San Juan de los Cayos');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-106'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-106-CITY-302',$city);


        $city = new City();
        $city->setName('Capadare');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-106'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-106-CITY-303',$city);


        $city = new City();
        $city->setName('La Pastora');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-106'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-106-CITY-304',$city);


        $city = new City();
        $city->setName('El Mene de San Lorenzo');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-106'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-106-CITY-305',$city);


        $city = new City();
        $city->setName('San Luis');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-107'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-107-CITY-306',$city);


        $city = new City();
        $city->setName('Aracua');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-107'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-107-CITY-307',$city);


        $city = new City();
        $city->setName('La Peña');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-107'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-107-CITY-308',$city);


        $city = new City();
        $city->setName('Capatárida');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-CITY-309',$city);


        $city = new City();
        $city->setName('Bariro');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-CITY-310',$city);


        $city = new City();
        $city->setName('Borojó');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-CITY-311',$city);


        $city = new City();
        $city->setName('Guajiro');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-CITY-312',$city);


        $city = new City();
        $city->setName('San José de Seque');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-CITY-313',$city);


        $city = new City();
        $city->setName('Zazárida');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-CITY-314',$city);


        $city = new City();
        $city->setName('Yaracal');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-109'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-109-CITY-315',$city);


        $city = new City();
        $city->setName('Punto Fijo');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-110'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-110-CITY-316',$city);


        $city = new City();
        $city->setName('Punta Cardón');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-110'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-110-CITY-317',$city);


        $city = new City();
        $city->setName('Santa Ana');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-110'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-110-CITY-318',$city);


        $city = new City();
        $city->setName('La Vela de Coro');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-CITY-319',$city);


        $city = new City();
        $city->setName('Acurigua');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-CITY-320',$city);


        $city = new City();
        $city->setName('Guaibacoa');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-CITY-321',$city);


        $city = new City();
        $city->setName('Las Calderas');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-CITY-322',$city);


        $city = new City();
        $city->setName('El Moyepo');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-CITY-323',$city);


        $city = new City();
        $city->setName('Dabajuro');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-112'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-112-CITY-324',$city);


        $city = new City();
        $city->setName('Pedregal');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-CITY-325',$city);


        $city = new City();
        $city->setName('El Manantial');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-CITY-326',$city);


        $city = new City();
        $city->setName('Tupure');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-CITY-327',$city);


        $city = new City();
        $city->setName('Piedra Grande');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-CITY-328',$city);


        $city = new City();
        $city->setName('Purureche');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-CITY-329',$city);


        $city = new City();
        $city->setName('Pueblo Nuevo');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-330',$city);


        $city = new City();
        $city->setName('Adícora');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-331',$city);


        $city = new City();
        $city->setName('Baraived');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-332',$city);


        $city = new City();
        $city->setName('Buena Vista');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-333',$city);


        $city = new City();
        $city->setName('Jadacaquiva');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-334',$city);


        $city = new City();
        $city->setName('Moruy');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-335',$city);


        $city = new City();
        $city->setName('Adaure');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-336',$city);


        $city = new City();
        $city->setName('El Hato');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-337',$city);


        $city = new City();
        $city->setName('El Vínculo');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-CITY-338',$city);


        $city = new City();
        $city->setName('Churuguara');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-CITY-339',$city);


        $city = new City();
        $city->setName('Agua Larga');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-CITY-340',$city);


        $city = new City();
        $city->setName('El Paují');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-CITY-341',$city);


        $city = new City();
        $city->setName('El Tupí');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-CITY-342',$city);


        $city = new City();
        $city->setName('Mapararí');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-CITY-343',$city);


        $city = new City();
        $city->setName('Jacura');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-116'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-116-CITY-344',$city);


        $city = new City();
        $city->setName('Agua Linda');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-116'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-116-CITY-345',$city);


        $city = new City();
        $city->setName('Araurima');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-116'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-116-CITY-346',$city);


        $city = new City();
        $city->setName('Santa Cruz de Los Taques');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-117'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-117-CITY-347',$city);


        $city = new City();
        $city->setName('Judibana');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-117'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-117-CITY-348',$city);


        $city = new City();
        $city->setName('Mene de Mauroa');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-118'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-118-CITY-349',$city);


        $city = new City();
        $city->setName('Casigua');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-118'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-118-CITY-350',$city);


        $city = new City();
        $city->setName('San Félix');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-118'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-118-CITY-351',$city);


        $city = new City();
        $city->setName('Santa Ana de Coro');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-CITY-352',$city);


        $city = new City();
        $city->setName('La Negrita');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-CITY-353',$city);


        $city = new City();
        $city->setName('Mitare');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-CITY-354',$city);


        $city = new City();
        $city->setName('Río Seco');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-CITY-355',$city);


        $city = new City();
        $city->setName('Sabaneta');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-CITY-356',$city);


        $city = new City();
        $city->setName('Chichiriviche');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-120'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-120-CITY-357',$city);


        $city = new City();
        $city->setName('Boca de Tocuyo');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-120'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-120-CITY-358',$city);


        $city = new City();
        $city->setName('Tocuyo de La Costa');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-120'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-120-CITY-359',$city);


        $city = new City();
        $city->setName('Palmasola');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-121'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-121-CITY-360',$city);


        $city = new City();
        $city->setName('Cabure');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-122'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-122-CITY-361',$city);


        $city = new City();
        $city->setName('Pueblo Nuevo de la Sierra');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-122'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-122-CITY-362',$city);


        $city = new City();
        $city->setName('Curimagua');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-122'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-122-CITY-363',$city);


        $city = new City();
        $city->setName('Píritu');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-123'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-123-CITY-364',$city);


        $city = new City();
        $city->setName('San José de la Costa');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-123'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-123-CITY-365',$city);


        $city = new City();
        $city->setName('Mirimire');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-124'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-124-CITY-366',$city);


        $city = new City();
        $city->setName('Tucacas');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-125'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-125-CITY-367',$city);


        $city = new City();
        $city->setName('Boca de Aroa');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-125'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-125-CITY-368',$city);


        $city = new City();
        $city->setName('La Cruz de Taratara');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-126'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-126-CITY-369',$city);


        $city = new City();
        $city->setName('Pecaya');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-126'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-126-CITY-370',$city);


        $city = new City();
        $city->setName('Tocópero');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-127'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-127-CITY-371',$city);


        $city = new City();
        $city->setName('Santa Cruz de Bucaral');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-128'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-128-CITY-372',$city);


        $city = new City();
        $city->setName('El Charal');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-128'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-128-CITY-373',$city);


        $city = new City();
        $city->setName('Las Vegas del Tuy');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-128'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-128-CITY-374',$city);


        $city = new City();
        $city->setName('Urumaco');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-129'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-129-CITY-375',$city);


        $city = new City();
        $city->setName('San José de Bruzual');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-129'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-129-CITY-376',$city);


        $city = new City();
        $city->setName('Puerto Cumarebo');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-CITY-377',$city);


        $city = new City();
        $city->setName('La Ciénaga');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-CITY-378',$city);


        $city = new City();
        $city->setName('La Soledad');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-CITY-379',$city);


        $city = new City();
        $city->setName('Pueblo Cumarebo');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-CITY-380',$city);


        $city = new City();
        $city->setName('Zazárida');
        $city->setState($this->getReference('VEN-STATE-VE-I'));
        $city->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-CITY-381',$city);


        $city = new City();
        $city->setName('Camaguán');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-131'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-131-CITY-382',$city);


        $city = new City();
        $city->setName('Puerto Miranda');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-131'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-131-CITY-383',$city);


        $city = new City();
        $city->setName('Uverito');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-131'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-131-CITY-384',$city);


        $city = new City();
        $city->setName('Chaguaramas');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-132'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-132-CITY-385',$city);


        $city = new City();
        $city->setName('El Socorro');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-133'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-133-CITY-386',$city);


        $city = new City();
        $city->setName('Guayabal');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-134'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-134-CITY-387',$city);


        $city = new City();
        $city->setName('Cazorla');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-134'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-134-CITY-388',$city);


        $city = new City();
        $city->setName('Valle de La Pascua');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-136'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-136-CITY-389',$city);


        $city = new City();
        $city->setName('Espino');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-136'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-136-CITY-390',$city);


        $city = new City();
        $city->setName('Las Mercedes');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-137'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-137-CITY-391',$city);


        $city = new City();
        $city->setName('Cabruta');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-137'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-137-CITY-392',$city);


        $city = new City();
        $city->setName('Santa Rita');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-137'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-137-CITY-393',$city);


        $city = new City();
        $city->setName('El Sombrero');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-138'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-138-CITY-394',$city);


        $city = new City();
        $city->setName('Sosa');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-138'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-138-CITY-395',$city);


        $city = new City();
        $city->setName('Calabozo');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-139'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-139-CITY-396',$city);


        $city = new City();
        $city->setName('El Calvario');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-139'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-139-CITY-397',$city);


        $city = new City();
        $city->setName('El Rastro');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-139'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-139-CITY-398',$city);


        $city = new City();
        $city->setName('Guardatinajas');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-139'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-139-CITY-399',$city);


        $city = new City();
        $city->setName('Altagracia de Orituco');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-CITY-400',$city);


        $city = new City();
        $city->setName('Lezama');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-CITY-401',$city);


        $city = new City();
        $city->setName('Libertad de Orituco');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-CITY-402',$city);


        $city = new City();
        $city->setName('Paso Real de Macaira');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-CITY-403',$city);


        $city = new City();
        $city->setName('San Francisco de Macaira');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-CITY-404',$city);


        $city = new City();
        $city->setName('San Rafael de Orituco');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-CITY-405',$city);


        $city = new City();
        $city->setName('Sabana Grande de Orituco');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-CITY-406',$city);


        $city = new City();
        $city->setName('Ortiz');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-141'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-141-CITY-407',$city);


        $city = new City();
        $city->setName('San Francisco de Tiznado');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-141'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-141-CITY-408',$city);


        $city = new City();
        $city->setName('San José de Tiznado');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-141'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-141-CITY-409',$city);


        $city = new City();
        $city->setName('La Unión de Canuto');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-141'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-141-CITY-410',$city);


        $city = new City();
        $city->setName('Tucupido');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-142'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-142-CITY-411',$city);


        $city = new City();
        $city->setName('San Rafael de Laya');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-142'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-142-CITY-412',$city);


        $city = new City();
        $city->setName('San Juan de los Morros');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-143'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-143-CITY-413',$city);


        $city = new City();
        $city->setName('Cantagallo');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-143'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-143-CITY-414',$city);


        $city = new City();
        $city->setName('Parapara');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-143'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-143-CITY-415',$city);


        $city = new City();
        $city->setName('San José de Guaribe');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-144'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-144-CITY-416',$city);


        $city = new City();
        $city->setName('Santa María de Ipire');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-145'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-145-CITY-417',$city);


        $city = new City();
        $city->setName('Altamira');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-145'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-145-CITY-418',$city);


        $city = new City();
        $city->setName('Zaraza');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-146'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-146-CITY-419',$city);


        $city = new City();
        $city->setName('San José de Unare');
        $city->setState($this->getReference('VEN-STATE-VE-J'));
        $city->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-146'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-J-146-CITY-420',$city);


        $city = new City();
        $city->setName('Sanare');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-147'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-147-CITY-421',$city);


        $city = new City();
        $city->setName('La Bucarita');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-147'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-147-CITY-422',$city);


        $city = new City();
        $city->setName('La Escalera');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-147'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-147-CITY-423',$city);


        $city = new City();
        $city->setName('Duaca');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-148'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-148-CITY-424',$city);


        $city = new City();
        $city->setName('El Eneal');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-148'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-148-CITY-425',$city);


        $city = new City();
        $city->setName('Barquisimeto');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-CITY-426',$city);


        $city = new City();
        $city->setName('Bobare');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-CITY-427',$city);


        $city = new City();
        $city->setName('Buena Vista');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-CITY-428',$city);


        $city = new City();
        $city->setName('Río Claro');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-CITY-429',$city);


        $city = new City();
        $city->setName('Quíbor');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-CITY-430',$city);


        $city = new City();
        $city->setName('Cuara');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-CITY-431',$city);


        $city = new City();
        $city->setName('Cubiro');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-CITY-432',$city);


        $city = new City();
        $city->setName('Agua Negra');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-CITY-433',$city);


        $city = new City();
        $city->setName('San Miguel');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-CITY-434',$city);


        $city = new City();
        $city->setName('Tintorero');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-CITY-435',$city);


        $city = new City();
        $city->setName('El Hato');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-CITY-436',$city);


        $city = new City();
        $city->setName('La Ceiba');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-CITY-437',$city);


        $city = new City();
        $city->setName('El Tocuyo');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-CITY-438',$city);


        $city = new City();
        $city->setName('Anzoátegui');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-CITY-439',$city);


        $city = new City();
        $city->setName('Guarico');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-CITY-440',$city);


        $city = new City();
        $city->setName('Villanueva');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-CITY-441',$city);


        $city = new City();
        $city->setName('Humocaro Alto');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-CITY-442',$city);


        $city = new City();
        $city->setName('Humocaro Bajo');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-CITY-443',$city);


        $city = new City();
        $city->setName('Guaitó');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-CITY-444',$city);


        $city = new City();
        $city->setName('Barbacoas');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-CITY-445',$city);


        $city = new City();
        $city->setName('Cabudare');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-152'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-152-CITY-446',$city);


        $city = new City();
        $city->setName('Los Rastrojos');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-152'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-152-CITY-447',$city);


        $city = new City();
        $city->setName('Agua Viva');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-152'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-152-CITY-448',$city);


        $city = new City();
        $city->setName('Sarare');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-153'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-153-CITY-449',$city);


        $city = new City();
        $city->setName('Manzanita');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-153'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-153-CITY-450',$city);


        $city = new City();
        $city->setName('La Miel');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-153'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-153-CITY-451',$city);


        $city = new City();
        $city->setName('Carora');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-452',$city);


        $city = new City();
        $city->setName('Curarigua');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-453',$city);


        $city = new City();
        $city->setName('Río Tocuyo');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-454',$city);


        $city = new City();
        $city->setName('Atarigua');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-455',$city);


        $city = new City();
        $city->setName('La Pastora');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-456',$city);


        $city = new City();
        $city->setName('Aregue');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-457',$city);


        $city = new City();
        $city->setName('Quebrada Arriba');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-458',$city);


        $city = new City();
        $city->setName('Arenales');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-459',$city);


        $city = new City();
        $city->setName('San Pedro');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-460',$city);


        $city = new City();
        $city->setName('Burere');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-461',$city);


        $city = new City();
        $city->setName('El Empedrado');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-462',$city);


        $city = new City();
        $city->setName('Palmarito');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-463',$city);


        $city = new City();
        $city->setName('San Francisco');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-464',$city);


        $city = new City();
        $city->setName('El Jabón');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-465',$city);


        $city = new City();
        $city->setName('El Paradero');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-466',$city);


        $city = new City();
        $city->setName('Parapara');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-467',$city);


        $city = new City();
        $city->setName('Altagracia');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-CITY-468',$city);


        $city = new City();
        $city->setName('Siquisique');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-155'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-155-CITY-469',$city);


        $city = new City();
        $city->setName('Santa Inés');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-155'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-155-CITY-470',$city);


        $city = new City();
        $city->setName('Aguada Grande');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-155'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-155-CITY-471',$city);


        $city = new City();
        $city->setName('Baragua');
        $city->setState($this->getReference('VEN-STATE-VE-K'));
        $city->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-155'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-K-155-CITY-472',$city);


        $city = new City();
        $city->setName('El Vigía');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-CITY-473',$city);


        $city = new City();
        $city->setName('La Palmita');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-CITY-474',$city);


        $city = new City();
        $city->setName('Mucujepe');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-CITY-475',$city);


        $city = new City();
        $city->setName('Los Naranjos');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-CITY-476',$city);


        $city = new City();
        $city->setName('La Blanca');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-CITY-477',$city);


        $city = new City();
        $city->setName('La Azulita');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-157'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-157-CITY-478',$city);


        $city = new City();
        $city->setName('Santa Cruz de Mora');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-158'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-158-CITY-479',$city);


        $city = new City();
        $city->setName('Mesa Bolívar');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-158'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-158-CITY-480',$city);


        $city = new City();
        $city->setName('Mesa de las Palmas');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-158'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-158-CITY-481',$city);


        $city = new City();
        $city->setName('Aricagua');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-159'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-159-CITY-482',$city);


        $city = new City();
        $city->setName('Campo Elías');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-159'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-159-CITY-483',$city);


        $city = new City();
        $city->setName('Canaguá');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-CITY-484',$city);


        $city = new City();
        $city->setName('Capurí');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-CITY-485',$city);


        $city = new City();
        $city->setName('Chacantá');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-CITY-486',$city);


        $city = new City();
        $city->setName('El Molino');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-CITY-487',$city);


        $city = new City();
        $city->setName('El Viento');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-CITY-488',$city);


        $city = new City();
        $city->setName('Mucutuy');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-CITY-489',$city);


        $city = new City();
        $city->setName('Mucuchachí');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-CITY-490',$city);


        $city = new City();
        $city->setName('Ejido');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-CITY-491',$city);


        $city = new City();
        $city->setName('Ejido');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-CITY-492',$city);


        $city = new City();
        $city->setName('Acequias');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-CITY-493',$city);


        $city = new City();
        $city->setName('Jají');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-CITY-494',$city);


        $city = new City();
        $city->setName('La Mesa');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-CITY-495',$city);


        $city = new City();
        $city->setName('San José');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-CITY-496',$city);


        $city = new City();
        $city->setName('Tucaní');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-161'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-161-CITY-497',$city);


        $city = new City();
        $city->setName('El Pinar');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-161'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-161-CITY-498',$city);


        $city = new City();
        $city->setName('Santo Domingo');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-164'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-164-CITY-499',$city);


        $city = new City();
        $city->setName('Las Piedras');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-164'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-164-CITY-500',$city);
        
        $city = new City();
        $city->setName('Guaraque');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-165'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-165-CITY-501',$city);


        $city = new City();
        $city->setName('Mesa de Quintero');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-165'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-165-CITY-502',$city);


        $city = new City();
        $city->setName('Río Negro');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-165'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-165-CITY-503',$city);


        $city = new City();
        $city->setName('Arapuey');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-166'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-166-CITY-504',$city);


        $city = new City();
        $city->setName('San José de Palmira');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-166'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-166-CITY-505',$city);


        $city = new City();
        $city->setName('Torondoy');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-167'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-167-CITY-506',$city);


        $city = new City();
        $city->setName('San Cristóbal de Torondoy');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-167'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-167-CITY-507',$city);


        $city = new City();
        $city->setName('Mérida');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-CITY-508',$city);


        $city = new City();
        $city->setName('El Morro');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-CITY-509',$city);


        $city = new City();
        $city->setName('Los Nevados');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-CITY-510',$city);


        $city = new City();
        $city->setName('Timotes');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-169'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-169-CITY-511',$city);


        $city = new City();
        $city->setName('Chachopo');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-169'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-169-CITY-512',$city);


        $city = new City();
        $city->setName('La Venta');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-169'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-169-CITY-513',$city);


        $city = new City();
        $city->setName('Piñango');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-169'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-169-CITY-514',$city);


        $city = new City();
        $city->setName('Santa Elena de Arenales');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-170'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-170-CITY-515',$city);


        $city = new City();
        $city->setName('Guayabones');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-170'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-170-CITY-516',$city);


        $city = new City();
        $city->setName('San Rafael de Alcázar');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-170'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-170-CITY-517',$city);


        $city = new City();
        $city->setName('Santa María de Caparo');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-171'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-171-CITY-518',$city);


        $city = new City();
        $city->setName('Pueblo Llano');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-172'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-172-CITY-519',$city);


        $city = new City();
        $city->setName('Mucuchíes');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-CITY-520',$city);


        $city = new City();
        $city->setName('Cacute');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-CITY-521',$city);


        $city = new City();
        $city->setName('La Toma');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-CITY-522',$city);


        $city = new City();
        $city->setName('Mucurubá');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-CITY-523',$city);


        $city = new City();
        $city->setName('San Rafael');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-CITY-524',$city);


        $city = new City();
        $city->setName('Bailadores');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-174'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-174-CITY-525',$city);


        $city = new City();
        $city->setName('La Playa');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-174'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-174-CITY-526',$city);


        $city = new City();
        $city->setName('Tabay');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-174'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-174-CITY-527',$city);


        $city = new City();
        $city->setName('Lagunillas');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-CITY-528',$city);


        $city = new City();
        $city->setName('Chiguará');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-CITY-529',$city);


        $city = new City();
        $city->setName('Estánques');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-CITY-530',$city);


        $city = new City();
        $city->setName('La Trampa');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-CITY-531',$city);


        $city = new City();
        $city->setName('Pueblo Nuevo del Sur');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-CITY-532',$city);


        $city = new City();
        $city->setName('San Juan');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-CITY-533',$city);


        $city = new City();
        $city->setName('Tovar');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-177'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-177-CITY-534',$city);


        $city = new City();
        $city->setName('Tovar');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-177'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-177-CITY-535',$city);


        $city = new City();
        $city->setName('Tovar');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-177'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-177-CITY-536',$city);


        $city = new City();
        $city->setName('Tovar');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-177'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-177-CITY-537',$city);


        $city = new City();
        $city->setName('Nueva Bolivia');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-178'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-178-CITY-538',$city);


        $city = new City();
        $city->setName('Palmarito');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-178'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-178-CITY-539',$city);


        $city = new City();
        $city->setName('Las Virtudes');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-178'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-178-CITY-540',$city);


        $city = new City();
        $city->setName('Santa Apolonia');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-178'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-178-CITY-541',$city);


        $city = new City();
        $city->setName('Zea');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-179'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-179-CITY-542',$city);


        $city = new City();
        $city->setName('Caño Tigre');
        $city->setState($this->getReference('VEN-STATE-VE-L'));
        $city->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-179'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-L-179-CITY-543',$city);


        $city = new City();
        $city->setName('Caucagua');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-CITY-544',$city);


        $city = new City();
        $city->setName('Aragüita');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-CITY-545',$city);


        $city = new City();
        $city->setName('El Clavo');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-CITY-546',$city);


        $city = new City();
        $city->setName('Capaya');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-CITY-547',$city);


        $city = new City();
        $city->setName('El Café');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-CITY-548',$city);


        $city = new City();
        $city->setName('Marizapa');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-CITY-549',$city);


        $city = new City();
        $city->setName('Panaquire');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-CITY-550',$city);


        $city = new City();
        $city->setName('Tapipa');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-CITY-551',$city);


        $city = new City();
        $city->setName('San José de Barlovento');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-181'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-181-CITY-552',$city);


        $city = new City();
        $city->setName('Cumbo');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-181'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-181-CITY-553',$city);


        $city = new City();
        $city->setName('Nuestra Señora del Rosario de Baruta');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-182'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-182-CITY-554',$city);


        $city = new City();
        $city->setName('El Cafetal');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-182'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-182-CITY-555',$city);


        $city = new City();
        $city->setName('Las Minas de Baruta');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-182'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-182-CITY-556',$city);


        $city = new City();
        $city->setName('Higuerote');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-183'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-183-CITY-557',$city);


        $city = new City();
        $city->setName('Curiepe');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-183'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-183-CITY-558',$city);


        $city = new City();
        $city->setName('Tacarigua de Mamporal');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-183'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-183-CITY-559',$city);


        $city = new City();
        $city->setName('Mamporal');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-184'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-184-CITY-560',$city);


        $city = new City();
        $city->setName('Chacao');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-186'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-186-CITY-561',$city);


        $city = new City();
        $city->setName('Charallave');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-187'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-187-CITY-562',$city);


        $city = new City();
        $city->setName('Las Brisas');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-187'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-187-CITY-563',$city);


        $city = new City();
        $city->setName('El Hatillo');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-188'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-188-CITY-564',$city);


        $city = new City();
        $city->setName('Los Teques');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-CITY-565',$city);


        $city = new City();
        $city->setName('Altagracia de la Montaña');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-CITY-566',$city);


        $city = new City();
        $city->setName('San Diego');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-CITY-567',$city);


        $city = new City();
        $city->setName('El Jarillo');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-CITY-568',$city);


        $city = new City();
        $city->setName('Paracotos');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-CITY-569',$city);


        $city = new City();
        $city->setName('San Pedro');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-CITY-570',$city);


        $city = new City();
        $city->setName('Tácata');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-CITY-571',$city);


        $city = new City();
        $city->setName('Santa Teresa del Tuy');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-190'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-190-CITY-572',$city);


        $city = new City();
        $city->setName('El Cartanal');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-190'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-190-CITY-573',$city);


        $city = new City();
        $city->setName('Ocumare del Tuy');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-191'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-191-CITY-574',$city);


        $city = new City();
        $city->setName('La Democracia');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-191'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-191-CITY-575',$city);


        $city = new City();
        $city->setName('Santa Bárbara');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-191'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-191-CITY-576',$city);


        $city = new City();
        $city->setName('San Antonio de Los Altos');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-192'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-192-CITY-577',$city);


        $city = new City();
        $city->setName('Río Chico');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-CITY-578',$city);


        $city = new City();
        $city->setName('El Guapo');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-CITY-579',$city);


        $city = new City();
        $city->setName('Tacarigua de La Laguna');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-CITY-580',$city);


        $city = new City();
        $city->setName('Paparo');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-CITY-581',$city);


        $city = new City();
        $city->setName('San Fernando del Guapo');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-CITY-582',$city);


        $city = new City();
        $city->setName('Santa Lucía');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-194'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-194-CITY-583',$city);


        $city = new City();
        $city->setName('Cúpira');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-195'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-195-CITY-584',$city);


        $city = new City();
        $city->setName('Machurucuto');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-195'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-195-CITY-585',$city);


        $city = new City();
        $city->setName('Guarenas');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-196'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-196-CITY-586',$city);


        $city = new City();
        $city->setName('San Francisco de Yare');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-197'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-197-CITY-587',$city);


        $city = new City();
        $city->setName('San Antonio de Yare');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-197'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-197-CITY-588',$city);


        $city = new City();
        $city->setName('Petare');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-CITY-589',$city);


        $city = new City();
        $city->setName('Caucagüita');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-CITY-590',$city);


        $city = new City();
        $city->setName('Fila de Mariche');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-CITY-591',$city);


        $city = new City();
        $city->setName('La Dolorita');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-CITY-592',$city);


        $city = new City();
        $city->setName('Los Dos Caminos');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-CITY-593',$city);


        $city = new City();
        $city->setName('Cúa');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-199'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-199-CITY-594',$city);


        $city = new City();
        $city->setName('Nueva Cúa');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-199'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-199-CITY-595',$city);


        $city = new City();
        $city->setName('Guatire');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-200'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-200-CITY-596',$city);


        $city = new City();
        $city->setName('Araira');
        $city->setState($this->getReference('VEN-STATE-VE-M'));
        $city->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-200'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-M-200-CITY-597',$city);


        $city = new City();
        $city->setName('San Antonio');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-201'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-201-CITY-598',$city);


        $city = new City();
        $city->setName('San Francisco');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-201'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-201-CITY-599',$city);


        $city = new City();
        $city->setName('Aguasay');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-202'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-202-CITY-600',$city);


        $city = new City();
        $city->setName('Caripito');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-203'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-203-CITY-601',$city);


        $city = new City();
        $city->setName('Caripe');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-CITY-602',$city);


        $city = new City();
        $city->setName('El Guácharo');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-CITY-603',$city);


        $city = new City();
        $city->setName('La Guanota');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-CITY-604',$city);


        $city = new City();
        $city->setName('Sabana de Piedra');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-CITY-605',$city);


        $city = new City();
        $city->setName('San Agustín');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-CITY-606',$city);


        $city = new City();
        $city->setName('Teresén');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-CITY-607',$city);


        $city = new City();
        $city->setName('Caicara');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-205'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-205-CITY-608',$city);


        $city = new City();
        $city->setName('Areo');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-205'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-205-CITY-609',$city);


        $city = new City();
        $city->setName('San Félix');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-205'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-205-CITY-610',$city);


        $city = new City();
        $city->setName('Viento Fresco');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-205'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-205-CITY-611',$city);


        $city = new City();
        $city->setName('Punta de Mata');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-206'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-206-CITY-612',$city);


        $city = new City();
        $city->setName('El Tejero');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-206'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-206-CITY-613',$city);


        $city = new City();
        $city->setName('Temblador');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-207'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-207-CITY-614',$city);


        $city = new City();
        $city->setName('Chaguaramas');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-207'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-207-CITY-615',$city);


        $city = new City();
        $city->setName('Las Alhuacas');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-207'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-207-CITY-616',$city);


        $city = new City();
        $city->setName('Tabasca');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-207'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-207-CITY-617',$city);


        $city = new City();
        $city->setName('Maturín');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-CITY-618',$city);


        $city = new City();
        $city->setName('El Corozo');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-CITY-619',$city);


        $city = new City();
        $city->setName('El Furrial');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-CITY-620',$city);


        $city = new City();
        $city->setName('Jusepín');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-CITY-621',$city);


        $city = new City();
        $city->setName('La Pica');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-CITY-622',$city);


        $city = new City();
        $city->setName('San Vicente');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-CITY-623',$city);


        $city = new City();
        $city->setName('Aragua');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-CITY-624',$city);


        $city = new City();
        $city->setName('Aparicio');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-CITY-625',$city);


        $city = new City();
        $city->setName('Chaguaramal');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-CITY-626',$city);


        $city = new City();
        $city->setName('El Pinto');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-CITY-627',$city);


        $city = new City();
        $city->setName('Guanaguana');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-CITY-628',$city);


        $city = new City();
        $city->setName('La Toscana');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-CITY-629',$city);


        $city = new City();
        $city->setName('Taguaya');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-CITY-630',$city);


        $city = new City();
        $city->setName('Quiriquire');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-210'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-210-CITY-631',$city);


        $city = new City();
        $city->setName('Cachipo');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-210'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-210-CITY-632',$city);


        $city = new City();
        $city->setName('Santa Bárbara');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-211'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-211-CITY-633',$city);


        $city = new City();
        $city->setName('Barrancas');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-212'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-212-CITY-634',$city);


        $city = new City();
        $city->setName('Los Barrancos de Fajardo');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-212'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-212-CITY-635',$city);


        $city = new City();
        $city->setName('Uracoa');
        $city->setState($this->getReference('VEN-STATE-VE-N'));
        $city->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-213'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-N-213-CITY-636',$city);


        $city = new City();
        $city->setName('La Plaza de Paraguachí');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-214'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-214-CITY-637',$city);


        $city = new City();
        $city->setName('La Asunción');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-215'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-215-CITY-638',$city);


        $city = new City();
        $city->setName('San Juan Bautista');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-216'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-216-CITY-639',$city);


        $city = new City();
        $city->setName('La Guardia');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-216'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-216-CITY-640',$city);


        $city = new City();
        $city->setName('El Valle del Espíritu Santo');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-217'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-217-CITY-641',$city);


        $city = new City();
        $city->setName('Villa Rosa');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-217'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-217-CITY-642',$city);


        $city = new City();
        $city->setName('Santa Ana');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-CITY-643',$city);


        $city = new City();
        $city->setName('El Maco');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-CITY-644',$city);


        $city = new City();
        $city->setName('Tacarigua');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-CITY-645',$city);


        $city = new City();
        $city->setName('Pedro González');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-CITY-646',$city);


        $city = new City();
        $city->setName('Altagracia');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-CITY-647',$city);


        $city = new City();
        $city->setName('Pampatar');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-219'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-219-CITY-648',$city);


        $city = new City();
        $city->setName('El Pilar');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-219'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-219-CITY-649',$city);


        $city = new City();
        $city->setName('Juangriego');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-220'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-220-CITY-650',$city);


        $city = new City();
        $city->setName('Los Millanes');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-220'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-220-CITY-651',$city);


        $city = new City();
        $city->setName('Porlamar');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-221'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-221-CITY-652',$city);


        $city = new City();
        $city->setName('Boca de Río');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-222'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-222-CITY-653',$city);


        $city = new City();
        $city->setName('Boca de Pozo');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-222'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-222-CITY-654',$city);


        $city = new City();
        $city->setName('Punta de Piedras');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-223'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-223-CITY-655',$city);


        $city = new City();
        $city->setName('El Guamache');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-223'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-223-CITY-656',$city);


        $city = new City();
        $city->setName('San Pedro de Coche');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-224'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-224-CITY-657',$city);


        $city = new City();
        $city->setName('Güinima');
        $city->setState($this->getReference('VEN-STATE-VE-O'));
        $city->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-224'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-O-224-CITY-658',$city);


        $city = new City();
        $city->setName('Agua Blanca');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-225'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-225-CITY-659',$city);


        $city = new City();
        $city->setName('Araure');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-226'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-226-CITY-660',$city);


        $city = new City();
        $city->setName('Río Acarigua');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-226'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-226-CITY-661',$city);


        $city = new City();
        $city->setName('Píritu');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-227'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-227-CITY-662',$city);


        $city = new City();
        $city->setName('Uveral');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-227'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-227-CITY-663',$city);


        $city = new City();
        $city->setName('Guanare');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-CITY-664',$city);


        $city = new City();
        $city->setName('Córdoba');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-CITY-665',$city);


        $city = new City();
        $city->setName('San José de la Montaña');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-CITY-666',$city);


        $city = new City();
        $city->setName('Mesa de Cavacas');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-CITY-667',$city);


        $city = new City();
        $city->setName('Quebrada de la Virgen');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-CITY-668',$city);


        $city = new City();
        $city->setName('Guanarito');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-229'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-229-CITY-669',$city);


        $city = new City();
        $city->setName('Trinidad de la Capilla');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-229'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-229-CITY-670',$city);


        $city = new City();
        $city->setName('Morrones');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-229'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-229-CITY-671',$city);


        $city = new City();
        $city->setName('Paraíso de Chabasquén');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-230'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-230-CITY-672',$city);


        $city = new City();
        $city->setName('Peña Blanca');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-230'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-230-CITY-673',$city);


        $city = new City();
        $city->setName('Ospino');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-231'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-231-CITY-674',$city);


        $city = new City();
        $city->setName('La Aparición');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-231'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-231-CITY-675',$city);


        $city = new City();
        $city->setName('La Estación');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-231'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-231-CITY-676',$city);


        $city = new City();
        $city->setName('Acarigua');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-232'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-232-CITY-677',$city);


        $city = new City();
        $city->setName('Payara');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-232'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-232-CITY-678',$city);


        $city = new City();
        $city->setName('Pimpinela');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-232'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-232-CITY-679',$city);


        $city = new City();
        $city->setName('Mijagüito');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-232'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-232-CITY-680',$city);


        $city = new City();
        $city->setName('Papelón');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-233'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-233-CITY-681',$city);


        $city = new City();
        $city->setName('Caño Delgadito');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-233'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-233-CITY-682',$city);


        $city = new City();
        $city->setName('Boconoito');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-234'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-234-CITY-683',$city);


        $city = new City();
        $city->setName('San Nicolás');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-234'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-234-CITY-684',$city);


        $city = new City();
        $city->setName('San Rafael de Onoto');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-235'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-235-CITY-685',$city);


        $city = new City();
        $city->setName('Santa Fe');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-235'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-235-CITY-686',$city);


        $city = new City();
        $city->setName('El Algarrobito');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-235'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-235-CITY-687',$city);


        $city = new City();
        $city->setName('El Playón');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-236'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-236-CITY-688',$city);


        $city = new City();
        $city->setName('Nueva Florida');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-236'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-236-CITY-689',$city);


        $city = new City();
        $city->setName('Biscucuy');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-CITY-690',$city);


        $city = new City();
        $city->setName('La Concepción');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-CITY-691',$city);


        $city = new City();
        $city->setName('San Rafael de Palo Alzado');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-CITY-692',$city);


        $city = new City();
        $city->setName('Las Cruces');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-CITY-693',$city);


        $city = new City();
        $city->setName('San José de Saguaz');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-CITY-694',$city);


        $city = new City();
        $city->setName('Villa Rosa');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-CITY-695',$city);


        $city = new City();
        $city->setName('Villa Bruzual');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-238'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-238-CITY-696',$city);


        $city = new City();
        $city->setName('La Misión');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-238'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-238-CITY-697',$city);


        $city = new City();
        $city->setName('Santa Cruz');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-238'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-238-CITY-698',$city);


        $city = new City();
        $city->setName('Colonia Turén');
        $city->setState($this->getReference('VEN-STATE-VE-P'));
        $city->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-238'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-P-238-CITY-699',$city);


        $city = new City();
        $city->setName('Casanay');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-239'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-239-CITY-700',$city);


        $city = new City();
        $city->setName('San Vicente');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-239'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-239-CITY-701',$city);


        $city = new City();
        $city->setName('San José de Aerocuar');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-240'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-240-CITY-702',$city);


        $city = new City();
        $city->setName('Río Caribe');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-CITY-703',$city);


        $city = new City();
        $city->setName('San Juan de Unare');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-CITY-704',$city);


        $city = new City();
        $city->setName('El Morro de Puerto Santo');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-CITY-705',$city);


        $city = new City();
        $city->setName('Puerto Santo');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-CITY-706',$city);


        $city = new City();
        $city->setName('San Juan de Las Galdonas');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-CITY-707',$city);


        $city = new City();
        $city->setName('El Pilar');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-CITY-708',$city);


        $city = new City();
        $city->setName('El Rincón');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-CITY-709',$city);


        $city = new City();
        $city->setName('Los Arroyos');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-CITY-710',$city);


        $city = new City();
        $city->setName('Guaraúnos');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-CITY-711',$city);


        $city = new City();
        $city->setName('Tunapuicito');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-CITY-712',$city);


        $city = new City();
        $city->setName('Guariquén');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-CITY-713',$city);


        $city = new City();
        $city->setName('Playa Grande');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-243'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-243-CITY-714',$city);


        $city = new City();
        $city->setName('Carúpano');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-243'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-243-CITY-715',$city);


        $city = new City();
        $city->setName('Carúpano');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-243'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-243-CITY-716',$city);


        $city = new City();
        $city->setName('Marigüitar');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-244'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-244-CITY-717',$city);


        $city = new City();
        $city->setName('Yaguaraparo');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-245'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-245-CITY-718',$city);


        $city = new City();
        $city->setName('El Paujil');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-245'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-245-CITY-719',$city);


        $city = new City();
        $city->setName('Río Seco');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-245'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-245-CITY-720',$city);


        $city = new City();
        $city->setName('Araya');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-246'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-246-CITY-721',$city);


        $city = new City();
        $city->setName('Chacopata');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-246'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-246-CITY-722',$city);


        $city = new City();
        $city->setName('Manicuare');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-246'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-246-CITY-723',$city);


        $city = new City();
        $city->setName('Tunapuy');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-247'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-247-CITY-724',$city);


        $city = new City();
        $city->setName('Guayana');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-247'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-247-CITY-725',$city);


        $city = new City();
        $city->setName('Irapa');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-CITY-726',$city);


        $city = new City();
        $city->setName('Campo Claro');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-CITY-727',$city);


        $city = new City();
        $city->setName('Marabal');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-CITY-728',$city);


        $city = new City();
        $city->setName('San Antonio de Irapa');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-CITY-729',$city);


        $city = new City();
        $city->setName('Soro');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-CITY-730',$city);


        $city = new City();
        $city->setName('San Antonio del Golfo');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-249'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-249-CITY-731',$city);


        $city = new City();
        $city->setName('Cumanacoa');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-CITY-732',$city);


        $city = new City();
        $city->setName('Arenas');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-CITY-733',$city);


        $city = new City();
        $city->setName('Aricagua');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-CITY-734',$city);


        $city = new City();
        $city->setName('Las Piedras');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-CITY-735',$city);


        $city = new City();
        $city->setName('Villarroel');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-CITY-736',$city);


        $city = new City();
        $city->setName('San Lorenzo');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-CITY-737',$city);


        $city = new City();
        $city->setName('Cariaco');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-CITY-738',$city);


        $city = new City();
        $city->setName('Catuaro');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-CITY-739',$city);


        $city = new City();
        $city->setName('Villa Frontado');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-CITY-740',$city);


        $city = new City();
        $city->setName('Santa Cruz');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-CITY-741',$city);


        $city = new City();
        $city->setName('Santa María');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-CITY-742',$city);


        $city = new City();
        $city->setName('Cumaná');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-CITY-743',$city);


        $city = new City();
        $city->setName('Caigüire');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-CITY-744',$city);


        $city = new City();
        $city->setName('San Juan');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-CITY-745',$city);


        $city = new City();
        $city->setName('Los Puertos de Santa Fe');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-CITY-746',$city);


        $city = new City();
        $city->setName('Los Altos de Sucre');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-CITY-747',$city);


        $city = new City();
        $city->setName('Güiria');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-253'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-253-CITY-748',$city);


        $city = new City();
        $city->setName('Rio Salado');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-253'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-253-CITY-749',$city);


        $city = new City();
        $city->setName('Macuro');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-253'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-253-CITY-750',$city);


        $city = new City();
        $city->setName('Yoco');
        $city->setState($this->getReference('VEN-STATE-VE-R'));
        $city->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-253'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-R-253-CITY-751',$city);


        $city = new City();
        $city->setName('Cordero');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-254'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-254-CITY-752',$city);


        $city = new City();
        $city->setName('Las Mesas');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-255'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-255-CITY-753',$city);


        $city = new City();
        $city->setName('Colón');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-256'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-256-CITY-754',$city);


        $city = new City();
        $city->setName('San Félix');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-256'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-256-CITY-755',$city);


        $city = new City();
        $city->setName('San Pedro del Río');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-256'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-256-CITY-756',$city);


        $city = new City();
        $city->setName('San Antonio del Táchira');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-257'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-257-CITY-757',$city);


        $city = new City();
        $city->setName('Palotal');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-257'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-257-CITY-758',$city);


        $city = new City();
        $city->setName('El Recreo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-257'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-257-CITY-759',$city);


        $city = new City();
        $city->setName('Las Dantas');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-257'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-257-CITY-760',$city);


        $city = new City();
        $city->setName('Táriba');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-258'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-258-CITY-761',$city);


        $city = new City();
        $city->setName('Palo Gordo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-258'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-258-CITY-762',$city);


        $city = new City();
        $city->setName('La Florida');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-258'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-258-CITY-763',$city);


        $city = new City();
        $city->setName('Santa Ana');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-258'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-258-CITY-764',$city);


        $city = new City();
        $city->setName('San Rafael del Piñal');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-260'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-260-CITY-765',$city);


        $city = new City();
        $city->setName('Puerto Teteo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-260'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-260-CITY-766',$city);


        $city = new City();
        $city->setName('San Lorenzo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-260'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-260-CITY-767',$city);


        $city = new City();
        $city->setName('San José de Bolívar');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-261'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-261-CITY-768',$city);


        $city = new City();
        $city->setName('La Fría');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-262'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-262-CITY-769',$city);


        $city = new City();
        $city->setName('Boca de Grita');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-262'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-262-CITY-770',$city);


        $city = new City();
        $city->setName('Orope');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-262'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-262-CITY-771',$city);


        $city = new City();
        $city->setName('Palmira');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-282'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-282-CITY-772',$city);


        $city = new City();
        $city->setName('Capacho Nuevo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-264'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-264-CITY-773',$city);


        $city = new City();
        $city->setName('El Valle');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-264'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-264-CITY-774',$city);


        $city = new City();
        $city->setName('Peribeca');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-264'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-264-CITY-775',$city);


        $city = new City();
        $city->setName('La Grita');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-265'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-265-CITY-776',$city);


        $city = new City();
        $city->setName('Pueblo Hondo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-265'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-265-CITY-777',$city);


        $city = new City();
        $city->setName('Sabana Grande');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-265'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-265-CITY-778',$city);


        $city = new City();
        $city->setName('El Cobre');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-266'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-266-CITY-779',$city);


        $city = new City();
        $city->setName('Rubio');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-267'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-267-CITY-780',$city);


        $city = new City();
        $city->setName('Río Chiquito');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-267'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-267-CITY-781',$city);


        $city = new City();
        $city->setName('San Vicente de la Revancha');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-267'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-267-CITY-782',$city);


        $city = new City();
        $city->setName('Bramón');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-267'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-267-CITY-783',$city);


        $city = new City();
        $city->setName('Capacho Viejo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-268'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-268-CITY-784',$city);


        $city = new City();
        $city->setName('Hato de la Virgen');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-268'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-268-CITY-785',$city);


        $city = new City();
        $city->setName('El Pueblito');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-268'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-268-CITY-786',$city);


        $city = new City();
        $city->setName('Abejales');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-269'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-269-CITY-787',$city);


        $city = new City();
        $city->setName('Puerto Nuevo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-269'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-269-CITY-788',$city);


        $city = new City();
        $city->setName('El Milagro');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-269'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-269-CITY-789',$city);


        $city = new City();
        $city->setName('San Joaquín de Navay');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-269'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-269-CITY-790',$city);


        $city = new City();
        $city->setName('Lobatera');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-270'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-270-CITY-791',$city);


        $city = new City();
        $city->setName('Borotá');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-270'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-270-CITY-792',$city);


        $city = new City();
        $city->setName('Michelena');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-271'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-271-CITY-793',$city);


        $city = new City();
        $city->setName('Coloncito');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-272'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-272-CITY-794',$city);


        $city = new City();
        $city->setName('La Palmita');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-272'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-272-CITY-795',$city);


        $city = new City();
        $city->setName('Ureña');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-273'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-273-CITY-796',$city);


        $city = new City();
        $city->setName('Aguas Calientes');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-273'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-273-CITY-797',$city);


        $city = new City();
        $city->setName('Delicias');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-274'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-274-CITY-798',$city);


        $city = new City();
        $city->setName('La Tendida');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-275'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-275-CITY-799',$city);


        $city = new City();
        $city->setName('Boconó');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-275'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-275-CITY-800',$city);


        $city = new City();
        $city->setName('Hernández');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-275'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-275-CITY-801',$city);


        $city = new City();
        $city->setName('San Cristóbal');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-276'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-276-CITY-802',$city);


        $city = new City();
        $city->setName('Macanillo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-276'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-276-CITY-803',$city);


        $city = new City();
        $city->setName('Seboruco');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-277'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-277-CITY-804',$city);


        $city = new City();
        $city->setName('San Simón');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-278'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-278-CITY-805',$city);


        $city = new City();
        $city->setName('Queniquea');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-279'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-279-CITY-806',$city);


        $city = new City();
        $city->setName('Mesa del Tigre');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-279'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-279-CITY-807',$city);


        $city = new City();
        $city->setName('San Pablo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-279'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-279-CITY-808',$city);


        $city = new City();
        $city->setName('San Josecito');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-280'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-280-CITY-809',$city);


        $city = new City();
        $city->setName('Pregonero');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-CITY-810',$city);


        $city = new City();
        $city->setName('La Fundación');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-CITY-811',$city);


        $city = new City();
        $city->setName('Laguna de García');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-CITY-812',$city);


        $city = new City();
        $city->setName('Patio Redondo');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-CITY-813',$city);


        $city = new City();
        $city->setName('Umuquena');
        $city->setState($this->getReference('VEN-STATE-VE-S'));
        $city->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-CITY-814',$city);


        $city = new City();
        $city->setName('Santa Isabel');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-284'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-284-CITY-815',$city);


        $city = new City();
        $city->setName('Araguaney');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-284'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-284-CITY-816',$city);


        $city = new City();
        $city->setName('El Jagüito');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-284'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-284-CITY-817',$city);


        $city = new City();
        $city->setName('El Gallo');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-284'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-284-CITY-818',$city);


        $city = new City();
        $city->setName('Boconó');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-819',$city);


        $city = new City();
        $city->setName('El Carmen');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-820',$city);


        $city = new City();
        $city->setName('Mosquey');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-821',$city);


        $city = new City();
        $city->setName('Batatal');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-822',$city);


        $city = new City();
        $city->setName('Burbusay');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-823',$city);


        $city = new City();
        $city->setName('Las Mesitas');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-824',$city);


        $city = new City();
        $city->setName('Guaramacal');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-825',$city);


        $city = new City();
        $city->setName('Vega de Guaramacal');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-826',$city);


        $city = new City();
        $city->setName('Niquitao');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-827',$city);


        $city = new City();
        $city->setName('San Rafael');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-828',$city);


        $city = new City();
        $city->setName('San Miguel');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-829',$city);


        $city = new City();
        $city->setName('Tostós');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-CITY-830',$city);


        $city = new City();
        $city->setName('Sabana Grande');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-286'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-286-CITY-831',$city);


        $city = new City();
        $city->setName('Altamira de Caús');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-286'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-286-CITY-832',$city);


        $city = new City();
        $city->setName('Granados');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-286'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-286-CITY-833',$city);


        $city = new City();
        $city->setName('Chejendé');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-CITY-834',$city);


        $city = new City();
        $city->setName('Minas');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-CITY-835',$city);


        $city = new City();
        $city->setName('Bolivia');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-CITY-836',$city);


        $city = new City();
        $city->setName('Torococo');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-CITY-837',$city);


        $city = new City();
        $city->setName('Mitón');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-CITY-838',$city);


        $city = new City();
        $city->setName('Sabana Grande');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-CITY-839',$city);


        $city = new City();
        $city->setName('Las Llanadas');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-CITY-840',$city);


        $city = new City();
        $city->setName('Carache');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-CITY-841',$city);


        $city = new City();
        $city->setName('Cuicas');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-CITY-842',$city);


        $city = new City();
        $city->setName('La Concepción');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-CITY-843',$city);


        $city = new City();
        $city->setName('El Zapatero');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-CITY-844',$city);


        $city = new City();
        $city->setName('La Cuchilla');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-CITY-845',$city);


        $city = new City();
        $city->setName('Escuque');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-289'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-289-CITY-846',$city);


        $city = new City();
        $city->setName('El Alto');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-289'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-289-CITY-847',$city);


        $city = new City();
        $city->setName('Sabana Libre');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-289'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-289-CITY-848',$city);


        $city = new City();
        $city->setName('La Mata');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-289'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-289-CITY-849',$city);


        $city = new City();
        $city->setName('El Paradero');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-290'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-290-CITY-850',$city);


        $city = new City();
        $city->setName('La Placita');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-290'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-290-CITY-851',$city);


        $city = new City();
        $city->setName('Los Caprichos');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-290'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-290-CITY-852',$city);


        $city = new City();
        $city->setName('Campo Elías');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-291'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-291-CITY-853',$city);


        $city = new City();
        $city->setName('Las Quebradas');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-291'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-291-CITY-854',$city);


        $city = new City();
        $city->setName('Santa Apolonia');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-292'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-292-CITY-855',$city);


        $city = new City();
        $city->setName('Zona Rica');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-292'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-292-CITY-856',$city);


        $city = new City();
        $city->setName('La Ceiba');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-292'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-292-CITY-857',$city);


        $city = new City();
        $city->setName('Tres de Febrero');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-292'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-292-CITY-858',$city);


        $city = new City();
        $city->setName('El Dividive');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-CITY-859',$city);


        $city = new City();
        $city->setName('Agua Santa');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-CITY-860',$city);


        $city = new City();
        $city->setName('Agua Caliente');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-CITY-861',$city);


        $city = new City();
        $city->setName('El Cenizo');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-CITY-862',$city);


        $city = new City();
        $city->setName('Valerita');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-CITY-863',$city);


        $city = new City();
        $city->setName('Monte Carmelo');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-294'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-294-CITY-864',$city);


        $city = new City();
        $city->setName('Buena Vista');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-294'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-294-CITY-865',$city);


        $city = new City();
        $city->setName('Casa de Tabla');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-294'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-294-CITY-866',$city);


        $city = new City();
        $city->setName('Motatán');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-295'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-295-CITY-867',$city);


        $city = new City();
        $city->setName('El Baño');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-295'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-295-CITY-868',$city);


        $city = new City();
        $city->setName('Jalisco');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-295'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-295-CITY-869',$city);


        $city = new City();
        $city->setName('Pampán');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-296'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-296-CITY-870',$city);


        $city = new City();
        $city->setName('Flor de Patria');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-296'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-296-CITY-871',$city);


        $city = new City();
        $city->setName('Monay');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-296'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-296-CITY-872',$city);


        $city = new City();
        $city->setName('Santa Ana');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-296'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-296-CITY-873',$city);


        $city = new City();
        $city->setName('Pampanito');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-297'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-297-CITY-874',$city);


        $city = new City();
        $city->setName('La Concepción');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-297'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-297-CITY-875',$city);


        $city = new City();
        $city->setName('Pampanito II');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-297'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-297-CITY-876',$city);


        $city = new City();
        $city->setName('Betijoque');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-298'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-298-CITY-877',$city);


        $city = new City();
        $city->setName('Las Rurales');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-298'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-298-CITY-878',$city);


        $city = new City();
        $city->setName('Los Cedros');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-298'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-298-CITY-879',$city);


        $city = new City();
        $city->setName('Isnotú ');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-298'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-298-CITY-880',$city);


        $city = new City();
        $city->setName('Carvajal');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-299'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-299-CITY-881',$city);


        $city = new City();
        $city->setName('La Cejita');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-299'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-299-CITY-882',$city);


        $city = new City();
        $city->setName('Campo Alegre');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-299'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-299-CITY-883',$city);


        $city = new City();
        $city->setName('Las Mesetas');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-299'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-299-CITY-884',$city);


        $city = new City();
        $city->setName('Sabana de Mendoza');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-300'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-300-CITY-885',$city);


        $city = new City();
        $city->setName('El Paraíso');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-300'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-300-CITY-886',$city);


        $city = new City();
        $city->setName('Junín');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-300'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-300-CITY-887',$city);


        $city = new City();
        $city->setName('Valmore Rodríguez');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-300'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-300-CITY-888',$city);


        $city = new City();
        $city->setName('San Lázaro');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-CITY-889',$city);


        $city = new City();
        $city->setName('Chiquinquirá');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-CITY-890',$city);


        $city = new City();
        $city->setName('Santa Rosa');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-CITY-891',$city);


        $city = new City();
        $city->setName('La Plazuela');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-CITY-892',$city);


        $city = new City();
        $city->setName('Matriz');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-CITY-893',$city);


        $city = new City();
        $city->setName('San Jacinto');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-CITY-894',$city);


        $city = new City();
        $city->setName('Tres Esquinas');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-CITY-895',$city);


        $city = new City();
        $city->setName('Trujillo');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-CITY-896',$city);


        $city = new City();
        $city->setName('La Quebrada');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-CITY-897',$city);


        $city = new City();
        $city->setName('Cabimbú');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-CITY-898',$city);


        $city = new City();
        $city->setName('Jajó');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-CITY-899',$city);


        $city = new City();
        $city->setName('La Mesa de Esnujaque');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-CITY-900',$city);


        $city = new City();
        $city->setName('Santiago');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-CITY-901',$city);


        $city = new City();
        $city->setName('Tuñame');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-CITY-902',$city);


        $city = new City();
        $city->setName('Valera');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-CITY-903',$city);


        $city = new City();
        $city->setName('Juan Ignacio Montilla');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-CITY-904',$city);


        $city = new City();
        $city->setName('La Beatriz');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-CITY-905',$city);


        $city = new City();
        $city->setName('Mercedes Díaz');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-CITY-906',$city);


        $city = new City();
        $city->setName('San Luis');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-CITY-907',$city);


        $city = new City();
        $city->setName('La Puerta');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-CITY-908',$city);


        $city = new City();
        $city->setName('Mendoza');
        $city->setState($this->getReference('VEN-STATE-VE-T'));
        $city->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-CITY-909',$city);


        $city = new City();
        $city->setName('La Guaira');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-932',$city);


        $city = new City();
        $city->setName('Caraballeda');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-933',$city);


        $city = new City();
        $city->setName('Carayaca');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-934',$city);


        $city = new City();
        $city->setName('La Sabana');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-935',$city);


        $city = new City();
        $city->setName('Catia La Mar');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-936',$city);


        $city = new City();
        $city->setName('El Junko');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-937',$city);


        $city = new City();
        $city->setName('Macuto');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-938',$city);


        $city = new City();
        $city->setName('Maiquetía');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-939',$city);


        $city = new City();
        $city->setName('Naiguatá');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-940',$city);


        $city = new City();
        $city->setName('Catia La Mar');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-941',$city);


        $city = new City();
        $city->setName('Maiquetía');
        $city->setState($this->getReference('VEN-STATE-VE-W'));
        $city->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-CITY-942',$city);


        $city = new City();
        $city->setName('San Pablo');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-304'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-304-CITY-910',$city);


        $city = new City();
        $city->setName('Aroa');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-305'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-305-CITY-911',$city);


        $city = new City();
        $city->setName('Chivacoa');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-306'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-306-CITY-912',$city);


        $city = new City();
        $city->setName('Campo Elías');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-306'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-306-CITY-913',$city);


        $city = new City();
        $city->setName('Cocorote');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-306'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-306-CITY-914',$city);


        $city = new City();
        $city->setName('Cocorote');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-307'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-307-CITY-915',$city);


        $city = new City();
        $city->setName('Independencia');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-308'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-308-CITY-916',$city);


        $city = new City();
        $city->setName('Sabana de Parra');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-309'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-309-CITY-917',$city);


        $city = new City();
        $city->setName('Boraure');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-310'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-310-CITY-918',$city);


        $city = new City();
        $city->setName('Yumare');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-311'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-311-CITY-919',$city);


        $city = new City();
        $city->setName('Nirgua');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-312'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-312-CITY-920',$city);


        $city = new City();
        $city->setName('Salom');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-312'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-312-CITY-921',$city);


        $city = new City();
        $city->setName('Temerla');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-312'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-312-CITY-922',$city);


        $city = new City();
        $city->setName('Yaritagua');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-313'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-313-CITY-923',$city);


        $city = new City();
        $city->setName('Cambural');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-313'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-313-CITY-924',$city);


        $city = new City();
        $city->setName('San Felipe');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-314'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-314-CITY-925',$city);


        $city = new City();
        $city->setName('Albarico');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-314'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-314-CITY-926',$city);


        $city = new City();
        $city->setName('Marín');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-314'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-314-CITY-927',$city);


        $city = new City();
        $city->setName('Guama');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-315'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-315-CITY-928',$city);


        $city = new City();
        $city->setName('Urachiche');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-316'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-316-CITY-929',$city);


        $city = new City();
        $city->setName('Farriar');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-317'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-317-CITY-930',$city);


        $city = new City();
        $city->setName('Casimiro Vásquez');
        $city->setState($this->getReference('VEN-STATE-VE-U'));
        $city->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-317'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-U-317-CITY-931',$city);


        $city = new City();
        $city->setName('El Toro');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-318'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-318-CITY-943',$city);


        $city = new City();
        $city->setName('San Carlos');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-318'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-318-CITY-944',$city);


        $city = new City();
        $city->setName('San Timoteo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-CITY-945',$city);


        $city = new City();
        $city->setName('Ceuta');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-CITY-946',$city);


        $city = new City();
        $city->setName('Mene Grande');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-CITY-947',$city);


        $city = new City();
        $city->setName('El Venado');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-CITY-948',$city);


        $city = new City();
        $city->setName('El Tigre');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-CITY-949',$city);


        $city = new City();
        $city->setName('Pueblo Nuevo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-CITY-950',$city);


        $city = new City();
        $city->setName('Cabimas');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-CITY-951',$city);


        $city = new City();
        $city->setName('Palito Blanco');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-CITY-952',$city);


        $city = new City();
        $city->setName('Punta Gorda');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-CITY-953',$city);


        $city = new City();
        $city->setName('Encontrados');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-321'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-321-CITY-954',$city);


        $city = new City();
        $city->setName('El Guayabo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-321'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-321-CITY-955',$city);


        $city = new City();
        $city->setName('San Carlos del Zulia');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-CITY-956',$city);


        $city = new City();
        $city->setName('El Moralito');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-CITY-957',$city);


        $city = new City();
        $city->setName('Santa Bárbara');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-CITY-958',$city);


        $city = new City();
        $city->setName('Santa Cruz del Zulia');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-CITY-959',$city);


        $city = new City();
        $city->setName('Concha');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-CITY-960',$city);


        $city = new City();
        $city->setName('Pueblo Nuevo El Chivo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-323'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-323-CITY-961',$city);


        $city = new City();
        $city->setName('Cuatro Esquinas');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-323'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-323-CITY-962',$city);


        $city = new City();
        $city->setName('Los Naranjos');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-323'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-323-CITY-963',$city);


        $city = new City();
        $city->setName('La Ceibita');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-323'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-323-CITY-964',$city);


        $city = new City();
        $city->setName('La Concepción');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-324'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-324-CITY-965',$city);


        $city = new City();
        $city->setName('La Paz');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-324'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-324-CITY-966',$city);


        $city = new City();
        $city->setName('Jobo Alto');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-324'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-324-CITY-967',$city);


        $city = new City();
        $city->setName('San José');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-324'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-324-CITY-968',$city);


        $city = new City();
        $city->setName('Casigua El Cubo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-325'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-325-CITY-969',$city);


        $city = new City();
        $city->setName('El Cruce');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-325'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-325-CITY-970',$city);


        $city = new City();
        $city->setName('Concepción');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-CITY-971',$city);


        $city = new City();
        $city->setName('Kilómetro 48');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-CITY-972',$city);


        $city = new City();
        $city->setName('La Ensenada');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-CITY-973',$city);


        $city = new City();
        $city->setName('El Carmelo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-CITY-974',$city);


        $city = new City();
        $city->setName('Potreritos');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-CITY-975',$city);


        $city = new City();
        $city->setName('Ciudad Ojeda');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-CITY-976',$city);


        $city = new City();
        $city->setName('Campo Lara');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-CITY-977',$city);


        $city = new City();
        $city->setName('Picapica');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-CITY-978',$city);


        $city = new City();
        $city->setName('Lagunillas');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-CITY-979',$city);


        $city = new City();
        $city->setName('Machiques');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-328'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-328-CITY-980',$city);


        $city = new City();
        $city->setName('Las Piedras');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-328'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-328-CITY-981',$city);


        $city = new City();
        $city->setName('Río Negro');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-328'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-328-CITY-982',$city);


        $city = new City();
        $city->setName('San José');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-328'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-328-CITY-983',$city);


        $city = new City();
        $city->setName('San Rafael de El Moján');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-CITY-984',$city);


        $city = new City();
        $city->setName('La Sierrita');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-CITY-985',$city);


        $city = new City();
        $city->setName('Las Parcelas');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-CITY-986',$city);


        $city = new City();
        $city->setName('Carrasquero');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-CITY-987',$city);


        $city = new City();
        $city->setName('Cachirí');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-CITY-988',$city);


        $city = new City();
        $city->setName('Santa Cruz de Mara');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-CITY-989',$city);


        $city = new City();
        $city->setName('Tamare');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-CITY-990',$city);


        $city = new City();
        $city->setName('Maracaibo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-CITY-991',$city);


        $city = new City();
        $city->setName('San Isidro');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-CITY-992',$city);


        $city = new City();
        $city->setName('Los Puertos de Altagracia');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-CITY-993',$city);


        $city = new City();
        $city->setName('El Mecocal');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-CITY-994',$city);


        $city = new City();
        $city->setName('Quisiro');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-CITY-995',$city);


        $city = new City();
        $city->setName('El Consejo de Ciruma');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-CITY-996',$city);


        $city = new City();
        $city->setName('Sabaneta de Palmas');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-CITY-997',$city);


        $city = new City();
        $city->setName('Punta de Piedras');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-CITY-998',$city);


        $city = new City();
        $city->setName('Sinamaica');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-332'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-332-CITY-999',$city);


        $city = new City();
        $city->setName('Cojoro');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-332'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-332-CITY-1000',$city);


        $city = new City();
        $city->setName('El Molinete');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-332'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-332-CITY-1001',$city);


        $city = new City();
        $city->setName('Paraguaipoa');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-332'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-332-CITY-1002',$city);


        $city = new City();
        $city->setName('La Villa del Rosario');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-333'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-333-CITY-1003',$city);


        $city = new City();
        $city->setName('Barranquitas');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-333'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-333-CITY-1004',$city);


        $city = new City();
        $city->setName('San Ignacio');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-333'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-333-CITY-1005',$city);


        $city = new City();
        $city->setName('San Francisco');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-CITY-1006',$city);


        $city = new City();
        $city->setName('El Bajo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-CITY-1007',$city);


        $city = new City();
        $city->setName('El Silencio');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-CITY-1008',$city);


        $city = new City();
        $city->setName('Sierra Maestra');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-CITY-1009',$city);


        $city = new City();
        $city->setName('Los Cortijos');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-CITY-1010',$city);


        $city = new City();
        $city->setName('Sur América');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-CITY-1011',$city);


        $city = new City();
        $city->setName('Urbanización El Caujaro');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-CITY-1012',$city);


        $city = new City();
        $city->setName('Santa Rita');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-335'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-335-CITY-1013',$city);


        $city = new City();
        $city->setName('El Mene');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-335'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-335-CITY-1014',$city);


        $city = new City();
        $city->setName('Palmarejo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-335'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-335-CITY-1015',$city);


        $city = new City();
        $city->setName('El Guanábano');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-335'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-335-CITY-1016',$city);


        $city = new City();
        $city->setName('Tía Juana');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-336'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-336-CITY-1017',$city);


        $city = new City();
        $city->setName('San Isidro');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-336'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-336-CITY-1018',$city);


        $city = new City();
        $city->setName('Sabana de La Plata');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-336'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-336-CITY-1019',$city);


        $city = new City();
        $city->setName('Bobures');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-CITY-1020',$city);


        $city = new City();
        $city->setName('El Batey');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-CITY-1021',$city);


        $city = new City();
        $city->setName('Gibraltar');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-CITY-1022',$city);


        $city = new City();
        $city->setName('San Antonio');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-CITY-1023',$city);


        $city = new City();
        $city->setName('Santa María');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-CITY-1024',$city);


        $city = new City();
        $city->setName('Caja Seca');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-CITY-1025',$city);


        $city = new City();
        $city->setName('Bachaquero');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-338'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-338-CITY-1026',$city);


        $city = new City();
        $city->setName('El Corozo');
        $city->setState($this->getReference('VEN-STATE-VE-V'));
        $city->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-338'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-V-338-CITY-1027',$city);


        $city = new City();
        $city->setName('Caracas');
        $city->setState($this->getReference('VEN-STATE-VE-A'));
        $city->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $city->setCapital(0);
        $manager->persist($city);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-CITY-1',$city);

    }
    
    public function getOrder() 
    {
        return 5;
    }
    
    public function getNameTrans()
    {
        return 'dataFixtures.city';
    }
    
    public function getAlias() 
    {
        return 'city';
    }
}