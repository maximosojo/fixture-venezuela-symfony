<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Interfaces\DataFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Regional\Country;

/**
 * Description of CountryFixtureLoader
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class CountryFixtureLoader extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface, DataFixtureInterface 
{
    public function load(ObjectManager $manager)
    {        
        $country = new Country();
        $country->setName('Aruba');
        $country->setNameISO('ARUBA');
        $country->setAlphaCode('ABW');
        $country->setNumericalCode(533);
        $country->setTelephonePrefix('+297');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ABW',$country);


        $country = new Country();
        $country->setName('Afganistán');
        $country->setNameISO('AFGANISTAN');
        $country->setAlphaCode('AFG');
        $country->setNumericalCode(4);
        $country->setTelephonePrefix('+93');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-AFG',$country);


        $country = new Country();
        $country->setName('Angola');
        $country->setNameISO('ANGOLA');
        $country->setAlphaCode('AGO');
        $country->setNumericalCode(24);
        $country->setTelephonePrefix('+244');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-AGO',$country);


        $country = new Country();
        $country->setName('Anguila');
        $country->setNameISO('ANGUILA');
        $country->setAlphaCode('AIA');
        $country->setNumericalCode(660);
        $country->setTelephonePrefix('+1-264');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-AIA',$country);


        $country = new Country();
        $country->setName('Åland');
        $country->setNameISO('ISLASÅLAND');
        $country->setAlphaCode('ALA');
        $country->setNumericalCode(248);
        $country->setTelephonePrefix('+358');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ALA',$country);


        $country = new Country();
        $country->setName('Albania');
        $country->setNameISO('ALBANIA');
        $country->setAlphaCode('ALB');
        $country->setNumericalCode(8);
        $country->setTelephonePrefix('+355');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ALB',$country);


        $country = new Country();
        $country->setName('Andorra');
        $country->setNameISO('ANDORRA');
        $country->setAlphaCode('AND');
        $country->setNumericalCode(20);
        $country->setTelephonePrefix('+376');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-AND',$country);


        $country = new Country();
        $country->setName('Emiratos Árabes Unidos');
        $country->setNameISO('EMIRATOS ARABES UNIDOS');
        $country->setAlphaCode('ARE');
        $country->setNumericalCode(784);
        $country->setTelephonePrefix('+971');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ARE',$country);


        $country = new Country();
        $country->setName('Argentina');
        $country->setNameISO('ARGENTINA');
        $country->setAlphaCode('ARG');
        $country->setNumericalCode(32);
        $country->setTelephonePrefix('+54');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ARG',$country);


        $country = new Country();
        $country->setName('Armenia');
        $country->setNameISO('ARMENIA');
        $country->setAlphaCode('ARM');
        $country->setNumericalCode(51);
        $country->setTelephonePrefix('+374');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ARM',$country);


        $country = new Country();
        $country->setName('Samoa Americana');
        $country->setNameISO('SAMOA AMERICANA');
        $country->setAlphaCode('ASM');
        $country->setNumericalCode(16);
        $country->setTelephonePrefix('+1-684');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ASM',$country);


        $country = new Country();
        $country->setName('Antártida');
        $country->setNameISO('ANTARTIDA');
        $country->setAlphaCode('ATA');
        $country->setNumericalCode(10);
        $country->setTelephonePrefix('+672');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ATA',$country);


        $country = new Country();
        $country->setName('Territorios Australes Franceses');
        $country->setNameISO('TERRITORIOS AUSTRALES FRANCESES');
        $country->setAlphaCode('ATF');
        $country->setNumericalCode(260);
        $country->setTelephonePrefix('+262');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ATF',$country);


        $country = new Country();
        $country->setName('Antigua y Barbuda');
        $country->setNameISO('ANTIGUA Y BARBUDA');
        $country->setAlphaCode('ATG');
        $country->setNumericalCode(28);
        $country->setTelephonePrefix('+1-268');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ATG',$country);


        $country = new Country();
        $country->setName('Australia');
        $country->setNameISO('AUSTRALIA');
        $country->setAlphaCode('AUS');
        $country->setNumericalCode(36);
        $country->setTelephonePrefix('+61');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-AUS',$country);


        $country = new Country();
        $country->setName('Austria');
        $country->setNameISO('AUSTRIA');
        $country->setAlphaCode('AUT');
        $country->setNumericalCode(40);
        $country->setTelephonePrefix('+43');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-AUT',$country);


        $country = new Country();
        $country->setName('Azerbaiyán');
        $country->setNameISO('AZERBAIYAN');
        $country->setAlphaCode('AZE');
        $country->setNumericalCode(31);
        $country->setTelephonePrefix('+994');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-AZE',$country);


        $country = new Country();
        $country->setName('Burundi');
        $country->setNameISO('BURUNDI');
        $country->setAlphaCode('BDI');
        $country->setNumericalCode(108);
        $country->setTelephonePrefix('+257');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BDI',$country);


        $country = new Country();
        $country->setName('Bélgica');
        $country->setNameISO('BELGICA');
        $country->setAlphaCode('BEL');
        $country->setNumericalCode(56);
        $country->setTelephonePrefix('+32');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BEL',$country);


        $country = new Country();
        $country->setName('Benín');
        $country->setNameISO('BENIN');
        $country->setAlphaCode('BEN');
        $country->setNumericalCode(204);
        $country->setTelephonePrefix('+229');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BEN',$country);


        $country = new Country();
        $country->setName('Caribe Neerlandés');
        $country->setNameISO('BONAIRE, SAN EUSTAQUIO Y SABA');
        $country->setAlphaCode('BES');
        $country->setNumericalCode(535);
        $country->setTelephonePrefix('+599');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BES',$country);


        $country = new Country();
        $country->setName('Burkina Faso');
        $country->setNameISO('BURKINA FASO');
        $country->setAlphaCode('BFA');
        $country->setNumericalCode(854);
        $country->setTelephonePrefix('+226');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BFA',$country);


        $country = new Country();
        $country->setName('Bangladés');
        $country->setNameISO('BANGLADES');
        $country->setAlphaCode('BGD');
        $country->setNumericalCode(50);
        $country->setTelephonePrefix('+880');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BGD',$country);


        $country = new Country();
        $country->setName('Bulgaria');
        $country->setNameISO('BULGARIA');
        $country->setAlphaCode('BGR');
        $country->setNumericalCode(100);
        $country->setTelephonePrefix('+359');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BGR',$country);


        $country = new Country();
        $country->setName('Baréin');
        $country->setNameISO('BAREIN');
        $country->setAlphaCode('BHR');
        $country->setNumericalCode(48);
        $country->setTelephonePrefix('+973');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BHR',$country);


        $country = new Country();
        $country->setName('Bahamas');
        $country->setNameISO('BAHAMAS');
        $country->setAlphaCode('BHS');
        $country->setNumericalCode(44);
        $country->setTelephonePrefix('+1-242');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BHS',$country);


        $country = new Country();
        $country->setName('Bosnia y Herzegovina');
        $country->setNameISO('BOSNIA Y HERZEGOVINA');
        $country->setAlphaCode('BIH');
        $country->setNumericalCode(70);
        $country->setTelephonePrefix('+387');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BIH',$country);


        $country = new Country();
        $country->setName('San Bartolomé');
        $country->setNameISO('SAN BARTOLOME');
        $country->setAlphaCode('BLM');
        $country->setNumericalCode(652);
        $country->setTelephonePrefix('+590');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BLM',$country);


        $country = new Country();
        $country->setName('Bielorrusia');
        $country->setNameISO('BIELORRUSIA');
        $country->setAlphaCode('BLR');
        $country->setNumericalCode(112);
        $country->setTelephonePrefix('+375');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BLR',$country);


        $country = new Country();
        $country->setName('Belice');
        $country->setNameISO('BELICE');
        $country->setAlphaCode('BLZ');
        $country->setNumericalCode(84);
        $country->setTelephonePrefix('+501');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BLZ',$country);


        $country = new Country();
        $country->setName('Bermudas');
        $country->setNameISO('BERMUDAS');
        $country->setAlphaCode('BMU');
        $country->setNumericalCode(60);
        $country->setTelephonePrefix('+1-441');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BMU',$country);


        $country = new Country();
        $country->setName('Bolivia');
        $country->setNameISO('BOLIVIA, ESTADO PLURINACIONAL DE');
        $country->setAlphaCode('BOL');
        $country->setNumericalCode(68);
        $country->setTelephonePrefix('+591');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BOL',$country);


        $country = new Country();
        $country->setName('Brasil');
        $country->setNameISO('BRASIL');
        $country->setAlphaCode('BRA');
        $country->setNumericalCode(76);
        $country->setTelephonePrefix('+55');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BRA',$country);


        $country = new Country();
        $country->setName('Barbados');
        $country->setNameISO('BARBADOS');
        $country->setAlphaCode('BRB');
        $country->setNumericalCode(52);
        $country->setTelephonePrefix('+1-246');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BRB',$country);


        $country = new Country();
        $country->setName('Brunéi');
        $country->setNameISO('BRUNEI DARUSSALAM');
        $country->setAlphaCode('BRN');
        $country->setNumericalCode(96);
        $country->setTelephonePrefix('+673');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BRN',$country);


        $country = new Country();
        $country->setName('Bután');
        $country->setNameISO('BUTAN');
        $country->setAlphaCode('BTN');
        $country->setNumericalCode(64);
        $country->setTelephonePrefix('+975');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BTN',$country);


        $country = new Country();
        $country->setName('Isla Bouvet');
        $country->setNameISO('ISLA BOUVET');
        $country->setAlphaCode('BVT');
        $country->setNumericalCode(74);
        $country->setTelephonePrefix('+55');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BVT',$country);


        $country = new Country();
        $country->setName('Botsuana');
        $country->setNameISO('BOTSUANA');
        $country->setAlphaCode('BWA');
        $country->setNumericalCode(72);
        $country->setTelephonePrefix('+267');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-BWA',$country);


        $country = new Country();
        $country->setName('República Centroafricana');
        $country->setNameISO('REPUBLICA CENTROAFRICANA');
        $country->setAlphaCode('CAF');
        $country->setNumericalCode(140);
        $country->setTelephonePrefix('+236');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CAF',$country);


        $country = new Country();
        $country->setName('Canadá');
        $country->setNameISO('CANADA');
        $country->setAlphaCode('CAN');
        $country->setNumericalCode(124);
        $country->setTelephonePrefix('+1');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CAN',$country);


        $country = new Country();
        $country->setName('Islas Cocos');
        $country->setNameISO('ISLAS COCOS (KEELING)');
        $country->setAlphaCode('CCK');
        $country->setNumericalCode(166);
        $country->setTelephonePrefix('+61');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CCK',$country);


        $country = new Country();
        $country->setName('Suiza');
        $country->setNameISO('SUIZA');
        $country->setAlphaCode('CHE');
        $country->setNumericalCode(756);
        $country->setTelephonePrefix('+41');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CHE',$country);


        $country = new Country();
        $country->setName('Chile');
        $country->setNameISO('CHILE');
        $country->setAlphaCode('CHL');
        $country->setNumericalCode(152);
        $country->setTelephonePrefix('+56');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CHL',$country);


        $country = new Country();
        $country->setName('China');
        $country->setNameISO('CHINA, REPUBLICA POPULAR');
        $country->setAlphaCode('CHN');
        $country->setNumericalCode(156);
        $country->setTelephonePrefix('+86');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CHN',$country);


        $country = new Country();
        $country->setName('Costa de Marfil');
        $country->setNameISO('COSTA DE MARFIL');
        $country->setAlphaCode('CIV');
        $country->setNumericalCode(384);
        $country->setTelephonePrefix('+225');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CIV',$country);


        $country = new Country();
        $country->setName('Camerún');
        $country->setNameISO('CAMERUN');
        $country->setAlphaCode('CMR');
        $country->setNumericalCode(120);
        $country->setTelephonePrefix('+237');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CMR',$country);


        $country = new Country();
        $country->setName('República Democrática del Congo');
        $country->setNameISO('CONGO, LA REPUBLICA DEMOCRATICA DEL');
        $country->setAlphaCode('COD');
        $country->setNumericalCode(180);
        $country->setTelephonePrefix('+243');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-COD',$country);


        $country = new Country();
        $country->setName('República del Congo');
        $country->setNameISO('CONGO');
        $country->setAlphaCode('COG');
        $country->setNumericalCode(178);
        $country->setTelephonePrefix('+242');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-COG',$country);


        $country = new Country();
        $country->setName('Islas Cook');
        $country->setNameISO('ISLAS COOK');
        $country->setAlphaCode('COK');
        $country->setNumericalCode(184);
        $country->setTelephonePrefix('+682');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-COK',$country);


        $country = new Country();
        $country->setName('Colombia');
        $country->setNameISO('COLOMBIA');
        $country->setAlphaCode('COL');
        $country->setNumericalCode(170);
        $country->setTelephonePrefix('+57');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-COL',$country);


        $country = new Country();
        $country->setName('Comoras');
        $country->setNameISO('COMORAS');
        $country->setAlphaCode('COM');
        $country->setNumericalCode(174);
        $country->setTelephonePrefix('+269');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-COM',$country);


        $country = new Country();
        $country->setName('Cabo Verde');
        $country->setNameISO('CABO VERDE');
        $country->setAlphaCode('CPV');
        $country->setNumericalCode(132);
        $country->setTelephonePrefix('+238');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CPV',$country);


        $country = new Country();
        $country->setName('Costa Rica');
        $country->setNameISO('COSTA RICA');
        $country->setAlphaCode('CRI');
        $country->setNumericalCode(188);
        $country->setTelephonePrefix('+506');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CRI',$country);


        $country = new Country();
        $country->setName('Cuba');
        $country->setNameISO('CUBA');
        $country->setAlphaCode('CUB');
        $country->setNumericalCode(192);
        $country->setTelephonePrefix('+53');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CUB',$country);


        $country = new Country();
        $country->setName('Curazao');
        $country->setNameISO('CURAZAO');
        $country->setAlphaCode('CUW');
        $country->setNumericalCode(531);
        $country->setTelephonePrefix('+599');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CUW',$country);


        $country = new Country();
        $country->setName('Isla de Navidad');
        $country->setNameISO('ISLA DE NAVIDAD');
        $country->setAlphaCode('CXR');
        $country->setNumericalCode(162);
        $country->setTelephonePrefix('+61');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CXR',$country);


        $country = new Country();
        $country->setName('Islas Caimán');
        $country->setNameISO('ISLAS CAIMAN');
        $country->setAlphaCode('CYM');
        $country->setNumericalCode(136);
        $country->setTelephonePrefix('+1-345');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CYM',$country);


        $country = new Country();
        $country->setName('Chipre');
        $country->setNameISO('CHIPRE');
        $country->setAlphaCode('CYP');
        $country->setNumericalCode(196);
        $country->setTelephonePrefix('+357');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CYP',$country);


        $country = new Country();
        $country->setName('República Checa');
        $country->setNameISO('REPUBLICA CHECA');
        $country->setAlphaCode('CZE');
        $country->setNumericalCode(203);
        $country->setTelephonePrefix('+420');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-CZE',$country);


        $country = new Country();
        $country->setName('Alemania');
        $country->setNameISO('ALEMANIA');
        $country->setAlphaCode('DEU');
        $country->setNumericalCode(276);
        $country->setTelephonePrefix('+49');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-DEU',$country);


        $country = new Country();
        $country->setName('Yibuti');
        $country->setNameISO('YIBUTI');
        $country->setAlphaCode('DJI');
        $country->setNumericalCode(262);
        $country->setTelephonePrefix('+253');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-DJI',$country);


        $country = new Country();
        $country->setName('Dominica');
        $country->setNameISO('DOMINICA');
        $country->setAlphaCode('DMA');
        $country->setNumericalCode(212);
        $country->setTelephonePrefix('+1-767');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-DMA',$country);


        $country = new Country();
        $country->setName('Dinamarca');
        $country->setNameISO('DINAMARCA');
        $country->setAlphaCode('DNK');
        $country->setNumericalCode(208);
        $country->setTelephonePrefix('+45');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-DNK',$country);


        $country = new Country();
        $country->setName('República Dominicana');
        $country->setNameISO('REPUBLICA DOMINICANA');
        $country->setAlphaCode('DOM');
        $country->setNumericalCode(214);
        $country->setTelephonePrefix('+1-809, 829 y 849');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-DOM',$country);


        $country = new Country();
        $country->setName('Argelia');
        $country->setNameISO('ARGELIA');
        $country->setAlphaCode('DZA');
        $country->setNumericalCode(12);
        $country->setTelephonePrefix('+213');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-DZA',$country);


        $country = new Country();
        $country->setName('Ecuador');
        $country->setNameISO('ECUADOR');
        $country->setAlphaCode('ECU');
        $country->setNumericalCode(218);
        $country->setTelephonePrefix('+593');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ECU',$country);


        $country = new Country();
        $country->setName('Egipto');
        $country->setNameISO('EGIPTO');
        $country->setAlphaCode('EGY');
        $country->setNumericalCode(818);
        $country->setTelephonePrefix('+20');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-EGY',$country);


        $country = new Country();
        $country->setName('Eritrea');
        $country->setNameISO('ERITREA');
        $country->setAlphaCode('ERI');
        $country->setNumericalCode(232);
        $country->setTelephonePrefix('+291');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ERI',$country);


        $country = new Country();
        $country->setName('Sahara Occidental');
        $country->setNameISO('SAHARA OCCIDENTAL');
        $country->setAlphaCode('ESH');
        $country->setNumericalCode(732);
        $country->setTelephonePrefix('+212');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ESH',$country);


        $country = new Country();
        $country->setName('España');
        $country->setNameISO('ESPAÑA');
        $country->setAlphaCode('ESP');
        $country->setNumericalCode(724);
        $country->setTelephonePrefix('+34');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ESP',$country);


        $country = new Country();
        $country->setName('Estonia');
        $country->setNameISO('ESTONIA');
        $country->setAlphaCode('EST');
        $country->setNumericalCode(233);
        $country->setTelephonePrefix('+372');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-EST',$country);


        $country = new Country();
        $country->setName('Etiopía');
        $country->setNameISO('ETIOPIA');
        $country->setAlphaCode('ETH');
        $country->setNumericalCode(231);
        $country->setTelephonePrefix('+251');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ETH',$country);


        $country = new Country();
        $country->setName('Finlandia');
        $country->setNameISO('FINLANDIA');
        $country->setAlphaCode('FIN');
        $country->setNumericalCode(246);
        $country->setTelephonePrefix('+358');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-FIN',$country);


        $country = new Country();
        $country->setName('Fiyi');
        $country->setNameISO('FIYI');
        $country->setAlphaCode('FJI');
        $country->setNumericalCode(242);
        $country->setTelephonePrefix('+679');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-FJI',$country);


        $country = new Country();
        $country->setName('Islas Malvinas');
        $country->setNameISO('ISLAS FALKLAND (MALVINAS)');
        $country->setAlphaCode('FLK');
        $country->setNumericalCode(238);
        $country->setTelephonePrefix('+500');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-FLK',$country);


        $country = new Country();
        $country->setName('Francia');
        $country->setNameISO('FRANCIA');
        $country->setAlphaCode('FRA');
        $country->setNumericalCode(250);
        $country->setTelephonePrefix('+33');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-FRA',$country);


        $country = new Country();
        $country->setName('Islas Feroe');
        $country->setNameISO('ISLAS FEROE');
        $country->setAlphaCode('FRO');
        $country->setNumericalCode(234);
        $country->setTelephonePrefix('+298');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-FRO',$country);


        $country = new Country();
        $country->setName('Micronesia');
        $country->setNameISO('MICRONESIA, ESTADOS FEDERADOS DE');
        $country->setAlphaCode('FSM');
        $country->setNumericalCode(583);
        $country->setTelephonePrefix('+691');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-FSM',$country);


        $country = new Country();
        $country->setName('Gabón');
        $country->setNameISO('GABON');
        $country->setAlphaCode('GAB');
        $country->setNumericalCode(266);
        $country->setTelephonePrefix('+241');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GAB',$country);


        $country = new Country();
        $country->setName('Reino Unido');
        $country->setNameISO('REINO UNIDO');
        $country->setAlphaCode('GBR');
        $country->setNumericalCode(826);
        $country->setTelephonePrefix('+44');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GBR',$country);


        $country = new Country();
        $country->setName('Georgia');
        $country->setNameISO('GEORGIA');
        $country->setAlphaCode('GEO');
        $country->setNumericalCode(268);
        $country->setTelephonePrefix('+995');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GEO',$country);


        $country = new Country();
        $country->setName('Guernsey');
        $country->setNameISO('GUERNSEY');
        $country->setAlphaCode('GGY');
        $country->setNumericalCode(831);
        $country->setTelephonePrefix('+44');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GGY',$country);


        $country = new Country();
        $country->setName('Ghana');
        $country->setNameISO('GHANA');
        $country->setAlphaCode('GHA');
        $country->setNumericalCode(288);
        $country->setTelephonePrefix('+233');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GHA',$country);


        $country = new Country();
        $country->setName('Gibraltar');
        $country->setNameISO('GIBRALTAR');
        $country->setAlphaCode('GIB');
        $country->setNumericalCode(292);
        $country->setTelephonePrefix('+350');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GIB',$country);


        $country = new Country();
        $country->setName('Guinea');
        $country->setNameISO('GUINEA');
        $country->setAlphaCode('GIN');
        $country->setNumericalCode(324);
        $country->setTelephonePrefix('+224');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GIN',$country);


        $country = new Country();
        $country->setName('Guadalupe');
        $country->setNameISO('GUADALUPE');
        $country->setAlphaCode('GLP');
        $country->setNumericalCode(312);
        $country->setTelephonePrefix('+590');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GLP',$country);


        $country = new Country();
        $country->setName('Gambia');
        $country->setNameISO('GAMBIA');
        $country->setAlphaCode('GMB');
        $country->setNumericalCode(270);
        $country->setTelephonePrefix('+220');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GMB',$country);


        $country = new Country();
        $country->setName('Guinea-Bisáu');
        $country->setNameISO('GUINEA-BISAU');
        $country->setAlphaCode('GNB');
        $country->setNumericalCode(624);
        $country->setTelephonePrefix('+245');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GNB',$country);


        $country = new Country();
        $country->setName('Guinea Ecuatorial');
        $country->setNameISO('GUINEA ECUATORIAL');
        $country->setAlphaCode('GNQ');
        $country->setNumericalCode(226);
        $country->setTelephonePrefix('+240');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GNQ',$country);


        $country = new Country();
        $country->setName('Grecia');
        $country->setNameISO('GRECIA');
        $country->setAlphaCode('GRC');
        $country->setNumericalCode(300);
        $country->setTelephonePrefix('+30');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GRC',$country);


        $country = new Country();
        $country->setName('Granada');
        $country->setNameISO('GRANADA');
        $country->setAlphaCode('GRD');
        $country->setNumericalCode(308);
        $country->setTelephonePrefix('+1-473');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GRD',$country);


        $country = new Country();
        $country->setName('Groenlandia');
        $country->setNameISO('GROENLANDIA');
        $country->setAlphaCode('GRL');
        $country->setNumericalCode(304);
        $country->setTelephonePrefix('+299');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GRL',$country);


        $country = new Country();
        $country->setName('Guatemala');
        $country->setNameISO('GUATEMALA');
        $country->setAlphaCode('GTM');
        $country->setNumericalCode(320);
        $country->setTelephonePrefix('+502');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GTM',$country);


        $country = new Country();
        $country->setName('Guayana Francesa');
        $country->setNameISO('GUAYANA FRANCESA');
        $country->setAlphaCode('GUF');
        $country->setNumericalCode(254);
        $country->setTelephonePrefix('+594');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GUF',$country);


        $country = new Country();
        $country->setName('Guam');
        $country->setNameISO('GUAM');
        $country->setAlphaCode('GUM');
        $country->setNumericalCode(316);
        $country->setTelephonePrefix('+1-671');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GUM',$country);


        $country = new Country();
        $country->setName('Guyana');
        $country->setNameISO('GUYANA');
        $country->setAlphaCode('GUY');
        $country->setNumericalCode(328);
        $country->setTelephonePrefix('+592');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-GUY',$country);


        $country = new Country();
        $country->setName('Hong Kong');
        $country->setNameISO('HONG KONG');
        $country->setAlphaCode('HKG');
        $country->setNumericalCode(344);
        $country->setTelephonePrefix('+852');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-HKG',$country);


        $country = new Country();
        $country->setName('Islas Heard y McDonald');
        $country->setNameISO('ISLAS HEARD Y MCDONALD');
        $country->setAlphaCode('HMD');
        $country->setNumericalCode(334);
        $country->setTelephonePrefix('+0');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-HMD',$country);


        $country = new Country();
        $country->setName('Honduras');
        $country->setNameISO('HONDURAS');
        $country->setAlphaCode('HND');
        $country->setNumericalCode(340);
        $country->setTelephonePrefix('+504');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-HND',$country);


        $country = new Country();
        $country->setName('Croacia');
        $country->setNameISO('CROACIA');
        $country->setAlphaCode('HRV');
        $country->setNumericalCode(191);
        $country->setTelephonePrefix('+385');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-HRV',$country);


        $country = new Country();
        $country->setName('Haití');
        $country->setNameISO('HAITI');
        $country->setAlphaCode('HTI');
        $country->setNumericalCode(332);
        $country->setTelephonePrefix('+509');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-HTI',$country);


        $country = new Country();
        $country->setName('Hungría');
        $country->setNameISO('HUNGRIA');
        $country->setAlphaCode('HUN');
        $country->setNumericalCode(348);
        $country->setTelephonePrefix('+36');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-HUN',$country);


        $country = new Country();
        $country->setName('Indonesia');
        $country->setNameISO('INDONESIA');
        $country->setAlphaCode('IDN');
        $country->setNumericalCode(360);
        $country->setTelephonePrefix('+62');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-IDN',$country);


        $country = new Country();
        $country->setName('Isla de Man');
        $country->setNameISO('ISLA DE MAN');
        $country->setAlphaCode('IMN');
        $country->setNumericalCode(833);
        $country->setTelephonePrefix('+44');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-IMN',$country);


        $country = new Country();
        $country->setName('India');
        $country->setNameISO('INDIA');
        $country->setAlphaCode('IND');
        $country->setNumericalCode(356);
        $country->setTelephonePrefix('+91');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-IND',$country);


        $country = new Country();
        $country->setName('Territorio Británico del Océano Índico');
        $country->setNameISO('TERRITORIO BRITANICO DEL OCEANO INDICO');
        $country->setAlphaCode('IOT');
        $country->setNumericalCode(86);
        $country->setTelephonePrefix('+246');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-IOT',$country);


        $country = new Country();
        $country->setName('Irlanda');
        $country->setNameISO('IRLANDA');
        $country->setAlphaCode('IRL');
        $country->setNumericalCode(372);
        $country->setTelephonePrefix('+353');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-IRL',$country);


        $country = new Country();
        $country->setName('Irán');
        $country->setNameISO('IRAN, REPUBLICA ISLAMICA DE');
        $country->setAlphaCode('IRN');
        $country->setNumericalCode(364);
        $country->setTelephonePrefix('+98');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-IRN',$country);


        $country = new Country();
        $country->setName('Irak');
        $country->setNameISO('IRAK');
        $country->setAlphaCode('IRQ');
        $country->setNumericalCode(368);
        $country->setTelephonePrefix('+964');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-IRQ',$country);


        $country = new Country();
        $country->setName('Islandia');
        $country->setNameISO('ISLANDIA');
        $country->setAlphaCode('ISL');
        $country->setNumericalCode(352);
        $country->setTelephonePrefix('+354');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ISL',$country);


        $country = new Country();
        $country->setName('Israel');
        $country->setNameISO('ISRAEL');
        $country->setAlphaCode('ISR');
        $country->setNumericalCode(376);
        $country->setTelephonePrefix('+972');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ISR',$country);


        $country = new Country();
        $country->setName('Italia');
        $country->setNameISO('ITALIA');
        $country->setAlphaCode('ITA');
        $country->setNumericalCode(380);
        $country->setTelephonePrefix('+39');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ITA',$country);


        $country = new Country();
        $country->setName('Jamaica');
        $country->setNameISO('JAMAICA');
        $country->setAlphaCode('JAM');
        $country->setNumericalCode(388);
        $country->setTelephonePrefix('+1-876');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-JAM',$country);


        $country = new Country();
        $country->setName('Jersey');
        $country->setNameISO('JERSEY');
        $country->setAlphaCode('JEY');
        $country->setNumericalCode(832);
        $country->setTelephonePrefix('+44');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-JEY',$country);


        $country = new Country();
        $country->setName('Jordania');
        $country->setNameISO('JORDANIA');
        $country->setAlphaCode('JOR');
        $country->setNumericalCode(400);
        $country->setTelephonePrefix('+962');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-JOR',$country);


        $country = new Country();
        $country->setName('Japón');
        $country->setNameISO('JAPON');
        $country->setAlphaCode('JPN');
        $country->setNumericalCode(392);
        $country->setTelephonePrefix('+81');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-JPN',$country);


        $country = new Country();
        $country->setName('Kazajistán');
        $country->setNameISO('KAZAJISTAN');
        $country->setAlphaCode('KAZ');
        $country->setNumericalCode(398);
        $country->setTelephonePrefix('+7');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-KAZ',$country);


        $country = new Country();
        $country->setName('Kenia');
        $country->setNameISO('KENIA');
        $country->setAlphaCode('KEN');
        $country->setNumericalCode(404);
        $country->setTelephonePrefix('+254');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-KEN',$country);


        $country = new Country();
        $country->setName('Kirguistán');
        $country->setNameISO('KIRGUISTAN');
        $country->setAlphaCode('KGZ');
        $country->setNumericalCode(417);
        $country->setTelephonePrefix('+996');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-KGZ',$country);


        $country = new Country();
        $country->setName('Camboya');
        $country->setNameISO('CAMBOYA');
        $country->setAlphaCode('KHM');
        $country->setNumericalCode(116);
        $country->setTelephonePrefix('+855');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-KHM',$country);


        $country = new Country();
        $country->setName('Kiribati');
        $country->setNameISO('KIRIBATI');
        $country->setAlphaCode('KIR');
        $country->setNumericalCode(296);
        $country->setTelephonePrefix('+686');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-KIR',$country);


        $country = new Country();
        $country->setName('San Cristóbal y Nieves');
        $country->setNameISO('SAN CRISTOBAL Y NIEVES');
        $country->setAlphaCode('KNA');
        $country->setNumericalCode(659);
        $country->setTelephonePrefix('+1-869');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-KNA',$country);


        $country = new Country();
        $country->setName('Corea del Sur');
        $country->setNameISO('COREA, REPUBLICA DE');
        $country->setAlphaCode('KOR');
        $country->setNumericalCode(410);
        $country->setTelephonePrefix('+82');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-KOR',$country);


        $country = new Country();
        $country->setName('Kuwait');
        $country->setNameISO('KUWAIT');
        $country->setAlphaCode('KWT');
        $country->setNumericalCode(414);
        $country->setTelephonePrefix('+965');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-KWT',$country);


        $country = new Country();
        $country->setName('Laos');
        $country->setNameISO('REPUBLICA DEMOCRATICA POPULAR LAO');
        $country->setAlphaCode('LAO');
        $country->setNumericalCode(418);
        $country->setTelephonePrefix('+856');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LAO',$country);


        $country = new Country();
        $country->setName('Líbano');
        $country->setNameISO('LIBANO');
        $country->setAlphaCode('LBN');
        $country->setNumericalCode(422);
        $country->setTelephonePrefix('+961');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LBN',$country);


        $country = new Country();
        $country->setName('Liberia');
        $country->setNameISO('LIBERIA');
        $country->setAlphaCode('LBR');
        $country->setNumericalCode(430);
        $country->setTelephonePrefix('+231');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LBR',$country);


        $country = new Country();
        $country->setName('Libia');
        $country->setNameISO('LIBIA');
        $country->setAlphaCode('LBY');
        $country->setNumericalCode(434);
        $country->setTelephonePrefix('+218');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LBY',$country);


        $country = new Country();
        $country->setName('Santa Lucía');
        $country->setNameISO('SANTA LUCIA');
        $country->setAlphaCode('LCA');
        $country->setNumericalCode(662);
        $country->setTelephonePrefix('+1-758');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LCA',$country);


        $country = new Country();
        $country->setName('Liechtenstein');
        $country->setNameISO('LIECHTENSTEIN');
        $country->setAlphaCode('LIE');
        $country->setNumericalCode(438);
        $country->setTelephonePrefix('+423');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LIE',$country);


        $country = new Country();
        $country->setName('Sri Lanka');
        $country->setNameISO('SRI LANKA');
        $country->setAlphaCode('LKA');
        $country->setNumericalCode(144);
        $country->setTelephonePrefix('+94');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LKA',$country);


        $country = new Country();
        $country->setName('Lesoto');
        $country->setNameISO('LESOTO');
        $country->setAlphaCode('LSO');
        $country->setNumericalCode(426);
        $country->setTelephonePrefix('+266');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LSO',$country);


        $country = new Country();
        $country->setName('Lituania');
        $country->setNameISO('LITUANIA');
        $country->setAlphaCode('LTU');
        $country->setNumericalCode(440);
        $country->setTelephonePrefix('+370');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LTU',$country);


        $country = new Country();
        $country->setName('Luxemburgo');
        $country->setNameISO('LUXEMBURGO');
        $country->setAlphaCode('LUX');
        $country->setNumericalCode(442);
        $country->setTelephonePrefix('+352');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LUX',$country);


        $country = new Country();
        $country->setName('Letonia');
        $country->setNameISO('LETONIA');
        $country->setAlphaCode('LVA');
        $country->setNumericalCode(428);
        $country->setTelephonePrefix('+371');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-LVA',$country);


        $country = new Country();
        $country->setName('Macao');
        $country->setNameISO('MACAO');
        $country->setAlphaCode('MAC');
        $country->setNumericalCode(446);
        $country->setTelephonePrefix('+853');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MAC',$country);


        $country = new Country();
        $country->setName('San Martín');
        $country->setNameISO('SAN MARTIN (PARTE FRANCESA)');
        $country->setAlphaCode('MAF');
        $country->setNumericalCode(663);
        $country->setTelephonePrefix('+599');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MAF',$country);


        $country = new Country();
        $country->setName('Marruecos');
        $country->setNameISO('MARRUECOS');
        $country->setAlphaCode('MAR');
        $country->setNumericalCode(504);
        $country->setTelephonePrefix('+212');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MAR',$country);


        $country = new Country();
        $country->setName('Mónaco');
        $country->setNameISO('MONACO');
        $country->setAlphaCode('MCO');
        $country->setNumericalCode(492);
        $country->setTelephonePrefix('+377');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MCO',$country);


        $country = new Country();
        $country->setName('Moldavia');
        $country->setNameISO('MOLDAVIA, REPUBLICA DE');
        $country->setAlphaCode('MDA');
        $country->setNumericalCode(498);
        $country->setTelephonePrefix('+373');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MDA',$country);


        $country = new Country();
        $country->setName('Madagascar');
        $country->setNameISO('MADAGASCAR');
        $country->setAlphaCode('MDG');
        $country->setNumericalCode(450);
        $country->setTelephonePrefix('+261');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MDG',$country);


        $country = new Country();
        $country->setName('Maldivas');
        $country->setNameISO('MALDIVAS');
        $country->setAlphaCode('MDV');
        $country->setNumericalCode(462);
        $country->setTelephonePrefix('+960');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MDV',$country);


        $country = new Country();
        $country->setName('México');
        $country->setNameISO('MEXICO');
        $country->setAlphaCode('MEX');
        $country->setNumericalCode(484);
        $country->setTelephonePrefix('+52');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MEX',$country);


        $country = new Country();
        $country->setName('Islas Marshall');
        $country->setNameISO('ISLAS MARSHALL');
        $country->setAlphaCode('MHL');
        $country->setNumericalCode(584);
        $country->setTelephonePrefix('+692');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MHL',$country);


        $country = new Country();
        $country->setName('República de Macedonia');
        $country->setNameISO('MACEDONIA, LA ANTIGUA REPUBLICA YUGOSLAVA DE');
        $country->setAlphaCode('MKD');
        $country->setNumericalCode(807);
        $country->setTelephonePrefix('+389');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MKD',$country);


        $country = new Country();
        $country->setName('Malí');
        $country->setNameISO('MALI');
        $country->setAlphaCode('MLI');
        $country->setNumericalCode(466);
        $country->setTelephonePrefix('+223');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MLI',$country);


        $country = new Country();
        $country->setName('Malta');
        $country->setNameISO('MALTA');
        $country->setAlphaCode('MLT');
        $country->setNumericalCode(470);
        $country->setTelephonePrefix('+356');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MLT',$country);


        $country = new Country();
        $country->setName('Birmania');
        $country->setNameISO('MYANMAR');
        $country->setAlphaCode('MMR');
        $country->setNumericalCode(104);
        $country->setTelephonePrefix('+95');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MMR',$country);


        $country = new Country();
        $country->setName('Montenegro');
        $country->setNameISO('MONTENEGRO');
        $country->setAlphaCode('MNE');
        $country->setNumericalCode(499);
        $country->setTelephonePrefix('+382');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MNE',$country);


        $country = new Country();
        $country->setName('Mongolia');
        $country->setNameISO('MONGOLIA');
        $country->setAlphaCode('MNG');
        $country->setNumericalCode(496);
        $country->setTelephonePrefix('+976');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MNG',$country);


        $country = new Country();
        $country->setName('Islas Marianas del Norte');
        $country->setNameISO('ISLAS MARIANAS DEL NORTE');
        $country->setAlphaCode('MNP');
        $country->setNumericalCode(580);
        $country->setTelephonePrefix('+1-670');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MNP',$country);


        $country = new Country();
        $country->setName('Mozambique');
        $country->setNameISO('MOZAMBIQUE');
        $country->setAlphaCode('MOZ');
        $country->setNumericalCode(508);
        $country->setTelephonePrefix('+258');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MOZ',$country);


        $country = new Country();
        $country->setName('Mauritania');
        $country->setNameISO('MAURITANIA');
        $country->setAlphaCode('MRT');
        $country->setNumericalCode(478);
        $country->setTelephonePrefix('+222');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MRT',$country);


        $country = new Country();
        $country->setName('Montserrat');
        $country->setNameISO('MONTSERRAT');
        $country->setAlphaCode('MSR');
        $country->setNumericalCode(500);
        $country->setTelephonePrefix('+1-664');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MSR',$country);


        $country = new Country();
        $country->setName('Martinica');
        $country->setNameISO('MARTINICA');
        $country->setAlphaCode('MTQ');
        $country->setNumericalCode(474);
        $country->setTelephonePrefix('+596');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MTQ',$country);


        $country = new Country();
        $country->setName('Mauricio');
        $country->setNameISO('MAURICIO');
        $country->setAlphaCode('MUS');
        $country->setNumericalCode(480);
        $country->setTelephonePrefix('+230');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MUS',$country);


        $country = new Country();
        $country->setName('Malaui');
        $country->setNameISO('MALAUI');
        $country->setAlphaCode('MWI');
        $country->setNumericalCode(454);
        $country->setTelephonePrefix('+265');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MWI',$country);


        $country = new Country();
        $country->setName('Malasia');
        $country->setNameISO('MALASIA');
        $country->setAlphaCode('MYS');
        $country->setNumericalCode(458);
        $country->setTelephonePrefix('+60');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MYS',$country);


        $country = new Country();
        $country->setName('Mayotte');
        $country->setNameISO('MAYOTTE');
        $country->setAlphaCode('MYT');
        $country->setNumericalCode(175);
        $country->setTelephonePrefix('+262');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-MYT',$country);


        $country = new Country();
        $country->setName('Namibia');
        $country->setNameISO('NABIMIA');
        $country->setAlphaCode('NAM');
        $country->setNumericalCode(516);
        $country->setTelephonePrefix('+264');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NAM',$country);


        $country = new Country();
        $country->setName('Nueva Caledonia');
        $country->setNameISO('NUEVA CALEDONIA');
        $country->setAlphaCode('NCL');
        $country->setNumericalCode(540);
        $country->setTelephonePrefix('+687');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NCL',$country);


        $country = new Country();
        $country->setName('Níger');
        $country->setNameISO('NIGER');
        $country->setAlphaCode('NER');
        $country->setNumericalCode(562);
        $country->setTelephonePrefix('+227');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NER',$country);


        $country = new Country();
        $country->setName('Norfolk');
        $country->setNameISO('ISLA NORFOLK');
        $country->setAlphaCode('NFK');
        $country->setNumericalCode(574);
        $country->setTelephonePrefix('+672');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NFK',$country);


        $country = new Country();
        $country->setName('Nigeria');
        $country->setNameISO('NIGERIA');
        $country->setAlphaCode('NGA');
        $country->setNumericalCode(566);
        $country->setTelephonePrefix('+234');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NGA',$country);


        $country = new Country();
        $country->setName('Nicaragua');
        $country->setNameISO('NICARAGUA');
        $country->setAlphaCode('NIC');
        $country->setNumericalCode(558);
        $country->setTelephonePrefix('+505');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NIC',$country);


        $country = new Country();
        $country->setName('Niue');
        $country->setNameISO('NIUE');
        $country->setAlphaCode('NIU');
        $country->setNumericalCode(570);
        $country->setTelephonePrefix('+683');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NIU',$country);


        $country = new Country();
        $country->setName('Países Bajos');
        $country->setNameISO('PAISES BAJOS');
        $country->setAlphaCode('NLD');
        $country->setNumericalCode(528);
        $country->setTelephonePrefix('+31');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NLD',$country);


        $country = new Country();
        $country->setName('Noruega');
        $country->setNameISO('NORUEGA');
        $country->setAlphaCode('NOR');
        $country->setNumericalCode(578);
        $country->setTelephonePrefix('+47');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NOR',$country);


        $country = new Country();
        $country->setName('Nepal');
        $country->setNameISO('NEPAL');
        $country->setAlphaCode('NPL');
        $country->setNumericalCode(524);
        $country->setTelephonePrefix('+977');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NPL',$country);


        $country = new Country();
        $country->setName('Nauru');
        $country->setNameISO('NAURU');
        $country->setAlphaCode('NRU');
        $country->setNumericalCode(520);
        $country->setTelephonePrefix('+674');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NRU',$country);


        $country = new Country();
        $country->setName('Nueva Zelanda');
        $country->setNameISO('NUEVA ZELANDA');
        $country->setAlphaCode('NZL');
        $country->setNumericalCode(554);
        $country->setTelephonePrefix('+64');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-NZL',$country);


        $country = new Country();
        $country->setName('Omán');
        $country->setNameISO('OMAN');
        $country->setAlphaCode('OMN');
        $country->setNumericalCode(512);
        $country->setTelephonePrefix('+968');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-OMN',$country);


        $country = new Country();
        $country->setName('Pakistán');
        $country->setNameISO('PAKISTAN');
        $country->setAlphaCode('PAK');
        $country->setNumericalCode(586);
        $country->setTelephonePrefix('+92');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PAK',$country);


        $country = new Country();
        $country->setName('Panamá');
        $country->setNameISO('PANAMA');
        $country->setAlphaCode('PAN');
        $country->setNumericalCode(591);
        $country->setTelephonePrefix('+507');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PAN',$country);


        $country = new Country();
        $country->setName('Islas Pitcairn');
        $country->setNameISO('PITCAIRN');
        $country->setAlphaCode('PCN');
        $country->setNumericalCode(612);
        $country->setTelephonePrefix('+872');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PCN',$country);


        $country = new Country();
        $country->setName('Perú');
        $country->setNameISO('PERU');
        $country->setAlphaCode('PER');
        $country->setNumericalCode(604);
        $country->setTelephonePrefix('+51');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PER',$country);


        $country = new Country();
        $country->setName('Filipinas');
        $country->setNameISO('FILIPINAS');
        $country->setAlphaCode('PHL');
        $country->setNumericalCode(608);
        $country->setTelephonePrefix('+63');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PHL',$country);


        $country = new Country();
        $country->setName('Palaos');
        $country->setNameISO('PALAOS');
        $country->setAlphaCode('PLW');
        $country->setNumericalCode(585);
        $country->setTelephonePrefix('+680');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PLW',$country);


        $country = new Country();
        $country->setName('Papúa Nueva Guinea');
        $country->setNameISO('PAPUA NUEVA GUINEA');
        $country->setAlphaCode('PNG');
        $country->setNumericalCode(598);
        $country->setTelephonePrefix('+675');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PNG',$country);


        $country = new Country();
        $country->setName('Polonia');
        $country->setNameISO('POLONIA');
        $country->setAlphaCode('POL');
        $country->setNumericalCode(616);
        $country->setTelephonePrefix('+48');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-POL',$country);


        $country = new Country();
        $country->setName('Puerto Rico');
        $country->setNameISO('PUERTO RICO');
        $country->setAlphaCode('PRI');
        $country->setNumericalCode(630);
        $country->setTelephonePrefix('+1-787');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PRI',$country);


        $country = new Country();
        $country->setName('Corea del Norte');
        $country->setNameISO('COREA, REPUBLICA DEMOCRATICA POPULAR DE');
        $country->setAlphaCode('PRK');
        $country->setNumericalCode(408);
        $country->setTelephonePrefix('+850');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PRK',$country);


        $country = new Country();
        $country->setName('Portugal');
        $country->setNameISO('PORTUGAL');
        $country->setAlphaCode('PRT');
        $country->setNumericalCode(620);
        $country->setTelephonePrefix('+351');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PRT',$country);


        $country = new Country();
        $country->setName('Paraguay');
        $country->setNameISO('PARAGUAY');
        $country->setAlphaCode('PRY');
        $country->setNumericalCode(600);
        $country->setTelephonePrefix('+595');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PRY',$country);


        $country = new Country();
        $country->setName('Estado de Palestina');
        $country->setNameISO('PALESTINA, ESTADO DE');
        $country->setAlphaCode('PSE');
        $country->setNumericalCode(275);
        $country->setTelephonePrefix('+970');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PSE',$country);


        $country = new Country();
        $country->setName('Polinesia Francesa');
        $country->setNameISO('POLINESIA FRANCESA');
        $country->setAlphaCode('PYF');
        $country->setNumericalCode(258);
        $country->setTelephonePrefix('+689');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-PYF',$country);


        $country = new Country();
        $country->setName('Catar');
        $country->setNameISO('QATAR');
        $country->setAlphaCode('QAT');
        $country->setNumericalCode(634);
        $country->setTelephonePrefix('+974');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-QAT',$country);


        $country = new Country();
        $country->setName('Reunión');
        $country->setNameISO('REUNION');
        $country->setAlphaCode('REU');
        $country->setNumericalCode(638);
        $country->setTelephonePrefix('+262');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-REU',$country);


        $country = new Country();
        $country->setName('Rumania');
        $country->setNameISO('RUMANIA');
        $country->setAlphaCode('ROU');
        $country->setNumericalCode(642);
        $country->setTelephonePrefix('+40');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ROU',$country);


        $country = new Country();
        $country->setName('Rusia');
        $country->setNameISO('FEDERACION RUSA');
        $country->setAlphaCode('RUS');
        $country->setNumericalCode(643);
        $country->setTelephonePrefix('+7');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-RUS',$country);


        $country = new Country();
        $country->setName('Ruanda');
        $country->setNameISO('RUANDA');
        $country->setAlphaCode('RWA');
        $country->setNumericalCode(646);
        $country->setTelephonePrefix('+250');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-RWA',$country);


        $country = new Country();
        $country->setName('Arabia Saudita');
        $country->setNameISO('ARABIA SAUDITA');
        $country->setAlphaCode('SAU');
        $country->setNumericalCode(682);
        $country->setTelephonePrefix('+966');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SAU',$country);


        $country = new Country();
        $country->setName('Sudán');
        $country->setNameISO('SUDAN');
        $country->setAlphaCode('SDN');
        $country->setNumericalCode(729);
        $country->setTelephonePrefix('+249');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SDN',$country);


        $country = new Country();
        $country->setName('Senegal');
        $country->setNameISO('SENEGAL');
        $country->setAlphaCode('SEN');
        $country->setNumericalCode(686);
        $country->setTelephonePrefix('+221');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SEN',$country);


        $country = new Country();
        $country->setName('Singapur');
        $country->setNameISO('SINGAPUR');
        $country->setAlphaCode('SGP');
        $country->setNumericalCode(702);
        $country->setTelephonePrefix('+65');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SGP',$country);


        $country = new Country();
        $country->setName('Islas Georgias del Sur y Sandwich del Sur');
        $country->setNameISO('ISLAS GEORGIAS DEL SUR Y SANDWICH DEL SUR');
        $country->setAlphaCode('SGS');
        $country->setNumericalCode(239);
        $country->setTelephonePrefix('+0');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SGS',$country);


        $country = new Country();
        $country->setName('Santa Helena, A. y T.');
        $country->setNameISO('SANTA HELENA, ASCENSION Y TRISTAN DE ACUÑA');
        $country->setAlphaCode('SHN');
        $country->setNumericalCode(654);
        $country->setTelephonePrefix('+290');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SHN',$country);


        $country = new Country();
        $country->setName('Svalbard y Jan Mayen');
        $country->setNameISO('SVALBARD Y JAN MAYEN');
        $country->setAlphaCode('SJM');
        $country->setNumericalCode(744);
        $country->setTelephonePrefix('+47');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SJM',$country);


        $country = new Country();
        $country->setName('Islas Salomón');
        $country->setNameISO('ISLAS SALOMON');
        $country->setAlphaCode('SLB');
        $country->setNumericalCode(90);
        $country->setTelephonePrefix('+677');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SLB',$country);


        $country = new Country();
        $country->setName('Sierra Leona');
        $country->setNameISO('SIERRA LEONA');
        $country->setAlphaCode('SLE');
        $country->setNumericalCode(694);
        $country->setTelephonePrefix('+232');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SLE',$country);


        $country = new Country();
        $country->setName('El Salvador');
        $country->setNameISO('EL SALVADOR');
        $country->setAlphaCode('SLV');
        $country->setNumericalCode(222);
        $country->setTelephonePrefix('+503');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SLV',$country);


        $country = new Country();
        $country->setName('San Marino');
        $country->setNameISO('SAN MARINO');
        $country->setAlphaCode('SMR');
        $country->setNumericalCode(674);
        $country->setTelephonePrefix('+378');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SMR',$country);


        $country = new Country();
        $country->setName('Somalia');
        $country->setNameISO('SOMALIA');
        $country->setAlphaCode('SOM');
        $country->setNumericalCode(706);
        $country->setTelephonePrefix('+252');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SOM',$country);


        $country = new Country();
        $country->setName('San Pedro y Miquelón');
        $country->setNameISO('SAN PEDRO Y MIQUELON');
        $country->setAlphaCode('SPM');
        $country->setNumericalCode(666);
        $country->setTelephonePrefix('+508');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SPM',$country);


        $country = new Country();
        $country->setName('Serbia');
        $country->setNameISO('SERBIA');
        $country->setAlphaCode('SRB');
        $country->setNumericalCode(688);
        $country->setTelephonePrefix('+381');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SRB',$country);


        $country = new Country();
        $country->setName('Sudán del Sur');
        $country->setNameISO('SUDAN DEL SUR');
        $country->setAlphaCode('SSD');
        $country->setNumericalCode(728);
        $country->setTelephonePrefix('+211');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SSD',$country);


        $country = new Country();
        $country->setName('Santo Tomé y Príncipe');
        $country->setNameISO('SANTO TOME Y PRINCIPE');
        $country->setAlphaCode('STP');
        $country->setNumericalCode(678);
        $country->setTelephonePrefix('+239');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-STP',$country);


        $country = new Country();
        $country->setName('Surinam');
        $country->setNameISO('SURINAM');
        $country->setAlphaCode('SUR');
        $country->setNumericalCode(740);
        $country->setTelephonePrefix('+597');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SUR',$country);


        $country = new Country();
        $country->setName('Eslovaquia');
        $country->setNameISO('ESLOVAQUIA');
        $country->setAlphaCode('SVK');
        $country->setNumericalCode(703);
        $country->setTelephonePrefix('+421');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SVK',$country);


        $country = new Country();
        $country->setName('Eslovenia');
        $country->setNameISO('ESLOVENIA');
        $country->setAlphaCode('SVN');
        $country->setNumericalCode(705);
        $country->setTelephonePrefix('+386');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SVN',$country);


        $country = new Country();
        $country->setName('Suecia');
        $country->setNameISO('SUECIA');
        $country->setAlphaCode('SWE');
        $country->setNumericalCode(752);
        $country->setTelephonePrefix('+46');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SWE',$country);


        $country = new Country();
        $country->setName('Suazilandia');
        $country->setNameISO('SUAZILANDIA');
        $country->setAlphaCode('SWZ');
        $country->setNumericalCode(748);
        $country->setTelephonePrefix('+268');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SWZ',$country);


        $country = new Country();
        $country->setName('Sint Maarten');
        $country->setNameISO('SINT MAARTEN (PARTE NEERLANDESA)');
        $country->setAlphaCode('SXM');
        $country->setNumericalCode(534);
        $country->setTelephonePrefix('+1-721');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SXM',$country);


        $country = new Country();
        $country->setName('Seychelles');
        $country->setNameISO('SEYCHELLES');
        $country->setAlphaCode('SYC');
        $country->setNumericalCode(690);
        $country->setTelephonePrefix('+248');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SYC',$country);


        $country = new Country();
        $country->setName('Siria');
        $country->setNameISO('REPUBLICA ARABE DE SIRIA');
        $country->setAlphaCode('SYR');
        $country->setNumericalCode(760);
        $country->setTelephonePrefix('+963');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-SYR',$country);


        $country = new Country();
        $country->setName('Islas Turcas y Caicos');
        $country->setNameISO('ISLAS TURCAS Y CAICOS');
        $country->setAlphaCode('TCA');
        $country->setNumericalCode(796);
        $country->setTelephonePrefix('+1-649');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TCA',$country);


        $country = new Country();
        $country->setName('Chad');
        $country->setNameISO('CHAD');
        $country->setAlphaCode('TCD');
        $country->setNumericalCode(148);
        $country->setTelephonePrefix('+235');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TCD',$country);


        $country = new Country();
        $country->setName('Togo');
        $country->setNameISO('TOGO');
        $country->setAlphaCode('TGO');
        $country->setNumericalCode(768);
        $country->setTelephonePrefix('+228');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TGO',$country);


        $country = new Country();
        $country->setName('Tailandia');
        $country->setNameISO('TAILANDIA');
        $country->setAlphaCode('THA');
        $country->setNumericalCode(764);
        $country->setTelephonePrefix('+66');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-THA',$country);


        $country = new Country();
        $country->setName('Tayikistán');
        $country->setNameISO('TAYIKISTAN');
        $country->setAlphaCode('TJK');
        $country->setNumericalCode(762);
        $country->setTelephonePrefix('+992');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TJK',$country);


        $country = new Country();
        $country->setName('Tokelau');
        $country->setNameISO('TOKELAU');
        $country->setAlphaCode('TKL');
        $country->setNumericalCode(772);
        $country->setTelephonePrefix('+690');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TKL',$country);


        $country = new Country();
        $country->setName('Turkmenistán');
        $country->setNameISO('TURKMENISTAN');
        $country->setAlphaCode('TKM');
        $country->setNumericalCode(795);
        $country->setTelephonePrefix('+993');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TKM',$country);


        $country = new Country();
        $country->setName('Timor Oriental');
        $country->setNameISO('TIMOR-LESTE');
        $country->setAlphaCode('TLS');
        $country->setNumericalCode(626);
        $country->setTelephonePrefix('+670');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TLS',$country);


        $country = new Country();
        $country->setName('Tonga');
        $country->setNameISO('TONGA');
        $country->setAlphaCode('TON');
        $country->setNumericalCode(776);
        $country->setTelephonePrefix('+676');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TON',$country);


        $country = new Country();
        $country->setName('Trinidad y Tobago');
        $country->setNameISO('TRINIDAD Y TOBAGO');
        $country->setAlphaCode('TTO');
        $country->setNumericalCode(780);
        $country->setTelephonePrefix('+1-868');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TTO',$country);


        $country = new Country();
        $country->setName('Túnez');
        $country->setNameISO('TUNEZ');
        $country->setAlphaCode('TUN');
        $country->setNumericalCode(788);
        $country->setTelephonePrefix('+216');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TUN',$country);


        $country = new Country();
        $country->setName('Turquía');
        $country->setNameISO('TURQUIA');
        $country->setAlphaCode('TUR');
        $country->setNumericalCode(792);
        $country->setTelephonePrefix('+90');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TUR',$country);


        $country = new Country();
        $country->setName('Tuvalu');
        $country->setNameISO('TUVALU');
        $country->setAlphaCode('TUV');
        $country->setNumericalCode(798);
        $country->setTelephonePrefix('+688');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TUV',$country);


        $country = new Country();
        $country->setName('Taiwán');
        $country->setNameISO('TAIWAN, PROVINCIA DE CHINA');
        $country->setAlphaCode('TWN');
        $country->setNumericalCode(158);
        $country->setTelephonePrefix('+886');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-TWN',$country);


        $country = new Country();
        $country->setName('Tanzania');
        $country->setNameISO('TANZANIA, TZA REPUBLICA UNIDA');
        $country->setAlphaCode('DE');
        $country->setNumericalCode(834);
        $country->setTelephonePrefix('+255');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-DE',$country);


        $country = new Country();
        $country->setName('Uganda');
        $country->setNameISO('UGANDA');
        $country->setAlphaCode('UGA');
        $country->setNumericalCode(800);
        $country->setTelephonePrefix('+256');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-UGA',$country);


        $country = new Country();
        $country->setName('Ucrania');
        $country->setNameISO('UCRANIA');
        $country->setAlphaCode('UKR');
        $country->setNumericalCode(804);
        $country->setTelephonePrefix('+380');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-UKR',$country);


        $country = new Country();
        $country->setName('Islas ultramarinas de Estados Unidos');
        $country->setNameISO('ISLAS ULTRAMARINAS MENORES DE ESTADOS UNIDOS');
        $country->setAlphaCode('UMI');
        $country->setNumericalCode(581);
        $country->setTelephonePrefix(NULL);
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-UMI',$country);


        $country = new Country();
        $country->setName('Uruguay');
        $country->setNameISO('URUGUAY');
        $country->setAlphaCode('URY');
        $country->setNumericalCode(858);
        $country->setTelephonePrefix('+598');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-URY',$country);


        $country = new Country();
        $country->setName('Estados Unidos');
        $country->setNameISO('ESTADOS UNIDOS');
        $country->setAlphaCode('USA');
        $country->setNumericalCode(840);
        $country->setTelephonePrefix('+1');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-USA',$country);


        $country = new Country();
        $country->setName('Uzbekistán');
        $country->setNameISO('UZBEKISTAN');
        $country->setAlphaCode('UZB');
        $country->setNumericalCode(860);
        $country->setTelephonePrefix('+998');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-UZB',$country);


        $country = new Country();
        $country->setName('Ciudad del Vaticano');
        $country->setNameISO('SANTA SEDE (CIUDAD ESTADO VATICANO)');
        $country->setAlphaCode('VAT');
        $country->setNumericalCode(336);
        $country->setTelephonePrefix('+379');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-VAT',$country);


        $country = new Country();
        $country->setName('San Vicente y las Granadinas');
        $country->setNameISO('SAN VICENTE Y LAS GRANADINAS');
        $country->setAlphaCode('VCT');
        $country->setNumericalCode(670);
        $country->setTelephonePrefix('+1-784');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-VCT',$country);


        $country = new Country();
        $country->setName('Venezuela');
        $country->setNameISO('VENEZUELA, REPUBLICA BOLIVARIANA DE');
        $country->setAlphaCode('VEN');
        $country->setNumericalCode(862);
        $country->setTelephonePrefix('+58');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-VEN',$country);


        $country = new Country();
        $country->setName('Islas Vírgenes Británicas');
        $country->setNameISO('ISLAS VIRGENES BRITANICAS');
        $country->setAlphaCode('VGB');
        $country->setNumericalCode(92);
        $country->setTelephonePrefix('+1-284');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-VGB',$country);


        $country = new Country();
        $country->setName('Islas Vírgenes de los Estados Unidos');
        $country->setNameISO('ISLAS VIRGENES DE LOS ESTADOS UNIDOS');
        $country->setAlphaCode('VIR');
        $country->setNumericalCode(850);
        $country->setTelephonePrefix('+1-340');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-VIR',$country);


        $country = new Country();
        $country->setName('Vietnam');
        $country->setNameISO('VIET NAM');
        $country->setAlphaCode('VNM');
        $country->setNumericalCode(704);
        $country->setTelephonePrefix('+84');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-VNM',$country);


        $country = new Country();
        $country->setName('Vanuatu');
        $country->setNameISO('VANUATU');
        $country->setAlphaCode('VUT');
        $country->setNumericalCode(548);
        $country->setTelephonePrefix('+678');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-VUT',$country);


        $country = new Country();
        $country->setName('Wallis y Futuna');
        $country->setNameISO('WALLIS Y FUTUNA');
        $country->setAlphaCode('WLF');
        $country->setNumericalCode(876);
        $country->setTelephonePrefix('+681');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-WLF',$country);


        $country = new Country();
        $country->setName('Samoa');
        $country->setNameISO('SAMOA');
        $country->setAlphaCode('WSM');
        $country->setNumericalCode(882);
        $country->setTelephonePrefix('+685');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-WSM',$country);


        $country = new Country();
        $country->setName('Yemen');
        $country->setNameISO('YEMEN');
        $country->setAlphaCode('YEM');
        $country->setNumericalCode(887);
        $country->setTelephonePrefix('+967');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-YEM',$country);


        $country = new Country();
        $country->setName('Sudáfrica');
        $country->setNameISO('SUDAFRICA');
        $country->setAlphaCode('ZAF');
        $country->setNumericalCode(710);
        $country->setTelephonePrefix('+27');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ZAF',$country);


        $country = new Country();
        $country->setName('Zambia');
        $country->setNameISO('ZAMBIA');
        $country->setAlphaCode('ZMB');
        $country->setNumericalCode(894);
        $country->setTelephonePrefix('+260');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ZMB',$country);


        $country = new Country();
        $country->setName('Zimbabue');
        $country->setNameISO('ZIMBABUE');
        $country->setAlphaCode('ZWE');
        $country->setNumericalCode(716);
        $country->setTelephonePrefix('+263');
        $manager->persist($country);
        $manager->flush();
        $this->addReference('COUNTRY-ZWE',$country);


        
    }
    
    public function getOrder() 
    {
        return 1;
    }
    
    public function getNameTrans()
    {
        return 'dataFixtures.country';
    }
    
    public function getAlias() 
    {
        return 'country';
    }
}
