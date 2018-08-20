<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Interfaces\DataFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Regional\Parish;

/**
 * Description of ParishFixtureLoader
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class ParishFixtureLoader extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface, DataFixtureInterface 
{
    public function load(ObjectManager $manager) 
    {
        $parish = new Parish();
        $parish->setName('Alto Orinoco');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-PARISH-23',$parish);


        $parish = new Parish();
        $parish->setName('Huachamacare');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-PARISH-24',$parish);


        $parish = new Parish();
        $parish->setName('Marawaka');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-PARISH-25',$parish);


        $parish = new Parish();
        $parish->setName('Mavaka');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-PARISH-26',$parish);


        $parish = new Parish();
        $parish->setName('Sierra-Parimabe');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-2'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-2-PARISH-27',$parish);


        $parish = new Parish();
        $parish->setName('Atabapo');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-3'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-3-PARISH-28',$parish);


        $parish = new Parish();
        $parish->setName('Ucata');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-3'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-3-PARISH-29',$parish);


        $parish = new Parish();
        $parish->setName('Yapacana');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-3'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-3-PARISH-30',$parish);


        $parish = new Parish();
        $parish->setName('Caname');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-3'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-3-PARISH-31',$parish);


        $parish = new Parish();
        $parish->setName('Atures');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-4'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-4-PARISH-47',$parish);


        $parish = new Parish();
        $parish->setName('Fernando Girón Tovar');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-4'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-4-PARISH-48',$parish);


        $parish = new Parish();
        $parish->setName('Luis Alberto Gómez');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-4'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-4-PARISH-49',$parish);


        $parish = new Parish();
        $parish->setName('Pahueña');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-4'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-4-PARISH-50',$parish);


        $parish = new Parish();
        $parish->setName('Platanillal');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-4'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-4-PARISH-51',$parish);


        $parish = new Parish();
        $parish->setName('Samariapo');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-5'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-5-PARISH-32',$parish);


        $parish = new Parish();
        $parish->setName('Sipapo');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-5'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-5-PARISH-33',$parish);


        $parish = new Parish();
        $parish->setName('Munduapo');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-5'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-5-PARISH-34',$parish);


        $parish = new Parish();
        $parish->setName('Guayapo');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-5'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-5-PARISH-35',$parish);


        $parish = new Parish();
        $parish->setName('Maroa');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-6'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-6-PARISH-40',$parish);


        $parish = new Parish();
        $parish->setName('Victorino');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-6'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-6-PARISH-41',$parish);


        $parish = new Parish();
        $parish->setName('Comunidad');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-6'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-6-PARISH-42',$parish);


        $parish = new Parish();
        $parish->setName('Manapiare');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-7'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-7-PARISH-36',$parish);


        $parish = new Parish();
        $parish->setName('Alto Ventuari');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-7'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-7-PARISH-37',$parish);


        $parish = new Parish();
        $parish->setName('Medio Ventuari');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-7'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-7-PARISH-38',$parish);


        $parish = new Parish();
        $parish->setName('Bajo Ventuari');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-7'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-7-PARISH-39',$parish);


        $parish = new Parish();
        $parish->setName('Casiquiare');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-8'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-8-PARISH-43',$parish);


        $parish = new Parish();
        $parish->setName('Cocuy');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-8'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-8-PARISH-44',$parish);


        $parish = new Parish();
        $parish->setName('San Carlos');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-8'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-8-PARISH-45',$parish);


        $parish = new Parish();
        $parish->setName('Solano');
        $parish->setState($this->getReference('VEN-STATE-VE-X'));
        $parish->setMunicipality($this->getReference('VEN-VE-X-MUNICIPALITY-8'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-X-8-PARISH-46',$parish);


        $parish = new Parish();
        $parish->setName('Anaco');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-9'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-9-PARISH-52',$parish);


        $parish = new Parish();
        $parish->setName('Buena Vista');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-9'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-9-PARISH-53',$parish);


        $parish = new Parish();
        $parish->setName('San Joaquin');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-9'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-9-PARISH-54',$parish);


        $parish = new Parish();
        $parish->setName('Aragua de Barcelona');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-10'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-10-PARISH-55',$parish);


        $parish = new Parish();
        $parish->setName('Cachipo');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-10'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-10-PARISH-56',$parish);


        $parish = new Parish();
        $parish->setName('Puerto Píritu');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-11'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-11-PARISH-98',$parish);


        $parish = new Parish();
        $parish->setName('San Miguel');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-11'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-11-PARISH-99',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-11'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-11-PARISH-100',$parish);


        $parish = new Parish();
        $parish->setName('Valle de Guanape');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-12'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-12-PARISH-66',$parish);


        $parish = new Parish();
        $parish->setName('Santa Bárbara');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-12'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-12-PARISH-67',$parish);


        $parish = new Parish();
        $parish->setName('Atapirire');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-PARISH-87',$parish);


        $parish = new Parish();
        $parish->setName('Boca del Pao');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-PARISH-88',$parish);


        $parish = new Parish();
        $parish->setName('El Pao');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-PARISH-89',$parish);


        $parish = new Parish();
        $parish->setName('Pariaguán');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-PARISH-90',$parish);


        $parish = new Parish();
        $parish->setName('Múcura');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-13'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-13-PARISH-91',$parish);


        $parish = new Parish();
        $parish->setName('Guanta');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-14'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-14-PARISH-76',$parish);


        $parish = new Parish();
        $parish->setName('Chorrerón');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-14'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-14-PARISH-77',$parish);


        $parish = new Parish();
        $parish->setName('Mamo');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-15'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-15-PARISH-79',$parish);


        $parish = new Parish();
        $parish->setName('Soledad');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-15'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-15-PARISH-80',$parish);


        $parish = new Parish();
        $parish->setName('Pozuelos');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-16'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-16-PARISH-109',$parish);


        $parish = new Parish();
        $parish->setName('Puerto La Cruz');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-16'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-16-PARISH-110',$parish);


        $parish = new Parish();
        $parish->setName('Onoto');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-17'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-17-PARISH-68',$parish);


        $parish = new Parish();
        $parish->setName('San Pablo');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-17'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-17-PARISH-69',$parish);


        $parish = new Parish();
        $parish->setName('Mapire');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-PARISH-92',$parish);


        $parish = new Parish();
        $parish->setName('Piar');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-PARISH-93',$parish);


        $parish = new Parish();
        $parish->setName('Santa Clara');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-PARISH-94',$parish);


        $parish = new Parish();
        $parish->setName('San Diego de Cabrutica');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-PARISH-95',$parish);


        $parish = new Parish();
        $parish->setName('Uverito');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-PARISH-96',$parish);


        $parish = new Parish();
        $parish->setName('Zuata');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-18'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-18-PARISH-97',$parish);


        $parish = new Parish();
        $parish->setName('San Mateo');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-19'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-19-PARISH-81',$parish);


        $parish = new Parish();
        $parish->setName('El Carito');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-19'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-19-PARISH-82',$parish);


        $parish = new Parish();
        $parish->setName('Santa Ines');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-19'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-19-PARISH-83',$parish);


        $parish = new Parish();
        $parish->setName('Clarines');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-20'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-20-PARISH-63',$parish);


        $parish = new Parish();
        $parish->setName('Guanape');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-20'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-20-PARISH-64',$parish);


        $parish = new Parish();
        $parish->setName('Sabana de Uchire');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-20'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-20-PARISH-65',$parish);


        $parish = new Parish();
        $parish->setName('Cantaura');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-21'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-21-PARISH-72',$parish);


        $parish = new Parish();
        $parish->setName('Libertador');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-21'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-21-PARISH-73',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rosa');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-21'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-21-PARISH-74',$parish);


        $parish = new Parish();
        $parish->setName('Úrica');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-21'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-21-PARISH-75',$parish);


        $parish = new Parish();
        $parish->setName('Píritu');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-22'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-22-PARISH-101',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-22'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-22-PARISH-102',$parish);


        $parish = new Parish();
        $parish->setName('San José de Guanipa');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-23'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-23-PARISH-78',$parish);


        $parish = new Parish();
        $parish->setName('Boca de Uchire');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-24'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-24-PARISH-103',$parish);


        $parish = new Parish();
        $parish->setName('Boca de Chávez');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-24'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-24-PARISH-104',$parish);


        $parish = new Parish();
        $parish->setName('Pueblo Nuevo');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-25'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-25-PARISH-105',$parish);


        $parish = new Parish();
        $parish->setName('Santa Ana');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-25'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-25-PARISH-106',$parish);


        $parish = new Parish();
        $parish->setName('Bergantín');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-PARISH-57',$parish);


        $parish = new Parish();
        $parish->setName('Caigua');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-PARISH-58',$parish);


        $parish = new Parish();
        $parish->setName('El Carmen');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-PARISH-59',$parish);


        $parish = new Parish();
        $parish->setName('El Pilar');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-PARISH-60',$parish);


        $parish = new Parish();
        $parish->setName('Naricual');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-PARISH-61',$parish);


        $parish = new Parish();
        $parish->setName('San Cristóbal');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-26'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-26-PARISH-62',$parish);


        $parish = new Parish();
        $parish->setName('Edmundo Barrios');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-27'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-27-PARISH-107',$parish);


        $parish = new Parish();
        $parish->setName('Miguel Otero Silva');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-27'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-27-PARISH-108',$parish);


        $parish = new Parish();
        $parish->setName('El Chaparro');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-28'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-28-PARISH-84',$parish);


        $parish = new Parish();
        $parish->setName('Tomás Alfaro');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-28'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-28-PARISH-85',$parish);


        $parish = new Parish();
        $parish->setName('Calatrava');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-28'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-28-PARISH-86',$parish);


        $parish = new Parish();
        $parish->setName('Lechería');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-29'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-29-PARISH-70',$parish);


        $parish = new Parish();
        $parish->setName('El Morro');
        $parish->setState($this->getReference('VEN-STATE-VE-B'));
        $parish->setMunicipality($this->getReference('VEN-VE-B-MUNICIPALITY-29'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-B-29-PARISH-71',$parish);


        $parish = new Parish();
        $parish->setName('Achaguas');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-PARISH-111',$parish);


        $parish = new Parish();
        $parish->setName('Apurito');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-PARISH-112',$parish);


        $parish = new Parish();
        $parish->setName('El Yagual');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-PARISH-113',$parish);


        $parish = new Parish();
        $parish->setName('Guachara');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-PARISH-114',$parish);


        $parish = new Parish();
        $parish->setName('Mucuritas');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-PARISH-115',$parish);


        $parish = new Parish();
        $parish->setName('Queseras del medio');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-30'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-30-PARISH-116',$parish);


        $parish = new Parish();
        $parish->setName('Biruaca');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-31'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-31-PARISH-117',$parish);


        $parish = new Parish();
        $parish->setName('Bruzual');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-PARISH-118',$parish);


        $parish = new Parish();
        $parish->setName('Mantecal');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-PARISH-119',$parish);


        $parish = new Parish();
        $parish->setName('Quintero');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-PARISH-120',$parish);


        $parish = new Parish();
        $parish->setName('Rincón Hondo');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-PARISH-121',$parish);


        $parish = new Parish();
        $parish->setName('San Vicente');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-32'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-32-PARISH-122',$parish);


        $parish = new Parish();
        $parish->setName('Guasdualito');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-PARISH-126',$parish);


        $parish = new Parish();
        $parish->setName('Arismendi');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-PARISH-127',$parish);


        $parish = new Parish();
        $parish->setName('El Amparo');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-PARISH-128',$parish);


        $parish = new Parish();
        $parish->setName('San Camilo');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-PARISH-129',$parish);


        $parish = new Parish();
        $parish->setName('Urdaneta');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-33'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-33-PARISH-130',$parish);


        $parish = new Parish();
        $parish->setName('San Juan de Payara');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-34'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-34-PARISH-123',$parish);


        $parish = new Parish();
        $parish->setName('Codazzi');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-34'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-34-PARISH-124',$parish);


        $parish = new Parish();
        $parish->setName('Cunaviche');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-34'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-34-PARISH-125',$parish);


        $parish = new Parish();
        $parish->setName('Elorza');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-35'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-35-PARISH-131',$parish);


        $parish = new Parish();
        $parish->setName('La Trinidad');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-35'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-35-PARISH-132',$parish);


        $parish = new Parish();
        $parish->setName('El Recreo');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-36'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-36-PARISH-133',$parish);


        $parish = new Parish();
        $parish->setName('Peñalver');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-36'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-36-PARISH-134',$parish);


        $parish = new Parish();
        $parish->setName('San Fernando');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-36'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-36-PARISH-135',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael de Atamaica');
        $parish->setState($this->getReference('VEN-STATE-VE-C'));
        $parish->setMunicipality($this->getReference('VEN-VE-C-MUNICIPALITY-36'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-C-36-PARISH-136',$parish);


        $parish = new Parish();
        $parish->setName('San Mateo');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-37'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-37-PARISH-137',$parish);


        $parish = new Parish();
        $parish->setName('Andrés Eloy Blanco');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-PARISH-143',$parish);


        $parish = new Parish();
        $parish->setName('Choroní');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-PARISH-144',$parish);


        $parish = new Parish();
        $parish->setName('Joaquín Crespo');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-PARISH-145',$parish);


        $parish = new Parish();
        $parish->setName('José Casanova Godoy');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-PARISH-146',$parish);


        $parish = new Parish();
        $parish->setName('Las Delicias');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-PARISH-147',$parish);


        $parish = new Parish();
        $parish->setName('Los Tacariguas');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-PARISH-148',$parish);


        $parish = new Parish();
        $parish->setName('Pedro José Ovalles');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-PARISH-149',$parish);


        $parish = new Parish();
        $parish->setName('San José');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-39'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-39-PARISH-150',$parish);


        $parish = new Parish();
        $parish->setName('Santa Cruz');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-40'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-40-PARISH-151',$parish);


        $parish = new Parish();
        $parish->setName('Juan Vicente Bolívar y Ponte');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-PARISH-152',$parish);


        $parish = new Parish();
        $parish->setName('Castor Nieves Ríos');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-PARISH-153',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Las Guacamayas');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-PARISH-154',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Pao de Zárate');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-PARISH-155',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Zuata');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-41'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-41-PARISH-156',$parish);


        $parish = new Parish();
        $parish->setName('El Consejo');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-42'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-42-PARISH-157',$parish);


        $parish = new Parish();
        $parish->setName('Palo Negro');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-43'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-43-PARISH-158',$parish);


        $parish = new Parish();
        $parish->setName('San Martín de Porres');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-43'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-43-PARISH-159',$parish);


        $parish = new Parish();
        $parish->setName('Mario Briceño Iragorry');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-44'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-44-PARISH-160',$parish);


        $parish = new Parish();
        $parish->setName('Caña de Azúcar');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-44'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-44-PARISH-161',$parish);


        $parish = new Parish();
        $parish->setName('San Casimiro');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-45'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-45-PARISH-163',$parish);


        $parish = new Parish();
        $parish->setName('Urbana Güiripa');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-45'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-45-PARISH-164',$parish);


        $parish = new Parish();
        $parish->setName('Urbana Ollas de Caramacate');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-45'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-45-PARISH-165',$parish);


        $parish = new Parish();
        $parish->setName('Urbana Valle Morín');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-45'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-45-PARISH-166',$parish);


        $parish = new Parish();
        $parish->setName('San-Sebastian');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-46'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-46-PARISH-167',$parish);


        $parish = new Parish();
        $parish->setName('Turmero');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-PARISH-168',$parish);


        $parish = new Parish();
        $parish->setName('Arevalo Aponte');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-PARISH-169',$parish);


        $parish = new Parish();
        $parish->setName('Chuao');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-PARISH-170',$parish);


        $parish = new Parish();
        $parish->setName('Samán de Güere');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-PARISH-171',$parish);


        $parish = new Parish();
        $parish->setName('Alfredo Pacheco Miranda');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-47'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-47-PARISH-172',$parish);


        $parish = new Parish();
        $parish->setName('Santos Michelena');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-48'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-48-PARISH-173',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Tiara');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-48'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-48-PARISH-174',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-49'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-49-PARISH-175',$parish);


        $parish = new Parish();
        $parish->setName('Bella Vista');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-49'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-49-PARISH-176',$parish);


        $parish = new Parish();
        $parish->setName('Parroquia Capital Tovar');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-50'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-50-PARISH-177',$parish);


        $parish = new Parish();
        $parish->setName('Capital Urdaneta');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-51'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-51-PARISH-178',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Las Peñitas');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-51'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-51-PARISH-179',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana San Francisco de Cara');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-51'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-51-PARISH-180',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Taguay');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-51'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-51-PARISH-181',$parish);


        $parish = new Parish();
        $parish->setName('Capital Zamora');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-PARISH-182',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Magdaleno');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-PARISH-183',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana San Francisco de Asís');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-PARISH-184',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Valles de Tucutunemo');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-PARISH-185',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Augusto Mijares');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-52'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-52-PARISH-186',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rita');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-53'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-53-PARISH-140',$parish);


        $parish = new Parish();
        $parish->setName('Francisco de Miranda');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-53'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-53-PARISH-141',$parish);


        $parish = new Parish();
        $parish->setName('Monseñor Feliciano González');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-53'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-53-PARISH-142',$parish);


        $parish = new Parish();
        $parish->setName('Ocumare de La Costa de Oro');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-54'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-54-PARISH-162',$parish);


        $parish = new Parish();
        $parish->setName('Camatagua');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-55'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-55-PARISH-138',$parish);


        $parish = new Parish();
        $parish->setName('Carmen de Cura');
        $parish->setState($this->getReference('VEN-STATE-VE-D'));
        $parish->setMunicipality($this->getReference('VEN-VE-D-MUNICIPALITY-55'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-D-55-PARISH-139',$parish);


        $parish = new Parish();
        $parish->setName('Sabaneta');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-56'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-56-PARISH-231',$parish);


        $parish = new Parish();
        $parish->setName('Rodríguez Domínguez');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-56'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-56-PARISH-232',$parish);


        $parish = new Parish();
        $parish->setName('Nicolás Pulido');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-57'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-57-PARISH-228',$parish);


        $parish = new Parish();
        $parish->setName('Ticoporo');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-57'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-57-PARISH-229',$parish);


        $parish = new Parish();
        $parish->setName('Andrés Bello');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-57'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-57-PARISH-230',$parish);


        $parish = new Parish();
        $parish->setName('Arismendi');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-58'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-58-PARISH-187',$parish);


        $parish = new Parish();
        $parish->setName('Guadarrama');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-58'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-58-PARISH-188',$parish);


        $parish = new Parish();
        $parish->setName('La Unión,');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-58'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-58-PARISH-189',$parish);


        $parish = new Parish();
        $parish->setName('San Antonio');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-58'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-58-PARISH-190',$parish);


        $parish = new Parish();
        $parish->setName('Barinas');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-191',$parish);


        $parish = new Parish();
        $parish->setName('Alfredo Arvelo Larriva');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-192',$parish);


        $parish = new Parish();
        $parish->setName('San Silvestre');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-193',$parish);


        $parish = new Parish();
        $parish->setName('Santa Inés');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-194',$parish);


        $parish = new Parish();
        $parish->setName('Santa Lucía');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-195',$parish);


        $parish = new Parish();
        $parish->setName('Torunos');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-196',$parish);


        $parish = new Parish();
        $parish->setName('EL Carmen');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-197',$parish);


        $parish = new Parish();
        $parish->setName('Rómulo Betancourt');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-198',$parish);


        $parish = new Parish();
        $parish->setName('Corazón de Jesús');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-199',$parish);


        $parish = new Parish();
        $parish->setName('Ramón Ignacio Méndez');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-200',$parish);


        $parish = new Parish();
        $parish->setName('Alto Barinas');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-201',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Palacio Fajardo');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-202',$parish);


        $parish = new Parish();
        $parish->setName('Juan Antonio Rodríguez Domínguez');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-203',$parish);


        $parish = new Parish();
        $parish->setName('Dominga Ortiz de Páez');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-59'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-59-PARISH-204',$parish);


        $parish = new Parish();
        $parish->setName('Barinitas');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-60'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-60-PARISH-208',$parish);


        $parish = new Parish();
        $parish->setName('Altamira de Cáceres');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-60'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-60-PARISH-209',$parish);


        $parish = new Parish();
        $parish->setName('Calderas');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-60'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-60-PARISH-210',$parish);


        $parish = new Parish();
        $parish->setName('Masparrito');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-61'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-61-PARISH-211',$parish);


        $parish = new Parish();
        $parish->setName('El Socorro');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-61'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-61-PARISH-212',$parish);


        $parish = new Parish();
        $parish->setName('Barrancas');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-61'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-61-PARISH-213',$parish);


        $parish = new Parish();
        $parish->setName('Santa Bárbara');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-62'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-62-PARISH-233',$parish);


        $parish = new Parish();
        $parish->setName('Parroquia Pedro Briceño Méndez');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-62'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-62-PARISH-234',$parish);


        $parish = new Parish();
        $parish->setName('Ramón Ignacio Méndez');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-62'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-62-PARISH-235',$parish);


        $parish = new Parish();
        $parish->setName('José Ignacio del Pumar');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-62'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-62-PARISH-236',$parish);


        $parish = new Parish();
        $parish->setName('Obispos');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-63'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-63-PARISH-237',$parish);


        $parish = new Parish();
        $parish->setName('El Real');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-63'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-63-PARISH-238',$parish);


        $parish = new Parish();
        $parish->setName('La Luz');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-63'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-63-PARISH-239',$parish);


        $parish = new Parish();
        $parish->setName('Los Guasimitos');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-63'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-63-PARISH-240',$parish);


        $parish = new Parish();
        $parish->setName('Ciudad Bolivia');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-64'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-64-PARISH-214',$parish);


        $parish = new Parish();
        $parish->setName('Ignacio Briceño');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-64'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-64-PARISH-215',$parish);


        $parish = new Parish();
        $parish->setName('José Félix Ribas');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-64'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-64-PARISH-216',$parish);


        $parish = new Parish();
        $parish->setName('Páez');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-64'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-64-PARISH-217',$parish);


        $parish = new Parish();
        $parish->setName('Libertad');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-PARISH-218',$parish);


        $parish = new Parish();
        $parish->setName('Dolores');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-PARISH-219',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rosa');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-PARISH-220',$parish);


        $parish = new Parish();
        $parish->setName('Simón Rodríguez');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-PARISH-221',$parish);


        $parish = new Parish();
        $parish->setName('Palacio Fajardo');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-65'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-65-PARISH-222',$parish);


        $parish = new Parish();
        $parish->setName('Ciudad de Nutrias');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-PARISH-223',$parish);


        $parish = new Parish();
        $parish->setName('El Regalo');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-PARISH-224',$parish);


        $parish = new Parish();
        $parish->setName('Puerto Nutrias');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-PARISH-225',$parish);


        $parish = new Parish();
        $parish->setName('Santa Catalina');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-PARISH-226',$parish);


        $parish = new Parish();
        $parish->setName('Simón Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-66'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-66-PARISH-227',$parish);


        $parish = new Parish();
        $parish->setName('El Cantón');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-67'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-67-PARISH-205',$parish);


        $parish = new Parish();
        $parish->setName('Santa Cruz de Guacas');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-67'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-67-PARISH-206',$parish);


        $parish = new Parish();
        $parish->setName('Puerto Vivas');
        $parish->setState($this->getReference('VEN-STATE-VE-E'));
        $parish->setMunicipality($this->getReference('VEN-VE-E-MUNICIPALITY-67'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-E-67-PARISH-207',$parish);


        $parish = new Parish();
        $parish->setName('5 de Julio');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-245',$parish);


        $parish = new Parish();
        $parish->setName('Cachamay');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-246',$parish);


        $parish = new Parish();
        $parish->setName('Chirica');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-247',$parish);


        $parish = new Parish();
        $parish->setName('Once de Abril');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-248',$parish);


        $parish = new Parish();
        $parish->setName('Dalla Costa');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-249',$parish);


        $parish = new Parish();
        $parish->setName('Pozo Verde');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-250',$parish);


        $parish = new Parish();
        $parish->setName('Simón Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-251',$parish);


        $parish = new Parish();
        $parish->setName('Unare');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-252',$parish);


        $parish = new Parish();
        $parish->setName('Universidad');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-253',$parish);


        $parish = new Parish();
        $parish->setName('Vista al Sol');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-254',$parish);


        $parish = new Parish();
        $parish->setName('Yocoima');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-68'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-68-PARISH-255',$parish);


        $parish = new Parish();
        $parish->setName('Altagracia');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-PARISH-256',$parish);


        $parish = new Parish();
        $parish->setName('Ascención Farreras');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-PARISH-257',$parish);


        $parish = new Parish();
        $parish->setName('Caicara del Orinoco');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-PARISH-258',$parish);


        $parish = new Parish();
        $parish->setName('Guaniamo');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-PARISH-259',$parish);


        $parish = new Parish();
        $parish->setName('La Urbana');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-PARISH-260',$parish);


        $parish = new Parish();
        $parish->setName('Pijiguaos');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-69'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-69-PARISH-261',$parish);


        $parish = new Parish();
        $parish->setName('El Callao');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-70'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-70-PARISH-264',$parish);


        $parish = new Parish();
        $parish->setName('Gran Sabana');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-71'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-71-PARISH-265',$parish);


        $parish = new Parish();
        $parish->setName('Ikabarú');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-71'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-71-PARISH-266',$parish);


        $parish = new Parish();
        $parish->setName('Agua Salada');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-267',$parish);


        $parish = new Parish();
        $parish->setName('Catedral');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-268',$parish);


        $parish = new Parish();
        $parish->setName('José Antonio Páez');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-269',$parish);


        $parish = new Parish();
        $parish->setName('La Sabanita');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-270',$parish);


        $parish = new Parish();
        $parish->setName('Vista Hermosa');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-271',$parish);


        $parish = new Parish();
        $parish->setName('Marhuanta');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-272',$parish);


        $parish = new Parish();
        $parish->setName('Orinoco');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-273',$parish);


        $parish = new Parish();
        $parish->setName('Panapana');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-274',$parish);


        $parish = new Parish();
        $parish->setName('Zea');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-72'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-72-PARISH-275',$parish);


        $parish = new Parish();
        $parish->setName('Andrés Eloy Blanco');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-73'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-73-PARISH-276',$parish);


        $parish = new Parish();
        $parish->setName('Pedro Cova');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-73'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-73-PARISH-277',$parish);


        $parish = new Parish();
        $parish->setName('Upata');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-73'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-73-PARISH-278',$parish);


        $parish = new Parish();
        $parish->setName('Capital Angostura');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-74'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-74-PARISH-241',$parish);


        $parish = new Parish();
        $parish->setName('Barceloneta');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-74'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-74-PARISH-242',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-74'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-74-PARISH-243',$parish);


        $parish = new Parish();
        $parish->setName('Santa Bárbara');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-74'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-74-PARISH-244',$parish);


        $parish = new Parish();
        $parish->setName('Salom');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-75'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-75-PARISH-279',$parish);


        $parish = new Parish();
        $parish->setName('Roscio');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-75'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-75-PARISH-280',$parish);


        $parish = new Parish();
        $parish->setName('Dalla Costa');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-76'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-76-PARISH-281',$parish);


        $parish = new Parish();
        $parish->setName('San Isidro');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-76'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-76-PARISH-282',$parish);


        $parish = new Parish();
        $parish->setName('Tumeremo');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-76'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-76-PARISH-283',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-PARISH-284',$parish);


        $parish = new Parish();
        $parish->setName('Aripao');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-PARISH-285',$parish);


        $parish = new Parish();
        $parish->setName('Guarataro');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-PARISH-286',$parish);


        $parish = new Parish();
        $parish->setName('Las Majadas');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-PARISH-287',$parish);


        $parish = new Parish();
        $parish->setName('Moitaco');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-77'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-77-PARISH-288',$parish);


        $parish = new Parish();
        $parish->setName('El Palmar');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-78'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-78-PARISH-262',$parish);


        $parish = new Parish();
        $parish->setName('Río Grande');
        $parish->setState($this->getReference('VEN-STATE-VE-F'));
        $parish->setMunicipality($this->getReference('VEN-VE-F-MUNICIPALITY-78'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-F-78-PARISH-263',$parish);


        $parish = new Parish();
        $parish->setName('Bejuma');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-79'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-79-PARISH-289',$parish);


        $parish = new Parish();
        $parish->setName('Canoabo');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-79'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-79-PARISH-290',$parish);


        $parish = new Parish();
        $parish->setName('Simón Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-79'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-79-PARISH-291',$parish);


        $parish = new Parish();
        $parish->setName('Güigüe');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-80'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-80-PARISH-292',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Belén');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-80'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-80-PARISH-293',$parish);


        $parish = new Parish();
        $parish->setName('No Urbana Tacarigua');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-80'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-80-PARISH-294',$parish);


        $parish = new Parish();
        $parish->setName('Mariara');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-81'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-81-PARISH-295',$parish);


        $parish = new Parish();
        $parish->setName('Aguas Calientes');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-81'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-81-PARISH-296',$parish);


        $parish = new Parish();
        $parish->setName('Ciudad Alianza');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-82'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-82-PARISH-297',$parish);


        $parish = new Parish();
        $parish->setName('Guacara');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-82'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-82-PARISH-298',$parish);


        $parish = new Parish();
        $parish->setName('Yagua');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-82'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-82-PARISH-299',$parish);


        $parish = new Parish();
        $parish->setName('Morón');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-83'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-83-PARISH-300',$parish);


        $parish = new Parish();
        $parish->setName('Urama');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-83'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-83-PARISH-301',$parish);


        $parish = new Parish();
        $parish->setName('Independecia');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-84'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-84-PARISH-302',$parish);


        $parish = new Parish();
        $parish->setName('Tocuyito');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-84'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-84-PARISH-303',$parish);


        $parish = new Parish();
        $parish->setName('Los Guayos');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-85'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-85-PARISH-304',$parish);


        $parish = new Parish();
        $parish->setName('Miranda');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-86'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-86-PARISH-305',$parish);


        $parish = new Parish();
        $parish->setName('Montalbán');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-87'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-87-PARISH-306',$parish);


        $parish = new Parish();
        $parish->setName('Naguanagua');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-88'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-88-PARISH-307',$parish);


        $parish = new Parish();
        $parish->setName('Bartolomé Salom');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-PARISH-308',$parish);


        $parish = new Parish();
        $parish->setName('Borburata');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-PARISH-309',$parish);


        $parish = new Parish();
        $parish->setName('Democracia');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-PARISH-310',$parish);


        $parish = new Parish();
        $parish->setName('Fraternidad');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-PARISH-311',$parish);


        $parish = new Parish();
        $parish->setName('Goaigoaza');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-PARISH-312',$parish);


        $parish = new Parish();
        $parish->setName('Juan José Flores');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-PARISH-313',$parish);


        $parish = new Parish();
        $parish->setName('Patanemo');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-PARISH-314',$parish);


        $parish = new Parish();
        $parish->setName('Unión');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-89'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-89-PARISH-315',$parish);


        $parish = new Parish();
        $parish->setName('San Diego');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-90'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-90-PARISH-316',$parish);


        $parish = new Parish();
        $parish->setName('San Joaquín');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-91'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-91-PARISH-317',$parish);


        $parish = new Parish();
        $parish->setName('Urbana Candelaria');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-318',$parish);


        $parish = new Parish();
        $parish->setName('Urbana Catedral');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-319',$parish);


        $parish = new Parish();
        $parish->setName('El Socorro');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-320',$parish);


        $parish = new Parish();
        $parish->setName('Miguel Peña');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-321',$parish);


        $parish = new Parish();
        $parish->setName('Rafael Urdaneta');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-322',$parish);


        $parish = new Parish();
        $parish->setName('San Blas');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-323',$parish);


        $parish = new Parish();
        $parish->setName('San-José');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-324',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rosa');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-325',$parish);


        $parish = new Parish();
        $parish->setName('Negro Primero');
        $parish->setState($this->getReference('VEN-STATE-VE-G'));
        $parish->setMunicipality($this->getReference('VEN-VE-G-MUNICIPALITY-92'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-G-92-PARISH-326',$parish);


        $parish = new Parish();
        $parish->setName('Cojedes');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-93'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-93-PARISH-327',$parish);


        $parish = new Parish();
        $parish->setName('Juan de Mata Suárez');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-93'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-93-PARISH-328',$parish);


        $parish = new Parish();
        $parish->setName('El Baúl');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-94'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-94-PARISH-331',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-94'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-94-PARISH-332',$parish);


        $parish = new Parish();
        $parish->setName('Macapo');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-95'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-95-PARISH-333',$parish);


        $parish = new Parish();
        $parish->setName('La Aguadita');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-95'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-95-PARISH-334',$parish);


        $parish = new Parish();
        $parish->setName('El Pao');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-96'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-96-PARISH-329',$parish);


        $parish = new Parish();
        $parish->setName('Libertad de Cojedes');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-97'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-97-PARISH-335',$parish);


        $parish = new Parish();
        $parish->setName('El Amparo');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-97'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-97-PARISH-336',$parish);


        $parish = new Parish();
        $parish->setName('Rómulo Gallegos');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-98'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-98-PARISH-337',$parish);


        $parish = new Parish();
        $parish->setName('San Carlos');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-99'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-99-PARISH-338',$parish);


        $parish = new Parish();
        $parish->setName('Juan Angel Bravo');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-99'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-99-PARISH-339',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Manrique');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-99'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-99-PARISH-340',$parish);


        $parish = new Parish();
        $parish->setName('General en Jefe José Silva');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-100'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-100-PARISH-341',$parish);


        $parish = new Parish();
        $parish->setName('Tinaquillo');
        $parish->setState($this->getReference('VEN-STATE-VE-H'));
        $parish->setMunicipality($this->getReference('VEN-VE-H-MUNICIPALITY-101'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-H-101-PARISH-330',$parish);


        $parish = new Parish();
        $parish->setName('Curiapo');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-PARISH-342',$parish);


        $parish = new Parish();
        $parish->setName('Almirante Luis Brión');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-PARISH-343',$parish);


        $parish = new Parish();
        $parish->setName('Francisco Aniceto Lugo');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-PARISH-344',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Renaud');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-PARISH-345',$parish);


        $parish = new Parish();
        $parish->setName('Padre Barral');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-PARISH-346',$parish);


        $parish = new Parish();
        $parish->setName('Santos de Abelgas');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-102'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-102-PARISH-347',$parish);


        $parish = new Parish();
        $parish->setName('Imataca Moruca');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-PARISH-348',$parish);


        $parish = new Parish();
        $parish->setName('Cinco de Julio Piacoa');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-PARISH-349',$parish);


        $parish = new Parish();
        $parish->setName('Juan Bautista Arismendi');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-PARISH-350',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Piar');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-PARISH-351',$parish);


        $parish = new Parish();
        $parish->setName('Rómulo Gallegos');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-103'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-103-PARISH-352',$parish);


        $parish = new Parish();
        $parish->setName('Pedernales');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-104'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-104-PARISH-353',$parish);


        $parish = new Parish();
        $parish->setName('Luis Beltrán Prieto Figueroa');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-104'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-104-PARISH-354',$parish);


        $parish = new Parish();
        $parish->setName('San José');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-PARISH-355',$parish);


        $parish = new Parish();
        $parish->setName('José Vidal Marcano');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-PARISH-356',$parish);


        $parish = new Parish();
        $parish->setName('Juan Millán');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-PARISH-357',$parish);


        $parish = new Parish();
        $parish->setName('Leonardo Ruíz Pineda');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-PARISH-358',$parish);


        $parish = new Parish();
        $parish->setName('Mariscal Antonio José de Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-PARISH-359',$parish);


        $parish = new Parish();
        $parish->setName('Monseñor Argimiro García');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-PARISH-360',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-PARISH-361',$parish);


        $parish = new Parish();
        $parish->setName('Virgen del Valle');
        $parish->setState($this->getReference('VEN-STATE-VE-Y'));
        $parish->setMunicipality($this->getReference('VEN-VE-Y-MUNICIPALITY-105'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-Y-105-PARISH-362',$parish);


        $parish = new Parish();
        $parish->setName('Capadare');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-106'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-106-PARISH-363',$parish);


        $parish = new Parish();
        $parish->setName('La Pastora');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-106'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-106-PARISH-364',$parish);


        $parish = new Parish();
        $parish->setName('Libertador');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-106'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-106-PARISH-365',$parish);


        $parish = new Parish();
        $parish->setName('San Juan de los Cayos');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-106'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-106-PARISH-366',$parish);


        $parish = new Parish();
        $parish->setName('Aracua');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-107'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-107-PARISH-367',$parish);


        $parish = new Parish();
        $parish->setName('La Peña');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-107'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-107-PARISH-368',$parish);


        $parish = new Parish();
        $parish->setName('San Luis');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-107'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-107-PARISH-369',$parish);


        $parish = new Parish();
        $parish->setName('Bariro');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-PARISH-370',$parish);


        $parish = new Parish();
        $parish->setName('Borojo');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-PARISH-371',$parish);


        $parish = new Parish();
        $parish->setName('Capatárida');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-PARISH-372',$parish);


        $parish = new Parish();
        $parish->setName('Guajiro');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-PARISH-373',$parish);


        $parish = new Parish();
        $parish->setName('Seque');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-PARISH-374',$parish);


        $parish = new Parish();
        $parish->setName('Zazárida');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-PARISH-375',$parish);


        $parish = new Parish();
        $parish->setName('Valle de Eroa');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-108'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-108-PARISH-376',$parish);


        $parish = new Parish();
        $parish->setName('Cacique Manaure');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-109'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-109-PARISH-377',$parish);


        $parish = new Parish();
        $parish->setName('Norte');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-110'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-110-PARISH-378',$parish);


        $parish = new Parish();
        $parish->setName('Carirubana');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-110'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-110-PARISH-379',$parish);


        $parish = new Parish();
        $parish->setName('Santa Ana');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-110'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-110-PARISH-380',$parish);


        $parish = new Parish();
        $parish->setName('Urbana Punta Cardón');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-110'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-110-PARISH-381',$parish);


        $parish = new Parish();
        $parish->setName('La Vela de Coro');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-PARISH-382',$parish);


        $parish = new Parish();
        $parish->setName('Acurigua');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-PARISH-383',$parish);


        $parish = new Parish();
        $parish->setName('Guaibacoa');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-PARISH-384',$parish);


        $parish = new Parish();
        $parish->setName('Las Calderas');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-PARISH-385',$parish);


        $parish = new Parish();
        $parish->setName('Macoruca');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-111'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-111-PARISH-386',$parish);


        $parish = new Parish();
        $parish->setName('Agua Clara');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-PARISH-387',$parish);


        $parish = new Parish();
        $parish->setName('Avaria');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-PARISH-388',$parish);


        $parish = new Parish();
        $parish->setName('Pedregal');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-PARISH-389',$parish);


        $parish = new Parish();
        $parish->setName('Piedra Grande');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-PARISH-390',$parish);


        $parish = new Parish();
        $parish->setName('Purureche');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-113'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-113-PARISH-391',$parish);


        $parish = new Parish();
        $parish->setName('Adaure');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-392',$parish);


        $parish = new Parish();
        $parish->setName('Adícora');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-393',$parish);


        $parish = new Parish();
        $parish->setName('Baraived');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-394',$parish);


        $parish = new Parish();
        $parish->setName('Buena Vista');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-395',$parish);


        $parish = new Parish();
        $parish->setName('Jadacaquiva');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-396',$parish);


        $parish = new Parish();
        $parish->setName('El Vínculo');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-397',$parish);


        $parish = new Parish();
        $parish->setName('El Hato');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-398',$parish);


        $parish = new Parish();
        $parish->setName('Moruy');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-399',$parish);


        $parish = new Parish();
        $parish->setName('Pueblo Nuevo');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-114'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-114-PARISH-400',$parish);


        $parish = new Parish();
        $parish->setName('Agua Larga');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-PARISH-401',$parish);


        $parish = new Parish();
        $parish->setName('Churuguara');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-PARISH-402',$parish);


        $parish = new Parish();
        $parish->setName('El Paují');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-PARISH-403',$parish);


        $parish = new Parish();
        $parish->setName('Independencia');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-PARISH-404',$parish);


        $parish = new Parish();
        $parish->setName('Mapararí');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-115'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-115-PARISH-405',$parish);


        $parish = new Parish();
        $parish->setName('Agua Linda');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-116'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-116-PARISH-406',$parish);


        $parish = new Parish();
        $parish->setName('Araurima');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-116'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-116-PARISH-407',$parish);


        $parish = new Parish();
        $parish->setName('Jacura');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-116'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-116-PARISH-408',$parish);


        $parish = new Parish();
        $parish->setName('Los Taques');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-117'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-117-PARISH-409',$parish);


        $parish = new Parish();
        $parish->setName('Judibana');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-117'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-117-PARISH-410',$parish);


        $parish = new Parish();
        $parish->setName('Casigua');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-118'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-118-PARISH-411',$parish);


        $parish = new Parish();
        $parish->setName('Mene de Mauroa');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-118'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-118-PARISH-412',$parish);


        $parish = new Parish();
        $parish->setName('San Félix');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-118'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-118-PARISH-413',$parish);


        $parish = new Parish();
        $parish->setName('Guzmán Guillermo');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-PARISH-414',$parish);


        $parish = new Parish();
        $parish->setName('Mitare');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-PARISH-415',$parish);


        $parish = new Parish();
        $parish->setName('Río Seco');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-PARISH-416',$parish);


        $parish = new Parish();
        $parish->setName('Sabaneta');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-PARISH-417',$parish);


        $parish = new Parish();
        $parish->setName('San Antonio');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-PARISH-418',$parish);


        $parish = new Parish();
        $parish->setName('San Gabriel');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-PARISH-419',$parish);


        $parish = new Parish();
        $parish->setName('Santa Ana');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-119'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-119-PARISH-420',$parish);


        $parish = new Parish();
        $parish->setName('Boca de Tocuyo');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-120'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-120-PARISH-421',$parish);


        $parish = new Parish();
        $parish->setName('Chichiriviche');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-120'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-120-PARISH-422',$parish);


        $parish = new Parish();
        $parish->setName('Tocuyo de la Costa');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-120'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-120-PARISH-423',$parish);


        $parish = new Parish();
        $parish->setName('Cabure');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-122'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-122-PARISH-424',$parish);


        $parish = new Parish();
        $parish->setName('Colina');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-122'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-122-PARISH-425',$parish);


        $parish = new Parish();
        $parish->setName('Curimagua');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-122'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-122-PARISH-426',$parish);


        $parish = new Parish();
        $parish->setName('San José de la Costa');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-123'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-123-PARISH-427',$parish);


        $parish = new Parish();
        $parish->setName('Píritu');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-123'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-123-PARISH-428',$parish);


        $parish = new Parish();
        $parish->setName('Tucacas');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-125'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-125-PARISH-429',$parish);


        $parish = new Parish();
        $parish->setName('Boca de Aroa');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-125'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-125-PARISH-430',$parish);


        $parish = new Parish();
        $parish->setName('Pecaya');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-126'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-126-PARISH-431',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-126'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-126-PARISH-432',$parish);


        $parish = new Parish();
        $parish->setName('El Charal');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-128'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-128-PARISH-433',$parish);


        $parish = new Parish();
        $parish->setName('Las Vegas del Tuy');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-128'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-128-PARISH-434',$parish);


        $parish = new Parish();
        $parish->setName('Santa Cruz de Bucaral');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-128'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-128-PARISH-435',$parish);


        $parish = new Parish();
        $parish->setName('Bruzual');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-129'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-129-PARISH-436',$parish);


        $parish = new Parish();
        $parish->setName('Urumaco');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-129'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-129-PARISH-437',$parish);


        $parish = new Parish();
        $parish->setName('Puerto Cumarebo');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-PARISH-438',$parish);


        $parish = new Parish();
        $parish->setName('La Ciénaga');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-PARISH-439',$parish);


        $parish = new Parish();
        $parish->setName('La Soledad');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-PARISH-440',$parish);


        $parish = new Parish();
        $parish->setName('Pueblo Cumarebo');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-PARISH-441',$parish);


        $parish = new Parish();
        $parish->setName('Zazárida');
        $parish->setState($this->getReference('VEN-STATE-VE-I'));
        $parish->setMunicipality($this->getReference('VEN-VE-I-MUNICIPALITY-130'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-I-130-PARISH-442',$parish);


        $parish = new Parish();
        $parish->setName('Uverito');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-131'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-131-PARISH-443',$parish);


        $parish = new Parish();
        $parish->setName('Puerto Miranda');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-131'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-131-PARISH-444',$parish);


        $parish = new Parish();
        $parish->setName('Camaguán');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-131'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-131-PARISH-445',$parish);


        $parish = new Parish();
        $parish->setName('Chaguaramas');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-132'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-132-PARISH-446',$parish);


        $parish = new Parish();
        $parish->setName('El Socorro');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-133'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-133-PARISH-447',$parish);


        $parish = new Parish();
        $parish->setName('Cazorla');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-134'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-134-PARISH-475',$parish);


        $parish = new Parish();
        $parish->setName('Guayabal');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-134'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-134-PARISH-476',$parish);


        $parish = new Parish();
        $parish->setName('Espino');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-136'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-136-PARISH-448',$parish);


        $parish = new Parish();
        $parish->setName('Valle de la Pascua');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-136'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-136-PARISH-449',$parish);


        $parish = new Parish();
        $parish->setName('Cabruta');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-137'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-137-PARISH-450',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rita de Manapire');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-137'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-137-PARISH-451',$parish);


        $parish = new Parish();
        $parish->setName('Las Mercedes');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-137'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-137-PARISH-452',$parish);


        $parish = new Parish();
        $parish->setName('El Sombrero');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-138'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-138-PARISH-453',$parish);


        $parish = new Parish();
        $parish->setName('Sosa');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-138'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-138-PARISH-454',$parish);


        $parish = new Parish();
        $parish->setName('El Calvario');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-139'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-139-PARISH-455',$parish);


        $parish = new Parish();
        $parish->setName('El Rastro');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-139'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-139-PARISH-456',$parish);


        $parish = new Parish();
        $parish->setName('Guardatinajas');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-139'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-139-PARISH-457',$parish);


        $parish = new Parish();
        $parish->setName('Capital Urbana Calabozo');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-139'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-139-PARISH-458',$parish);


        $parish = new Parish();
        $parish->setName('Altagracia de Orituco');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-PARISH-459',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael de Orituco');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-PARISH-460',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco Javier de Lezama');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-PARISH-461',$parish);


        $parish = new Parish();
        $parish->setName('Paso Real de Macaira');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-PARISH-462',$parish);


        $parish = new Parish();
        $parish->setName('Carlos Soublette');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-PARISH-463',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco de Macaira');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-PARISH-464',$parish);


        $parish = new Parish();
        $parish->setName('Libertad de Orituco');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-140'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-140-PARISH-465',$parish);


        $parish = new Parish();
        $parish->setName('Ortiz');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-141'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-141-PARISH-466',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco de Tiznado');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-141'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-141-PARISH-467',$parish);


        $parish = new Parish();
        $parish->setName('San José de Tiznado');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-141'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-141-PARISH-468',$parish);


        $parish = new Parish();
        $parish->setName('San Lorenzo de Tiznado');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-141'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-141-PARISH-469',$parish);


        $parish = new Parish();
        $parish->setName('Tucupido');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-142'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-142-PARISH-470',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael de Laya');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-142'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-142-PARISH-471',$parish);


        $parish = new Parish();
        $parish->setName('Cantagallo');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-143'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-143-PARISH-472',$parish);


        $parish = new Parish();
        $parish->setName('San Juan de Los Morros');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-143'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-143-PARISH-473',$parish);


        $parish = new Parish();
        $parish->setName('Parapara');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-143'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-143-PARISH-474',$parish);


        $parish = new Parish();
        $parish->setName('San José de Guaribe');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-144'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-144-PARISH-477',$parish);


        $parish = new Parish();
        $parish->setName('Uveral');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-144'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-144-PARISH-478',$parish);


        $parish = new Parish();
        $parish->setName('Altamira');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-145'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-145-PARISH-479',$parish);


        $parish = new Parish();
        $parish->setName('Santa María de Ipire');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-145'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-145-PARISH-480',$parish);


        $parish = new Parish();
        $parish->setName('San José de Unare');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-146'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-146-PARISH-481',$parish);


        $parish = new Parish();
        $parish->setName('Zaraza');
        $parish->setState($this->getReference('VEN-STATE-VE-J'));
        $parish->setMunicipality($this->getReference('VEN-VE-J-MUNICIPALITY-146'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-J-146-PARISH-482',$parish);


        $parish = new Parish();
        $parish->setName('Quebrada Honda de Guache');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-147'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-147-PARISH-483',$parish);


        $parish = new Parish();
        $parish->setName('Tamayo');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-147'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-147-PARISH-484',$parish);


        $parish = new Parish();
        $parish->setName('Yacambú');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-147'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-147-PARISH-485',$parish);


        $parish = new Parish();
        $parish->setName('Freitez');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-148'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-148-PARISH-486',$parish);


        $parish = new Parish();
        $parish->setName('José María Blanco');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-148'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-148-PARISH-487',$parish);


        $parish = new Parish();
        $parish->setName('Aguedo F. Alvarado');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-488',$parish);


        $parish = new Parish();
        $parish->setName('Buena Vista');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-489',$parish);


        $parish = new Parish();
        $parish->setName('Catedral');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-490',$parish);


        $parish = new Parish();
        $parish->setName('El Cuji');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-491',$parish);


        $parish = new Parish();
        $parish->setName('Juan de Villegas');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-492',$parish);


        $parish = new Parish();
        $parish->setName('Juárez');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-493',$parish);


        $parish = new Parish();
        $parish->setName('La Concepción');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-494',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rosa');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-495',$parish);


        $parish = new Parish();
        $parish->setName('Tamaca');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-496',$parish);


        $parish = new Parish();
        $parish->setName('Unión');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-149'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-149-PARISH-497',$parish);


        $parish = new Parish();
        $parish->setName('Coronel Mariano Peraza');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-PARISH-498',$parish);


        $parish = new Parish();
        $parish->setName('Cuara');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-PARISH-499',$parish);


        $parish = new Parish();
        $parish->setName('Diego de Lozada');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-PARISH-500',$parish);
        
        
        $parish = new Parish();
        $parish->setName('José Berardo Dorante');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-PARISH-501',$parish);


        $parish = new Parish();
        $parish->setName('Juan Bautista Rodríguez');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-PARISH-502',$parish);


        $parish = new Parish();
        $parish->setName('Paraíso de San José');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-PARISH-503',$parish);


        $parish = new Parish();
        $parish->setName('San Miguel');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-PARISH-504',$parish);


        $parish = new Parish();
        $parish->setName('Tintorero');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-150'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-150-PARISH-505',$parish);


        $parish = new Parish();
        $parish->setName('Anzoátegui');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-PARISH-506',$parish);


        $parish = new Parish();
        $parish->setName('Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-PARISH-507',$parish);


        $parish = new Parish();
        $parish->setName('Guárico');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-PARISH-508',$parish);


        $parish = new Parish();
        $parish->setName('Hilario Luna y Luna');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-PARISH-509',$parish);


        $parish = new Parish();
        $parish->setName('Humocaro Bajo');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-PARISH-510',$parish);


        $parish = new Parish();
        $parish->setName('Humocaro Alto');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-PARISH-511',$parish);


        $parish = new Parish();
        $parish->setName('La Candelaria');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-PARISH-512',$parish);


        $parish = new Parish();
        $parish->setName('Morán');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-151'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-151-PARISH-513',$parish);


        $parish = new Parish();
        $parish->setName('Agua Viva');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-152'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-152-PARISH-514',$parish);


        $parish = new Parish();
        $parish->setName('Cabudare');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-152'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-152-PARISH-515',$parish);


        $parish = new Parish();
        $parish->setName('José Gregorio Bastidas');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-152'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-152-PARISH-516',$parish);


        $parish = new Parish();
        $parish->setName('Buría');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-153'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-153-PARISH-517',$parish);


        $parish = new Parish();
        $parish->setName('Gustavo Vegas León');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-153'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-153-PARISH-518',$parish);


        $parish = new Parish();
        $parish->setName('Sarare');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-153'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-153-PARISH-519',$parish);


        $parish = new Parish();
        $parish->setName('Altagracia');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-520',$parish);


        $parish = new Parish();
        $parish->setName('Antonio Díaz');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-521',$parish);


        $parish = new Parish();
        $parish->setName('Camacaro');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-522',$parish);


        $parish = new Parish();
        $parish->setName('Castañeda');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-523',$parish);


        $parish = new Parish();
        $parish->setName('Cecilio Zubillaga');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-524',$parish);


        $parish = new Parish();
        $parish->setName('Chiquinquira');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-525',$parish);


        $parish = new Parish();
        $parish->setName('El Blanco');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-526',$parish);


        $parish = new Parish();
        $parish->setName('Espinoza de los Monteros');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-527',$parish);


        $parish = new Parish();
        $parish->setName('Heriberto Arroyo');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-528',$parish);


        $parish = new Parish();
        $parish->setName('Lara');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-529',$parish);


        $parish = new Parish();
        $parish->setName('Las Mercedes');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-530',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Morillo');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-531',$parish);


        $parish = new Parish();
        $parish->setName('Montaña Verde');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-532',$parish);


        $parish = new Parish();
        $parish->setName('Montes de Oca');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-533',$parish);


        $parish = new Parish();
        $parish->setName('Reyes Vargas');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-534',$parish);


        $parish = new Parish();
        $parish->setName('Torres');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-535',$parish);


        $parish = new Parish();
        $parish->setName('Trinidad Samuel');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-154'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-154-PARISH-536',$parish);


        $parish = new Parish();
        $parish->setName('Siquisique');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-155'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-155-PARISH-537',$parish);


        $parish = new Parish();
        $parish->setName('San Miguel');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-155'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-155-PARISH-538',$parish);


        $parish = new Parish();
        $parish->setName('Moroturo');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-155'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-155-PARISH-539',$parish);


        $parish = new Parish();
        $parish->setName('Xaguas');
        $parish->setState($this->getReference('VEN-STATE-VE-K'));
        $parish->setMunicipality($this->getReference('VEN-VE-K-MUNICIPALITY-155'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-K-155-PARISH-540',$parish);


        $parish = new Parish();
        $parish->setName('Gabriel Picón Gonzáles');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-PARISH-541',$parish);


        $parish = new Parish();
        $parish->setName('Héctor Amable Mora');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-PARISH-542',$parish);


        $parish = new Parish();
        $parish->setName('José Nucete Sardi');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-PARISH-543',$parish);


        $parish = new Parish();
        $parish->setName('Presidente Betancourt');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-PARISH-544',$parish);


        $parish = new Parish();
        $parish->setName('Presidente Páez');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-PARISH-545',$parish);


        $parish = new Parish();
        $parish->setName('Presidente Rómulo Gallegos');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-PARISH-546',$parish);


        $parish = new Parish();
        $parish->setName('Pulido Méndez');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-156'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-156-PARISH-547',$parish);


        $parish = new Parish();
        $parish->setName('Santa Cruz de Mora');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-158'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-158-PARISH-548',$parish);


        $parish = new Parish();
        $parish->setName('Mesa Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-158'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-158-PARISH-549',$parish);


        $parish = new Parish();
        $parish->setName('Mesa las Palmas');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-158'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-158-PARISH-550',$parish);


        $parish = new Parish();
        $parish->setName('Aricagua');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-159'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-159-PARISH-551',$parish);


        $parish = new Parish();
        $parish->setName('San Antonio');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-159'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-159-PARISH-552',$parish);


        $parish = new Parish();
        $parish->setName('Canaguá');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-PARISH-553',$parish);


        $parish = new Parish();
        $parish->setName('Mucutuy');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-PARISH-554',$parish);


        $parish = new Parish();
        $parish->setName('Mucuchachí');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-PARISH-555',$parish);


        $parish = new Parish();
        $parish->setName('Chacantá');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-PARISH-556',$parish);


        $parish = new Parish();
        $parish->setName('El Molino');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-PARISH-557',$parish);


        $parish = new Parish();
        $parish->setName('Capurí');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-PARISH-558',$parish);


        $parish = new Parish();
        $parish->setName('Guaimaral');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-160'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-160-PARISH-559',$parish);


        $parish = new Parish();
        $parish->setName('Tucaní');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-161'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-161-PARISH-567',$parish);


        $parish = new Parish();
        $parish->setName('Florencio Ramírez');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-161'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-161-PARISH-568',$parish);


        $parish = new Parish();
        $parish->setName('Fernández Peña');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-PARISH-560',$parish);


        $parish = new Parish();
        $parish->setName('Matriz');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-PARISH-561',$parish);


        $parish = new Parish();
        $parish->setName('Montalbán');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-PARISH-562',$parish);


        $parish = new Parish();
        $parish->setName('Acequias');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-PARISH-563',$parish);


        $parish = new Parish();
        $parish->setName('Jají');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-PARISH-564',$parish);


        $parish = new Parish();
        $parish->setName('La Mesa');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-PARISH-565',$parish);


        $parish = new Parish();
        $parish->setName('San José del Sur');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-162'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-162-PARISH-566',$parish);


        $parish = new Parish();
        $parish->setName('Santo Domingo');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-164'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-164-PARISH-569',$parish);


        $parish = new Parish();
        $parish->setName('Las Piedras');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-164'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-164-PARISH-570',$parish);


        $parish = new Parish();
        $parish->setName('Mesa de Quintero');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-165'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-165-PARISH-571',$parish);


        $parish = new Parish();
        $parish->setName('Río Negro');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-165'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-165-PARISH-572',$parish);


        $parish = new Parish();
        $parish->setName('Guaraque');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-165'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-165-PARISH-573',$parish);


        $parish = new Parish();
        $parish->setName('Arapuey');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-166'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-166-PARISH-574',$parish);


        $parish = new Parish();
        $parish->setName('Palmira');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-166'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-166-PARISH-575',$parish);


        $parish = new Parish();
        $parish->setName('Torondoy');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-167'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-167-PARISH-576',$parish);


        $parish = new Parish();
        $parish->setName('San Cristóbal de Torondoy');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-167'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-167-PARISH-577',$parish);


        $parish = new Parish();
        $parish->setName('Antonio Spinetti Dini');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-578',$parish);


        $parish = new Parish();
        $parish->setName('Arias');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-579',$parish);


        $parish = new Parish();
        $parish->setName('Caracciolo Parra Pérez ');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-580',$parish);


        $parish = new Parish();
        $parish->setName('Domingo Peña');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-581',$parish);


        $parish = new Parish();
        $parish->setName('El Llano');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-582',$parish);


        $parish = new Parish();
        $parish->setName('Gonzalo Picón Febres');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-583',$parish);


        $parish = new Parish();
        $parish->setName('Jacinto Plaza');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-584',$parish);


        $parish = new Parish();
        $parish->setName('Juan Rodríguez Suárez');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-585',$parish);


        $parish = new Parish();
        $parish->setName('Lasso de la Vega');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-586',$parish);


        $parish = new Parish();
        $parish->setName('Mariano Picón Salas');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-587',$parish);


        $parish = new Parish();
        $parish->setName('Milla');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-588',$parish);


        $parish = new Parish();
        $parish->setName('Osuna Rodríguez');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-589',$parish);


        $parish = new Parish();
        $parish->setName('Sagrario');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-590',$parish);


        $parish = new Parish();
        $parish->setName('El Morro');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-591',$parish);


        $parish = new Parish();
        $parish->setName('Los Nevados');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-168'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-168-PARISH-592',$parish);


        $parish = new Parish();
        $parish->setName('Andrés Eloy Blanco');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-169'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-169-PARISH-593',$parish);


        $parish = new Parish();
        $parish->setName('La Venta');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-169'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-169-PARISH-594',$parish);


        $parish = new Parish();
        $parish->setName('Piñango');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-169'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-169-PARISH-595',$parish);


        $parish = new Parish();
        $parish->setName('Timotes');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-169'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-169-PARISH-596',$parish);


        $parish = new Parish();
        $parish->setName('Eloy Paredes');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-170'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-170-PARISH-597',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael de Alcázar');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-170'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-170-PARISH-598',$parish);


        $parish = new Parish();
        $parish->setName('Santa Elena de Arenales');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-170'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-170-PARISH-599',$parish);


        $parish = new Parish();
        $parish->setName('Pueblo Llano');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-172'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-172-PARISH-600',$parish);


        $parish = new Parish();
        $parish->setName('Rangel');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-PARISH-601',$parish);


        $parish = new Parish();
        $parish->setName('Cacute');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-PARISH-602',$parish);


        $parish = new Parish();
        $parish->setName('La toma');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-PARISH-603',$parish);


        $parish = new Parish();
        $parish->setName('Mucurubá');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-PARISH-604',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-173'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-173-PARISH-605',$parish);


        $parish = new Parish();
        $parish->setName('Bailadores');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-174'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-174-PARISH-606',$parish);


        $parish = new Parish();
        $parish->setName('Gerónimo');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-174'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-174-PARISH-607',$parish);


        $parish = new Parish();
        $parish->setName('Tabay');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-175'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-175-PARISH-608',$parish);


        $parish = new Parish();
        $parish->setName('Chiguará');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-PARISH-609',$parish);


        $parish = new Parish();
        $parish->setName('Estánquez');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-PARISH-610',$parish);


        $parish = new Parish();
        $parish->setName('Lagunillas');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-PARISH-611',$parish);


        $parish = new Parish();
        $parish->setName('La Trampa');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-PARISH-612',$parish);


        $parish = new Parish();
        $parish->setName('Pueblo Nuevo del Sur');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-PARISH-613',$parish);


        $parish = new Parish();
        $parish->setName('San Juan');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-176'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-176-PARISH-614',$parish);


        $parish = new Parish();
        $parish->setName('Urbana El Llano');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-177'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-177-PARISH-615',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-177'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-177-PARISH-616',$parish);


        $parish = new Parish();
        $parish->setName('El Amparo');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-177'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-177-PARISH-617',$parish);


        $parish = new Parish();
        $parish->setName('Tovar');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-177'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-177-PARISH-618',$parish);


        $parish = new Parish();
        $parish->setName('Independencia');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-178'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-178-PARISH-619',$parish);


        $parish = new Parish();
        $parish->setName('Santa Apolonia');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-178'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-178-PARISH-620',$parish);


        $parish = new Parish();
        $parish->setName('Maria de La Concepción Palacios');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-178'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-178-PARISH-621',$parish);


        $parish = new Parish();
        $parish->setName('Nueva Bolivia');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-178'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-178-PARISH-622',$parish);


        $parish = new Parish();
        $parish->setName('Caño El Tigre');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-179'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-179-PARISH-623',$parish);


        $parish = new Parish();
        $parish->setName('Zea');
        $parish->setState($this->getReference('VEN-STATE-VE-L'));
        $parish->setMunicipality($this->getReference('VEN-VE-L-MUNICIPALITY-179'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-L-179-PARISH-624',$parish);


        $parish = new Parish();
        $parish->setName('Aragüita');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-PARISH-625',$parish);


        $parish = new Parish();
        $parish->setName('Arevalo González');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-PARISH-626',$parish);


        $parish = new Parish();
        $parish->setName('Capaya');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-PARISH-627',$parish);


        $parish = new Parish();
        $parish->setName('Caucagua');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-PARISH-628',$parish);


        $parish = new Parish();
        $parish->setName('El Café');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-PARISH-629',$parish);


        $parish = new Parish();
        $parish->setName('Marizapa');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-PARISH-630',$parish);


        $parish = new Parish();
        $parish->setName('Panaquire');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-PARISH-631',$parish);


        $parish = new Parish();
        $parish->setName('Ribas');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-180'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-180-PARISH-632',$parish);


        $parish = new Parish();
        $parish->setName('Cumbo');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-181'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-181-PARISH-633',$parish);


        $parish = new Parish();
        $parish->setName('San José de Barlovento');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-181'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-181-PARISH-634',$parish);


        $parish = new Parish();
        $parish->setName('Baruta');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-182'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-182-PARISH-635',$parish);


        $parish = new Parish();
        $parish->setName('El Cafetal');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-182'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-182-PARISH-636',$parish);


        $parish = new Parish();
        $parish->setName('Las Minas');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-182'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-182-PARISH-637',$parish);


        $parish = new Parish();
        $parish->setName('Higuerote');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-183'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-183-PARISH-638',$parish);


        $parish = new Parish();
        $parish->setName('Curiepe');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-183'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-183-PARISH-639',$parish);


        $parish = new Parish();
        $parish->setName('Tacarigua');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-183'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-183-PARISH-640',$parish);


        $parish = new Parish();
        $parish->setName('Mamporal');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-184'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-184-PARISH-641',$parish);


        $parish = new Parish();
        $parish->setName('Carrizal');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-185'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-185-PARISH-642',$parish);


        $parish = new Parish();
        $parish->setName('Chacao');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-186'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-186-PARISH-643',$parish);


        $parish = new Parish();
        $parish->setName('Charallave');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-187'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-187-PARISH-644',$parish);


        $parish = new Parish();
        $parish->setName('Las Brisas');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-187'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-187-PARISH-645',$parish);


        $parish = new Parish();
        $parish->setName('El Hatillo');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-188'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-188-PARISH-646',$parish);


        $parish = new Parish();
        $parish->setName('Altagracia de la Montaña');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-PARISH-647',$parish);


        $parish = new Parish();
        $parish->setName('Cecilio Acosta');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-PARISH-648',$parish);


        $parish = new Parish();
        $parish->setName('El Jarillo');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-PARISH-649',$parish);


        $parish = new Parish();
        $parish->setName('Los Teques');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-PARISH-650',$parish);


        $parish = new Parish();
        $parish->setName('Paracotos');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-PARISH-651',$parish);


        $parish = new Parish();
        $parish->setName('San Pedro');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-PARISH-652',$parish);


        $parish = new Parish();
        $parish->setName('Tácata');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-189'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-189-PARISH-653',$parish);


        $parish = new Parish();
        $parish->setName('El Cartanal');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-190'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-190-PARISH-654',$parish);


        $parish = new Parish();
        $parish->setName('Santa Teresa del Tuy');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-190'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-190-PARISH-655',$parish);


        $parish = new Parish();
        $parish->setName('La Democracia');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-191'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-191-PARISH-656',$parish);


        $parish = new Parish();
        $parish->setName('Ocumare del Tuy');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-191'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-191-PARISH-657',$parish);


        $parish = new Parish();
        $parish->setName('Santa Bárbara');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-191'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-191-PARISH-658',$parish);


        $parish = new Parish();
        $parish->setName('San Antonio de los Altos');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-192'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-192-PARISH-659',$parish);


        $parish = new Parish();
        $parish->setName('Río Chico');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-PARISH-660',$parish);


        $parish = new Parish();
        $parish->setName('Paparo');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-PARISH-661',$parish);


        $parish = new Parish();
        $parish->setName('Tacarigua de La Laguna');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-PARISH-662',$parish);


        $parish = new Parish();
        $parish->setName('El Guapo');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-PARISH-663',$parish);


        $parish = new Parish();
        $parish->setName('San Fernando del Guapo');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-193'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-193-PARISH-664',$parish);


        $parish = new Parish();
        $parish->setName('Santa Lucía del Tuy');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-194'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-194-PARISH-665',$parish);


        $parish = new Parish();
        $parish->setName('Machurucuto');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-195'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-195-PARISH-666',$parish);


        $parish = new Parish();
        $parish->setName('Cúpira');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-195'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-195-PARISH-667',$parish);


        $parish = new Parish();
        $parish->setName('Guarenas');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-196'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-196-PARISH-668',$parish);


        $parish = new Parish();
        $parish->setName('San Antonio de Yare');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-197'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-197-PARISH-669',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco de Yare');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-197'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-197-PARISH-670',$parish);


        $parish = new Parish();
        $parish->setName('Caucaguita');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-PARISH-673',$parish);


        $parish = new Parish();
        $parish->setName('Filas de Mariches');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-PARISH-674',$parish);


        $parish = new Parish();
        $parish->setName('La Dolorita');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-PARISH-675',$parish);


        $parish = new Parish();
        $parish->setName('Leoncio Martínez');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-PARISH-676',$parish);


        $parish = new Parish();
        $parish->setName('Petare');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-198'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-198-PARISH-677',$parish);


        $parish = new Parish();
        $parish->setName('Cúa');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-199'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-199-PARISH-671',$parish);


        $parish = new Parish();
        $parish->setName('Nueva Cúa');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-199'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-199-PARISH-672',$parish);


        $parish = new Parish();
        $parish->setName('Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-200'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-200-PARISH-678',$parish);


        $parish = new Parish();
        $parish->setName('Guatire');
        $parish->setState($this->getReference('VEN-STATE-VE-M'));
        $parish->setMunicipality($this->getReference('VEN-VE-M-MUNICIPALITY-200'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-M-200-PARISH-679',$parish);


        $parish = new Parish();
        $parish->setName('San Antonio');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-201'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-201-PARISH-680',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-201'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-201-PARISH-681',$parish);


        $parish = new Parish();
        $parish->setName('El Guacharo');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-PARISH-682',$parish);


        $parish = new Parish();
        $parish->setName('La Guanota');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-PARISH-683',$parish);


        $parish = new Parish();
        $parish->setName('Sabana de Piedra');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-PARISH-684',$parish);


        $parish = new Parish();
        $parish->setName('San Agustín');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-PARISH-685',$parish);


        $parish = new Parish();
        $parish->setName('Teresen');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-PARISH-686',$parish);


        $parish = new Parish();
        $parish->setName('Caripe');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-204'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-204-PARISH-687',$parish);


        $parish = new Parish();
        $parish->setName('Areo');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-205'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-205-PARISH-688',$parish);


        $parish = new Parish();
        $parish->setName('Caicara');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-205'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-205-PARISH-689',$parish);


        $parish = new Parish();
        $parish->setName('San Félix');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-205'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-205-PARISH-690',$parish);


        $parish = new Parish();
        $parish->setName('Viento Freco');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-205'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-205-PARISH-691',$parish);


        $parish = new Parish();
        $parish->setName('El Tejero');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-206'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-206-PARISH-720',$parish);


        $parish = new Parish();
        $parish->setName('Punta de Mata');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-206'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-206-PARISH-721',$parish);


        $parish = new Parish();
        $parish->setName('Chaguaramas');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-207'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-207-PARISH-692',$parish);


        $parish = new Parish();
        $parish->setName('Las Alhuacas');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-207'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-207-PARISH-693',$parish);


        $parish = new Parish();
        $parish->setName('Tabasca');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-207'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-207-PARISH-694',$parish);


        $parish = new Parish();
        $parish->setName('Temblador');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-207'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-207-PARISH-695',$parish);


        $parish = new Parish();
        $parish->setName('Maturin');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-696',$parish);


        $parish = new Parish();
        $parish->setName('Alto de Los Godos');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-697',$parish);


        $parish = new Parish();
        $parish->setName('Boquerón');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-698',$parish);


        $parish = new Parish();
        $parish->setName('Las Cocuizas');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-699',$parish);


        $parish = new Parish();
        $parish->setName('San Simón');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-700',$parish);


        $parish = new Parish();
        $parish->setName('Santa Cruz');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-701',$parish);


        $parish = new Parish();
        $parish->setName('El Corozo');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-702',$parish);


        $parish = new Parish();
        $parish->setName('El Furrial');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-703',$parish);


        $parish = new Parish();
        $parish->setName('Jusepín');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-704',$parish);


        $parish = new Parish();
        $parish->setName('La Pica');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-705',$parish);


        $parish = new Parish();
        $parish->setName('San Vicente');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-208'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-208-PARISH-706',$parish);


        $parish = new Parish();
        $parish->setName('Aparicio');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-PARISH-707',$parish);


        $parish = new Parish();
        $parish->setName('Aragua');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-PARISH-708',$parish);


        $parish = new Parish();
        $parish->setName('Chaguaramal');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-PARISH-709',$parish);


        $parish = new Parish();
        $parish->setName('El Pinto');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-PARISH-710',$parish);


        $parish = new Parish();
        $parish->setName('Guanaguana');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-PARISH-711',$parish);


        $parish = new Parish();
        $parish->setName('La Toscana');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-PARISH-712',$parish);


        $parish = new Parish();
        $parish->setName('Taguaya');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-209'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-209-PARISH-713',$parish);


        $parish = new Parish();
        $parish->setName('Cachipo');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-210'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-210-PARISH-714',$parish);


        $parish = new Parish();
        $parish->setName('Quiriquire');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-210'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-210-PARISH-715',$parish);


        $parish = new Parish();
        $parish->setName('Santa Bárbara');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-211'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-211-PARISH-716',$parish);


        $parish = new Parish();
        $parish->setName('Barrancas');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-212'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-212-PARISH-717',$parish);


        $parish = new Parish();
        $parish->setName('Los Barrancos de Fajardo');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-212'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-212-PARISH-718',$parish);


        $parish = new Parish();
        $parish->setName('Uracoa');
        $parish->setState($this->getReference('VEN-STATE-VE-N'));
        $parish->setMunicipality($this->getReference('VEN-VE-N-MUNICIPALITY-213'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-N-213-PARISH-719',$parish);


        $parish = new Parish();
        $parish->setName('Antolín del Campo');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-214'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-214-PARISH-722',$parish);


        $parish = new Parish();
        $parish->setName('San Juan Bautista');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-216'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-216-PARISH-723',$parish);


        $parish = new Parish();
        $parish->setName('Zabala');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-216'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-216-PARISH-724',$parish);


        $parish = new Parish();
        $parish->setName('Francisco Fajardo');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-217'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-217-PARISH-725',$parish);


        $parish = new Parish();
        $parish->setName('El Valle');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-217'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-217-PARISH-726',$parish);


        $parish = new Parish();
        $parish->setName('Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-PARISH-727',$parish);


        $parish = new Parish();
        $parish->setName('Guevara');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-PARISH-728',$parish);


        $parish = new Parish();
        $parish->setName('Matasiete');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-PARISH-729',$parish);


        $parish = new Parish();
        $parish->setName('Santa Ana');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-PARISH-730',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-218'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-218-PARISH-731',$parish);


        $parish = new Parish();
        $parish->setName('Aguirre');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-219'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-219-PARISH-732',$parish);


        $parish = new Parish();
        $parish->setName('Pampatar');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-219'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-219-PARISH-733',$parish);


        $parish = new Parish();
        $parish->setName('Adrián');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-220'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-220-PARISH-734',$parish);


        $parish = new Parish();
        $parish->setName('Juan Griego');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-220'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-220-PARISH-735',$parish);


        $parish = new Parish();
        $parish->setName('Boca del Río');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-222'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-222-PARISH-736',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-222'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-222-PARISH-737',$parish);


        $parish = new Parish();
        $parish->setName('Los Barales');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-223'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-223-PARISH-738',$parish);


        $parish = new Parish();
        $parish->setName('Punta de Piedras');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-223'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-223-PARISH-739',$parish);


        $parish = new Parish();
        $parish->setName('Vicente Fuentes');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-224'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-224-PARISH-740',$parish);


        $parish = new Parish();
        $parish->setName('San Pedro de Coche');
        $parish->setState($this->getReference('VEN-STATE-VE-O'));
        $parish->setMunicipality($this->getReference('VEN-VE-O-MUNICIPALITY-224'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-O-224-PARISH-741',$parish);


        $parish = new Parish();
        $parish->setName('Agua Blanca');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-225'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-225-PARISH-742',$parish);


        $parish = new Parish();
        $parish->setName('Araure');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-226'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-226-PARISH-743',$parish);


        $parish = new Parish();
        $parish->setName('Río Acarigua');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-226'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-226-PARISH-744',$parish);


        $parish = new Parish();
        $parish->setName('Píritu');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-227'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-227-PARISH-745',$parish);


        $parish = new Parish();
        $parish->setName('Uveral');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-227'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-227-PARISH-746',$parish);


        $parish = new Parish();
        $parish->setName('Guanare');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-PARISH-747',$parish);


        $parish = new Parish();
        $parish->setName('Cordova');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-PARISH-748',$parish);


        $parish = new Parish();
        $parish->setName('San José de la Montaña');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-PARISH-749',$parish);


        $parish = new Parish();
        $parish->setName('San Juan de Guanaguanare');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-PARISH-750',$parish);


        $parish = new Parish();
        $parish->setName('Virgen de Coromoto');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-228'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-228-PARISH-751',$parish);


        $parish = new Parish();
        $parish->setName('Guanarito');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-229'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-229-PARISH-752',$parish);


        $parish = new Parish();
        $parish->setName('Trinidad de la Capilla');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-229'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-229-PARISH-753',$parish);


        $parish = new Parish();
        $parish->setName('La Divina Pastora');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-229'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-229-PARISH-754',$parish);


        $parish = new Parish();
        $parish->setName('Monseñor');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-230'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-230-PARISH-755',$parish);


        $parish = new Parish();
        $parish->setName('Peña Blanca');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-230'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-230-PARISH-756',$parish);


        $parish = new Parish();
        $parish->setName('Aparición');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-231'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-231-PARISH-757',$parish);


        $parish = new Parish();
        $parish->setName('La Estación');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-231'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-231-PARISH-758',$parish);


        $parish = new Parish();
        $parish->setName('Ospino');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-231'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-231-PARISH-759',$parish);


        $parish = new Parish();
        $parish->setName('Acarigua');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-232'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-232-PARISH-760',$parish);


        $parish = new Parish();
        $parish->setName('Payara');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-232'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-232-PARISH-761',$parish);


        $parish = new Parish();
        $parish->setName('Pimpinela');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-232'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-232-PARISH-762',$parish);


        $parish = new Parish();
        $parish->setName('Ramón Peraza');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-232'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-232-PARISH-763',$parish);


        $parish = new Parish();
        $parish->setName('Caño Delgadito');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-233'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-233-PARISH-764',$parish);


        $parish = new Parish();
        $parish->setName('Papelón');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-233'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-233-PARISH-765',$parish);


        $parish = new Parish();
        $parish->setName('Antolín Tovar Aquino');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-234'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-234-PARISH-766',$parish);


        $parish = new Parish();
        $parish->setName('Boconoíto');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-234'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-234-PARISH-767',$parish);


        $parish = new Parish();
        $parish->setName('Santa Fe');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-235'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-235-PARISH-768',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael de Onoto');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-235'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-235-PARISH-769',$parish);


        $parish = new Parish();
        $parish->setName('Thermo Morles');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-235'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-235-PARISH-770',$parish);


        $parish = new Parish();
        $parish->setName('Florida');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-236'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-236-PARISH-771',$parish);


        $parish = new Parish();
        $parish->setName('El Playón');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-236'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-236-PARISH-772',$parish);


        $parish = new Parish();
        $parish->setName('Biscucuy');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-PARISH-773',$parish);


        $parish = new Parish();
        $parish->setName('Concepción');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-PARISH-774',$parish);


        $parish = new Parish();
        $parish->setName('San José de Saguaz');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-PARISH-775',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael de Palo Alzado');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-PARISH-776',$parish);


        $parish = new Parish();
        $parish->setName('Uvencio Antonio Velásquez');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-PARISH-777',$parish);


        $parish = new Parish();
        $parish->setName('Villa Rosa');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-237'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-237-PARISH-778',$parish);


        $parish = new Parish();
        $parish->setName('Villa Bruzual');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-238'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-238-PARISH-779',$parish);


        $parish = new Parish();
        $parish->setName('Canelones');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-238'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-238-PARISH-780',$parish);


        $parish = new Parish();
        $parish->setName('Santa Cruz');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-238'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-238-PARISH-781',$parish);


        $parish = new Parish();
        $parish->setName('San Isidro Labrador');
        $parish->setState($this->getReference('VEN-STATE-VE-P'));
        $parish->setMunicipality($this->getReference('VEN-VE-P-MUNICIPALITY-238'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-P-238-PARISH-782',$parish);


        $parish = new Parish();
        $parish->setName('Mariño');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-239'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-239-PARISH-788',$parish);


        $parish = new Parish();
        $parish->setName('Rómulo Gallegos');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-239'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-239-PARISH-789',$parish);


        $parish = new Parish();
        $parish->setName('San José de Aerocuar');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-240'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-240-PARISH-810',$parish);


        $parish = new Parish();
        $parish->setName('Tavera Acosta');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-240'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-240-PARISH-811',$parish);


        $parish = new Parish();
        $parish->setName('El Morro');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-PARISH-783',$parish);


        $parish = new Parish();
        $parish->setName('Puerto Santo');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-PARISH-784',$parish);


        $parish = new Parish();
        $parish->setName('Río Caribe');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-PARISH-785',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-PARISH-786',$parish);


        $parish = new Parish();
        $parish->setName('San Juan de las Galdonas');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-241'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-241-PARISH-787',$parish);


        $parish = new Parish();
        $parish->setName('El Pilar');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-PARISH-790',$parish);


        $parish = new Parish();
        $parish->setName('El Rincón');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-PARISH-791',$parish);


        $parish = new Parish();
        $parish->setName('Francisco Vásquez');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-PARISH-792',$parish);


        $parish = new Parish();
        $parish->setName('Guaraunos');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-PARISH-793',$parish);


        $parish = new Parish();
        $parish->setName('Tunapuicito');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-PARISH-794',$parish);


        $parish = new Parish();
        $parish->setName('Unión');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-242'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-242-PARISH-795',$parish);


        $parish = new Parish();
        $parish->setName('Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-243'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-243-PARISH-796',$parish);


        $parish = new Parish();
        $parish->setName('Macarapana');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-243'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-243-PARISH-797',$parish);


        $parish = new Parish();
        $parish->setName('Santa Catalina');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-243'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-243-PARISH-798',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rosa');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-243'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-243-PARISH-799',$parish);


        $parish = new Parish();
        $parish->setName('Santa Teresa');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-243'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-243-PARISH-800',$parish);


        $parish = new Parish();
        $parish->setName('Mariguitar');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-244'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-244-PARISH-801',$parish);


        $parish = new Parish();
        $parish->setName('Libertad');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-245'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-245-PARISH-802',$parish);


        $parish = new Parish();
        $parish->setName('El Paujil');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-245'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-245-PARISH-803',$parish);


        $parish = new Parish();
        $parish->setName('Yaguaraparo');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-245'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-245-PARISH-804',$parish);


        $parish = new Parish();
        $parish->setName('Araya');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-246'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-246-PARISH-805',$parish);


        $parish = new Parish();
        $parish->setName('Chacopata');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-246'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-246-PARISH-806',$parish);


        $parish = new Parish();
        $parish->setName('Manicuare');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-246'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-246-PARISH-807',$parish);


        $parish = new Parish();
        $parish->setName('Tunapuy');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-247'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-247-PARISH-808',$parish);


        $parish = new Parish();
        $parish->setName('Campo Elías');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-247'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-247-PARISH-809',$parish);


        $parish = new Parish();
        $parish->setName('Irapa');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-PARISH-812',$parish);


        $parish = new Parish();
        $parish->setName('Campo Claro');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-PARISH-813',$parish);


        $parish = new Parish();
        $parish->setName('Marabal');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-PARISH-814',$parish);


        $parish = new Parish();
        $parish->setName('San Antonio de Irapa');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-PARISH-815',$parish);


        $parish = new Parish();
        $parish->setName('Soro');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-248'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-248-PARISH-816',$parish);


        $parish = new Parish();
        $parish->setName('Mejía');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-249'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-249-PARISH-817',$parish);


        $parish = new Parish();
        $parish->setName('Cumanacoa');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-PARISH-818',$parish);


        $parish = new Parish();
        $parish->setName('Arenas');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-PARISH-819',$parish);


        $parish = new Parish();
        $parish->setName('Aricagua');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-PARISH-820',$parish);


        $parish = new Parish();
        $parish->setName('Cocollar');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-PARISH-821',$parish);


        $parish = new Parish();
        $parish->setName('San Fernando');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-PARISH-822',$parish);


        $parish = new Parish();
        $parish->setName('San Lorenzo');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-250'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-250-PARISH-823',$parish);


        $parish = new Parish();
        $parish->setName('Cariaco');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-PARISH-824',$parish);


        $parish = new Parish();
        $parish->setName('Catuaro');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-PARISH-825',$parish);


        $parish = new Parish();
        $parish->setName('Rendón');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-PARISH-826',$parish);


        $parish = new Parish();
        $parish->setName('San Cruz');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-PARISH-827',$parish);


        $parish = new Parish();
        $parish->setName('Santa María');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-251'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-251-PARISH-828',$parish);


        $parish = new Parish();
        $parish->setName('Altagracia');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-PARISH-829',$parish);


        $parish = new Parish();
        $parish->setName('Ayacucho');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-PARISH-830',$parish);


        $parish = new Parish();
        $parish->setName('Gran Mariscal');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-PARISH-831',$parish);


        $parish = new Parish();
        $parish->setName('Raúl Leoni');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-PARISH-832',$parish);


        $parish = new Parish();
        $parish->setName('San Juan');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-PARISH-833',$parish);


        $parish = new Parish();
        $parish->setName('Santa Inés');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-PARISH-834',$parish);


        $parish = new Parish();
        $parish->setName('Valentín Valiente');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-252'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-252-PARISH-835',$parish);


        $parish = new Parish();
        $parish->setName('Cristóbal Colón');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-253'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-253-PARISH-836',$parish);


        $parish = new Parish();
        $parish->setName('Bideau');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-253'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-253-PARISH-837',$parish);


        $parish = new Parish();
        $parish->setName('Punta de Piedras');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-253'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-253-PARISH-838',$parish);


        $parish = new Parish();
        $parish->setName('Güiria');
        $parish->setState($this->getReference('VEN-STATE-VE-R'));
        $parish->setMunicipality($this->getReference('VEN-VE-R-MUNICIPALITY-253'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-R-253-PARISH-839',$parish);


        $parish = new Parish();
        $parish->setName('Andrés Bello');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-254'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-254-PARISH-840',$parish);


        $parish = new Parish();
        $parish->setName('Antonio Rómulo Costa');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-255'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-255-PARISH-841',$parish);


        $parish = new Parish();
        $parish->setName('Ayacucho');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-256'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-256-PARISH-842',$parish);


        $parish = new Parish();
        $parish->setName('Rivas Berti');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-256'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-256-PARISH-843',$parish);


        $parish = new Parish();
        $parish->setName('San Pedro del Río');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-256'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-256-PARISH-844',$parish);


        $parish = new Parish();
        $parish->setName('Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-257'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-257-PARISH-845',$parish);


        $parish = new Parish();
        $parish->setName('Palotal');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-257'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-257-PARISH-846',$parish);


        $parish = new Parish();
        $parish->setName('General Juan Vicente Gómez');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-257'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-257-PARISH-847',$parish);


        $parish = new Parish();
        $parish->setName('Isaías Medina Angarita');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-257'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-257-PARISH-848',$parish);


        $parish = new Parish();
        $parish->setName('Amenodoro Rangel Lamús');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-258'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-258-PARISH-849',$parish);


        $parish = new Parish();
        $parish->setName('La Florida');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-258'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-258-PARISH-850',$parish);


        $parish = new Parish();
        $parish->setName('Cárdenas');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-258'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-258-PARISH-851',$parish);


        $parish = new Parish();
        $parish->setName('Córdoba');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-259'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-259-PARISH-852',$parish);


        $parish = new Parish();
        $parish->setName('Fernández Feo');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-260'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-260-PARISH-853',$parish);


        $parish = new Parish();
        $parish->setName('Alberto Adriani');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-260'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-260-PARISH-854',$parish);


        $parish = new Parish();
        $parish->setName('Santo Domingo');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-260'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-260-PARISH-855',$parish);


        $parish = new Parish();
        $parish->setName('García de Hevia');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-262'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-262-PARISH-856',$parish);


        $parish = new Parish();
        $parish->setName('Boca de Grita');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-262'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-262-PARISH-857',$parish);


        $parish = new Parish();
        $parish->setName('José Antonio Páez');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-262'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-262-PARISH-858',$parish);


        $parish = new Parish();
        $parish->setName('Independencia');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-264'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-264-PARISH-859',$parish);


        $parish = new Parish();
        $parish->setName('Juan Germán Roscio');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-264'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-264-PARISH-860',$parish);


        $parish = new Parish();
        $parish->setName('Román Cárdenas');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-264'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-264-PARISH-861',$parish);


        $parish = new Parish();
        $parish->setName('Jáuregui');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-265'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-265-PARISH-862',$parish);


        $parish = new Parish();
        $parish->setName('Emilio Constantino Guerrero');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-265'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-265-PARISH-863',$parish);


        $parish = new Parish();
        $parish->setName('Monseñor Miguel Antonio Salas');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-265'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-265-PARISH-864',$parish);


        $parish = new Parish();
        $parish->setName('Junín');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-267'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-267-PARISH-865',$parish);


        $parish = new Parish();
        $parish->setName('La Petrólea');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-267'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-267-PARISH-866',$parish);


        $parish = new Parish();
        $parish->setName('Quinimarí');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-267'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-267-PARISH-867',$parish);


        $parish = new Parish();
        $parish->setName('Bramón');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-267'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-267-PARISH-868',$parish);


        $parish = new Parish();
        $parish->setName('Libertad');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-268'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-268-PARISH-869',$parish);


        $parish = new Parish();
        $parish->setName('Cipriano Castro');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-268'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-268-PARISH-870',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Felipe Rugeles');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-268'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-268-PARISH-871',$parish);


        $parish = new Parish();
        $parish->setName('Capital Libertador');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-269'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-269-PARISH-872',$parish);


        $parish = new Parish();
        $parish->setName('Doradas');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-269'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-269-PARISH-873',$parish);


        $parish = new Parish();
        $parish->setName('Don Emeterio Ochoa');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-269'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-269-PARISH-874',$parish);


        $parish = new Parish();
        $parish->setName('San Joaquín de Navay');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-269'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-269-PARISH-875',$parish);


        $parish = new Parish();
        $parish->setName('Lobatera');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-270'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-270-PARISH-876',$parish);


        $parish = new Parish();
        $parish->setName('Constitución');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-270'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-270-PARISH-877',$parish);


        $parish = new Parish();
        $parish->setName('Panamericano');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-272'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-272-PARISH-878',$parish);


        $parish = new Parish();
        $parish->setName('La Palmita');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-272'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-272-PARISH-879',$parish);


        $parish = new Parish();
        $parish->setName('Pedro María Ureña');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-273'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-273-PARISH-880',$parish);


        $parish = new Parish();
        $parish->setName('Nueva Arcadia');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-273'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-273-PARISH-881',$parish);


        $parish = new Parish();
        $parish->setName('Samuel Darío Maldonado');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-275'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-275-PARISH-882',$parish);


        $parish = new Parish();
        $parish->setName('Boconó');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-275'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-275-PARISH-883',$parish);


        $parish = new Parish();
        $parish->setName('Hernández');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-275'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-275-PARISH-884',$parish);


        $parish = new Parish();
        $parish->setName('La Concordia');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-276'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-276-PARISH-885',$parish);


        $parish = new Parish();
        $parish->setName('San Juan Bautista');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-276'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-276-PARISH-886',$parish);


        $parish = new Parish();
        $parish->setName('Pedro María Morantes');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-276'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-276-PARISH-887',$parish);


        $parish = new Parish();
        $parish->setName('San Sebastián');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-276'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-276-PARISH-888',$parish);


        $parish = new Parish();
        $parish->setName('Dr. Francisco Romero Lobo');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-276'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-276-PARISH-889',$parish);


        $parish = new Parish();
        $parish->setName('Eleazar López Contreras');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-278'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-278-PARISH-891',$parish);


        $parish = new Parish();
        $parish->setName('San Pablo');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-278'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-278-PARISH-892',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-279'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-279-PARISH-890',$parish);


        $parish = new Parish();
        $parish->setName('Uribante');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-PARISH-893',$parish);


        $parish = new Parish();
        $parish->setName('Cárdenas');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-PARISH-894',$parish);


        $parish = new Parish();
        $parish->setName('Juan Pablo Peñalosa');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-PARISH-895',$parish);


        $parish = new Parish();
        $parish->setName('Potosí');
        $parish->setState($this->getReference('VEN-STATE-VE-S'));
        $parish->setMunicipality($this->getReference('VEN-VE-S-MUNICIPALITY-281'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-S-281-PARISH-896',$parish);


        $parish = new Parish();
        $parish->setName('Araguaney');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-284'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-284-PARISH-897',$parish);


        $parish = new Parish();
        $parish->setName('El Jaguito');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-284'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-284-PARISH-898',$parish);


        $parish = new Parish();
        $parish->setName('La Esperanza');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-284'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-284-PARISH-899',$parish);


        $parish = new Parish();
        $parish->setName('Santa Isabel');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-284'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-284-PARISH-900',$parish);


        $parish = new Parish();
        $parish->setName('Boconó');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-901',$parish);


        $parish = new Parish();
        $parish->setName('El Carmen');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-902',$parish);


        $parish = new Parish();
        $parish->setName('Mosquey');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-903',$parish);


        $parish = new Parish();
        $parish->setName('Ayacucho');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-904',$parish);


        $parish = new Parish();
        $parish->setName('Burbusay');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-905',$parish);


        $parish = new Parish();
        $parish->setName('General Ribas');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-906',$parish);


        $parish = new Parish();
        $parish->setName('Guaramacal');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-907',$parish);


        $parish = new Parish();
        $parish->setName('Vega de Guaramacal');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-908',$parish);


        $parish = new Parish();
        $parish->setName('Monseñor Jáuregui');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-909',$parish);


        $parish = new Parish();
        $parish->setName('Rafael Rangel');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-910',$parish);


        $parish = new Parish();
        $parish->setName('San Miguel');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-911',$parish);


        $parish = new Parish();
        $parish->setName('San José');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-285'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-285-PARISH-912',$parish);


        $parish = new Parish();
        $parish->setName('Sabana Grande');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-286'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-286-PARISH-913',$parish);


        $parish = new Parish();
        $parish->setName('Cheregüé');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-286'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-286-PARISH-914',$parish);


        $parish = new Parish();
        $parish->setName('Granados');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-286'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-286-PARISH-915',$parish);


        $parish = new Parish();
        $parish->setName('Arnoldo Gabaldón');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-PARISH-916',$parish);


        $parish = new Parish();
        $parish->setName('Bolivia');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-PARISH-917',$parish);


        $parish = new Parish();
        $parish->setName('Carrillo');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-PARISH-918',$parish);


        $parish = new Parish();
        $parish->setName('Cegarra');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-PARISH-919',$parish);


        $parish = new Parish();
        $parish->setName('Chejendé');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-PARISH-920',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Salvador Ulloa');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-PARISH-921',$parish);


        $parish = new Parish();
        $parish->setName('San José');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-287'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-287-PARISH-922',$parish);


        $parish = new Parish();
        $parish->setName('Carache');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-PARISH-923',$parish);


        $parish = new Parish();
        $parish->setName('La Concepción');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-PARISH-924',$parish);


        $parish = new Parish();
        $parish->setName('Cuicas');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-PARISH-925',$parish);


        $parish = new Parish();
        $parish->setName('Panamericana');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-PARISH-926',$parish);


        $parish = new Parish();
        $parish->setName('Santa Cruz');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-288'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-288-PARISH-927',$parish);


        $parish = new Parish();
        $parish->setName('Escuque');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-289'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-289-PARISH-934',$parish);


        $parish = new Parish();
        $parish->setName('La Unión');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-289'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-289-PARISH-935',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rita');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-289'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-289-PARISH-936',$parish);


        $parish = new Parish();
        $parish->setName('Sabana Libre');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-289'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-289-PARISH-937',$parish);


        $parish = new Parish();
        $parish->setName('El Socorro');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-290'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-290-PARISH-942',$parish);


        $parish = new Parish();
        $parish->setName('Los Caprichos');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-290'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-290-PARISH-943',$parish);


        $parish = new Parish();
        $parish->setName('Antonio José de Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-290'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-290-PARISH-944',$parish);


        $parish = new Parish();
        $parish->setName('Arnoldo Gabaldón');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-291'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-291-PARISH-932',$parish);


        $parish = new Parish();
        $parish->setName('Campo Elías');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-291'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-291-PARISH-933',$parish);


        $parish = new Parish();
        $parish->setName('Santa Apolonia');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-292'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-292-PARISH-938',$parish);


        $parish = new Parish();
        $parish->setName('El Progreso');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-292'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-292-PARISH-939',$parish);


        $parish = new Parish();
        $parish->setName('La Ceiba');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-292'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-292-PARISH-940',$parish);


        $parish = new Parish();
        $parish->setName('Tres de Febrero');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-292'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-292-PARISH-941',$parish);


        $parish = new Parish();
        $parish->setName('El Dividive');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-PARISH-945',$parish);


        $parish = new Parish();
        $parish->setName('Agua Santa');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-PARISH-946',$parish);


        $parish = new Parish();
        $parish->setName('Agua Caliente');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-PARISH-947',$parish);


        $parish = new Parish();
        $parish->setName('El Cenizo');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-PARISH-948',$parish);


        $parish = new Parish();
        $parish->setName('Valerita');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-293'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-293-PARISH-949',$parish);


        $parish = new Parish();
        $parish->setName('Monte Carmelo');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-294'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-294-PARISH-950',$parish);


        $parish = new Parish();
        $parish->setName('Buena Vista');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-294'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-294-PARISH-951',$parish);


        $parish = new Parish();
        $parish->setName('Santa María del Horcón');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-294'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-294-PARISH-952',$parish);


        $parish = new Parish();
        $parish->setName('Motatán');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-295'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-295-PARISH-953',$parish);


        $parish = new Parish();
        $parish->setName('El Baño');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-295'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-295-PARISH-954',$parish);


        $parish = new Parish();
        $parish->setName('Jalisco');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-295'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-295-PARISH-955',$parish);


        $parish = new Parish();
        $parish->setName('Santa Ana');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-296'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-296-PARISH-956',$parish);


        $parish = new Parish();
        $parish->setName('La Paz');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-296'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-296-PARISH-957',$parish);


        $parish = new Parish();
        $parish->setName('Flor de Patria');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-296'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-296-PARISH-958',$parish);


        $parish = new Parish();
        $parish->setName('Pampan');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-296'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-296-PARISH-959',$parish);


        $parish = new Parish();
        $parish->setName('Pampanito');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-297'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-297-PARISH-960',$parish);


        $parish = new Parish();
        $parish->setName('La Concepción');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-297'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-297-PARISH-961',$parish);


        $parish = new Parish();
        $parish->setName('Pampanito II');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-297'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-297-PARISH-962',$parish);


        $parish = new Parish();
        $parish->setName('Betijoque');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-298'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-298-PARISH-963',$parish);


        $parish = new Parish();
        $parish->setName('José Gregorio Hernández');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-298'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-298-PARISH-964',$parish);


        $parish = new Parish();
        $parish->setName('La Pueblita');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-298'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-298-PARISH-965',$parish);


        $parish = new Parish();
        $parish->setName('Los Cedros');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-298'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-298-PARISH-966',$parish);


        $parish = new Parish();
        $parish->setName('Carvajal');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-299'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-299-PARISH-928',$parish);


        $parish = new Parish();
        $parish->setName('Campo Alegre');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-299'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-299-PARISH-929',$parish);


        $parish = new Parish();
        $parish->setName('Antonio Nicolás Briceño');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-299'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-299-PARISH-930',$parish);


        $parish = new Parish();
        $parish->setName('José Leonardo Suárez');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-299'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-299-PARISH-931',$parish);


        $parish = new Parish();
        $parish->setName('Sabana de Mendoza');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-300'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-300-PARISH-967',$parish);


        $parish = new Parish();
        $parish->setName('Junín');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-300'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-300-PARISH-968',$parish);


        $parish = new Parish();
        $parish->setName('Valmore Rodríguez');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-300'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-300-PARISH-969',$parish);


        $parish = new Parish();
        $parish->setName('El Paraíso');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-300'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-300-PARISH-970',$parish);


        $parish = new Parish();
        $parish->setName('Andrés Linares');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-PARISH-971',$parish);


        $parish = new Parish();
        $parish->setName('Chiquinquira');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-PARISH-972',$parish);


        $parish = new Parish();
        $parish->setName('Cristóbal Mendoza');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-PARISH-973',$parish);


        $parish = new Parish();
        $parish->setName('Cruz Carrillo');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-PARISH-974',$parish);


        $parish = new Parish();
        $parish->setName('Matriz');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-PARISH-975',$parish);


        $parish = new Parish();
        $parish->setName('Monseñor Carrillo');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-PARISH-976',$parish);


        $parish = new Parish();
        $parish->setName('Tres Esquinas');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-301'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-301-PARISH-977',$parish);


        $parish = new Parish();
        $parish->setName('Cabimbú');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-PARISH-978',$parish);


        $parish = new Parish();
        $parish->setName('Jajó');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-PARISH-979',$parish);


        $parish = new Parish();
        $parish->setName('La Mesa');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-PARISH-980',$parish);


        $parish = new Parish();
        $parish->setName('Santiago');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-PARISH-981',$parish);


        $parish = new Parish();
        $parish->setName('Tuñame');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-PARISH-982',$parish);


        $parish = new Parish();
        $parish->setName('La Quebrada');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-302'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-302-PARISH-983',$parish);


        $parish = new Parish();
        $parish->setName('Valera');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-PARISH-984',$parish);


        $parish = new Parish();
        $parish->setName('Juan Ignacio Montilla');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-PARISH-985',$parish);


        $parish = new Parish();
        $parish->setName('La Beatriz');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-PARISH-986',$parish);


        $parish = new Parish();
        $parish->setName('La Puerta');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-PARISH-987',$parish);


        $parish = new Parish();
        $parish->setName('Mendoza del Valle del Momboy');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-PARISH-988',$parish);


        $parish = new Parish();
        $parish->setName('Mercedes Díaz');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-PARISH-989',$parish);


        $parish = new Parish();
        $parish->setName('San Luis');
        $parish->setState($this->getReference('VEN-STATE-VE-T'));
        $parish->setMunicipality($this->getReference('VEN-VE-T-MUNICIPALITY-303'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-T-303-PARISH-990',$parish);


        $parish = new Parish();
        $parish->setName('Caraballeda');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-991',$parish);


        $parish = new Parish();
        $parish->setName('Carayaca');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-992',$parish);


        $parish = new Parish();
        $parish->setName('Carlos Soublette');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-993',$parish);


        $parish = new Parish();
        $parish->setName('Caruao');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-994',$parish);


        $parish = new Parish();
        $parish->setName('Catia La Mar');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-995',$parish);


        $parish = new Parish();
        $parish->setName('El Junko');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-996',$parish);


        $parish = new Parish();
        $parish->setName('La Guaira');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-997',$parish);


        $parish = new Parish();
        $parish->setName('Macuto');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-998',$parish);


        $parish = new Parish();
        $parish->setName('Maiquetía');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-999',$parish);


        $parish = new Parish();
        $parish->setName('Naiguatá');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-1000',$parish);


        $parish = new Parish();
        $parish->setName('Urimare');
        $parish->setState($this->getReference('VEN-STATE-VE-W'));
        $parish->setMunicipality($this->getReference('VEN-VE-W-MUNICIPALITY-339'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-W-339-PARISH-1001',$parish);


        $parish = new Parish();
        $parish->setName('Arístides Bastidas');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-304'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-304-PARISH-1002',$parish);


        $parish = new Parish();
        $parish->setName('Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-305'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-305-PARISH-1003',$parish);


        $parish = new Parish();
        $parish->setName('Campo Elías');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-306'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-306-PARISH-1004',$parish);


        $parish = new Parish();
        $parish->setName('Chivacoa');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-306'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-306-PARISH-1005',$parish);


        $parish = new Parish();
        $parish->setName('Cocorote');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-307'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-307-PARISH-1006',$parish);


        $parish = new Parish();
        $parish->setName('Independencia');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-308'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-308-PARISH-1007',$parish);


        $parish = new Parish();
        $parish->setName('José Antonio Páez');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-309'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-309-PARISH-1013',$parish);


        $parish = new Parish();
        $parish->setName('La Trinidad');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-310'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-310-PARISH-1008',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Monge');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-311'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-311-PARISH-1009',$parish);


        $parish = new Parish();
        $parish->setName('Salóm');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-312'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-312-PARISH-1010',$parish);


        $parish = new Parish();
        $parish->setName('Temerla');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-312'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-312-PARISH-1011',$parish);


        $parish = new Parish();
        $parish->setName('Nirgua');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-312'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-312-PARISH-1012',$parish);


        $parish = new Parish();
        $parish->setName('San Andrés');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-313'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-313-PARISH-1014',$parish);


        $parish = new Parish();
        $parish->setName('Yaritagua');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-313'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-313-PARISH-1015',$parish);


        $parish = new Parish();
        $parish->setName('San Javier');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-314'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-314-PARISH-1016',$parish);


        $parish = new Parish();
        $parish->setName('Albarico');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-314'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-314-PARISH-1017',$parish);


        $parish = new Parish();
        $parish->setName('San Felipe');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-314'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-314-PARISH-1018',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-315'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-315-PARISH-1019',$parish);


        $parish = new Parish();
        $parish->setName('Urachiche');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-316'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-316-PARISH-1020',$parish);


        $parish = new Parish();
        $parish->setName('El Guayabo');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-317'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-317-PARISH-1021',$parish);


        $parish = new Parish();
        $parish->setName('Farriar');
        $parish->setState($this->getReference('VEN-STATE-VE-U'));
        $parish->setMunicipality($this->getReference('VEN-VE-U-MUNICIPALITY-317'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-U-317-PARISH-1022',$parish);


        $parish = new Parish();
        $parish->setName('Isla de Toas');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-318'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-318-PARISH-1023',$parish);


        $parish = new Parish();
        $parish->setName('Monagas');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-318'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-318-PARISH-1024',$parish);


        $parish = new Parish();
        $parish->setName('San Timoteo');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-PARISH-1025',$parish);


        $parish = new Parish();
        $parish->setName('General Urdaneta');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-PARISH-1026',$parish);


        $parish = new Parish();
        $parish->setName('Libertador');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-PARISH-1027',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Guanipa Matos');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-PARISH-1028',$parish);


        $parish = new Parish();
        $parish->setName('Marcelino Briceño');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-PARISH-1029',$parish);


        $parish = new Parish();
        $parish->setName('Pueblo Nuevo');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-319'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-319-PARISH-1030',$parish);


        $parish = new Parish();
        $parish->setName('Germán Ríos Linares');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1031',$parish);


        $parish = new Parish();
        $parish->setName('Ambrosio');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1032',$parish);


        $parish = new Parish();
        $parish->setName('Carmen Herrera');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1033',$parish);


        $parish = new Parish();
        $parish->setName('La Rosa');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1034',$parish);


        $parish = new Parish();
        $parish->setName('San Benito');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1035',$parish);


        $parish = new Parish();
        $parish->setName('Arístides Calvani');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1036',$parish);


        $parish = new Parish();
        $parish->setName('Jorge Hernández');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1037',$parish);


        $parish = new Parish();
        $parish->setName('Rómulo Betancourt');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1038',$parish);


        $parish = new Parish();
        $parish->setName('Punta Gorda');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-320'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-320-PARISH-1039',$parish);


        $parish = new Parish();
        $parish->setName('Encontrados');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-321'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-321-PARISH-1040',$parish);


        $parish = new Parish();
        $parish->setName('Udón Pérez');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-321'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-321-PARISH-1041',$parish);


        $parish = new Parish();
        $parish->setName('Moralito');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-PARISH-1042',$parish);


        $parish = new Parish();
        $parish->setName('San Carlos del Zulia');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-PARISH-1043',$parish);


        $parish = new Parish();
        $parish->setName('Santa Cruz del Zulia');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-PARISH-1044',$parish);


        $parish = new Parish();
        $parish->setName('Santa Bárbara');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-PARISH-1045',$parish);


        $parish = new Parish();
        $parish->setName('Urribarri');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-322'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-322-PARISH-1046',$parish);


        $parish = new Parish();
        $parish->setName('Carlos Quevedo');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-323'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-323-PARISH-1047',$parish);


        $parish = new Parish();
        $parish->setName('Francisco Javier Pulgar');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-323'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-323-PARISH-1048',$parish);


        $parish = new Parish();
        $parish->setName('Simón Rodríguez');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-323'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-323-PARISH-1049',$parish);


        $parish = new Parish();
        $parish->setName('Agustin Codazzi');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-323'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-323-PARISH-1050',$parish);


        $parish = new Parish();
        $parish->setName('La Concepción');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-324'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-324-PARISH-1051',$parish);


        $parish = new Parish();
        $parish->setName('San José');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-324'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-324-PARISH-1052',$parish);


        $parish = new Parish();
        $parish->setName('Mariano Parra León');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-324'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-324-PARISH-1053',$parish);


        $parish = new Parish();
        $parish->setName('José Ramón Yépez');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-324'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-324-PARISH-1054',$parish);


        $parish = new Parish();
        $parish->setName('Jesús María Semprún');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-325'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-325-PARISH-1055',$parish);


        $parish = new Parish();
        $parish->setName('Barí');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-325'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-325-PARISH-1056',$parish);


        $parish = new Parish();
        $parish->setName('Concepción');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-PARISH-1057',$parish);


        $parish = new Parish();
        $parish->setName('Andrés Bello');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-PARISH-1058',$parish);


        $parish = new Parish();
        $parish->setName('Chiquinquirá');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-PARISH-1059',$parish);


        $parish = new Parish();
        $parish->setName('El Carmelo');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-PARISH-1060',$parish);


        $parish = new Parish();
        $parish->setName('Potreritos');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-326'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-326-PARISH-1061',$parish);


        $parish = new Parish();
        $parish->setName('Alonso de Ojeda');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-PARISH-1062',$parish);


        $parish = new Parish();
        $parish->setName('Libertad');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-PARISH-1063',$parish);


        $parish = new Parish();
        $parish->setName('Campo Lara');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-PARISH-1064',$parish);


        $parish = new Parish();
        $parish->setName('Eleazar López Contreras');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-PARISH-1065',$parish);


        $parish = new Parish();
        $parish->setName('Venezuela');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-PARISH-1066',$parish);


        $parish = new Parish();
        $parish->setName('El Danto');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-327'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-327-PARISH-1067',$parish);


        $parish = new Parish();
        $parish->setName('Bartolomé de las Casas');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-328'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-328-PARISH-1068',$parish);


        $parish = new Parish();
        $parish->setName('Libertad');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-328'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-328-PARISH-1069',$parish);


        $parish = new Parish();
        $parish->setName('Río Negro');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-328'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-328-PARISH-1070',$parish);


        $parish = new Parish();
        $parish->setName('San José de Perijá');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-328'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-328-PARISH-1071',$parish);


        $parish = new Parish();
        $parish->setName('San Rafael');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-PARISH-1072',$parish);


        $parish = new Parish();
        $parish->setName('La Sierrita');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-PARISH-1073',$parish);


        $parish = new Parish();
        $parish->setName('Las Parcelas');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-PARISH-1074',$parish);


        $parish = new Parish();
        $parish->setName('Luis de Vicente');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-PARISH-1075',$parish);


        $parish = new Parish();
        $parish->setName('Monseñor Marcos Sergio Godoy');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-PARISH-1076',$parish);


        $parish = new Parish();
        $parish->setName('Ricaurte');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-PARISH-1077',$parish);


        $parish = new Parish();
        $parish->setName('Tamare');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-329'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-329-PARISH-1078',$parish);


        $parish = new Parish();
        $parish->setName('Antonio Borjas Romero');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1079',$parish);


        $parish = new Parish();
        $parish->setName('Bolívar');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1080',$parish);


        $parish = new Parish();
        $parish->setName('Cacique Mara');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1081',$parish);


        $parish = new Parish();
        $parish->setName('Carracciolo Parra Pérez');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1082',$parish);


        $parish = new Parish();
        $parish->setName('Cecilio Acosta');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1083',$parish);


        $parish = new Parish();
        $parish->setName('Cristo de Aranza');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1084',$parish);


        $parish = new Parish();
        $parish->setName('Coquivacoa');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1085',$parish);


        $parish = new Parish();
        $parish->setName('Chiquinquirá');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1086',$parish);


        $parish = new Parish();
        $parish->setName('Francisco Eugenio Bustamante');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1087',$parish);


        $parish = new Parish();
        $parish->setName('Idelfonso Vásquez');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1088',$parish);


        $parish = new Parish();
        $parish->setName('Juana de Ávila');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1089',$parish);


        $parish = new Parish();
        $parish->setName('Luis Hurtado Higuera');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1090',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Dagnino');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1091',$parish);


        $parish = new Parish();
        $parish->setName('Olegario Villalobos');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1092',$parish);


        $parish = new Parish();
        $parish->setName('Raúl Leoni');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1093',$parish);


        $parish = new Parish();
        $parish->setName('Santa Lucía');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1094',$parish);


        $parish = new Parish();
        $parish->setName('San Isidro');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1095',$parish);


        $parish = new Parish();
        $parish->setName('Venancio Pulgar');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-330'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-330-PARISH-1096',$parish);


        $parish = new Parish();
        $parish->setName('Altagracia');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-PARISH-1097',$parish);


        $parish = new Parish();
        $parish->setName('Ana María Campos');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-PARISH-1098',$parish);


        $parish = new Parish();
        $parish->setName('Faría');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-PARISH-1099',$parish);


        $parish = new Parish();
        $parish->setName('San Antonio');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-PARISH-1100',$parish);


        $parish = new Parish();
        $parish->setName('San José');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-PARISH-1101',$parish);


        $parish = new Parish();
        $parish->setName('José Antonio Chaves');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-331'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-331-PARISH-1102',$parish);


        $parish = new Parish();
        $parish->setName('Sinamaica');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-332'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-332-PARISH-1103',$parish);


        $parish = new Parish();
        $parish->setName('Alta Guajira');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-332'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-332-PARISH-1104',$parish);


        $parish = new Parish();
        $parish->setName('Elías Sánchez Rubio');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-332'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-332-PARISH-1105',$parish);


        $parish = new Parish();
        $parish->setName('Guajira');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-332'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-332-PARISH-1106',$parish);


        $parish = new Parish();
        $parish->setName('Donaldo García');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-333'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-333-PARISH-1107',$parish);


        $parish = new Parish();
        $parish->setName('El Rosario');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-333'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-333-PARISH-1108',$parish);


        $parish = new Parish();
        $parish->setName('Sixto Zambrano');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-333'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-333-PARISH-1109',$parish);


        $parish = new Parish();
        $parish->setName('San Francisco');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-PARISH-1110',$parish);


        $parish = new Parish();
        $parish->setName('El Bajo');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-PARISH-1111',$parish);


        $parish = new Parish();
        $parish->setName('Domitila Flores');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-PARISH-1112',$parish);


        $parish = new Parish();
        $parish->setName('Francisco Ochoa');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-PARISH-1113',$parish);


        $parish = new Parish();
        $parish->setName('Los Cortijos');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-PARISH-1114',$parish);


        $parish = new Parish();
        $parish->setName('Marcial Hernández');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-PARISH-1115',$parish);


        $parish = new Parish();
        $parish->setName('Jose Domingo Rus');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-334'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-334-PARISH-1116',$parish);


        $parish = new Parish();
        $parish->setName('El Mene');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-335'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-335-PARISH-1117',$parish);


        $parish = new Parish();
        $parish->setName('José Cenobio Urribarrí');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-335'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-335-PARISH-1118',$parish);


        $parish = new Parish();
        $parish->setName('Pedro Lucas Urribarrí');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-335'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-335-PARISH-1119',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rita');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-335'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-335-PARISH-1120',$parish);


        $parish = new Parish();
        $parish->setName('Rafael Maria Baralt');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-336'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-336-PARISH-1121',$parish);


        $parish = new Parish();
        $parish->setName('Manuel Manrique');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-336'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-336-PARISH-1122',$parish);


        $parish = new Parish();
        $parish->setName('Rafael Urdaneta');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-336'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-336-PARISH-1123',$parish);


        $parish = new Parish();
        $parish->setName('Bobures');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-PARISH-1124',$parish);


        $parish = new Parish();
        $parish->setName('Gibraltar');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-PARISH-1125',$parish);


        $parish = new Parish();
        $parish->setName('Heras');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-PARISH-1126',$parish);


        $parish = new Parish();
        $parish->setName('Monseñor Arturo Álvarez');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-PARISH-1127',$parish);


        $parish = new Parish();
        $parish->setName('Rómulo Gallegos');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-PARISH-1128',$parish);


        $parish = new Parish();
        $parish->setName('El Batey');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-337'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-337-PARISH-1129',$parish);


        $parish = new Parish();
        $parish->setName('Rafael Urdaneta');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-338'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-338-PARISH-1130',$parish);


        $parish = new Parish();
        $parish->setName('La Victoria');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-338'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-338-PARISH-1131',$parish);


        $parish = new Parish();
        $parish->setName('Raúl Cuenca');
        $parish->setState($this->getReference('VEN-STATE-VE-V'));
        $parish->setMunicipality($this->getReference('VEN-VE-V-MUNICIPALITY-338'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-V-338-PARISH-1132',$parish);


        $parish = new Parish();
        $parish->setName('Altagracia');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-1',$parish);


        $parish = new Parish();
        $parish->setName('Antimano');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-2',$parish);


        $parish = new Parish();
        $parish->setName('Candelaria');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-3',$parish);


        $parish = new Parish();
        $parish->setName('Caricuao');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-4',$parish);


        $parish = new Parish();
        $parish->setName('Catedral');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-5',$parish);


        $parish = new Parish();
        $parish->setName('Coche');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-6',$parish);


        $parish = new Parish();
        $parish->setName('El Junquito');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-7',$parish);


        $parish = new Parish();
        $parish->setName('El Paraiso');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-8',$parish);


        $parish = new Parish();
        $parish->setName('El Recreo');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-9',$parish);


        $parish = new Parish();
        $parish->setName('El valle');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-10',$parish);


        $parish = new Parish();
        $parish->setName('La Pastora');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-11',$parish);


        $parish = new Parish();
        $parish->setName('La Vega');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-12',$parish);


        $parish = new Parish();
        $parish->setName('Macarao');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-13',$parish);


        $parish = new Parish();
        $parish->setName('San Agustin');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-14',$parish);


        $parish = new Parish();
        $parish->setName('San Bernardino');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-15',$parish);


        $parish = new Parish();
        $parish->setName('San Jose');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-16',$parish);


        $parish = new Parish();
        $parish->setName('San Juan');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-17',$parish);


        $parish = new Parish();
        $parish->setName('San Pedro');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-18',$parish);


        $parish = new Parish();
        $parish->setName('Santa Rosalia');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-19',$parish);


        $parish = new Parish();
        $parish->setName('Santa Teresa');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-20',$parish);


        $parish = new Parish();
        $parish->setName('Sucre');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-21',$parish);


        $parish = new Parish();
        $parish->setName('23 De Enero');
        $parish->setState($this->getReference('VEN-STATE-VE-A'));
        $parish->setMunicipality($this->getReference('VEN-VE-A-MUNICIPALITY-1'));
        $manager->persist($parish);
        $manager->flush();
        $this->addReference('VEN-VE-A-1-PARISH-22',$parish);
        
    }
    
    public function getOrder() 
    {
        return 4;
    }
    
    public function getNameTrans()
    {
        return 'dataFixtures.parish';
    }
    
    public function getAlias() 
    {
        return 'parish';
    }
}