<?php

namespace BeerToBeer\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BeerToBeer\CoreBundle\Entity\Business;
use BeerToBeer\CoreBundle\Entity\BeerBusiness;

class ImportFromFormerBeerToBeer implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $bigJson = "<?xml version='1.0' encoding='UTF-8'?>
<Document>
    <name>Bars par prix de la pinte la moins chère</name>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Le Fantôme</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>7.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: 7<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.351009999999974,48.875389,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFFFF</styleUrl>
        <name>Point Éphémère</name>
        <ExtendedData>
            <Data name='Prix'>
                <value></value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: <br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3682430000000068,48.881189,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-737300</styleUrl>
        <name>Le Royal Babylone</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.3</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7,3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.319137044582817,48.85177274617771,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-464600</styleUrl>
        <name>Indiana Café Montparnasse</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>8.8</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 8,8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.324971000000005,48.843282,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>15 Café</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.8</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.298483000000033,48.849084,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-464600</styleUrl>
        <name>Chacha Club</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>10.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 10<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.342300000000023,48.862144,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-464600</styleUrl>
        <name>Kong</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>10.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 10<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3431940000000395,48.859226,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-737300</styleUrl>
        <name>Experimental Cocktail Club</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>8.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3483439999999973,48.86606,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>Le Tambour</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.4</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value>7 après minuit</value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,4<br>Happy Hour: <br>Infos: 7 après minuit<br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.344699999999989,48.865446000000006,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>LA JAJA</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3439819999999827,48.866073,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Dédé la Frite</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.6</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3426959999999326,48.869824,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Truskel</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.341382000000067,48.870105,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFFFF</styleUrl>
        <name>La Locandiera</name>
        <ExtendedData>
            <Data name='Prix'>
                <value></value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: <br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.381246000000033,48.866683,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFFFF</styleUrl>
        <name>Les Frangines</name>
        <ExtendedData>
            <Data name='Prix'>
                <value></value>
            </Data>
            <Data name='Happy Hour'>
                <value>5.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: <br>Happy Hour: 5<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3196470000000318,48.834855,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>O'Connells</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Licorne</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: Licorne<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.344286,48.861119,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Les Artisans</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Stella</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: Stella<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.303202,48.842815,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Le Piment Café</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.362463,48.856373,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFFFF</styleUrl>
        <name>monsieur.</name>
        <ExtendedData>
            <Data name='Prix'>
                <value></value>
            </Data>
            <Data name='Happy Hour'>
                <value>4.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Stella</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: <br>Happy Hour: 4<br>Infos: <br>Bière: Stella<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.373007,48.861464,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La recyclerie</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3440470000000007,48.89763,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La Coquille</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Pils tchèque</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: Pils tchèque<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.341686999999979,48.864204,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Le Sans Souci</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.336198999999965,48.881315,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Syphax Café</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3376570000000356,48.876121,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Bar Rouge</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3635584999999537,48.8644132,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>The Thistle</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3501300000000356,48.863935,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Les Cariatides</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3509369999999308,48.864478,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Chez Gudule</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.4022860000000037,48.844164,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>PlayOff Saint-Georges</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3370519999999715,48.87691,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>The Wall</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.349831999999992,48.844265,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Culture Rapide</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.2</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,2<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3819100000000617,48.873055,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Chope du Château Rouge</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3478549999999814,48.886928,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>James Hetfeeld's Pub</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3448849999999766,48.870848,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Le Sully</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value>01 77 10 74 70</value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,5<br>Happy Hour: <br>Infos: 01 77 10 74 70<br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.35286700000006,48.870316,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Tribal Café</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3534650000000283,48.872339,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>Le Pantalon</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.8</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3419719999999415,48.845721,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>French flair Bar Rugby</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.9</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,9<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3310129999999845,48.883972,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>L'Attirail</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.356932000000029,48.864462,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>BairRO aLTo</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3500280000000657,48.873951,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Au Clair de Lune</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.347656000000029,48.886902,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>La Cordonnerie</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3505000000000114,48.865275000000004,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>L'Antidote</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3491599999999835,48.845195,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>L'Orange Mécanique</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3752849999999626,48.86704900000001,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>L'Objectif Lune</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.371887000000015,48.854598,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>La Laverie</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Belge et allemandes</value>
            </Data>
            <Data name='Adresse'>
                <value>1 Rue Sorbier, 20e</value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4<br>Happy Hour: <br>Infos: <br>Bière: Belge et allemandes<br>Adresse: 1 Rue Sorbier, 20e]]></description>
        <Point>
            <coordinates>2.389546399999972,48.86863169999999,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>Le Cristal</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.309847999999988,48.8458,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>L'Art Brut</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.3</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3511160000000473,48.862184,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>The Local</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.352777999999944,48.843413,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Udo Bar</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3740421999999626,48.8645664,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Hideout Bastille</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.372838999999999,48.853619,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>The Green Linnet</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.349668999999949,48.857433,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Baron Samedi</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3526729999999816,48.865233,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Caravane (La)</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.371488999999997,48.868341,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Bouillon Belge</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.399438000000032,48.852002,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Mélocoton</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.348639999999932,48.847106,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>Le Smoke</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.3</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.326689999999985,48.841517,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>Pham-Cong Quan / Le Drapeau de la Fidélité</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.307211000000052,48.841498,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>UFO Bar</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3739199999999983,48.866837,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Les 3 Chapeaux</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.8</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.390894000000003,48.872004,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Paloma</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>3.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: 3<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3749610565860166,48.86699769731774,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Café Crème</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3627870000000257,48.864995,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Féline</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3852299999999786,48.867165,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Sputnik</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.351003999999989,48.827965,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>American Bistrot</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3705620000000636,48.865711,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Café du Commerce</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3472150000000056,48.884612,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Dernier Bar avant la Fin du Monde</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3463580000000093,48.85795000000001,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Marlusse et lapin</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.336671000000024,48.883388,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Motel</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3764710000000377,48.852681,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Rendez-vous des Amis</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3405700000000706,48.885692,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Au Trinquet</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.26528200000007,48.837988,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Cinquante</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.362679000000071,48.8719,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Lèche-Vin</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3708050000000185,48.854953,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Rush Bar</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3702690000000075,48.861311,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>L'Abribus</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.382288000000017,48.850215,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Carbone 14</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3871199999999817,48.855562,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Manufacture</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3458252000000357,48.8792864,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Fanfaron</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.378292999999985,48.851626,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Mécanique Ondulatoire</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3746320000000196,48.85361600000001,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Downtown Cafe</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.372259999999983,48.866304,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Café Chéri(e)</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.375265000000013,48.874059,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Bloody Mary</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.368942000000061,48.857233,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Gueuze</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3414699999999584,48.847062,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Le Bar Dix</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.338596999999936,48.851108,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Au Passage</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.36898199999996,48.861659,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Au Petit Fer à Cheval</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3575759999999946,48.857471,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Au Petit Moulin</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.332920999999942,48.882975,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Au Rocher de Cancale</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.9</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,9<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3470800000000054,48.865618,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Auld Alliance</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.9</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,9<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.359189000000015,48.85534,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Aux Deux Amis</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.371838000000025,48.864592,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Bar Ourcq</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3772430000000213,48.886408,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Bistrot Vivienne</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.339503000000036,48.866238,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Brewberry</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.348604000000023,48.842973,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Café Bonnie</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3620409999999765,48.874391,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Café des Deux Moulins</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.4</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3336420000000544,48.884917,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-464600</styleUrl>
        <name>Café Etienne Marcel</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>10.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 10<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3454590000000053,48.864831,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Café Klein Holland</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.357811999999967,48.856506,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La Pinte</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.338930000000005,48.851817,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Le Basile</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value>3.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: 3<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3275999999999613,48.8538,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Le Canaillou</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value>39 Rue de Montreuil</value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: 39 Rue de Montreuil]]></description>
        <Point>
            <coordinates>2.387492899999984,48.8508301,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le 138</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.379457000000002,48.850446,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La Taverne du croissant</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>2.9</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Peroni</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: 2,9<br>Infos: <br>Bière: Peroni<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.343319000000065,48.869196,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Thirsty Mad Cat, Pub Sport Bar Paris, Bar à bières, Brasserie Paris</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3438830000000053,48.867830000000005,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>FROG XVI</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.2882250000000113,48.864715,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Le Breguet</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.31269599999996,48.840428,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Merle Moqueur</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3497919999999795,48.82766,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La butte aux piafs</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.351899000000003,48.82995,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La Folie en Tête</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3482309999999416,48.827456,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Merle Moqueur</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3497919999999795,48.82766,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Bogman's Pub</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value>01 45 08 43 64</value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: 01 45 08 43 64<br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.348027000000002,48.862836,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Bellevilloise</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.392244000000005,48.868226,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Le Complot</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.373738900000035,48.8669898,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>L'Assassin</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Mells</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,5<br>Happy Hour: <br>Infos: <br>Bière: Mells<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3799530000000004,48.868726,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Cannibale Café</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>4.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Kanterbrau</value>
            </Data>
            <Data name='Adresse'>
                <value>93 Rue Jean-Pierre Timbaud</value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: 4<br>Infos: <br>Bière: Kanterbrau<br>Adresse: 93 Rue Jean-Pierre Timbaud]]></description>
        <Point>
            <coordinates>2.379087000000027,48.8683875,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Café Léa</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.2</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,2<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3497539999999617,48.838716000000005,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Café Martini</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.367095000000063,48.855934,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Café Ménilmontant</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.6</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3827079999999796,48.8666490789096,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>café Oz</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.342502999999965,48.871777,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Café Society</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3669119999999566,48.860958,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>CARTEL OCHO - Mezcaleria</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.35297700000001,48.864320000000006,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Chez Camille</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.3</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.337980000000016,48.885467,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Chez Jeannette</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.8</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3535289999999804,48.871664,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Dock Bar (Bar de Nuit, Soirées Ladies Night, Blind Test Paris)</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3339369999999917,48.870436,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Drôle d'Endroit pour une Rencontre</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3345950000000357,48.888848,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Finnegans Wake</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3539409999999634,48.845774,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-737300</styleUrl>
        <name>Guinness Tavern</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>8.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3483099999999695,48.859614,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Hideout</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.348353999999972,48.859752,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Houla Oups</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.380388000000039,48.853796,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>L'Entre Potes</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3744140000000016,48.852599,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Café L'Envol Québécois</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.351590999999985,48.844004,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-737300</styleUrl>
        <name>L'esplanade saint Eustache</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.4</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7,4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3464779999999337,48.863362,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>L'imprévu</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.349562999999989,48.859448,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>International</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3798349999999573,48.866711,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Blues Bar</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>3.5</value>
            </Data>
            <Data name='Infos'>
                <value>Happy Hour de 16H30 à 21H</value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: 3,5<br>Infos: Happy Hour de 16H30 à 21H<br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.341660999999931,48.893002,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>Ô P'tit Paris</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>3.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value>2.7</value>
            </Data>
            <Data name='Infos'>
                <value>Happy Hour de 15h à 20h</value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 3,5<br>Happy Hour: 2,7<br>Infos: Happy Hour de 15h à 20h<br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3531319999999596,48.872552000000006,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>BLOK PARIS</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>2.9</value>
            </Data>
            <Data name='Happy Hour'>
                <value>2.9</value>
            </Data>
            <Data name='Infos'>
                <value>Happy Hour toute la nuit (à partir de 16h)</value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 2,9<br>Happy Hour: 2,9<br>Infos: Happy Hour toute la nuit (à partir de 16h)<br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3482119999999895,48.859662,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Les Frangins</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Coq hardi (blonde 5,7°)</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: Coq hardi (blonde 5,7°)<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3727360000000317,48.878274,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>L\Inconnu</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3520829999999933,48.871124,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>La Cantoche Paname</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3435050000000506,48.868002,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La Fine Mousse</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3817300000000614,48.864865,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>La Fourmi</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.3</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.339721000000054,48.88251,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Grosse Caisse</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.342920000000049,48.870245,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Lucha Libre</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.348504000000048,48.849037,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>La marelle (bar)</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.373250999999982,48.857274,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Mercerie</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3780289999999695,48.865751,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La Patache</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.363527999999974,48.87265,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La Perle</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.360593999999992,48.859812,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>La Rotonde</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.369719000000032,48.883557,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Comptoir Général</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3652620000000297,48.872115,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Le Basile</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3275999999999613,48.8538,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Bateau Ivre</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.349081999999953,48.845623,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Beho</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3474539999999706,48.859640000000006,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Le Bidule</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3845959999999877,48.850517,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>The Bombardier</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3476200000000063,48.84682,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-464600</styleUrl>
        <name>Le Brébant</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>11.2</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 11,2<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.343426000000022,48.87155400000001,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Bric à Brac Bar</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3788560000000416,48.865944,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Le Café Des Sports</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.392082999999957,48.869163,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Café Noir</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3443260000000237,48.866344,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Le Cochon à l'oreille</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3451689999999417,48.864467,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Coeur Fou</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3444950000000517,48.865953,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Le Coude à Coude</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.2</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,2<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.348171999999977,48.888118,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Falstaff</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.326012999999989,48.842822,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Fumoir</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.340799000000061,48.860455,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Gamin de la Bastille</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3742859999999837,48.852869,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Le général Beuret</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.3</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,3<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.303119000000038,48.841691,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Jemmapes</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.365148999999974,48.872204,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le mansart</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3333810000000312,48.882236,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Le Cyrano</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>5.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: 5<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3265860000000202,48.88376,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Rue Marie Stuart</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3473003999999946,48.8650727,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Mécano-Bar</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.376598999999942,48.865534000000004,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le P'tit Garage</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>3.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: 3<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3753150000000005,48.867198,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Petit Baïona</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.381662000000006,48.853744,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Piano Vache</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3477060000000165,48.847302,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Polichinelle Café</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3791439999999966,48.853264,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Progrès: the Bohemians' Canteen</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3643919999999525,48.861881,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Pure Cafe</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.4</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Grolsch, Brooklyn lager</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6,4<br>Happy Hour: <br>Infos: <br>Bière: Grolsch, Brooklyn lager<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3833170000000337,48.853325,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Pub river</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.349082400000043,48.8456232,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Royal</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3498561999999765,48.8645728,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>Le pub saint Hilaire</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.346911999999975,48.84820200000001,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Saint Sauveur</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.385156000000052,48.866491,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Soleil de la Butte</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.345215000000053,48.886525,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Troisième Lieu</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.350787999999966,48.861582,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-737300</styleUrl>
        <name>Le Vélocipède</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>8.2</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 8,2<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.351073000000042,48.864121,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>36 Corneil</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3456019999999853,48.879037,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>115 Rue Oberkampf</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.8</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3785139999999956,48.865939,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Bar des Ferrailleurs</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.372308999999973,48.853784,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Les Marcheurs de Planète - Resto-zinc</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.377087999999958,48.856596,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Les Parigots</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3618490000000065,48.86919,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Les pères populaires</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.4018650000000434,48.85108,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-464600</styleUrl>
        <name>La Passerelle</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>9.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Pietra - 33 cl</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 9<br>Happy Hour: <br>Infos: <br>Bière: Pietra - 33 cl<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.253684000000021,48.8281895,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Père Lachaise</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.8</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,8<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3888010000000577,48.859433,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-F9F900</styleUrl>
        <name>L'Usine Charonne</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.4</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5,4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3986439999999902,48.85156,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>La cantine de belleville</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value>3.5</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,5<br>Happy Hour: 3,5<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3787190000000464,48.870791,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Triomphe</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.378930999999966,48.87073969999999,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Triplettes de Belleville</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value>4.5</value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: 4.5<br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3790139999999838,48.870603,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-CCCC00</styleUrl>
        <name>Le Café Tômate</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>6.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>4.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Pelforth</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 6<br>Happy Hour: 4<br>Infos: <br>Bière: Pelforth<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3749780000000555,48.868542,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Le Muras</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>5.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Amstel</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: 5<br>Infos: <br>Bière: Amstel<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.374890999999934,48.868347,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>le VIZIR</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.6</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>1664</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,6<br>Happy Hour: <br>Infos: <br>Bière: 1664<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.372653000000014,48.868181,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFFFF</styleUrl>
        <name>Le Dauphin</name>
        <ExtendedData>
            <Data name='Prix'>
                <value></value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: <br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.371161000000029,48.869448,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFFFF</styleUrl>
        <name>Le Floréal</name>
        <ExtendedData>
            <Data name='Prix'>
                <value></value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: <br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3710820000000012,48.870137,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Goncourt</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.8</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Amstel</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,8<br>Happy Hour: <br>Infos: <br>Bière: Amstel<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3712540000000217,48.869683,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Léon de Bruxelles</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Blonde de Léon</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: Blonde de Léon<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.336095999999998,48.85296600000001,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Léon de Bruxelles</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Blonde de Léon</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: Blonde de Léon<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3261039999999866,48.842895,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Léon de Bruxelles</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Blonde de Léon</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: Blonde de Léon<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3043609999999717,48.870456,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Léon de Bruxelles</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Blonde de Léon</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: Blonde de Léon<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.335413000000017,48.871394,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Léon de Bruxelles</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Blonde de Léon</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: Blonde de Léon<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3657799999999725,48.866686,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Léon de Bruxelles</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Blonde de Léon</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: Blonde de Léon<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.368404000000055,48.854124,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Léon de Bruxelles</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Blonde de Léon</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: Blonde de Léon<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.347111000000041,48.862709,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-9F9F00</styleUrl>
        <name>Léon de Bruxelles</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Blonde de Léon</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7<br>Happy Hour: <br>Infos: <br>Bière: Blonde de Léon<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.2846759999999904,48.878687,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFFFF</styleUrl>
        <name>Les Relais d'Alsace, Taverne Karlsbräu</name>
        <ExtendedData>
            <Data name='Prix'>
                <value></value>
            </Data>
            <Data name='Happy Hour'>
                <value>5.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Karlsberg</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: <br>Happy Hour: 5<br>Infos: <br>Bière: Karlsberg<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3656280000000156,48.866656,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF53</styleUrl>
        <name>Le Petit Centre</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>4.4</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 4,4<br>Happy Hour: <br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3664320000000316,48.866102,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-737300</styleUrl>
        <name>Le Banco</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>7.5</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Chouffe</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 7,5<br>Happy Hour: <br>Infos: <br>Bière: Chouffe<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3710989999999583,48.86622400000001,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF80</styleUrl>
        <name>LE P TIKFE</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>2.6</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Kro</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 2,6<br>Happy Hour: <br>Infos: <br>Bière: Kro<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3787468000000445,48.86793830000001,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Les Fabricants</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value></value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value>Saint Omer</value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: <br>Infos: <br>Bière: Saint Omer<br>Adresse: ]]></description>
        <Point>
            <coordinates>2.3750170000000708,48.867121,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Guet-Apens</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>3.0</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: 3<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.374997300000018,48.8671582,0.0</coordinates>
        </Point>
    </Placemark>
    <Placemark>
        <styleUrl>#icon-959-FFFF26</styleUrl>
        <name>Le Cri du Glaçon</name>
        <ExtendedData>
            <Data name='Prix'>
                <value>5.0</value>
            </Data>
            <Data name='Happy Hour'>
                <value>3.5</value>
            </Data>
            <Data name='Infos'>
                <value></value>
            </Data>
            <Data name='Bière'>
                <value></value>
            </Data>
            <Data name='Adresse'>
                <value></value>
            </Data>
        </ExtendedData>
        <description><![CDATA[Prix: 5<br>Happy Hour: 3,5<br>Infos: <br>Bière: <br>Adresse: ]]></description>
        <Point>
            <coordinates>2.374832722082033,48.86696322876859,0.0</coordinates>
        </Point>
    </Placemark>
    <Style id='icon-959-464600'>
        <IconStyle>
            <color>ff004646</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
    <Style id='icon-959-737300'>
        <IconStyle>
            <color>ff007373</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
    <Style id='icon-959-9F9F00'>
        <IconStyle>
            <color>ff009F9F</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
    <Style id='icon-959-CCCC00'>
        <IconStyle>
            <color>ff00CCCC</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
    <Style id='icon-959-F9F900'>
        <IconStyle>
            <color>ff00F9F9</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
    <Style id='icon-959-FFFF26'>
        <IconStyle>
            <color>ff26FFFF</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
    <Style id='icon-959-FFFF53'>
        <IconStyle>
            <color>ff53FFFF</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
    <Style id='icon-959-FFFF80'>
        <IconStyle>
            <color>ff80FFFF</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
    <Style id='icon-959-FFFFFF'>
        <IconStyle>
            <color>ffFFFFFF</color>
            <scale>1.1</scale>
            <Icon>
                <href>http://www.gstatic.com/mapspro/images/stock/959-wht-circle-blank.png</href>
            </Icon>
        </IconStyle>
    </Style>
</Document>";
$xml = simplexml_load_string($bigJson);

    $items = $xml->Placemark;
    $beer = $manager->getRepository('BeerToBeerCoreBundle:Beer')->findBy(array("name" => "Blonde Classique"));
    $beer = $beer[0];

    foreach($xml->Placemark as $id => $item)
    {
      $coords = explode(",", $item->Point->coordinates);
      $lat = $coords[1];
      $lng = $coords[0];
      $business = $manager->getRepository('BeerToBeerCoreBundle:Business')->getCloseBusiness($lat, $lng);
      if ($business["distance"] != null) {
        echo $business["distance"]*1000, '
';
        $liste_items["b".$id] = $business[0];
        
      }
      else {
        $liste_items["b".$id] = new Business();
        $liste_items["b".$id]->setLatitude($lat);
        $liste_items["b".$id]->setLongitude($lng);
        $liste_items["b".$id]->setNom($item->name);
        $liste_items["b".$id]->setAdresse("5 rue Alexis Martin");
        $liste_items["b".$id]->setVille("Paris");
        $liste_items["b".$id]->setCodePostal("75009");
        $liste_items["b".$id]->setType(Business::TYPE_BAR);
        $manager->persist($liste_items["b".$id]);
      }
      $prixNormal = 0;
      $prixHappyHour = 0;
      foreach ($item->ExtendedData->Data as $data) {
        if ($data["name"] == "Prix")
          $prixNormal = $data->value;
        if ($data["name"] == "Happy Hour")
          $prixHappyHour = $data->value;
      }
      if ($prixNormal != 0 || $prixHappyHour != 0) {
        if ($prixNormal == 0)
          $prixNormal = $prixHappyHour;
        if ($prixHappyHour == 0)
          $prixHappyHour = $prixNormal;

        $liste_items[$id] = new BeerBusiness();
        $liste_items[$id]->setBeer($beer);
        $liste_items[$id]->setBusiness($liste_items["b".$id]);
        $liste_items[$id]->setPrixNormal($prixNormal);
        $liste_items[$id]->setPrixHappyHour($prixHappyHour);
        $liste_items[$id]->setVolume(50);
        $liste_items[$id]->setPression(true);
        $manager->persist($liste_items[$id]);
      }
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
  public function getOrder()
  {
      return 5;
  }
}