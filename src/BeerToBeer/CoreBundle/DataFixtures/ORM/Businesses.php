<?php

namespace BeerToBeer\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BeerToBeer\CoreBundle\Entity\Business;

class Businesses implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $bigJson = '{
  "version": 0.6,
  "generator": "Overpass API",
  "osm3s": {
    "timestamp_osm_base": "2014-09-08T16:56:02Z",
    "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL."
  },
  "elements": [

{
  "type": "node",
  "id": 247439149,
  "lat": 48.8688161,
  "lon": 2.3275703,
  "tags": {
    "amenity": "bar",
    "name": "Bar Hemingway"
  }
},
{
  "type": "node",
  "id": 247455913,
  "lat": 48.8663165,
  "lon": 2.3370822,
  "tags": {
    "amenity": "bar",
    "name": "Juvénile\'s"
  }
},
{
  "type": "node",
  "id": 247467737,
  "lat": 48.8663449,
  "lon": 2.3382902,
  "tags": {
    "amenity": "bar",
    "name": "Willi\'s Wine Bar"
  }
},
{
  "type": "node",
  "id": 251001752,
  "lat": 48.8643869,
  "lon": 2.3503038,
  "tags": {
    "amenity": "pub",
    "name": "The Frog & Rosbif"
  }
},
{
  "type": "node",
  "id": 251010491,
  "lat": 48.8695611,
  "lon": 2.3317879,
  "tags": {
    "amenity": "bar",
    "name": "Footsie"
  }
},
{
  "type": "node",
  "id": 251023849,
  "lat": 48.8691942,
  "lon": 2.3321035,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75002",
    "addr:street": "Rue Daunou",
    "amenity": "bar",
    "name": "Harry\'s Bar",
    "source": "www.harrysbar.fr",
    "website": "www.harrysbar.fr"
  }
},
{
  "type": "node",
  "id": 251125922,
  "lat": 48.8553135,
  "lon": 2.3591057,
  "tags": {
    "amenity": "pub",
    "name": "The Auld Alliance Scottish Pub"
  }
},
{
  "type": "node",
  "id": 251125927,
  "lat": 48.8536147,
  "lon": 2.3682805,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "7",
    "addr:postcode": "75012",
    "addr:street": "place de la Bastille",
    "amenity": "cafe",
    "brewery": "Heineken;Edelweiss;Affligem",
    "happy_hours": "Mo-Su 18:00-21:00",
    "internet_access": "yes",
    "name": "Café des Phares",
    "opening_hours": "Mo-Su 07:00-02:00",
    "phone": "+33 (0) 1 42 72 04 70",
    "website": "http://www.cafe-philo-des-phares.info/",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 251126259,
  "lat": 48.8573914,
  "lon": 2.3563278,
  "tags": {
    "amenity": "pub",
    "name": "Le Lizard Lounge"
  }
},
{
  "type": "node",
  "id": 251474112,
  "lat": 48.8526568,
  "lon": 2.3466795,
  "tags": {
    "amenity": "pub",
    "name": "Polly Magoo"
  }
},
{
  "type": "node",
  "id": 251474114,
  "lat": 48.8429882,
  "lon": 2.3495477,
  "tags": {
    "amenity": "pub",
    "name": "The Fifth Bar"
  }
},
{
  "type": "node",
  "id": 251474115,
  "lat": 48.8423393,
  "lon": 2.3498473,
  "tags": {
    "amenity": "pub",
    "brewery": "tripel_karmeliet",
    "name": "Le Vieux Chêne",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 251474117,
  "lat": 48.8474495,
  "lon": 2.3471573,
  "tags": {
    "amenity": "pub",
    "name": "La Tireuse"
  }
},
{
  "type": "node",
  "id": 251699774,
  "lat": 48.8510774,
  "lon": 2.3385693,
  "tags": {
    "amenity": "bar",
    "name": "10 Bar International"
  }
},
{
  "type": "node",
  "id": 251758249,
  "lat": 48.8680799,
  "lon": 2.3215688,
  "tags": {
    "amenity": "bar",
    "bar": "cocktail",
    "name": "Buddha Bar"
  }
},
{
  "type": "node",
  "id": 252590112,
  "lat": 48.8631985,
  "lon": 2.3688861,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Oberkampf",
    "amenity": "bar",
    "name": "Le Kitch",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 252595467,
  "lat": 48.8537435,
  "lon": 2.3699681,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "14",
    "addr:postcode": "75012",
    "addr:street": "place de la Bastille",
    "amenity": "restaurant",
    "brewery": "Heineken;Desperados;Edelweiss;Affligem;",
    "cuisine": "mexican",
    "happy_hours": "Mo-Su 17:00-20:00",
    "internet_access": "wlan",
    "name": "Indiana",
    "opening_hours": "Mo-We 08:30-00:00;Th-Su 08:30-02:00",
    "phone": "+33 (0) 1 44 75 79 80",
    "website": "http://www.indianacafe.fr/",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 252604389,
  "lat": 48.8656637,
  "lon": 2.3778893,
  "tags": {
    "amenity": "bar",
    "cuisine": "french",
    "name": "Chez Justine",
    "opening_hours": "Mo-Su 8:00-2:00",
    "phone": "01 43 57 44 03",
    "website": "http://www.chezjustine.fr/"
  }
},
{
  "type": "node",
  "id": 252609211,
  "lat": 48.8659834,
  "lon": 2.3791601,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "114",
    "addr:postcode": "75011",
    "addr:street": "Rue Oberkampf",
    "amenity": "pub",
    "email": "audrey@le-114.fr",
    "name": "Le 114",
    "opening_hours": "We-Sa 20:00-04:30",
    "website": "http://www.le-114.fr/"
  }
},
{
  "type": "node",
  "id": 252610163,
  "lat": 48.8527123,
  "lon": 2.3742095,
  "tags": {
    "amenity": "pub",
    "name": "Entre Potes"
  }
},
{
  "type": "node",
  "id": 252958952,
  "lat": 48.8646895,
  "lon": 2.2880988,
  "tags": {
    "amenity": "restaurant",
    "microbrewery": "yes",
    "name": "Frog XVI"
  }
},
{
  "type": "node",
  "id": 252961401,
  "lat": 48.8802602,
  "lon": 2.2852551,
  "tags": {
    "amenity": "pub",
    "email": "jamesjoyceparis@hotmail.com",
    "name": "James Joyce",
    "operator": "Kitty O\'Shea\'s",
    "phone": "+33 (1) 44097032",
    "smoking": "no",
    "website": "http://www.kittyosheas.com/james_joyce_paris.asp",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 254005128,
  "lat": 48.8615333,
  "lon": 2.3574473,
  "tags": {
    "amenity": "pub",
    "name": "The Quiet Man"
  }
},
{
  "type": "node",
  "id": 254185343,
  "lat": 48.8470403,
  "lon": 2.3693549,
  "tags": {
    "amenity": "cafe",
    "brewery": "Grimbergen;Paulaner",
    "name": "Le café populaire",
    "opening_hours": "Mo-Sa 07:00-23:00"
  }
},
{
  "type": "node",
  "id": 257088173,
  "lat": 48.8514780,
  "lon": 2.3379065,
  "tags": {
    "amenity": "pub",
    "name": "Fubar"
  }
},
{
  "type": "node",
  "id": 260016917,
  "lat": 48.8425186,
  "lon": 2.3236239,
  "tags": {
    "amenity": "pub",
    "name": "The Financier",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 268058006,
  "lat": 48.8460429,
  "lon": 2.3238386,
  "tags": {
    "amenity": "pub",
    "name": "Forum Café"
  }
},
{
  "type": "node",
  "id": 274245832,
  "lat": 48.8672350,
  "lon": 2.3692879,
  "tags": {
    "amenity": "pub",
    "name": "Ô Chateau, Paris Wine Tasting"
  }
},
{
  "type": "node",
  "id": 274247409,
  "lat": 48.8826925,
  "lon": 2.3828693,
  "tags": {
    "amenity": "bar",
    "name": "Kaskad\' Café"
  }
},
{
  "type": "node",
  "id": 274248904,
  "lat": 48.8662404,
  "lon": 2.3855356,
  "tags": {
    "amenity": "bar",
    "name": "Lou Pascalou"
  }
},
{
  "type": "node",
  "id": 282468472,
  "lat": 48.8652332,
  "lon": 2.3505855,
  "tags": {
    "amenity": "bar",
    "name": "La Cordonnerie"
  }
},
{
  "type": "node",
  "id": 282490354,
  "lat": 48.8761301,
  "lon": 2.3377037,
  "tags": {
    "amenity": "pub",
    "name": "Le Syphax",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 283348172,
  "lat": 48.8693629,
  "lon": 2.3549762,
  "tags": {
    "addr:country": "FR",
    "addr:housename": "Hippopotamus",
    "addr:housenumber": "8",
    "addr:postcode": "75010",
    "addr:street": "Boulevard Saint-Denis",
    "amenity": "restaurant",
    "cuisine": "grill",
    "microbrewery": "yes",
    "name": "Hippopotamus",
    "opening_hours": "Su-Th 11:45-00:30;Fr-Sa 11:45-01:00",
    "operator": "Hippopotamus",
    "phone": "+33153388028",
    "website": "http://www.hippopotamus.fr/resto/paris-10e-saint-martin-12534470019128.html"
  }
},
{
  "type": "node",
  "id": 293986548,
  "lat": 48.8632411,
  "lon": 2.3861008,
  "tags": {
    "amenity": "pub",
    "name": "Le Bistro Voltaire"
  }
},
{
  "type": "node",
  "id": 293986566,
  "lat": 48.8626607,
  "lon": 2.3872306,
  "tags": {
    "amenity": "pub",
    "name": "Au Rond Point"
  }
},
{
  "type": "node",
  "id": 294038638,
  "lat": 48.8779867,
  "lon": 2.3739646,
  "tags": {
    "amenity": "bar",
    "name": "Le Navigateur"
  }
},
{
  "type": "node",
  "id": 294266518,
  "lat": 48.8838984,
  "lon": 2.3707556,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "10",
    "addr:postcode": "75019",
    "addr:street": "Place de la Bataille de Stalingrad",
    "amenity": "bar",
    "layer": "0",
    "name": "25° Est"
  }
},
{
  "type": "node",
  "id": 302245461,
  "lat": 48.8884003,
  "lon": 2.3790168,
  "tags": {
    "amenity": "pub",
    "created_by": "Potlatch 0.10c",
    "name": "Belushi\'s"
  }
},
{
  "type": "node",
  "id": 304964734,
  "lat": 48.8456068,
  "lon": 2.3428904,
  "tags": {
    "amenity": "pub",
    "name": "La Fonda"
  }
},
{
  "type": "node",
  "id": 305903405,
  "lat": 48.8851560,
  "lon": 2.3252063,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "brewery:note": "Grolsch",
    "created_by": "JOSM",
    "internet_access": "no",
    "name": "Lush"
  }
},
{
  "type": "node",
  "id": 305903408,
  "lat": 48.8925878,
  "lon": 2.3271309,
  "tags": {
    "amenity": "pub",
    "created_by": "JOSM",
    "name": "Le Bar Belge"
  }
},
{
  "type": "node",
  "id": 305903409,
  "lat": 48.8847610,
  "lon": 2.3245933,
  "tags": {
    "amenity": "bar",
    "bar": "wine_bar",
    "name": "Les Caves Populaires"
  }
},
{
  "type": "node",
  "id": 308015251,
  "lat": 48.8717809,
  "lon": 2.3937884,
  "tags": {
    "amenity": "pub",
    "name": "Les Trois Arts"
  }
},
{
  "type": "node",
  "id": 308204330,
  "lat": 48.8595367,
  "lon": 2.4030888,
  "tags": {
    "amenity": "bar",
    "name": "Le Gambetta"
  }
},
{
  "type": "node",
  "id": 310363590,
  "lat": 48.8456039,
  "lon": 2.3547969,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe",
    "name": "Epsilon"
  }
},
{
  "type": "node",
  "id": 310363627,
  "lat": 48.8453724,
  "lon": 2.3548312,
  "tags": {
    "amenity": "pub",
    "name": "L\'Inévitable"
  }
},
{
  "type": "node",
  "id": 319695790,
  "lat": 48.8324164,
  "lon": 2.3712490,
  "tags": {
    "amenity": "pub",
    "name": "Shannon River"
  }
},
{
  "type": "node",
  "id": 322807427,
  "lat": 48.8484568,
  "lon": 2.3995601,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "1",
    "addr:postcode": "75020",
    "addr:street": "Cours de Vincennes",
    "amenity": "restaurant",
    "brewery": "Leffe;1664;Hoegaarden",
    "name": "Le Terminus Nation",
    "opening_hours": "Mo-Sa 07:00-21:00",
    "smoking": "outside",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 322807635,
  "lat": 48.8478160,
  "lon": 2.3975417,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2",
    "addr:postcode": "75012",
    "addr:street": "Avenue du Trône",
    "amenity": "restaurant",
    "brewery": "Kronenbourg;Carlsberg;1664;Grimbergen;Grimbergen_blanche;Leffe;Desperados;Wel_Scotch",
    "name": "Le Dalou",
    "opening_hours": "Mo-Sa 00:00-03:00,05:00-24:00; Su 00:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 327266211,
  "lat": 48.8538078,
  "lon": 2.3277103,
  "tags": {
    "amenity": "cafe",
    "brewery": "kronenbourg;grimbergen",
    "internet_access": "wlan",
    "name": "Le Basile"
  }
},
{
  "type": "node",
  "id": 329135152,
  "lat": 48.8522503,
  "lon": 2.3344195,
  "tags": {
    "amenity": "pub",
    "cuisine": "irish",
    "name": "Little Temple Bar",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 329976648,
  "lat": 48.8539901,
  "lon": 2.3267207,
  "tags": {
    "amenity": "pub",
    "name": "L\'Abbaye"
  }
},
{
  "type": "node",
  "id": 415760035,
  "lat": 48.8620035,
  "lon": 2.3484170,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 416560241,
  "lat": 48.8671899,
  "lon": 2.3758377,
  "tags": {
    "amenity": "cafe",
    "brewery": "affligem",
    "name": "Marquise Café"
  }
},
{
  "type": "node",
  "id": 418073931,
  "lat": 48.8661736,
  "lon": 2.3841890,
  "tags": {
    "amenity": "pub",
    "name": "Le Montagnard"
  }
},
{
  "type": "node",
  "id": 418073939,
  "lat": 48.8666938,
  "lon": 2.3828675,
  "tags": {
    "amenity": "pub",
    "name": "Le Biarritz"
  }
},
{
  "type": "node",
  "id": 418074932,
  "lat": 48.8667481,
  "lon": 2.3822535,
  "tags": {
    "amenity": "pub",
    "name": "Café de Paris"
  }
},
{
  "type": "node",
  "id": 418079770,
  "lat": 48.8656937,
  "lon": 2.3771252,
  "tags": {
    "amenity": "pub",
    "name": "Quartier Général"
  }
},
{
  "type": "node",
  "id": 418080841,
  "lat": 48.8659421,
  "lon": 2.3769020,
  "tags": {
    "amenity": "pub",
    "name": "Blue Billard"
  }
},
{
  "type": "node",
  "id": 418080842,
  "lat": 48.8661373,
  "lon": 2.3770649,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 418140401,
  "lat": 48.8676415,
  "lon": 2.3754429,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 418142037,
  "lat": 48.8687538,
  "lon": 2.3799490,
  "tags": {
    "amenity": "pub",
    "name": "L\'Assassin"
  }
},
{
  "type": "node",
  "id": 418142760,
  "lat": 48.8680763,
  "lon": 2.3782066,
  "tags": {
    "amenity": "pub",
    "name": "Onze bar"
  }
},
{
  "type": "node",
  "id": 420117472,
  "lat": 48.8770310,
  "lon": 2.3879568,
  "tags": {
    "amenity": "pub",
    "brewery": "leffe",
    "name": "L\'Escargot"
  }
},
{
  "type": "node",
  "id": 428031330,
  "lat": 48.8455640,
  "lon": 2.3806988,
  "tags": {
    "amenity": "cafe",
    "brewery": "Pelforth",
    "name": "Le Calumet"
  }
},
{
  "type": "node",
  "id": 428039738,
  "lat": 48.8486594,
  "lon": 2.3777375,
  "tags": {
    "addr:postcode": "75012",
    "amenity": "cafe",
    "brewery": "Fischer;Amstel",
    "name": "La Grille",
    "opening_hours": "Mo-Sa 18:00-22:00"
  }
},
{
  "type": "node",
  "id": 428040493,
  "lat": 48.8489783,
  "lon": 2.3772212,
  "tags": {
    "amenity": "cafe",
    "brewery": "Amstel;1664;Leffe",
    "name": "Le Penty",
    "opening_hours": "Mo-Sa 07:00-01:00"
  }
},
{
  "type": "node",
  "id": 428040634,
  "lat": 48.8494401,
  "lon": 2.3773810,
  "tags": {
    "amenity": "pub",
    "name": "Le Baron Rouge"
  }
},
{
  "type": "node",
  "id": 428044584,
  "lat": 48.8497953,
  "lon": 2.3742831,
  "tags": {
    "amenity": "cafe",
    "brewery": "Grimbergen;Warsteiner;König_Ludwig_Weisser;Elephant",
    "cuisine": "french",
    "happy_hours": "Mo-Sa 17:00-21:00",
    "name": "Bistrot du coin",
    "opening_hours": "Mo-Sa 07:00-02:00"
  }
},
{
  "type": "node",
  "id": 428044663,
  "lat": 48.8494366,
  "lon": 2.3743781,
  "tags": {
    "amenity": "pub",
    "brewery": "Guinness",
    "happy_hours": "Mo-Sa 17:00-21:00",
    "name": "Le bar à mine",
    "note": "baby foot, ping pong",
    "old_name": "La crosse"
  }
},
{
  "type": "node",
  "id": 428044937,
  "lat": 48.8484434,
  "lon": 2.3726021,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Leffe;Grimbergen;1664;Kronenbourg",
    "happy_hours": "Mo-Sa 17:00-21:00",
    "name": "Les artisans",
    "opening_hours": "Mo-Sa 06:00-23:00"
  }
},
{
  "type": "node",
  "id": 428045227,
  "lat": 48.8477004,
  "lon": 2.3736634,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Kronembourg;Carlserg;Grimbergen;Blanche",
    "cuisine": "french",
    "happy_hours": "Mo-Su 17:00-21:00",
    "name": "Les Garnements",
    "opening_hours": "Mo-Su 08:00-24:00",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 428061630,
  "lat": 48.8497380,
  "lon": 2.3851348,
  "tags": {
    "amenity": "bar",
    "name": "Le virginie",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 428064691,
  "lat": 48.8516730,
  "lon": 2.3781826,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 428064695,
  "lat": 48.8516520,
  "lon": 2.3783332,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 428064988,
  "lat": 48.8465865,
  "lon": 2.3816584,
  "tags": {
    "amenity": "cafe",
    "brewery": "Britt;1664;Grimbergen",
    "cuisine": "french",
    "happy_hours": "Mo-Sa 17:00-20:30",
    "internet_access": "wlan",
    "name": "Le Microsillon",
    "opening_hours": "Mo-Sa 10:00-02:00"
  }
},
{
  "type": "node",
  "id": 428065105,
  "lat": 48.8466308,
  "lon": 2.3820511,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;carlsberg;grimbergen",
    "name": "Le Bistrologue",
    "opening_hours": "Mo-Sa 08:00-02:00"
  }
},
{
  "type": "node",
  "id": 428132767,
  "lat": 48.8471871,
  "lon": 2.3870859,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "118",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "cafe",
    "brewery": "Pelforth;Affligem;Edelweiss",
    "happy_hours": "Mo-Fr 17:00-20:00;Sa 17:00-24:00",
    "name": "Le Globe Diderot",
    "opening_hours": "Mo-Fr 00:00-01:30,07:00-24:00;Sa-Su 00:00-01:30,09:00-24:00",
    "smoking": "outside",
    "website": "www.leglobediderot.fr"
  }
},
{
  "type": "node",
  "id": 428164786,
  "lat": 48.8492104,
  "lon": 2.3895170,
  "tags": {
    "amenity": "bar",
    "brewery": "guinness",
    "name": "Patrick\'s Le Ballon Vert",
    "old_name": "Les Milles Lacs"
  }
},
{
  "type": "node",
  "id": 428165606,
  "lat": 48.8478628,
  "lon": 2.3928249,
  "tags": {
    "amenity": "cafe",
    "brewery": "Stella;Leffe;Hoegaarden",
    "name": "La Mère Pouchet",
    "opening_hours": "Mo 00:00-01:00,07:00-24:00; Tu-Su 00:00-02:00,07:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 432147330,
  "lat": 48.8644935,
  "lon": 2.3509011,
  "tags": {
    "amenity": "pub",
    "name": "Les Cariatides"
  }
},
{
  "type": "node",
  "id": 441162564,
  "lat": 48.8239093,
  "lon": 2.3042851,
  "tags": {
    "amenity": "pub",
    "name": "Le Timbre Poste"
  }
},
{
  "type": "node",
  "id": 442349636,
  "lat": 48.8692038,
  "lon": 2.2270778,
  "tags": {
    "amenity": "pub",
    "name": "Le Pub"
  }
},
{
  "type": "node",
  "id": 442505759,
  "lat": 48.8683391,
  "lon": 2.3714311,
  "tags": {
    "amenity": "bar",
    "name": "La Caravane",
    "opening_hours": "Mo-Su 11:00-2:00",
    "phone": "01 49 23 01 86",
    "website": "http://www.lacaravane.eu/"
  }
},
{
  "type": "node",
  "id": 442545880,
  "lat": 48.8723037,
  "lon": 2.3650913,
  "tags": {
    "amenity": "pub",
    "name": "Le Jemmapes"
  }
},
{
  "type": "node",
  "id": 442546873,
  "lat": 48.8783172,
  "lon": 2.4150868,
  "tags": {
    "amenity": "bar",
    "name": "Le Triton"
  }
},
{
  "type": "node",
  "id": 442547954,
  "lat": 48.8683233,
  "lon": 2.3660938,
  "tags": {
    "addr:housenumber": "18",
    "addr:street": "Rue du Faubourg du Temple",
    "amenity": "bar",
    "name": "La favela Chic",
    "opening_hours": "Tu-We 19:30-2:00;Th 19:30-3:00;Fr-Sa 19:30-4:00",
    "phone": "01 40 21 38 14",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://favelachic.com/"
  }
},
{
  "type": "node",
  "id": 446779465,
  "lat": 48.8753656,
  "lon": 2.3823741,
  "tags": {
    "amenity": "pub",
    "name": "Les Buttes Chaumont",
    "note": "café - restaurant"
  }
},
{
  "type": "node",
  "id": 446819198,
  "lat": 48.8783181,
  "lon": 2.3578049,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Delyss",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 446887015,
  "lat": 48.8711351,
  "lon": 2.2836966,
  "tags": {
    "amenity": "pub",
    "name": "The Honest Lawyer"
  }
},
{
  "type": "node",
  "id": 449554298,
  "lat": 48.8778514,
  "lon": 2.3157284,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "name": "Brady\'s Irish Pub"
  }
},
{
  "type": "node",
  "id": 452420245,
  "lat": 48.8446159,
  "lon": 2.4403122,
  "tags": {
    "amenity": "pub",
    "brewery": "Kwak",
    "name": "Tête à l\'envers"
  }
},
{
  "type": "node",
  "id": 470330229,
  "lat": 48.8346469,
  "lon": 2.3049016,
  "tags": {
    "amenity": "pub",
    "name": "Le Café de la Poste"
  }
},
{
  "type": "node",
  "id": 471575730,
  "lat": 48.8472582,
  "lon": 2.4713464,
  "tags": {
    "amenity": "pub",
    "name": "Le Village"
  }
},
{
  "type": "node",
  "id": 473827211,
  "lat": 48.8393185,
  "lon": 2.3806604,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 486096218,
  "lat": 48.8474970,
  "lon": 2.3970587,
  "tags": {
    "amenity": "pub",
    "brewery": "stella;leffe;leffe_ruby;kilkenny;hoegaarden;guinness",
    "happy_hours": "Mo-Su 17:00-20:00",
    "name": "Irish Corner",
    "opening_hours": "Mo-Su 00:00-02:00,07:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 493163514,
  "lat": 48.8510126,
  "lon": 2.4018663,
  "tags": {
    "amenity": "bar",
    "name": "Les pères populaires"
  }
},
{
  "type": "node",
  "id": 493761019,
  "lat": 48.8517859,
  "lon": 2.4015820,
  "tags": {
    "amenity": "bar",
    "name": "Le Jean Bart"
  }
},
{
  "type": "node",
  "id": 493761037,
  "lat": 48.8477533,
  "lon": 2.3981316,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "8",
    "addr:postcode": "75012",
    "addr:street": "Avenue du Trône",
    "amenity": "restaurant",
    "brewery": "Leffe;Hoegarden;Kanterbrau;1664;Maredsous;Bière_de_saison;Grimbergen_fruits_rouges;Carlsberg",
    "name": "Marco Polo",
    "opening_hours": "Mo-Su 00:00-02:00,07:30-24:00",
    "smoking": "outside",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 493761038,
  "lat": 48.8485668,
  "lon": 2.3983079,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "9",
    "addr:postcode": "75011",
    "addr:street": "Avenue du Trône",
    "amenity": "restaurant",
    "brewery": "1664;Grimbergen_blanche;Grimbergen;Carlsberg",
    "name": "Chez Prosper",
    "opening_hours": "Mo-Su 00:00-01:30,07:30-24:00",
    "smoking": "outside",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 494663867,
  "lat": 48.8338366,
  "lon": 2.3181857,
  "tags": {
    "amenity": "bar",
    "name": "Losserand Café"
  }
},
{
  "type": "node",
  "id": 495634237,
  "lat": 48.8363089,
  "lon": 2.3225218,
  "tags": {
    "amenity": "bar",
    "name": "Artist Pub"
  }
},
{
  "type": "node",
  "id": 498913739,
  "lat": 48.8867306,
  "lon": 2.3464815,
  "tags": {
    "amenity": "bar",
    "name": "Blue Note"
  }
},
{
  "type": "node",
  "id": 508588085,
  "lat": 48.8470342,
  "lon": 2.3868537,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "24",
    "addr:postcode": "75012",
    "addr:street": "Rue de Reuilly",
    "amenity": "restaurant",
    "brewery": "Grimbergen;Carlsberg;Kronenbourg;1664;1664_blanche",
    "happy_hours": "Mo-Su 17:00-20:00",
    "name": "Les Argentiers",
    "opening_hours": "Mo-Su 00:00-01:00,06:30-24:00",
    "smoking": "outside",
    "website": "www.lesargentiers.com"
  }
},
{
  "type": "node",
  "id": 508588181,
  "lat": 48.8502082,
  "lon": 2.3780865,
  "tags": {
    "amenity": "pub",
    "brewery": "Cuvée des Trolls;Lupulus;chouffe;chimay;Barbar",
    "internet_access": "no",
    "name": "Le Troll",
    "note": "Changing beer on the tap, 160 bottle beers",
    "opening_hours": "Mo-Su 17:00-02:00",
    "speciality": "Bières artisanales"
  }
},
{
  "type": "node",
  "id": 519049977,
  "lat": 48.8345868,
  "lon": 2.4005135,
  "tags": {
    "amenity": "bar",
    "name": "Le bistrot de Julie"
  }
},
{
  "type": "node",
  "id": 519049990,
  "lat": 48.8344550,
  "lon": 2.4007736,
  "tags": {
    "amenity": "bar",
    "name": "Au diplomate"
  }
},
{
  "type": "node",
  "id": 530272890,
  "lat": 48.8493959,
  "lon": 2.3750250,
  "tags": {
    "amenity": "bar",
    "name": "Chez Habibi",
    "opening_hours": "Mo-Su 17:00-02:00"
  }
},
{
  "type": "node",
  "id": 530272904,
  "lat": 48.8459184,
  "lon": 2.3726478,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2 bis",
    "addr:postcode": "75012",
    "addr:street": "Rue de Lyon",
    "amenity": "restaurant",
    "brewery": "1664;Grimbergen;Kronenbourg;Grimbergen_blanche",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "L\'Européen",
    "opening_hours": "Mo-Su 07:30-01:00",
    "phone": "+33 (0) 143439970",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 530272907,
  "lat": 48.8491474,
  "lon": 2.3746104,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Fischer",
    "cuisine": "pizza",
    "internet_access": "wlan",
    "name": "Pizzeria Venezia"
  }
},
{
  "type": "node",
  "id": 530272911,
  "lat": 48.8464256,
  "lon": 2.3723704,
  "tags": {
    "amenity": "bar",
    "name": "Flute Gana"
  }
},
{
  "type": "node",
  "id": 530272912,
  "lat": 48.8460157,
  "lon": 2.3736299,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "23 bis",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "cafe",
    "brewery": "heineken;pelforth;affligem;edelweiss_blanche;record;",
    "cuisine": "french",
    "internet_access": "no",
    "name": "Les deux Savoies",
    "opening_hours": "Mo-Su 05:45-02:00",
    "phone": "+33 (0) 1 43 43 29 59",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 530275195,
  "lat": 48.8475609,
  "lon": 2.3752480,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "43",
    "addr:postcode": "75012",
    "addr:street": "Avenue Daumesnil",
    "amenity": "restaurant",
    "brewery": "1664;Carlsberg;Grimbergen_blanche;",
    "cuisine": "french",
    "email": "leviaduc@orange.fr",
    "fax": "+33 1 44747071",
    "happy_hours": "Mo-Fr 17:00-20:00",
    "internet_access": "wlan",
    "name": "Le Viaduc café",
    "opening_hours": "Mo-Su 09:00-02:00",
    "phone": "+33 1 44747070",
    "website": "http://www.leviaduc-cafe.com",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 530751132,
  "lat": 48.8489233,
  "lon": 2.3748786,
  "tags": {
    "amenity": "pub",
    "name": "Le P\'tit Coin de l\'Opéra"
  }
},
{
  "type": "node",
  "id": 530751158,
  "lat": 48.8459741,
  "lon": 2.3725698,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2",
    "addr:postcode": "75012",
    "addr:street": "Rue de Lyon",
    "amenity": "restaurant",
    "brewery": "Leffe;Meteore;Chouffe;1664;",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Muratti\'s",
    "opening_hours": "Mo-Su 06:30-23:00",
    "phone": "0143071221",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 530751161,
  "lat": 48.8459507,
  "lon": 2.3730386,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "21 ter",
    "addr:postcode": "75012",
    "addr:street": "boulevard Diderot",
    "amenity": "restaurant",
    "brewery": "Carlsberg;Leffe;Leffe_blanche;Chouffe",
    "cuisine": "french",
    "internet_access": "yes",
    "name": "Aux cadrans",
    "opening_hours": "Mo-Su 06:00-02:00",
    "phone": "+33 (0) 143433763",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 530896463,
  "lat": 48.8483010,
  "lon": 2.3417712,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness;leffe",
    "name": "Mad Maker"
  }
},
{
  "type": "node",
  "id": 531493470,
  "lat": 48.8478209,
  "lon": 2.3770331,
  "tags": {
    "amenity": "cafe",
    "brewery": "beck\'s;stella;leffe",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Rossli",
    "opening_hours": "Tu-Fr 06:30-21:00"
  }
},
{
  "type": "node",
  "id": 531493625,
  "lat": 48.8497251,
  "lon": 2.3785877,
  "tags": {
    "amenity": "cafe",
    "brewery": "Stella;1664",
    "name": "Le Gevaudan",
    "opening_hours": "Mo-Sa 06:00-22:30"
  }
},
{
  "type": "node",
  "id": 532031656,
  "lat": 48.8459544,
  "lon": 2.3720668,
  "tags": {
    "amenity": "cafe",
    "brewery": "tripel_karmeliet;chouffe;chimay;triple_cauwe;brewdog;De Molen;Nogne;Mikkeller",
    "internet_access": "wlan",
    "name": "L\'Express de Lyon"
  }
},
{
  "type": "node",
  "id": 534660987,
  "lat": 48.8863208,
  "lon": 2.3451631,
  "tags": {
    "amenity": "bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 534660992,
  "lat": 48.8864916,
  "lon": 2.3449490,
  "tags": {
    "amenity": "bar",
    "name": "Botak",
    "source": "ground"
  }
},
{
  "type": "node",
  "id": 534904020,
  "lat": 48.8462033,
  "lon": 2.3752807,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "27",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "cafe",
    "brewery": "leffe;brugs;kronenbourg",
    "internet_access": "wlan",
    "name": "Station Café",
    "opening_hours": "Mo-Su 00:00-02:00,07:30-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 534904407,
  "lat": 48.8462167,
  "lon": 2.3753959,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "27bis",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "restaurant",
    "brewery": "Leffe",
    "cuisine": "french",
    "name": "Entre les Vignes",
    "opening_hours": "Mo-Sa 12:00-14:30,19:30-21:30",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 534909894,
  "lat": 48.8458632,
  "lon": 2.3752950,
  "tags": {
    "amenity": "pub",
    "internet_access": "wlan",
    "name": "Le Maximilien"
  }
},
{
  "type": "node",
  "id": 535873622,
  "lat": 48.8467932,
  "lon": 2.3690947,
  "tags": {
    "amenity": "pub",
    "name": "La Belle Époque"
  }
},
{
  "type": "node",
  "id": 535882122,
  "lat": 48.8463589,
  "lon": 2.3683266,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Kronenbourg",
    "name": "Le petit Rollin",
    "opening_hours": "Mo-Sa 10:00-20:00"
  }
},
{
  "type": "node",
  "id": 535935020,
  "lat": 48.8454329,
  "lon": 2.3684999,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Affligem;Kronenbourg",
    "cuisine": "french",
    "name": "Brasserie de l\'Aubrac",
    "opening_hours": "Mo-Sa 08:00-19:00"
  }
},
{
  "type": "node",
  "id": 535942816,
  "lat": 48.8457759,
  "lon": 2.3715126,
  "tags": {
    "amenity": "cafe",
    "brewery": "Grimbergen;Carlsberg;Kronenbourg",
    "cuisine": "french",
    "name": "Le Terminus",
    "opening_hours": "Mo-Sa 06:00-02:00"
  }
},
{
  "type": "node",
  "id": 535945333,
  "lat": 48.8458427,
  "lon": 2.3706835,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Affligem",
    "name": "Caviste",
    "old_name": "Le Verre à Vins",
    "opening_hours": "Mo-Sa 08:00-21:00"
  }
},
{
  "type": "node",
  "id": 536574152,
  "lat": 48.8308958,
  "lon": 2.3768610,
  "tags": {
    "amenity": "pub",
    "happy_hours": "Mo-Fr 17:30-20:00",
    "microbrewery": "yes",
    "name": "The Frog & British Library",
    "terrace": "yes",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 539397543,
  "lat": 48.8500437,
  "lon": 2.3697078,
  "tags": {
    "amenity": "pub",
    "name": "L\'OPA - Offre Publique d\'Ambiance",
    "opening_hours": "We-Th 19:30-2:00; Fr-Sa 19:30-6:00",
    "phone": "0146281290"
  }
},
{
  "type": "node",
  "id": 568454764,
  "lat": 48.8919041,
  "lon": 2.3801340,
  "tags": {
    "amenity": "bar",
    "cuisine": "chinese",
    "name": "Chez Chen"
  }
},
{
  "type": "node",
  "id": 568457895,
  "lat": 48.8906427,
  "lon": 2.3820001,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 568458031,
  "lat": 48.8909556,
  "lon": 2.3819203,
  "tags": {
    "amenity": "bar",
    "name": "Le Bergerac"
  }
},
{
  "type": "node",
  "id": 568459562,
  "lat": 48.8895378,
  "lon": 2.3833861,
  "tags": {
    "amenity": "bar",
    "brewery": "Tripel_Karmeliet",
    "name": "Mama Kin"
  }
},
{
  "type": "node",
  "id": 582552434,
  "lat": 48.8585847,
  "lon": 2.3032822,
  "tags": {
    "amenity": "pub",
    "name": "Campanela",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 586568216,
  "lat": 48.8559133,
  "lon": 2.3670811,
  "tags": {
    "amenity": "pub",
    "name": "Café Martini"
  }
},
{
  "type": "node",
  "id": 594054765,
  "lat": 48.8363055,
  "lon": 2.3583190,
  "tags": {
    "addr:housenumber": "24",
    "addr:street": "Rue Duméril",
    "amenity": "bar",
    "name": "La Fût Gueuze"
  }
},
{
  "type": "node",
  "id": 596663985,
  "lat": 48.9061459,
  "lon": 2.2841585,
  "tags": {
    "amenity": "pub",
    "name": "Le cercle"
  }
},
{
  "type": "node",
  "id": 596664535,
  "lat": 48.9063027,
  "lon": 2.2837722,
  "tags": {
    "amenity": "pub",
    "name": "La rotonde"
  }
},
{
  "type": "node",
  "id": 599513255,
  "lat": 48.8584562,
  "lon": 2.3550423,
  "tags": {
    "amenity": "bar",
    "name": "Open Café"
  }
},
{
  "type": "node",
  "id": 599513533,
  "lat": 48.8582377,
  "lon": 2.3548214,
  "tags": {
    "amenity": "bar",
    "name": "Cox",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 599514189,
  "lat": 48.8576530,
  "lon": 2.3575640,
  "tags": {
    "amenity": "bar",
    "name": "Le Central"
  }
},
{
  "type": "node",
  "id": 599514799,
  "lat": 48.8589115,
  "lon": 2.3534861,
  "tags": {
    "amenity": "bar",
    "name": "Le Raidd"
  }
},
{
  "type": "node",
  "id": 599514897,
  "lat": 48.8598365,
  "lon": 2.3549664,
  "tags": {
    "amenity": "bar",
    "name": "Full Metal"
  }
},
{
  "type": "node",
  "id": 599514968,
  "lat": 48.8602520,
  "lon": 2.3534175,
  "tags": {
    "amenity": "bar",
    "name": "QG"
  }
},
{
  "type": "node",
  "id": 599515061,
  "lat": 48.8572292,
  "lon": 2.3551661,
  "tags": {
    "amenity": "bar",
    "name": "Quetzal Bar"
  }
},
{
  "type": "node",
  "id": 609212551,
  "lat": 48.8330467,
  "lon": 2.3860133,
  "tags": {
    "amenity": "pub",
    "name": "The Frog at Bercy Village",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 617541036,
  "lat": 48.8829327,
  "lon": 2.3181031,
  "tags": {
    "amenity": "pub",
    "name": "Trois pièces cuisine"
  }
},
{
  "type": "node",
  "id": 617928936,
  "lat": 48.8536005,
  "lon": 2.3428569,
  "tags": {
    "amenity": "bar",
    "name": "La Venus Noire"
  }
},
{
  "type": "node",
  "id": 619174040,
  "lat": 48.8542764,
  "lon": 2.3406582,
  "tags": {
    "amenity": "pub",
    "name": "Bob Cool"
  }
},
{
  "type": "node",
  "id": 623423905,
  "lat": 48.8332913,
  "lon": 2.3338394,
  "tags": {
    "amenity": "pub",
    "name": "Café Oz",
    "website": "http://www.cafe-oz.com/bar-paris_14-5.html",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 624613486,
  "lat": 48.8573507,
  "lon": 2.3496668,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "name": "The Green Linnet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 629665565,
  "lat": 48.8872790,
  "lon": 2.3272010,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "10",
    "addr:postcode": "75018",
    "addr:street": "Rue Hégésippe Moreau",
    "amenity": "bar",
    "name": "Karambole cafe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 635864714,
  "lat": 48.8799557,
  "lon": 2.3862343,
  "tags": {
    "amenity": "pub",
    "name": "Rosa Bonheur",
    "old_name": "Pavillon du Chemin de Fer, Pavillon Weber",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 653878922,
  "lat": 48.8856788,
  "lon": 2.3405124,
  "tags": {
    "amenity": "pub",
    "name": "Au rendez vous des Amis"
  }
},
{
  "type": "node",
  "id": 654051531,
  "lat": 48.8299388,
  "lon": 2.2844286,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "food": "yes",
    "name": "Le Versailles",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 654525111,
  "lat": 48.8747565,
  "lon": 2.2279251,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 667305411,
  "lat": 48.8503838,
  "lon": 2.3895178,
  "tags": {
    "amenity": "bar",
    "brewery": "Amstel;H-Beer;Leffe",
    "name": "Le Rota"
  }
},
{
  "type": "node",
  "id": 667326928,
  "lat": 48.8469782,
  "lon": 2.3850371,
  "tags": {
    "amenity": "cafe",
    "brewery": "Leffe;Pelfort;Heineken",
    "happy_hours": "Mo-Sa 16:00-24:00",
    "name": "Le Bistro de Paris",
    "opening_hours": "Mo-Sa 07:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 667526203,
  "lat": 48.8289093,
  "lon": 2.2823683,
  "tags": {
    "amenity": "pub",
    "name": "Le Fontenoy"
  }
},
{
  "type": "node",
  "id": 669014548,
  "lat": 48.8281591,
  "lon": 2.2815065,
  "tags": {
    "amenity": "pub",
    "name": "Le Michelet",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 669075496,
  "lat": 48.8383289,
  "lon": 2.2982482,
  "tags": {
    "amenity": "pub",
    "name": "Le Brazza",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 676028807,
  "lat": 48.8753301,
  "lon": 2.3889995,
  "tags": {
    "amenity": "bar",
    "name": "Le Nouvo Cosmos"
  }
},
{
  "type": "node",
  "id": 676116665,
  "lat": 48.8451034,
  "lon": 2.3492462,
  "tags": {
    "amenity": "pub",
    "brewery": "Maredsous;tripel_karmeliet;chouffe;leffe;chimay",
    "name": "Le Mayflower"
  }
},
{
  "type": "node",
  "id": 676116667,
  "lat": 48.8472832,
  "lon": 2.3477251,
  "tags": {
    "amenity": "pub",
    "name": "Le Piano Vache"
  }
},
{
  "type": "node",
  "id": 676116669,
  "lat": 48.8470809,
  "lon": 2.3486565,
  "tags": {
    "amenity": "pub",
    "name": "Le Melocoton"
  }
},
{
  "type": "node",
  "id": 676860118,
  "lat": 48.8582957,
  "lon": 2.3474796,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue Saint-Denis",
    "amenity": "pub",
    "brewery": "chimay",
    "name": "Au Trappiste",
    "phone": "+33 0142330850",
    "postcode": "75001"
  }
},
{
  "type": "node",
  "id": 676860175,
  "lat": 48.8592361,
  "lon": 2.3476099,
  "tags": {
    "amenity": "pub",
    "brewery": "leffe",
    "name": "Le Petit Châtelet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677805360,
  "lat": 48.8598608,
  "lon": 2.3468110,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue des Halles",
    "brewery": "brewdog",
    "name": "Bières Cultes",
    "shop": "beverages",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677967821,
  "lat": 48.8597051,
  "lon": 2.3483832,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "46",
    "addr:street": "Rue des Lombards",
    "amenity": "pub",
    "name": "Hide Out",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678898401,
  "lat": 48.8608773,
  "lon": 2.3423534,
  "tags": {
    "amenity": "bar",
    "name": "Chez la Vieile Adrienne",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679414266,
  "lat": 48.8617494,
  "lon": 2.3405457,
  "tags": {
    "amenity": "bar",
    "name": "L\'Oratoire",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681479170,
  "lat": 48.8646538,
  "lon": 2.3408552,
  "tags": {
    "amenity": "bar",
    "name": "Le Nustrale",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683603985,
  "lat": 48.8480970,
  "lon": 2.3469090,
  "tags": {
    "amenity": "pub",
    "name": "Le Pub Saint-Hillaire"
  }
},
{
  "type": "node",
  "id": 685604405,
  "lat": 48.8689710,
  "lon": 2.3345642,
  "tags": {
    "amenity": "bar",
    "name": "Le Gaillon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687096685,
  "lat": 48.8704581,
  "lon": 2.3373664,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue de Marivaux",
    "amenity": "bar",
    "gay": "yes",
    "name": "Alex\'s Bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.alex-s-bar.com"
  }
},
{
  "type": "node",
  "id": 687218426,
  "lat": 48.8115398,
  "lon": 2.3841166,
  "tags": {
    "amenity": "bar",
    "name": "Le metropolitain",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 687750878,
  "lat": 48.8692036,
  "lon": 2.3392113,
  "tags": {
    "amenity": "pub",
    "name": "O\'Malley",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687751001,
  "lat": 48.8693708,
  "lon": 2.3397160,
  "tags": {
    "amenity": "bar",
    "name": "Le Louis d\'Or",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 689212219,
  "lat": 48.8662163,
  "lon": 2.3412156,
  "tags": {
    "amenity": "bar",
    "name": "Au Vide Gousset",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 690288258,
  "lat": 48.8441325,
  "lon": 2.3546669,
  "tags": {
    "amenity": "pub",
    "name": "Les Cigognes"
  }
},
{
  "type": "node",
  "id": 691742572,
  "lat": 48.8625665,
  "lon": 2.3522237,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "178",
    "addr:street": "Rue Saint-Martin",
    "amenity": "bar",
    "gay:women": "yes",
    "name": "La Mutinerie",
    "website": "http://www.lamutinerie.eu/"
  }
},
{
  "type": "node",
  "id": 694399350,
  "lat": 48.8704075,
  "lon": 2.3483529,
  "tags": {
    "amenity": "bar",
    "name": "Lounge Paradise",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 697029196,
  "lat": 48.8523186,
  "lon": 2.3568760,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Louis",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 697571359,
  "lat": 48.8595402,
  "lon": 2.3527444,
  "tags": {
    "amenity": "cafe",
    "brewery": "yes",
    "name": "L\'Excelsior",
    "note:fr": "Café, Brasserie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 700256937,
  "lat": 48.8591081,
  "lon": 2.3500160,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Rue des Lombards",
    "amenity": "bar",
    "gay": "yes",
    "name": "Bear\'s Den",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.bearsden.fr/"
  }
},
{
  "type": "node",
  "id": 701748593,
  "lat": 48.8533299,
  "lon": 2.3424383,
  "tags": {
    "addr:housenumber": "28",
    "addr:street": "Rue Saint-André des Arts",
    "amenity": "pub",
    "brewery": "guinness",
    "name": "Concoran\'s Irish Pub",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702751011,
  "lat": 48.8577487,
  "lon": 2.3576815,
  "tags": {
    "addr:housenumber": "37",
    "addr:street": "Rue Vieille du Temple",
    "amenity": "bar",
    "name": "Yono\'s",
    "opening_hours": "Tu-Su 17:00-1:30",
    "phone": "01 42 74 31 65",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702916141,
  "lat": 48.8567788,
  "lon": 2.3558116,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue du Bourg Tibourg",
    "amenity": "bar",
    "name": "Feria Café",
    "phone": "01 42 72 43 99",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702973627,
  "lat": 48.8394830,
  "lon": 2.3006604,
  "tags": {
    "amenity": "pub",
    "name": "A Vaugirard"
  }
},
{
  "type": "node",
  "id": 703122472,
  "lat": 48.8433232,
  "lon": 2.3528098,
  "tags": {
    "amenity": "pub",
    "brewery": "tripel_karmeliet;guinness",
    "internet_access": "no",
    "name": "The Local",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703584608,
  "lat": 48.8451155,
  "lon": 2.4345033,
  "tags": {
    "amenity": "pub",
    "name": "Le Blason"
  }
},
{
  "type": "node",
  "id": 704819800,
  "lat": 48.8554369,
  "lon": 2.3580795,
  "tags": {
    "addr:housenumber": "64",
    "amenity": "bar",
    "name": "Bodega 64",
    "phone": "01 48 04 59 11",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 706391394,
  "lat": 48.8643855,
  "lon": 2.3550009,
  "tags": {
    "amenity": "bar",
    "name": "Le Lutèce",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707856537,
  "lat": 48.8723040,
  "lon": 2.3535120,
  "tags": {
    "amenity": "pub",
    "name": "Tribal Café"
  }
},
{
  "type": "node",
  "id": 708488355,
  "lat": 48.8530176,
  "lon": 2.3445259,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue de la Harpe",
    "amenity": "bar",
    "name": "Café Bar Les Affiches",
    "opening_hours": "Th-Sa 18:00-24:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 718851688,
  "lat": 48.8609593,
  "lon": 2.3669247,
  "tags": {
    "amenity": "bar",
    "name": "La Petite Chaise",
    "phone": "06 09 66 28 91"
  }
},
{
  "type": "node",
  "id": 724331717,
  "lat": 48.8871861,
  "lon": 2.3533770,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 724982895,
  "lat": 48.8643899,
  "lon": 2.3635207,
  "tags": {
    "addr:housenumber": "32",
    "addr:street": "Rue de Picardie",
    "amenity": "pub",
    "name": "Café Rouge",
    "opening_hours": "Mo-Su 09:00-02:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 726579049,
  "lat": 48.8470420,
  "lon": 2.3413880,
  "tags": {
    "addr:city": "Paris",
    "addr:street": "Rue Soufflot",
    "amenity": "pub",
    "atm": "no",
    "cuisine": "french",
    "food": "yes",
    "internet_access": "no",
    "name": "La Gueuze",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 729117604,
  "lat": 48.8813024,
  "lon": 2.3361254,
  "tags": {
    "amenity": "bar",
    "name": "Le Sans Souci",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 733174289,
  "lat": 48.8688813,
  "lon": 2.3296955,
  "tags": {
    "amenity": "pub",
    "name": "Kitty O\'Sheas"
  }
},
{
  "type": "node",
  "id": 735171923,
  "lat": 48.8816895,
  "lon": 2.3656251,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 741213238,
  "lat": 48.8392433,
  "lon": 2.3391037,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "88 Bis",
    "addr:postcode": "75014",
    "addr:street": "Boulevard de Port-Royal",
    "amenity": "pub",
    "brewery": "Kwak",
    "name": "Académie de la Bière",
    "phone": "+33 1 43 54 66 65",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre;mise à jour : 2010",
    "website": "http://www.academie-biere.com/"
  }
},
{
  "type": "node",
  "id": 745086544,
  "lat": 48.8520344,
  "lon": 2.3993968,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe;tripel_karmeliet;chimay",
    "name": "Bouillon belge"
  }
},
{
  "type": "node",
  "id": 747801176,
  "lat": 48.8642700,
  "lon": 2.3531320,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Bandry"
  }
},
{
  "type": "node",
  "id": 749696090,
  "lat": 48.8864637,
  "lon": 2.3771916,
  "tags": {
    "addr:housenumber": "68",
    "addr:street": "Quai de la Loire",
    "amenity": "bar",
    "name": "BarOurcq",
    "note:fr": "Fermé l\'hiver",
    "opening_hours": "We-Sa 15:00-22:00; Su 15:00-02:00"
  }
},
{
  "type": "node",
  "id": 770599549,
  "lat": 48.8638761,
  "lon": 2.4435312,
  "tags": {
    "amenity": "bar",
    "name": "Bergerac",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 770728185,
  "lat": 48.8626362,
  "lon": 2.4420478,
  "tags": {
    "amenity": "bar",
    "name": "Café Forum"
  }
},
{
  "type": "node",
  "id": 770728196,
  "lat": 48.8633184,
  "lon": 2.4465610,
  "tags": {
    "amenity": "bar",
    "name": "La Pêche"
  }
},
{
  "type": "node",
  "id": 770728199,
  "lat": 48.8680917,
  "lon": 2.4467445,
  "tags": {
    "amenity": "bar",
    "name": "Tabac des 7 chemins"
  }
},
{
  "type": "node",
  "id": 770728202,
  "lat": 48.8627118,
  "lon": 2.4415701,
  "tags": {
    "amenity": "bar",
    "name": "Les Monédières"
  }
},
{
  "type": "node",
  "id": 773602071,
  "lat": 48.8680162,
  "lon": 2.3548820,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "337",
    "addr:postcode": "75003",
    "addr:street": "Rue Saint-Martin",
    "amenity": "bar",
    "name": "Les Parisiens",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 776938194,
  "lat": 48.8537741,
  "lon": 2.3390379,
  "tags": {
    "amenity": "bar",
    "name": "Le Tennessee"
  }
},
{
  "type": "node",
  "id": 778220091,
  "lat": 48.8533950,
  "lon": 2.3355231,
  "tags": {
    "amenity": "bar",
    "name": "La Rhumerie"
  }
},
{
  "type": "node",
  "id": 787347279,
  "lat": 48.8487629,
  "lon": 2.3975462,
  "tags": {
    "amenity": "restaurant",
    "brewery": "1664",
    "name": "Le Berger",
    "opening_hours": "Mo-Fr 08:00-21:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 787964024,
  "lat": 48.8426139,
  "lon": 2.3298989,
  "tags": {
    "amenity": "pub",
    "name": "Shannon Pub",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 795606502,
  "lat": 48.8709269,
  "lon": 2.3577774,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Passage du Marché",
    "amenity": "bar",
    "name": "Point Bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 806114404,
  "lat": 48.8534529,
  "lon": 2.3385450,
  "tags": {
    "addr:housenumber": "3",
    "addr:postcode": "75006",
    "addr:street": "Rue de l\'Ancienne Comédie",
    "amenity": "bar",
    "entrance": "yes",
    "name": "Bar III",
    "website": "http://www.bar3stgermain.com/",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 811326704,
  "lat": 48.8643001,
  "lon": 2.3323292,
  "tags": {
    "amenity": "bar",
    "name": "El Tonel"
  }
},
{
  "type": "node",
  "id": 812129610,
  "lat": 48.8706806,
  "lon": 2.3211802,
  "tags": {
    "amenity": "bar",
    "name": "Le Comptoir du Faubourg",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 813394579,
  "lat": 48.8712520,
  "lon": 2.3169520,
  "tags": {
    "amenity": "bar",
    "name": "Elysée Lounge",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815764595,
  "lat": 48.8732551,
  "lon": 2.3241335,
  "tags": {
    "amenity": "pub",
    "name": "The Cricketer",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817222817,
  "lat": 48.8746980,
  "lon": 2.3252714,
  "tags": {
    "amenity": "pub",
    "name": "Pub Saint-Lazare",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817974703,
  "lat": 48.8869689,
  "lon": 2.3475030,
  "tags": {
    "addr:housenumber": "1",
    "addr:postcode": "75018",
    "addr:street": "Rue Ramey",
    "amenity": "bar",
    "name": "Au clair de lune"
  }
},
{
  "type": "node",
  "id": 819031352,
  "lat": 48.8803557,
  "lon": 2.3235567,
  "tags": {
    "amenity": "bar",
    "name": "Le Seven",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819101990,
  "lat": 48.8770026,
  "lon": 2.3270417,
  "tags": {
    "amenity": "bar",
    "name": "L\'Atlantique",
    "restaurant": "yes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819176199,
  "lat": 48.8766444,
  "lon": 2.3270121,
  "tags": {
    "amenity": "bar",
    "name": "Black Tie",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 822951734,
  "lat": 48.8769627,
  "lon": 2.3148350,
  "tags": {
    "amenity": "bar",
    "name": "Le Treilhard Bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 828138856,
  "lat": 48.8729879,
  "lon": 2.3074334,
  "tags": {
    "amenity": "pub",
    "name": "The Bowler",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 828825713,
  "lat": 48.8354680,
  "lon": 2.2893109,
  "tags": {
    "amenity": "bar",
    "name": "Le Crocodile Vert"
  }
},
{
  "type": "node",
  "id": 829051469,
  "lat": 48.8722006,
  "lon": 2.3040149,
  "tags": {
    "amenity": "pub",
    "name": "The Freedom",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 829203592,
  "lat": 48.8700490,
  "lon": 2.3017240,
  "tags": {
    "amenity": "bar",
    "name": "L\'Écluse",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 833088653,
  "lat": 48.8683182,
  "lon": 2.2984850,
  "tags": {
    "amenity": "bar",
    "name": "Le Chaillot",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 837769005,
  "lat": 48.8526933,
  "lon": 2.4056082,
  "tags": {
    "addr:housenumber": "93",
    "addr:postcode": "75020",
    "addr:street": "Rue d\'Avron",
    "amenity": "bar",
    "name": "Le Narval"
  }
},
{
  "type": "node",
  "id": 839816780,
  "lat": 48.8646770,
  "lon": 2.3992490,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 867450191,
  "lat": 48.8935929,
  "lon": 2.3994808,
  "tags": {
    "amenity": "bar",
    "name": "Bar de l\'industrie"
  }
},
{
  "type": "node",
  "id": 867465826,
  "lat": 48.8938098,
  "lon": 2.4018949,
  "tags": {
    "amenity": "bar",
    "name": "Le montgolfier"
  }
},
{
  "type": "node",
  "id": 867507827,
  "lat": 48.8974719,
  "lon": 2.4051356,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 867530737,
  "lat": 48.8974855,
  "lon": 2.3995856,
  "tags": {
    "amenity": "bar",
    "name": "La chope de l\'est"
  }
},
{
  "type": "node",
  "id": 867531159,
  "lat": 48.8976607,
  "lon": 2.3989475,
  "tags": {
    "amenity": "bar",
    "name": "Le relais du pont"
  }
},
{
  "type": "node",
  "id": 870139090,
  "lat": 48.8347343,
  "lon": 2.2329196,
  "tags": {
    "addr:housenumber": "107",
    "addr:street": "Rue de Silly",
    "amenity": "bar",
    "name": "Le 107",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 870147959,
  "lat": 48.8312484,
  "lon": 2.2353568,
  "tags": {
    "addr:housenumber": "94",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "bar",
    "name": "Brasserie de l\'Avenue",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 877958897,
  "lat": 48.8832736,
  "lon": 2.3614499,
  "tags": {
    "amenity": "pub",
    "name": "Le Fiacre"
  }
},
{
  "type": "node",
  "id": 877959052,
  "lat": 48.8839950,
  "lon": 2.3594946,
  "tags": {
    "amenity": "pub",
    "name": "La Rotonde"
  }
},
{
  "type": "node",
  "id": 884493112,
  "lat": 48.8827250,
  "lon": 2.3591597,
  "tags": {
    "amenity": "pub",
    "cuisine": "indian",
    "name": "Dishny"
  }
},
{
  "type": "node",
  "id": 887163734,
  "lat": 48.8828401,
  "lon": 2.2235805,
  "tags": {
    "amenity": "bar",
    "name": "Le Carrefour"
  }
},
{
  "type": "node",
  "id": 887166084,
  "lat": 48.8853640,
  "lon": 2.2258759,
  "tags": {
    "amenity": "bar",
    "name": "Le Relais des Bergères"
  }
},
{
  "type": "node",
  "id": 887167432,
  "lat": 48.8853404,
  "lon": 2.2262111,
  "tags": {
    "amenity": "bar",
    "name": "La Bergère"
  }
},
{
  "type": "node",
  "id": 887167730,
  "lat": 48.8854503,
  "lon": 2.2247219,
  "tags": {
    "amenity": "bar",
    "phone": "01.47.67.08.61"
  }
},
{
  "type": "node",
  "id": 891069088,
  "lat": 48.8796109,
  "lon": 2.3574120,
  "tags": {
    "amenity": "pub",
    "name": "La ville D\'Aulnay"
  }
},
{
  "type": "node",
  "id": 892913317,
  "lat": 48.8608729,
  "lon": 2.3451379,
  "tags": {
    "amenity": "bar",
    "name": "Le Sous Bock Tavern",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 894713103,
  "lat": 48.8948135,
  "lon": 2.4038197,
  "tags": {
    "amenity": "bar",
    "name": "Le narval"
  }
},
{
  "type": "node",
  "id": 906036878,
  "lat": 48.8549710,
  "lon": 2.3707330,
  "tags": {
    "addr:housenumber": "13",
    "addr:street": "Rue Daval",
    "amenity": "pub",
    "brewery": "Saint-Omer",
    "internet_access": "no",
    "name": "Lêche vin",
    "opening_hours": "18:00-02:00",
    "phone": "0143559891"
  }
},
{
  "type": "node",
  "id": 909529763,
  "lat": 48.8219547,
  "lon": 2.3608058,
  "tags": {
    "amenity": "bar",
    "name": "Le Gandon"
  }
},
{
  "type": "node",
  "id": 913551343,
  "lat": 48.8289803,
  "lon": 2.3785924,
  "tags": {
    "amenity": "cafe",
    "brewery": "Guinness",
    "happy_hours": "Mo-Sa 17:00-21:00",
    "name": "Dupont Café"
  }
},
{
  "type": "node",
  "id": 914241249,
  "lat": 48.8746858,
  "lon": 2.3662628,
  "tags": {
    "addr:housenumber": "23",
    "addr:street": "Rue de la Grange aux Belles",
    "amenity": "bar",
    "name": "L\'Apostrophe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 916588773,
  "lat": 48.8903045,
  "lon": 2.3534684,
  "tags": {
    "addr:housenumber": "23",
    "addr:postcode": "75018",
    "addr:street": "Rue Marcadet",
    "amenity": "bar",
    "name": "Café Leon",
    "source": "local knowledge",
    "wifi": "free"
  }
},
{
  "type": "node",
  "id": 917974186,
  "lat": 48.8475310,
  "lon": 2.3871419,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "79",
    "addr:postcode": "75012",
    "addr:street": "boulevard Diderot",
    "amenity": "cafe",
    "brewery": "Amstel;Affligem_rouge;Heineken;Edelweiss",
    "happy_hours": "Mo-Su 16:00-20:00",
    "internet_access": "wlan",
    "name": "Le 79",
    "opening_hours": "Mo-Sa 00:00-02:00,05:00-24:00;Su 00:00-02:00,06:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 918317353,
  "lat": 48.8804191,
  "lon": 2.3624653,
  "tags": {
    "amenity": "bar",
    "name": "Landon Café"
  }
},
{
  "type": "node",
  "id": 921881553,
  "lat": 48.8815009,
  "lon": 2.3685984,
  "tags": {
    "amenity": "pub",
    "name": "Le Point Ephémère"
  }
},
{
  "type": "node",
  "id": 933859703,
  "lat": 48.8928215,
  "lon": 2.3985124,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 933859813,
  "lat": 48.9016771,
  "lon": 2.4136628,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 941382064,
  "lat": 48.8274887,
  "lon": 2.2421520,
  "tags": {
    "amenity": "cafe",
    "brewery": "guinness;grimbergen",
    "name": "Le National",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 952341600,
  "lat": 48.8921927,
  "lon": 2.3896612,
  "tags": {
    "amenity": "bar",
    "opening_hours": "Mo-Su 19:00-23:00"
  }
},
{
  "type": "node",
  "id": 968924204,
  "lat": 48.8403603,
  "lon": 2.3126619,
  "tags": {
    "amenity": "bar",
    "name": "Le Bréguet"
  }
},
{
  "type": "node",
  "id": 971476014,
  "lat": 48.8742352,
  "lon": 2.3423076,
  "tags": {
    "amenity": "bar",
    "name": "Le Julyann"
  }
},
{
  "type": "node",
  "id": 971476082,
  "lat": 48.8752057,
  "lon": 2.3418014,
  "tags": {
    "amenity": "bar",
    "name": "Le Flash"
  }
},
{
  "type": "node",
  "id": 971476150,
  "lat": 48.8750436,
  "lon": 2.3412323,
  "tags": {
    "amenity": "bar",
    "name": "Au Général la Fayette"
  }
},
{
  "type": "node",
  "id": 971476164,
  "lat": 48.8741144,
  "lon": 2.3424987,
  "tags": {
    "amenity": "bar",
    "name": "Le Faubourg"
  }
},
{
  "type": "node",
  "id": 974136692,
  "lat": 48.8282346,
  "lon": 2.2356895,
  "tags": {
    "addr:housenumber": "21",
    "addr:street": "Cours de l\'Île Seguin",
    "amenity": "pub",
    "name": "Doddy\'s Coffee",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 975023635,
  "lat": 48.8551767,
  "lon": 2.2700634,
  "tags": {
    "amenity": "bar",
    "name": "Le Molière",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 981370622,
  "lat": 48.8312316,
  "lon": 2.2403064,
  "tags": {
    "addr:housenumber": "7bis",
    "addr:street": "Rue Heyrault",
    "amenity": "bar",
    "name": "Home Sweet Home",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 985435188,
  "lat": 48.8899959,
  "lon": 2.3389104,
  "tags": {
    "amenity": "bar",
    "name": "Le Refuge",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 986014266,
  "lat": 48.8308137,
  "lon": 2.2338563,
  "tags": {
    "addr:housenumber": "112",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "bar",
    "name": "Le Brégère",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 987919341,
  "lat": 48.8349997,
  "lon": 2.2370107,
  "tags": {
    "addr:housenumber": "130",
    "addr:street": "Rue de Billancourt",
    "amenity": "bar",
    "name": "Sanana",
    "source": "survey",
    "tourism": "hotel"
  }
},
{
  "type": "node",
  "id": 988948075,
  "lat": 48.8910215,
  "lon": 2.4011225,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 988948084,
  "lat": 48.8909532,
  "lon": 2.3762481,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 989431912,
  "lat": 48.8716440,
  "lon": 2.3678590,
  "tags": {
    "amenity": "bar",
    "name": "Le Carillon"
  }
},
{
  "type": "node",
  "id": 997919811,
  "lat": 48.8848152,
  "lon": 2.3606854,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 997919835,
  "lat": 48.8846300,
  "lon": 2.3608651,
  "tags": {
    "amenity": "pub",
    "name": "La Royale"
  }
},
{
  "type": "node",
  "id": 998667382,
  "lat": 48.8860315,
  "lon": 2.2576288,
  "tags": {
    "amenity": "pub",
    "name": "Saint-John",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1007326468,
  "lat": 48.8766152,
  "lon": 2.3574727,
  "tags": {
    "amenity": "pub",
    "name": "Extérieur Quai"
  }
},
{
  "type": "node",
  "id": 1014690183,
  "lat": 48.8594585,
  "lon": 2.3560654,
  "tags": {
    "amenity": "bar",
    "name": "La Fronde",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1015358394,
  "lat": 48.8841660,
  "lon": 2.2895992,
  "tags": {
    "amenity": "bar",
    "name": "Le Galvani",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1015830169,
  "lat": 48.8875689,
  "lon": 2.3536169,
  "tags": {
    "amenity": "bar",
    "name": "Bar restaurant Les 3 frères"
  }
},
{
  "type": "node",
  "id": 1016701570,
  "lat": 48.8362081,
  "lon": 2.2365261,
  "tags": {
    "addr:housenumber": "104",
    "addr:street": "Rue de Billancourt",
    "amenity": "bar",
    "name": "Le Chiquito"
  }
},
{
  "type": "node",
  "id": 1020227377,
  "lat": 48.8713989,
  "lon": 2.3748429,
  "tags": {
    "amenity": "pub",
    "name": "Le Faubourg"
  }
},
{
  "type": "node",
  "id": 1020227449,
  "lat": 48.8717746,
  "lon": 2.3758883,
  "tags": {
    "amenity": "pub",
    "name": "Le Jean Bar",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1020227490,
  "lat": 48.8719061,
  "lon": 2.3762543,
  "tags": {
    "amenity": "pub",
    "name": "Le Zorba",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1020352074,
  "lat": 48.8715920,
  "lon": 2.3753803,
  "tags": {
    "amenity": "pub",
    "name": "La Source"
  }
},
{
  "type": "node",
  "id": 1020391890,
  "lat": 48.8710718,
  "lon": 2.3739992,
  "tags": {
    "amenity": "pub",
    "name": "Le Progrès"
  }
},
{
  "type": "node",
  "id": 1020780010,
  "lat": 48.8701560,
  "lon": 2.3711369,
  "tags": {
    "amenity": "pub",
    "name": "Floréal"
  }
},
{
  "type": "node",
  "id": 1020780016,
  "lat": 48.8705298,
  "lon": 2.3731250,
  "tags": {
    "amenity": "cafe",
    "brewery": "leffe;1664;Stella Artois",
    "name": "Au Val de Loire"
  }
},
{
  "type": "node",
  "id": 1022803184,
  "lat": 48.8707630,
  "lon": 2.3736928,
  "tags": {
    "amenity": "pub",
    "name": "Le Café du Théatre"
  }
},
{
  "type": "node",
  "id": 1023222092,
  "lat": 48.8710893,
  "lon": 2.3748362,
  "tags": {
    "amenity": "bar",
    "name": "Café Belleville"
  }
},
{
  "type": "node",
  "id": 1025944743,
  "lat": 48.8495059,
  "lon": 2.3954641,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Grimbergen_blanche;Grimbergen;Kronenbourg;Biere_de_saison",
    "happy_hours": "Mo-Su 16:00-20:00",
    "name": "Royal VI Nation",
    "opening_hours": "Mo-Su 00:00-02:00,06:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 1025944745,
  "lat": 48.8484892,
  "lon": 2.3941720,
  "tags": {
    "amenity": "cafe",
    "brewery": "Heineken;Pelforth;Record;Affligem;Desperados;Edelweiss",
    "happy_hours": "Mo-Su 17:00-20:00",
    "name": "Au Canon de la Nation",
    "opening_hours": "Mo-Su 00:00-02:00,05:00-24:00",
    "smoking": "outside",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1035711035,
  "lat": 48.8862598,
  "lon": 2.3626862,
  "tags": {
    "amenity": "pub",
    "name": "Au rendez-vous des chauffeurs"
  }
},
{
  "type": "node",
  "id": 1035711050,
  "lat": 48.8860205,
  "lon": 2.3612559,
  "tags": {
    "amenity": "pub",
    "name": "La Coupole"
  }
},
{
  "type": "node",
  "id": 1035728774,
  "lat": 48.8897668,
  "lon": 2.3683274,
  "tags": {
    "amenity": "pub",
    "name": "Le Pascali"
  }
},
{
  "type": "node",
  "id": 1035778113,
  "lat": 48.8874695,
  "lon": 2.3672750,
  "tags": {
    "amenity": "pub",
    "name": "Lez\'Arts"
  }
},
{
  "type": "node",
  "id": 1035778132,
  "lat": 48.8873800,
  "lon": 2.3672402,
  "tags": {
    "amenity": "pub",
    "name": "Brasserie du Parc"
  }
},
{
  "type": "node",
  "id": 1035787952,
  "lat": 48.8872163,
  "lon": 2.3671561,
  "tags": {
    "amenity": "bar",
    "name": "Oued-Rhiou"
  }
},
{
  "type": "node",
  "id": 1046316249,
  "lat": 48.8900187,
  "lon": 2.3629443,
  "tags": {
    "amenity": "pub",
    "name": "Au RDV du voyage"
  }
},
{
  "type": "node",
  "id": 1051785708,
  "lat": 48.9032352,
  "lon": 2.3027218,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1054432204,
  "lat": 48.8321896,
  "lon": 2.2529663,
  "tags": {
    "amenity": "pub",
    "name": "The Corner",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1068630302,
  "lat": 48.8955070,
  "lon": 2.3483656,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue Neuve de la Chardonniere",
    "amenity": "bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1085585236,
  "lat": 48.8281782,
  "lon": 2.2502030,
  "tags": {
    "amenity": "pub",
    "name": "Le Sunset",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1094366292,
  "lat": 48.8626827,
  "lon": 2.3523046,
  "tags": {
    "amenity": "bar",
    "internet_access": "no",
    "name": "Snax café"
  }
},
{
  "type": "node",
  "id": 1096116926,
  "lat": 48.8506286,
  "lon": 2.3783987,
  "tags": {
    "amenity": "cafe",
    "brewery": "Carlsberg;Grimbergen",
    "cuisine": "french",
    "name": "Le Chat Bossu",
    "opening_hours": "Mo-Su 19:30-21:30"
  }
},
{
  "type": "node",
  "id": 1096663299,
  "lat": 48.8184928,
  "lon": 2.3783255,
  "tags": {
    "amenity": "bar",
    "name": "L\'Étoile d\'or"
  }
},
{
  "type": "node",
  "id": 1111551181,
  "lat": 48.8938517,
  "lon": 2.2838394,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1111551193,
  "lat": 48.8934011,
  "lon": 2.2904321,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1111551206,
  "lat": 48.8935485,
  "lon": 2.2891905,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1113738981,
  "lat": 48.8427362,
  "lon": 2.3122657,
  "tags": {
    "amenity": "bar",
    "name": "Au Métro"
  }
},
{
  "type": "node",
  "id": 1113738997,
  "lat": 48.8429440,
  "lon": 2.3130453,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1113739044,
  "lat": 48.8420308,
  "lon": 2.3127675,
  "tags": {
    "amenity": "bar",
    "name": "Brasserie Sauret"
  }
},
{
  "type": "node",
  "id": 1114763120,
  "lat": 48.8850887,
  "lon": 2.3797004,
  "tags": {
    "amenity": "bar",
    "name": "Le Gymnase"
  }
},
{
  "type": "node",
  "id": 1118434386,
  "lat": 48.8224551,
  "lon": 2.2678473,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1126088147,
  "lat": 48.8611575,
  "lon": 2.3438966,
  "tags": {
    "amenity": "pub",
    "brewery": "Akerbeltz_ambrée",
    "cuisine": "french",
    "internet_access": "no",
    "name": "L\'Express"
  }
},
{
  "type": "node",
  "id": 1129273824,
  "lat": 48.8226335,
  "lon": 2.3469267,
  "tags": {
    "amenity": "pub",
    "name": "N°13",
    "note": "bar/brasserie"
  }
},
{
  "type": "node",
  "id": 1133510138,
  "lat": 48.8926226,
  "lon": 2.2871115,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1134402749,
  "lat": 48.8471167,
  "lon": 2.3485711,
  "tags": {
    "amenity": "pub",
    "name": "Hurling Pub",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1135295421,
  "lat": 48.8951159,
  "lon": 2.2878261,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1135295422,
  "lat": 48.8952452,
  "lon": 2.2877163,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1140477414,
  "lat": 48.8414796,
  "lon": 2.3258678,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "30",
    "addr:postcode": "75014",
    "addr:street": "Rue Delambre",
    "amenity": "pub",
    "brewery": "Leffe;Leffe Ruby",
    "cuisine": "french",
    "name": "Ty jos",
    "note": "Pub breton, crêperie. Musique à la cave jeudi, vendredi ..."
  }
},
{
  "type": "node",
  "id": 1140477426,
  "lat": 48.8407751,
  "lon": 2.3245796,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Leffe",
    "cuisine": "french",
    "name": "Brasserie Gaité"
  }
},
{
  "type": "node",
  "id": 1165739794,
  "lat": 48.8520143,
  "lon": 2.3467491,
  "tags": {
    "amenity": "bar",
    "name": "Caveau des Oubliettes"
  }
},
{
  "type": "node",
  "id": 1166299425,
  "lat": 48.8336090,
  "lon": 2.2573970,
  "tags": {
    "amenity": "bar",
    "name": "Le Point Du Jour"
  }
},
{
  "type": "node",
  "id": 1166504803,
  "lat": 48.8478519,
  "lon": 2.2606251,
  "tags": {
    "amenity": "bar",
    "name": "Le moulin d\'Auteuil"
  }
},
{
  "type": "node",
  "id": 1186043590,
  "lat": 48.8435438,
  "lon": 2.2934604,
  "tags": {
    "amenity": "pub",
    "name": "Music pub"
  }
},
{
  "type": "node",
  "id": 1191165485,
  "lat": 48.8368456,
  "lon": 2.3591245,
  "tags": {
    "amenity": "bar",
    "name": "La Ménagerie"
  }
},
{
  "type": "node",
  "id": 1197653595,
  "lat": 48.8445706,
  "lon": 2.3835054,
  "tags": {
    "amenity": "cafe",
    "brewery": "Bavik;Petrus;Barbar_brune;Kasteel_rouge;Tripel_Karmeliet;Wittekerke",
    "happy_hours": "Mo-Sa 17:00-20:00",
    "name": "Le Mastroquet",
    "opening_hours": "Tu-Sa 00:00-02:00,10:00-24:00; Su 00:00-02:00; Mo 10:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 1198500834,
  "lat": 48.8560410,
  "lon": 2.3690859,
  "tags": {
    "addr:housenumber": "21",
    "addr:street": "Rue Amelot",
    "amenity": "bar",
    "name": "Le Tabarin",
    "phone": "01 48 07 15 22",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://letabarin.fr/"
  }
},
{
  "type": "node",
  "id": 1200417829,
  "lat": 48.9087485,
  "lon": 2.2468363,
  "tags": {
    "amenity": "bar",
    "name": "tabac du marche"
  }
},
{
  "type": "node",
  "id": 1206262837,
  "lat": 48.9017549,
  "lon": 2.3172662,
  "tags": {
    "amenity": "bar",
    "name": "Le Futur"
  }
},
{
  "type": "node",
  "id": 1210666304,
  "lat": 48.9059910,
  "lon": 2.2679610,
  "tags": {
    "amenity": "bar",
    "name": "Les Bruyères"
  }
},
{
  "type": "node",
  "id": 1210867025,
  "lat": 48.9060900,
  "lon": 2.2681920,
  "tags": {
    "amenity": "bar",
    "name": "Les Sablières"
  }
},
{
  "type": "node",
  "id": 1210869467,
  "lat": 48.9061570,
  "lon": 2.2684760,
  "tags": {
    "amenity": "bar",
    "name": "Le Balto"
  }
},
{
  "type": "node",
  "id": 1211062820,
  "lat": 48.8970484,
  "lon": 2.2566305,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1224788533,
  "lat": 48.8554207,
  "lon": 2.4011828,
  "tags": {
    "amenity": "pub",
    "name": "Le Moderne"
  }
},
{
  "type": "node",
  "id": 1224795726,
  "lat": 48.8508003,
  "lon": 2.3840730,
  "tags": {
    "amenity": "bar",
    "name": "Le Beyer Claude"
  }
},
{
  "type": "node",
  "id": 1224795728,
  "lat": 48.8505216,
  "lon": 2.3862840,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "name": "Patrick’s Ballon Vert",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1224795730,
  "lat": 48.8503732,
  "lon": 2.3908375,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1225461874,
  "lat": 48.8670533,
  "lon": 2.3622765,
  "tags": {
    "amenity": "bar",
    "name": "Tabac du Temple",
    "shop": "kiosk"
  }
},
{
  "type": "node",
  "id": 1231110978,
  "lat": 48.9061652,
  "lon": 2.2688958,
  "tags": {
    "addr:housenumber": "1",
    "addr:street": "Rue Madiraa",
    "amenity": "bar",
    "name": "Le Rallye",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1235153111,
  "lat": 48.8717823,
  "lon": 2.3424721,
  "tags": {
    "amenity": "pub",
    "name": "Café Oz"
  }
},
{
  "type": "node",
  "id": 1240425293,
  "lat": 48.8368019,
  "lon": 2.2791434,
  "tags": {
    "amenity": "bar",
    "name": "Bistrot Balard"
  }
},
{
  "type": "node",
  "id": 1240426071,
  "lat": 48.8369546,
  "lon": 2.2791133,
  "tags": {
    "amenity": "bar",
    "name": "Le Balard"
  }
},
{
  "type": "node",
  "id": 1240426837,
  "lat": 48.8651635,
  "lon": 2.3419355,
  "tags": {
    "amenity": "bar",
    "name": "Le Rouergue"
  }
},
{
  "type": "node",
  "id": 1243322704,
  "lat": 48.8813769,
  "lon": 2.3721944,
  "tags": {
    "amenity": "bar",
    "name": "La bicylette"
  }
},
{
  "type": "node",
  "id": 1244411731,
  "lat": 48.8468990,
  "lon": 2.3044201,
  "tags": {
    "amenity": "bar",
    "name": "Les Coteaux",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252381095,
  "lat": 48.8984225,
  "lon": 2.2940571,
  "tags": {
    "amenity": "bar",
    "name": "Le Victor Hugo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252381570,
  "lat": 48.8385292,
  "lon": 2.3895336,
  "tags": {
    "amenity": "bar",
    "name": "Le Dugommier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252487298,
  "lat": 48.8654085,
  "lon": 2.3767039,
  "tags": {
    "amenity": "bar",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "Bar Les Pirates",
    "opening_hours": "Mo-Su 12:00-02:00",
    "phone": "01 43 38 37 53",
    "smoking": "no",
    "website": "http://www.barlespirates.com",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1264662419,
  "lat": 48.8773925,
  "lon": 2.3384012,
  "tags": {
    "amenity": "pub",
    "name": "Le Bergerac"
  }
},
{
  "type": "node",
  "id": 1265023391,
  "lat": 48.8503624,
  "lon": 2.3488792,
  "tags": {
    "amenity": "pub",
    "name": "The Long Hop"
  }
},
{
  "type": "node",
  "id": 1272453341,
  "lat": 48.8710357,
  "lon": 2.3522560,
  "tags": {
    "addr:housenumber": "22",
    "addr:street": "Rue de Mazagran",
    "amenity": "bar",
    "name": "Le Xème",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1272477681,
  "lat": 48.8710551,
  "lon": 2.3579616,
  "tags": {
    "addr:housenumber": "27",
    "addr:street": "Rue Bouchardon",
    "amenity": "bar",
    "name": "L\'Horloge occitane",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1277051667,
  "lat": 48.8481138,
  "lon": 2.3765844,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Grimbergen",
    "cuisine": "french",
    "happy_hours": "Mo-Sa 17:00-20:00",
    "name": "Les Temps Modernes",
    "opening_hours": "Mo-Sa 09:30-00:30"
  }
},
{
  "type": "node",
  "id": 1278464712,
  "lat": 48.8793095,
  "lon": 2.3546327,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "8",
    "addr:postcode": "75010",
    "addr:street": "Boulevard de Denain",
    "amenity": "pub",
    "atm": "no",
    "food": "yes",
    "internet_access": "no",
    "name": "Hide out Station",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1291120262,
  "lat": 48.8690400,
  "lon": 2.3726204,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue des Goncourt",
    "amenity": "bar",
    "name": "On Cherche Encore",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1291532250,
  "lat": 48.8846802,
  "lon": 2.2583877,
  "tags": {
    "amenity": "bar",
    "name": "Polly Maggoo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1292143839,
  "lat": 48.8629957,
  "lon": 2.3672976,
  "tags": {
    "addr:housenumber": "108",
    "addr:street": "Rue Amelot",
    "amenity": "bar",
    "name": "Bar du Cirque",
    "phone": "01 48 05 53 06",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.barducirque.fr/"
  }
},
{
  "type": "node",
  "id": 1292143900,
  "lat": 48.8637121,
  "lon": 2.3670964,
  "tags": {
    "addr:housenumber": "116",
    "addr:street": "Rue Amelot",
    "amenity": "bar",
    "name": "Bodega Bay",
    "opening_hours": "Mo-Sa 11:00-15:30,18:00-2:00",
    "phone": "01 43 55 83 77",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.bodega-bay.fr/",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1292272228,
  "lat": 48.8671390,
  "lon": 2.3755303,
  "tags": {
    "addr:housenumber": "72b",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "bar",
    "name": "Orange Mécanique",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1298787987,
  "lat": 48.8646245,
  "lon": 2.3695884,
  "tags": {
    "addr:housenumber": "31",
    "addr:street": "Rue de Crussol",
    "amenity": "bar",
    "name": "L\'embuscade",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1299587200,
  "lat": 48.8903757,
  "lon": 2.2796456,
  "tags": {
    "amenity": "bar",
    "name": "Le Neptune"
  }
},
{
  "type": "node",
  "id": 1300595247,
  "lat": 48.8357188,
  "lon": 2.2496147,
  "tags": {
    "amenity": "pub",
    "name": "Le Sablier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1300607554,
  "lat": 48.8767578,
  "lon": 2.2885461,
  "tags": {
    "amenity": "pub",
    "name": "Saint-Andrews"
  }
},
{
  "type": "node",
  "id": 1301310309,
  "lat": 48.8602229,
  "lon": 2.3727573,
  "tags": {
    "addr:housenumber": "64",
    "addr:street": "Boulevard Richard Lenoir",
    "amenity": "bar",
    "name": "La grosse bouteille",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1302121018,
  "lat": 48.8856715,
  "lon": 2.2588249,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1305927682,
  "lat": 48.8366253,
  "lon": 2.3205727,
  "tags": {
    "addr:housenumber": "33",
    "addr:street": "Rue de l\'Ouest",
    "amenity": "pub",
    "brewery": "Chouffe,Guiness,Triple Karmeliet",
    "internet_access": "wlan",
    "name": "Osmoz Café",
    "opening_hours": "Mo-Sa 08:00-02:00",
    "phone": "0183760894",
    "smoking": "no",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2011",
    "website": "http://www.osmozcafe.fr/"
  }
},
{
  "type": "node",
  "id": 1307259134,
  "lat": 48.8536882,
  "lon": 2.3708103,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "14",
    "addr:postcode": "75012",
    "addr:street": "Rue de la Roquette",
    "amenity": "bar",
    "brewery": "Stella;Leffe;Hoegaarden;",
    "internet_access": "no",
    "name": "Bastille bar",
    "opening_hours": "Mo-Su 08:00-02:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1307259214,
  "lat": 48.8557897,
  "lon": 2.3753324,
  "tags": {
    "addr:housenumber": "74",
    "addr:street": "Rue de la Roquette",
    "amenity": "bar",
    "name": "Les furieux",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.lesfurieux.fr/index2.htm"
  }
},
{
  "type": "node",
  "id": 1307259285,
  "lat": 48.8545778,
  "lon": 2.3710477,
  "tags": {
    "addr:housename": "Bar\'Ock",
    "addr:housenumber": "18",
    "addr:postcode": "75011",
    "addr:street": "Rue Daval",
    "alt_name": "Bar\'Ock",
    "amenity": "bar",
    "name": "Bar\'Ock",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.bar-ock.com",
    "wifi": "free"
  }
},
{
  "type": "node",
  "id": 1307270891,
  "lat": 48.8548025,
  "lon": 2.3759275,
  "tags": {
    "addr:housenumber": "20",
    "addr:street": "Rue Keller",
    "amenity": "bar",
    "name": "Le Bubblebar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1316079346,
  "lat": 48.8416745,
  "lon": 2.2374790,
  "tags": {
    "amenity": "bar",
    "name": "L\'Imprévu",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1326677896,
  "lat": 48.8862540,
  "lon": 2.3333605,
  "tags": {
    "addr:housenumber": "15",
    "addr:postcode": "75018",
    "addr:street": "Rue Joseph de Maistre",
    "alt_name": "Le 20 Heures Vin",
    "amenity": "bar",
    "name": "Le Vingt Heures Vin",
    "phone": "+33 9 54665067"
  }
},
{
  "type": "node",
  "id": 1350464575,
  "lat": 48.8649900,
  "lon": 2.3816769,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1374463830,
  "lat": 48.8831571,
  "lon": 2.3884076,
  "tags": {
    "amenity": "bar",
    "name": "Bar de la piscine"
  }
},
{
  "type": "node",
  "id": 1404449817,
  "lat": 48.8570855,
  "lon": 2.3550986,
  "tags": {
    "amenity": "bar",
    "name": "Les Souffleurs"
  }
},
{
  "type": "node",
  "id": 1423029047,
  "lat": 48.8444028,
  "lon": 2.3766004,
  "tags": {
    "amenity": "cafe",
    "brewery": "affligem",
    "layer": "-1"
  }
},
{
  "type": "node",
  "id": 1425578588,
  "lat": 48.8448130,
  "lon": 2.3836511,
  "tags": {
    "addr:housenumber": "7",
    "addr:street": "Place du Colonel Bourgoin",
    "amenity": "cafe",
    "brewery": "Stella;Biere_de_saison;Leffe;Loburg",
    "name": "La Boutique à Boire et à Manger",
    "opening_hours": "Mo-Sa 07:00-24:00; Su 09:00-19:30",
    "smoking": "outside",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1434075749,
  "lat": 48.8497121,
  "lon": 2.3553355,
  "tags": {
    "amenity": "bar",
    "name": "Le Rallye Tournelle",
    "phone": "+33 143542965"
  }
},
{
  "type": "node",
  "id": 1437579349,
  "lat": 48.8716241,
  "lon": 2.3914872,
  "tags": {
    "amenity": "bar",
    "name": "La fontaine Henri IV"
  }
},
{
  "type": "node",
  "id": 1440883085,
  "lat": 48.8371288,
  "lon": 2.3917395,
  "tags": {
    "amenity": "pub",
    "name": "La Chope",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1450939214,
  "lat": 48.8278377,
  "lon": 2.4034794,
  "tags": {
    "amenity": "bar",
    "name": "La tendresse"
  }
},
{
  "type": "node",
  "id": 1450939226,
  "lat": 48.8277070,
  "lon": 2.4036725,
  "tags": {
    "amenity": "bar",
    "name": "Chez moustache"
  }
},
{
  "type": "node",
  "id": 1459478739,
  "lat": 48.8594342,
  "lon": 2.4029865,
  "tags": {
    "amenity": "bar",
    "name": "La Flèche d\'Or"
  }
},
{
  "type": "node",
  "id": 1465462980,
  "lat": 48.8710339,
  "lon": 2.3430453,
  "tags": {
    "amenity": "pub",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "microbrewery": "yes",
    "name": "French Beer Factory",
    "opening_hours": "Mo-Sa 10:00-02:00",
    "phone": "+33 1 44820472",
    "source": "survey",
    "website": "http://www.frenchbeerfactory.fr/"
  }
},
{
  "type": "node",
  "id": 1477656356,
  "lat": 48.8637107,
  "lon": 2.3697771,
  "tags": {
    "amenity": "bar",
    "name": "Le Bar au mètre"
  }
},
{
  "type": "node",
  "id": 1481765838,
  "lat": 48.8713898,
  "lon": 2.3354731,
  "tags": {
    "amenity": "pub",
    "name": "Léon de Bruxelles"
  }
},
{
  "type": "node",
  "id": 1482958092,
  "lat": 48.8750628,
  "lon": 2.3386203,
  "tags": {
    "amenity": "bar",
    "name": "Les Domaines de Sophie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1483017724,
  "lat": 48.8768033,
  "lon": 2.3372248,
  "tags": {
    "amenity": "pub",
    "name": "Le Saint-Georges",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1484054970,
  "lat": 48.8710457,
  "lon": 2.3357596,
  "tags": {
    "amenity": "bar",
    "name": "Le Vénitien"
  }
},
{
  "type": "node",
  "id": 1484054976,
  "lat": 48.8717139,
  "lon": 2.3340286,
  "tags": {
    "amenity": "pub",
    "name": "Murphy\'s House",
    "website": "http://www.murphyshouse.com"
  }
},
{
  "type": "node",
  "id": 1484054990,
  "lat": 48.8716898,
  "lon": 2.3334554,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1486313953,
  "lat": 48.8711315,
  "lon": 2.3440128,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "email": "contact@corcorans.fr",
    "name": "Corcoran\'s",
    "phone": "+33 1 40 39 00 16",
    "website": "www.corcorans.fr"
  }
},
{
  "type": "node",
  "id": 1486313987,
  "lat": 48.8709873,
  "lon": 2.3449321,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe",
    "name": "James Hetfeeld\'s Pub"
  }
},
{
  "type": "node",
  "id": 1486314027,
  "lat": 48.8706525,
  "lon": 2.3467197,
  "tags": {
    "amenity": "bar",
    "name": "Le Petit Bistrot"
  }
},
{
  "type": "node",
  "id": 1486314048,
  "lat": 48.8737265,
  "lon": 2.3505928,
  "tags": {
    "amenity": "pub",
    "name": "Le Vizir"
  }
},
{
  "type": "node",
  "id": 1488772080,
  "lat": 48.8784174,
  "lon": 2.3564644,
  "tags": {
    "amenity": "bar",
    "name": "Aux Deux Gares"
  }
},
{
  "type": "node",
  "id": 1488772097,
  "lat": 48.8796001,
  "lon": 2.3577149,
  "tags": {
    "amenity": "bar",
    "name": "Le Camélia"
  }
},
{
  "type": "node",
  "id": 1488772104,
  "lat": 48.8768603,
  "lon": 2.3560228,
  "tags": {
    "amenity": "bar",
    "name": "Stop Nord Est"
  }
},
{
  "type": "node",
  "id": 1489177443,
  "lat": 48.8811904,
  "lon": 2.3637372,
  "tags": {
    "amenity": "bar",
    "name": "La Rose Rouge"
  }
},
{
  "type": "node",
  "id": 1489177454,
  "lat": 48.8827558,
  "lon": 2.3708586,
  "tags": {
    "amenity": "bar",
    "name": "Le Rond Point"
  }
},
{
  "type": "node",
  "id": 1489467285,
  "lat": 48.8757800,
  "lon": 2.3396684,
  "tags": {
    "amenity": "pub",
    "name": "Le Monaco",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1490922325,
  "lat": 48.8700724,
  "lon": 2.3349268,
  "tags": {
    "amenity": "bar",
    "name": "Aux Gorges du Tarn"
  }
},
{
  "type": "node",
  "id": 1490922368,
  "lat": 48.8681500,
  "lon": 2.3362914,
  "tags": {
    "amenity": "bar",
    "name": "La Tartine"
  }
},
{
  "type": "node",
  "id": 1490922371,
  "lat": 48.8672079,
  "lon": 2.3368573,
  "tags": {
    "amenity": "bar",
    "name": "Le Cesar"
  }
},
{
  "type": "node",
  "id": 1491914923,
  "lat": 48.8974645,
  "lon": 2.2563407,
  "tags": {
    "amenity": "bar",
    "name": "Le Chichito"
  }
},
{
  "type": "node",
  "id": 1503093279,
  "lat": 48.8658764,
  "lon": 2.3368066,
  "tags": {
    "amenity": "bar",
    "name": "La Fontaine Molière"
  }
},
{
  "type": "node",
  "id": 1506448896,
  "lat": 48.8275665,
  "lon": 2.3493951,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1506480687,
  "lat": 48.8747866,
  "lon": 2.3414819,
  "tags": {
    "amenity": "pub",
    "internet_access": "no",
    "name": "Saint-Georges\' Tavern",
    "smoking": "isolated",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 1512693745,
  "lat": 48.8131923,
  "lon": 2.3197787,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "bar",
    "name": "Chistera"
  }
},
{
  "type": "node",
  "id": 1514201692,
  "lat": 48.8952846,
  "lon": 2.2510001,
  "tags": {
    "amenity": "pub",
    "name": "Garden Café",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1531951109,
  "lat": 48.8986483,
  "lon": 2.2465446,
  "tags": {
    "amenity": "bar",
    "name": "Kenflo",
    "source": "Microsoft Bing satellite",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1531951131,
  "lat": 48.8982751,
  "lon": 2.2468894,
  "tags": {
    "amenity": "bar",
    "name": "Le Porto",
    "source": "Microsoft Bing satellite",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1541591962,
  "lat": 48.8695851,
  "lon": 2.3744330,
  "tags": {
    "amenity": "pub",
    "name": "Les Artistes Pub",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1544866110,
  "lat": 48.8535604,
  "lon": 2.4103242,
  "tags": {
    "amenity": "bar",
    "name": "Le Davout"
  }
},
{
  "type": "node",
  "id": 1544890373,
  "lat": 48.8530681,
  "lon": 2.4104272,
  "tags": {
    "amenity": "bar",
    "name": "La Reale"
  }
},
{
  "type": "node",
  "id": 1563764760,
  "lat": 48.8376093,
  "lon": 2.3551119,
  "tags": {
    "amenity": "bar",
    "name": "Au Petit Bar",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1568009811,
  "lat": 48.8321145,
  "lon": 2.2799037,
  "tags": {
    "amenity": "bar",
    "name": "Le Commensal"
  }
},
{
  "type": "node",
  "id": 1579618649,
  "lat": 48.8239653,
  "lon": 2.3231923,
  "tags": {
    "addr:housenumber": "177",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "bar",
    "name": "La Bouffarde"
  }
},
{
  "type": "node",
  "id": 1579628422,
  "lat": 48.8270872,
  "lon": 2.3248231,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1579642957,
  "lat": 48.8274776,
  "lon": 2.3257190,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1579646872,
  "lat": 48.8280761,
  "lon": 2.3273229,
  "tags": {
    "amenity": "bar",
    "name": "Le Bouquet d\'Alésia"
  }
},
{
  "type": "node",
  "id": 1579657907,
  "lat": 48.8291991,
  "lon": 2.3278057,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1581691060,
  "lat": 48.8474011,
  "lon": 2.3777561,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "103",
    "addr:street": "Rue de Charenton",
    "amenity": "cafe",
    "brewery": "kronenbourg",
    "cuisine": "french",
    "name": "L\'escale de Lyon",
    "opening_hours": "Mo-Fr 09:00-20:00"
  }
},
{
  "type": "node",
  "id": 1589659194,
  "lat": 48.8203080,
  "lon": 2.4643270,
  "tags": {
    "amenity": "bar",
    "name": "Le Joinville",
    "tobbaco": "yes"
  }
},
{
  "type": "node",
  "id": 1596069013,
  "lat": 48.8759986,
  "lon": 2.3816785,
  "tags": {
    "addr:country": "FR",
    "amenity": "bar",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "Jovial Café"
  }
},
{
  "type": "node",
  "id": 1598071225,
  "lat": 48.8337665,
  "lon": 2.3191153,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1598071236,
  "lat": 48.8341125,
  "lon": 2.3181604,
  "tags": {
    "amenity": "bar",
    "brewery": "chouffe;tripel_karmeliet",
    "name": "Au Métro"
  }
},
{
  "type": "node",
  "id": 1605061495,
  "lat": 48.8704717,
  "lon": 2.3031606,
  "tags": {
    "amenity": "pub",
    "food": "yes",
    "name": "Cottage Elysée"
  }
},
{
  "type": "node",
  "id": 1616811990,
  "lat": 48.8634629,
  "lon": 2.3440772,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75001",
    "addr:street": "Rue du Jour",
    "amenity": "pub",
    "name": "Quigley\'s Point"
  }
},
{
  "type": "node",
  "id": 1616985541,
  "lat": 48.8823251,
  "lon": 2.3397496,
  "tags": {
    "amenity": "bar",
    "name": "La Fourmi",
    "phone": "+33 1 42 64 70 35",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1618002590,
  "lat": 48.8873987,
  "lon": 2.3561308,
  "tags": {
    "amenity": "bar",
    "name": "La Francaise"
  }
},
{
  "type": "node",
  "id": 1618621677,
  "lat": 48.9058642,
  "lon": 2.2817280,
  "tags": {
    "amenity": "pub",
    "name": "Le Tendance"
  }
},
{
  "type": "node",
  "id": 1620425824,
  "lat": 48.8658704,
  "lon": 2.3983197,
  "tags": {
    "addr:postcode": "75020",
    "addr:street": "Rue du Cambodge",
    "amenity": "bar",
    "name": "Au bon coin"
  }
},
{
  "type": "node",
  "id": 1637095702,
  "lat": 48.8114048,
  "lon": 2.3261009,
  "tags": {
    "amenity": "bar",
    "name": "Le Carves",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1648740488,
  "lat": 48.8121013,
  "lon": 2.2473177,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1650160704,
  "lat": 48.8956894,
  "lon": 2.3411820,
  "tags": {
    "addr:housenumber": "99",
    "addr:postcode": "75018",
    "addr:street": "Rue Championnet",
    "amenity": "bar",
    "name": "Point Bar"
  }
},
{
  "type": "node",
  "id": 1661533104,
  "lat": 48.8514513,
  "lon": 2.3805785,
  "tags": {
    "amenity": "bar",
    "name": "Le Réservoir"
  }
},
{
  "type": "node",
  "id": 1667270078,
  "lat": 48.8428672,
  "lon": 2.3484588,
  "tags": {
    "amenity": "bar",
    "name": "Hide out"
  }
},
{
  "type": "node",
  "id": 1667546981,
  "lat": 48.8334354,
  "lon": 2.3313239,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "name": "Café Daguerre",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1667562696,
  "lat": 48.8946670,
  "lon": 2.3443629,
  "tags": {
    "amenity": "bar",
    "name": "Le Village",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1667563844,
  "lat": 48.8949500,
  "lon": 2.3433680,
  "tags": {
    "addr:city": "Paris",
    "addr:postcode": "75018",
    "addr:street": "Rue Versigny",
    "amenity": "bar",
    "description": "Tobacco",
    "food": "no",
    "name": "Le Diplomate",
    "outdoor_seating": "no",
    "smoking": "outside",
    "tobacco": "yes",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1667577644,
  "lat": 48.8937368,
  "lon": 2.3473963,
  "tags": {
    "amenity": "bar",
    "name": "Le Clin\'s bar"
  }
},
{
  "type": "node",
  "id": 1667577648,
  "lat": 48.8938461,
  "lon": 2.3475036,
  "tags": {
    "amenity": "bar",
    "name": "Le Simplon"
  }
},
{
  "type": "node",
  "id": 1668675883,
  "lat": 48.8935060,
  "lon": 2.3426870,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Reinitas"
  }
},
{
  "type": "node",
  "id": 1668734745,
  "lat": 48.8941720,
  "lon": 2.3462340,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le bénin"
  }
},
{
  "type": "node",
  "id": 1668735604,
  "lat": 48.8941340,
  "lon": 2.3463850,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Costa Rica"
  }
},
{
  "type": "node",
  "id": 1668740214,
  "lat": 48.8940340,
  "lon": 2.3461900,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1668766274,
  "lat": 48.8936100,
  "lon": 2.3477290,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le flash",
    "shop": "tobacco"
  }
},
{
  "type": "node",
  "id": 1668852308,
  "lat": 48.8930400,
  "lon": 2.3435230,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "caffe Poteau"
  }
},
{
  "type": "node",
  "id": 1670102655,
  "lat": 48.8732230,
  "lon": 2.3544700,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Cadran du faubourg"
  }
},
{
  "type": "node",
  "id": 1670106050,
  "lat": 48.8712160,
  "lon": 2.3580210,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le réveil du Xe"
  }
},
{
  "type": "node",
  "id": 1670111247,
  "lat": 48.8706730,
  "lon": 2.3594270,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le petit château d\'eau"
  }
},
{
  "type": "node",
  "id": 1670112642,
  "lat": 48.8703550,
  "lon": 2.3596000,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Taylor"
  }
},
{
  "type": "node",
  "id": 1670117368,
  "lat": 48.8703260,
  "lon": 2.3600480,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le navy",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1670126985,
  "lat": 48.8697550,
  "lon": 2.3610960,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "L\'Eclipse"
  }
},
{
  "type": "node",
  "id": 1670131209,
  "lat": 48.8694730,
  "lon": 2.3616430,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le côte d\'azur"
  }
},
{
  "type": "node",
  "id": 1670301398,
  "lat": 48.8704690,
  "lon": 2.3610130,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1670305377,
  "lat": 48.8709730,
  "lon": 2.3613960,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Au métro"
  }
},
{
  "type": "node",
  "id": 1670306610,
  "lat": 48.8710750,
  "lon": 2.3612300,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1670347985,
  "lat": 48.8715680,
  "lon": 2.3620320,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "L\'Ariel",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1670389118,
  "lat": 48.8719160,
  "lon": 2.3626810,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le cinquante"
  }
},
{
  "type": "node",
  "id": 1670401972,
  "lat": 48.8726860,
  "lon": 2.3635650,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "La patache"
  }
},
{
  "type": "node",
  "id": 1673656597,
  "lat": 48.8722479,
  "lon": 2.3978396,
  "tags": {
    "amenity": "bar",
    "name": "Chez Lilette"
  }
},
{
  "type": "node",
  "id": 1674855139,
  "lat": 48.8914670,
  "lon": 2.3493410,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Rallye",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1674935278,
  "lat": 48.8929850,
  "lon": 2.3440490,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Bistrot le Sainte-Isaure"
  }
},
{
  "type": "node",
  "id": 1674955048,
  "lat": 48.8939200,
  "lon": 2.3452590,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1675068861,
  "lat": 48.8405023,
  "lon": 2.2650429,
  "tags": {
    "addr:housenumber": "23",
    "addr:postcode": "75016",
    "addr:street": "Boulevard Exelmans",
    "amenity": "bar",
    "name": "Le Royal Exelmans",
    "wifi": "free"
  }
},
{
  "type": "node",
  "id": 1676694799,
  "lat": 48.8107068,
  "lon": 2.2479222,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1678243041,
  "lat": 48.8110754,
  "lon": 2.3780355,
  "tags": {
    "amenity": "bar",
    "name": "Au ptit bonheur"
  }
},
{
  "type": "node",
  "id": 1679463071,
  "lat": 48.8914220,
  "lon": 2.3515420,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Chez Gaston"
  }
},
{
  "type": "node",
  "id": 1679463986,
  "lat": 48.8915940,
  "lon": 2.3516290,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le provencial"
  }
},
{
  "type": "node",
  "id": 1679467252,
  "lat": 48.8917510,
  "lon": 2.3517290,
  "tags": {
    "amenity": "bar",
    "name": "L\'Adriatique",
    "newsagent": "yes",
    "source": "Obs. pers.",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1679470399,
  "lat": 48.8919510,
  "lon": 2.3518460,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Aux rendez-vous des amis"
  }
},
{
  "type": "node",
  "id": 1684658935,
  "lat": 48.8445643,
  "lon": 2.3491518,
  "tags": {
    "amenity": "bar",
    "name": "Le Requin Chagrin"
  }
},
{
  "type": "node",
  "id": 1684818337,
  "lat": 48.8431091,
  "lon": 2.3419694,
  "tags": {
    "amenity": "bar",
    "name": "Le Mauzac"
  }
},
{
  "type": "node",
  "id": 1685494665,
  "lat": 48.8693141,
  "lon": 2.3323713,
  "tags": {
    "addr:housenumber": "4",
    "addr:postcode": "75002",
    "addr:street": "Rue Daunou",
    "amenity": "bar",
    "name": "MKP Opéra",
    "source": "www.mkpbar.com",
    "website": "www.mkpbar.com"
  }
},
{
  "type": "node",
  "id": 1691558834,
  "lat": 48.8862067,
  "lon": 2.3175438,
  "tags": {
    "addr:housenumber": "61",
    "addr:postcode": "75017",
    "addr:street": "Rue Legendre",
    "amenity": "bar",
    "name": "West Bar"
  }
},
{
  "type": "node",
  "id": 1692097042,
  "lat": 48.8624680,
  "lon": 2.3549738,
  "tags": {
    "amenity": "bar",
    "name": "Le Duplex"
  }
},
{
  "type": "node",
  "id": 1692228845,
  "lat": 48.8215244,
  "lon": 2.2529641,
  "tags": {
    "amenity": "bar",
    "brewery": "leffe",
    "name": "Le Maryland"
  }
},
{
  "type": "node",
  "id": 1692228848,
  "lat": 48.8186087,
  "lon": 2.2494343,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1693086227,
  "lat": 48.8275402,
  "lon": 2.2846932,
  "tags": {
    "addr:housenumber": "19",
    "amenity": "bar",
    "name": "Les Quartauts"
  }
},
{
  "type": "node",
  "id": 1696343703,
  "lat": 48.8153466,
  "lon": 2.3179502,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "bar",
    "name": "L\'Entr\'Acte",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1702449830,
  "lat": 48.8883787,
  "lon": 2.3534523,
  "tags": {
    "amenity": "bar",
    "name": "L’Omadys"
  }
},
{
  "type": "node",
  "id": 1711318534,
  "lat": 48.8437872,
  "lon": 2.3493332,
  "tags": {
    "amenity": "bar",
    "name": "Student Bar"
  }
},
{
  "type": "node",
  "id": 1728954413,
  "lat": 48.8968267,
  "lon": 2.2481443,
  "tags": {
    "amenity": "bar",
    "entrance": "yes",
    "name": "Bar des sportifs"
  }
},
{
  "type": "node",
  "id": 1736157828,
  "lat": 48.8535516,
  "lon": 2.3746079,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75011",
    "addr:street": "Passage Thiéré",
    "amenity": "pub",
    "name": "La mécanique ondulatoire",
    "source": "www.myspace.com/lamecanique",
    "website": "www.myspace.com/lamecanique"
  }
},
{
  "type": "node",
  "id": 1750728906,
  "lat": 48.8663676,
  "lon": 2.3860046,
  "tags": {
    "amenity": "bar",
    "name": "La Cale Sèche"
  }
},
{
  "type": "node",
  "id": 1750728908,
  "lat": 48.8686610,
  "lon": 2.3900468,
  "tags": {
    "amenity": "bar",
    "name": "La Laverie"
  }
},
{
  "type": "node",
  "id": 1756731231,
  "lat": 48.8408842,
  "lon": 2.2997786,
  "tags": {
    "amenity": "bar",
    "name": "Bistrot Le Cap",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1756731237,
  "lat": 48.8407778,
  "lon": 2.2998335,
  "tags": {
    "amenity": "bar",
    "name": "L\'Auvergne à Paris",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1763203309,
  "lat": 48.8877530,
  "lon": 2.3182328,
  "tags": {
    "amenity": "pub",
    "name": "Le Manoir",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1765229208,
  "lat": 48.8827209,
  "lon": 2.3281869,
  "tags": {
    "amenity": "pub",
    "name": "Brasserie des Banques"
  }
},
{
  "type": "node",
  "id": 1768572992,
  "lat": 48.8193695,
  "lon": 2.3042381,
  "tags": {
    "amenity": "pub",
    "contact:housenumber": "107",
    "name": "L\'Oustalou",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1768576355,
  "lat": 48.8192385,
  "lon": 2.3046650,
  "tags": {
    "amenity": "bar",
    "name": "Le Celia"
  }
},
{
  "type": "node",
  "id": 1768812165,
  "lat": 48.8196148,
  "lon": 2.3059423,
  "tags": {
    "amenity": "bar",
    "name": "Brasserie Le Carrefour"
  }
},
{
  "type": "node",
  "id": 1770232050,
  "lat": 48.8421407,
  "lon": 2.3455456,
  "tags": {
    "amenity": "bar",
    "name": "K-Fêt",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1775407497,
  "lat": 48.8525397,
  "lon": 2.4062717,
  "tags": {
    "addr:housenumber": "60",
    "amenity": "bar",
    "name": "Le Monte Christo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1778519709,
  "lat": 48.8519186,
  "lon": 2.3373763,
  "tags": {
    "amenity": "pub",
    "name": "Les Caves Alliées"
  }
},
{
  "type": "node",
  "id": 1779444212,
  "lat": 48.8147362,
  "lon": 2.3193931,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "bar",
    "name": "Comptoir du Marché"
  }
},
{
  "type": "node",
  "id": 1785271479,
  "lat": 48.8527233,
  "lon": 2.3765138,
  "tags": {
    "amenity": "bar",
    "name": "Le Motel"
  }
},
{
  "type": "node",
  "id": 1785271517,
  "lat": 48.8501042,
  "lon": 2.3782626,
  "tags": {
    "amenity": "bar",
    "name": "Nul bar ailleurs"
  }
},
{
  "type": "node",
  "id": 1785271569,
  "lat": 48.8532457,
  "lon": 2.3759666,
  "tags": {
    "amenity": "bar",
    "name": "Les Abeilles"
  }
},
{
  "type": "node",
  "id": 1785987575,
  "lat": 48.8583239,
  "lon": 2.4334742,
  "tags": {
    "amenity": "bar",
    "name": "Le bar du marché"
  }
},
{
  "type": "node",
  "id": 1786108265,
  "lat": 48.8827126,
  "lon": 2.2389966,
  "tags": {
    "amenity": "bar",
    "brewery:note": "Jenlain",
    "name": "Le coupole d\'argent"
  }
},
{
  "type": "node",
  "id": 1789894287,
  "lat": 48.8660229,
  "lon": 2.3666774,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1789944746,
  "lat": 48.8668369,
  "lon": 2.3739208,
  "tags": {
    "addr:housenumber": "49",
    "addr:postcode": "75011",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "bar",
    "name": "UFO Bar"
  }
},
{
  "type": "node",
  "id": 1789946258,
  "lat": 48.8667946,
  "lon": 2.3743500,
  "tags": {
    "addr:housenumber": "64",
    "addr:postcode": "75011",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "bar",
    "name": "L\'alimentation générale",
    "website": "http://www.alimentation-generale.net/"
  }
},
{
  "type": "node",
  "id": 1793527745,
  "lat": 48.8729261,
  "lon": 2.3537842,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "name": "La Ferme"
  }
},
{
  "type": "node",
  "id": 1793527747,
  "lat": 48.8729261,
  "lon": 2.3542213,
  "tags": {
    "amenity": "pub",
    "name": "Le Napoléon"
  }
},
{
  "type": "node",
  "id": 1800349948,
  "lat": 48.8276580,
  "lon": 2.3500100,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe;leffe;tripel_karmeliet;guinness;chimay",
    "name": "Chez Michel"
  }
},
{
  "type": "node",
  "id": 1802179921,
  "lat": 48.8732730,
  "lon": 2.3532176,
  "tags": {
    "amenity": "bar",
    "name": "El Papi Chulo"
  }
},
{
  "type": "node",
  "id": 1802275517,
  "lat": 48.9014992,
  "lon": 2.3033005,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1812659246,
  "lat": 48.8793707,
  "lon": 2.3458902,
  "tags": {
    "amenity": "bar",
    "name": "La Manufacture"
  }
},
{
  "type": "node",
  "id": 1813684597,
  "lat": 48.8449764,
  "lon": 2.3549028,
  "tags": {
    "amenity": "pub",
    "brewery": "affligem",
    "name": "Les Arènes"
  }
},
{
  "type": "node",
  "id": 1823551400,
  "lat": 48.8814226,
  "lon": 2.3285073,
  "tags": {
    "amenity": "pub",
    "name": "Parme Clichy"
  }
},
{
  "type": "node",
  "id": 1823551410,
  "lat": 48.8817375,
  "lon": 2.3283675,
  "tags": {
    "addr:housenumber": "64",
    "addr:street": "Rue de Clichy",
    "amenity": "pub",
    "name": "The Coq & Bulldog",
    "phone": "+33-9-82405636",
    "website": "http://www.facebook.com/pages/The-Coq-Bulldog-Pub/226637367401560"
  }
},
{
  "type": "node",
  "id": 1824334810,
  "lat": 48.8571157,
  "lon": 2.3684747,
  "tags": {
    "addr:housenumber": "48",
    "addr:postcode": "75011",
    "addr:street": "Boulevard Beaumarchais",
    "amenity": "bar",
    "name": "Cuba Compagnie",
    "website": "http://www.cubacompagnie.com/",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1824374964,
  "lat": 48.8578918,
  "lon": 2.3464512,
  "tags": {
    "addr:housenumber": "17",
    "addr:street": "Avenue Victoria",
    "amenity": "pub",
    "brewery": "guinness;carlsberg;kronenbourg;grimbergen",
    "internet_access": "wlan",
    "name": "Le Dernier Bar Avant la Fin du Monde",
    "phone": "+33-1-53009895",
    "website": "www.dernierbar.com"
  }
},
{
  "type": "node",
  "id": 1826085661,
  "lat": 48.8357356,
  "lon": 2.3522840,
  "tags": {
    "addr:housenumber": "32",
    "addr:postcode": "75013",
    "addr:street": "Avenue des Gobelins",
    "amenity": "bar",
    "name": "Le Réveil-Matin",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1827138891,
  "lat": 48.8766343,
  "lon": 2.3407712,
  "tags": {
    "amenity": "bar",
    "name": "Le Dreamlight\'s"
  }
},
{
  "type": "node",
  "id": 1827138892,
  "lat": 48.8765191,
  "lon": 2.3406058,
  "tags": {
    "amenity": "pub",
    "name": "Le Fontenoy",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1827138893,
  "lat": 48.8765034,
  "lon": 2.3395297,
  "tags": {
    "amenity": "pub",
    "name": "Le Havane",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1827357946,
  "lat": 48.8515019,
  "lon": 2.2777745,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1830661957,
  "lat": 48.8648511,
  "lon": 2.3817815,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75011",
    "addr:street": "Avenue Jean Aicard",
    "amenity": "bar",
    "brewery": "Brewdog",
    "name": "La Fine Mousse",
    "website": "lafinemousse.fr"
  }
},
{
  "type": "node",
  "id": 1835765099,
  "lat": 48.8328925,
  "lon": 2.2883940,
  "tags": {
    "addr:housenumber": "386",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vaugirard",
    "amenity": "bar",
    "name": "Dupont Versailles",
    "website": "http://www.dupontversailles.com/"
  }
},
{
  "type": "node",
  "id": 1838552620,
  "lat": 48.8490395,
  "lon": 2.3485570,
  "tags": {
    "amenity": "bar",
    "brewery": "chouffe;Brooklyn lager",
    "name": "La lucha libre"
  }
},
{
  "type": "node",
  "id": 1861767365,
  "lat": 48.8709579,
  "lon": 2.3576608,
  "tags": {
    "amenity": "bar",
    "name": "Open Café",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1865299715,
  "lat": 48.8865801,
  "lon": 2.3354932,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1867384174,
  "lat": 48.8881851,
  "lon": 2.3480652,
  "tags": {
    "addr:housenumber": "17",
    "addr:street": "Rue Custine",
    "amenity": "bar",
    "name": "Le coude à coude"
  }
},
{
  "type": "node",
  "id": 1867397539,
  "lat": 48.8884653,
  "lon": 2.3485324,
  "tags": {
    "addr:housenumber": "102",
    "addr:postcode": "75018",
    "addr:street": "Rue Doudeauville",
    "amenity": "bar",
    "name": "Le Patio"
  }
},
{
  "type": "node",
  "id": 1867428325,
  "lat": 48.8869647,
  "lon": 2.3478228,
  "tags": {
    "addr:housenumber": "40",
    "addr:street": "Rue de Clignancourt",
    "amenity": "bar",
    "name": "La Chope du Château Rouge"
  }
},
{
  "type": "node",
  "id": 1869060190,
  "lat": 48.8920227,
  "lon": 2.3428666,
  "tags": {
    "amenity": "bar",
    "brewery": "chouffe",
    "internet_access": "no",
    "name": "L\'Alibi"
  }
},
{
  "type": "node",
  "id": 1869850882,
  "lat": 48.8857577,
  "lon": 2.3451141,
  "tags": {
    "amenity": "bar",
    "name": "No Problemo"
  }
},
{
  "type": "node",
  "id": 1871182829,
  "lat": 48.8554636,
  "lon": 2.3337901,
  "tags": {
    "amenity": "bar",
    "name": "La Hune"
  }
},
{
  "type": "node",
  "id": 1871186489,
  "lat": 48.8604940,
  "lon": 2.3409119,
  "tags": {
    "amenity": "bar",
    "name": "Le Fumoir",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1875819752,
  "lat": 48.8846517,
  "lon": 2.3291078,
  "tags": {
    "amenity": "pub",
    "internet_access": "no",
    "name": "Clichy\'s Tavern",
    "source": "local_knowledge"
  }
},
{
  "type": "node",
  "id": 1877475420,
  "lat": 48.8910607,
  "lon": 2.3394636,
  "tags": {
    "amenity": "bar",
    "name": "L\'étoile de Montmartre"
  }
},
{
  "type": "node",
  "id": 1879638998,
  "lat": 48.8466235,
  "lon": 2.4291176,
  "tags": {
    "addr:housenumber": "9",
    "addr:postcode": "94300",
    "addr:street": "Avenue de la République",
    "amenity": "bar",
    "int_name": "Le Coste Bleu",
    "name": "Le Coste Bleu"
  }
},
{
  "type": "node",
  "id": 1881131630,
  "lat": 48.8461814,
  "lon": 2.4288952,
  "tags": {
    "amenity": "bar",
    "name": "Le Berlioz"
  }
},
{
  "type": "node",
  "id": 1884433764,
  "lat": 48.8429926,
  "lon": 2.3485399,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "18",
    "addr:postcode": "75005",
    "addr:street": "Rue du Pot de Fer",
    "amenity": "bar;pub",
    "brewery": "brewdog;various",
    "name": "Brewberry",
    "shop": "beverages",
    "website": "http://www.brewberry.fr"
  }
},
{
  "type": "node",
  "id": 1886081456,
  "lat": 48.8827601,
  "lon": 2.3372823,
  "tags": {
    "amenity": "bar",
    "internet_access": "no",
    "name": "Rock \'n Roll Circus",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1889510835,
  "lat": 48.8519424,
  "lon": 2.3384522,
  "tags": {
    "amenity": "bar",
    "name": "Café les Editeurs"
  }
},
{
  "type": "node",
  "id": 1889706600,
  "lat": 48.9016106,
  "lon": 2.2512895,
  "tags": {
    "amenity": "bar",
    "name": "Café Baraka"
  }
},
{
  "type": "node",
  "id": 1894585956,
  "lat": 48.8883514,
  "lon": 2.2971194,
  "tags": {
    "amenity": "bar",
    "name": "Le Senlis"
  }
},
{
  "type": "node",
  "id": 1896376768,
  "lat": 48.8933968,
  "lon": 2.3371262,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1899126641,
  "lat": 48.8876293,
  "lon": 2.4644255,
  "tags": {
    "amenity": "bar",
    "name": "4-2-1"
  }
},
{
  "type": "node",
  "id": 1899146447,
  "lat": 48.8947683,
  "lon": 2.4630776,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1904888779,
  "lat": 48.8521891,
  "lon": 2.3465789,
  "tags": {
    "amenity": "bar",
    "name": "Les Trois Maillets",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1905655546,
  "lat": 48.8526083,
  "lon": 2.3466482,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness;stella artois",
    "name": "Shywawa"
  }
},
{
  "type": "node",
  "id": 1905679041,
  "lat": 48.8887735,
  "lon": 2.3938208,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1907153763,
  "lat": 48.8490772,
  "lon": 2.4063369,
  "tags": {
    "amenity": "bar",
    "name": "L\'Autobus"
  }
},
{
  "type": "node",
  "id": 1909186940,
  "lat": 48.8975354,
  "lon": 2.3338607,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909187152,
  "lat": 48.8975417,
  "lon": 2.3342523,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909235653,
  "lat": 48.8939135,
  "lon": 2.3350409,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909243311,
  "lat": 48.8939770,
  "lon": 2.3330775,
  "tags": {
    "amenity": "bar",
    "name": "Le Kiez"
  }
},
{
  "type": "node",
  "id": 1909254294,
  "lat": 48.8935624,
  "lon": 2.3293592,
  "tags": {
    "amenity": "bar",
    "name": "Bar de l\'Espérance"
  }
},
{
  "type": "node",
  "id": 1909836698,
  "lat": 48.8954780,
  "lon": 2.3285255,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909838773,
  "lat": 48.8964866,
  "lon": 2.3287937,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909840831,
  "lat": 48.8974071,
  "lon": 2.3296252,
  "tags": {
    "amenity": "bar",
    "name": "Le Terminus"
  }
},
{
  "type": "node",
  "id": 1909862522,
  "lat": 48.8957777,
  "lon": 2.3393455,
  "tags": {
    "amenity": "bar",
    "name": "L\'Anjou"
  }
},
{
  "type": "node",
  "id": 1916123028,
  "lat": 48.8350746,
  "lon": 2.2888425,
  "tags": {
    "amenity": "bar",
    "name": "Le Petit Hameau"
  }
},
{
  "type": "node",
  "id": 1916173383,
  "lat": 48.8340535,
  "lon": 2.2873426,
  "tags": {
    "amenity": "bar",
    "name": "La Bauloise"
  }
},
{
  "type": "node",
  "id": 1916353716,
  "lat": 48.8895550,
  "lon": 2.3338045,
  "tags": {
    "addr:housenumber": "40",
    "brewery": "Brewdog",
    "name": "Bières Cultes",
    "shop": "beverages",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1917523408,
  "lat": 48.8221377,
  "lon": 2.3582427,
  "tags": {
    "amenity": "bar",
    "name": "La Croix du Sud"
  }
},
{
  "type": "node",
  "id": 1927627184,
  "lat": 48.8912689,
  "lon": 2.3395224,
  "tags": {
    "addr:housenumber": "134",
    "addr:postcode": "75018",
    "addr:street": "Rue Marcadet",
    "amenity": "bar",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "La Cave Café",
    "website": "http://lacavecafe.fr/"
  }
},
{
  "type": "node",
  "id": 1930249941,
  "lat": 48.8683080,
  "lon": 2.3897771,
  "tags": {
    "amenity": "bar",
    "name": "Le Lieu Dit",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1931490819,
  "lat": 48.8748542,
  "lon": 2.3087625,
  "tags": {
    "amenity": "bar",
    "name": "Le Florence",
    "note:fr": "Bar, restaurant; Salle au Sous Pot",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1931492402,
  "lat": 48.8302605,
  "lon": 2.3138234,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1939149271,
  "lat": 48.8421986,
  "lon": 2.2819707,
  "tags": {
    "addr:housenumber": "161",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "bar",
    "name": "Millésime"
  }
},
{
  "type": "node",
  "id": 1941555013,
  "lat": 48.8963284,
  "lon": 2.3330215,
  "tags": {
    "addr:housenumber": "52",
    "addr:postcode": "75018",
    "addr:street": "Rue Leibniz",
    "amenity": "bar",
    "name": "La Bricole",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1950661360,
  "lat": 48.8575637,
  "lon": 2.3994629,
  "tags": {
    "amenity": "bar",
    "name": "L\'Étoile d\'Or"
  }
},
{
  "type": "node",
  "id": 1950785346,
  "lat": 48.8577147,
  "lon": 2.4074098,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Blaise"
  }
},
{
  "type": "node",
  "id": 1950787049,
  "lat": 48.8518332,
  "lon": 2.3373498,
  "tags": {
    "amenity": "bar",
    "name": "Chez Jean-Pierre"
  }
},
{
  "type": "node",
  "id": 1951465699,
  "lat": 48.8556888,
  "lon": 2.4005126,
  "tags": {
    "addr:housename": "Café de la Chope",
    "amenity": "pub",
    "name": "La Chope"
  }
},
{
  "type": "node",
  "id": 1952633198,
  "lat": 48.8759342,
  "lon": 2.2290512,
  "tags": {
    "addr:housenumber": "106",
    "addr:postcode": "92150",
    "addr:street": "Rue Carnot",
    "amenity": "bar",
    "name": "Chez Toumert",
    "website": "http://cheztoumert.free.fr/"
  }
},
{
  "type": "node",
  "id": 1955238003,
  "lat": 48.8519052,
  "lon": 2.4236470,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1955238005,
  "lat": 48.8526846,
  "lon": 2.4239243,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1955238007,
  "lat": 48.8537915,
  "lon": 2.4244888,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1955238008,
  "lat": 48.8536991,
  "lon": 2.4236240,
  "tags": {
    "amenity": "bar",
    "name": "Des bulles et des ballons"
  }
},
{
  "type": "node",
  "id": 1955238009,
  "lat": 48.8522009,
  "lon": 2.4263143,
  "tags": {
    "amenity": "bar",
    "name": "Renaissance"
  }
},
{
  "type": "node",
  "id": 1955238010,
  "lat": 48.8520139,
  "lon": 2.4238385,
  "tags": {
    "amenity": "bar",
    "name": "Les tonneaux"
  }
},
{
  "type": "node",
  "id": 1955238011,
  "lat": 48.8534715,
  "lon": 2.4234390,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1955771578,
  "lat": 48.8927998,
  "lon": 2.2385735,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "indoor": "yes",
    "layer": "0",
    "level": "0",
    "microbrewery": "yes",
    "name": "Flo Prestige"
  }
},
{
  "type": "node",
  "id": 1957130714,
  "lat": 48.8571054,
  "lon": 2.4314615,
  "tags": {
    "amenity": "bar",
    "name": "Le Beaumarchais"
  }
},
{
  "type": "node",
  "id": 1957130719,
  "lat": 48.8560712,
  "lon": 2.4256465,
  "tags": {
    "amenity": "bar",
    "name": "Le Marceau"
  }
},
{
  "type": "node",
  "id": 1957130724,
  "lat": 48.8574266,
  "lon": 2.4331540,
  "tags": {
    "amenity": "bar",
    "name": "Royal Montreuil"
  }
},
{
  "type": "node",
  "id": 1957130726,
  "lat": 48.8563589,
  "lon": 2.4272504,
  "tags": {
    "amenity": "bar",
    "name": "Café du Centre"
  }
},
{
  "type": "node",
  "id": 1957130730,
  "lat": 48.8548394,
  "lon": 2.4175545,
  "tags": {
    "amenity": "bar",
    "name": "L\'Alembert"
  }
},
{
  "type": "node",
  "id": 1957144764,
  "lat": 48.8542026,
  "lon": 2.4276788,
  "tags": {
    "amenity": "bar",
    "name": "L\'Industrie"
  }
},
{
  "type": "node",
  "id": 1962254628,
  "lat": 48.8531173,
  "lon": 2.4387001,
  "tags": {
    "amenity": "bar",
    "name": "Le Wilson"
  }
},
{
  "type": "node",
  "id": 1978246831,
  "lat": 48.8969286,
  "lon": 2.3866620,
  "tags": {
    "amenity": "bar",
    "name": "La Pena Festayre"
  }
},
{
  "type": "node",
  "id": 1980895343,
  "lat": 48.8505469,
  "lon": 2.4061987,
  "tags": {
    "addr:housenumber": "87",
    "amenity": "bar",
    "name": "Bistrot de l\'Avenir",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 2000813093,
  "lat": 48.8882304,
  "lon": 2.3741760,
  "tags": {
    "amenity": "bar",
    "name": "Bar du Métro",
    "note:fr": "Café / bar",
    "source": "wikimedia"
  }
},
{
  "type": "node",
  "id": 2003145821,
  "lat": 48.8633570,
  "lon": 2.3506638,
  "tags": {
    "amenity": "bar",
    "name": "Le Spicy home"
  }
},
{
  "type": "node",
  "id": 2003591358,
  "lat": 48.8577440,
  "lon": 2.4279651,
  "tags": {
    "amenity": "bar",
    "name": "Au rendez-vous des chauffeurs"
  }
},
{
  "type": "node",
  "id": 2011451022,
  "lat": 48.8412533,
  "lon": 2.4177480,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 2012707485,
  "lat": 48.8356746,
  "lon": 2.3226602,
  "tags": {
    "amenity": "bar",
    "atm": "no",
    "food": "yes",
    "internet_access": "no",
    "name": "Le ton air de brest",
    "outdoor_seating": "no",
    "smoking": "separated"
  }
},
{
  "type": "node",
  "id": 2012720252,
  "lat": 48.8354175,
  "lon": 2.3228183,
  "tags": {
    "amenity": "bar",
    "atm": "no",
    "food": "yes",
    "internet_access": "no",
    "name": "Le milev",
    "outdoor_seating": "no",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 2018171323,
  "lat": 48.8607749,
  "lon": 2.3784617,
  "tags": {
    "amenity": "bar",
    "name": "Le rochebrune"
  }
},
{
  "type": "node",
  "id": 2018469101,
  "lat": 48.8555652,
  "lon": 2.3871679,
  "tags": {
    "amenity": "bar",
    "name": "Le Carbone 14"
  }
},
{
  "type": "node",
  "id": 2020244755,
  "lat": 48.8239559,
  "lon": 2.2972073,
  "tags": {
    "amenity": "bar",
    "name": "Le Maine-Anjou",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2038629581,
  "lat": 48.8822854,
  "lon": 2.3399369,
  "tags": {
    "amenity": "bar",
    "atm": "no",
    "food": "no",
    "internet_access": "no",
    "name": "La Cantine de la Cigale",
    "outdoor_seating": "yes",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2041908463,
  "lat": 48.8893330,
  "lon": 2.2480580,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le nouveau monde",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2043667780,
  "lat": 48.8960190,
  "lon": 2.2367120,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Bistrot du faubourg"
  }
},
{
  "type": "node",
  "id": 2043908277,
  "lat": 48.8442360,
  "lon": 2.3235210,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Limonade",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2048549463,
  "lat": 48.8905438,
  "lon": 2.4591078,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2048549478,
  "lat": 48.8940814,
  "lon": 2.4614735,
  "tags": {
    "amenity": "bar",
    "name": "Le Michelet"
  }
},
{
  "type": "node",
  "id": 2048549482,
  "lat": 48.8924413,
  "lon": 2.4559589,
  "tags": {
    "amenity": "bar",
    "name": "La pyramide"
  }
},
{
  "type": "node",
  "id": 2048549491,
  "lat": 48.8883040,
  "lon": 2.4572947,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2048565804,
  "lat": 48.8897264,
  "lon": 2.4525873,
  "tags": {
    "amenity": "bar",
    "name": "Le Celtique"
  }
},
{
  "type": "node",
  "id": 2071529375,
  "lat": 48.8311964,
  "lon": 2.2788479,
  "tags": {
    "amenity": "bar",
    "name": "Le Boyard"
  }
},
{
  "type": "node",
  "id": 2072607634,
  "lat": 48.8582338,
  "lon": 2.4341820,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "93100",
    "addr:street": "place du marché",
    "amenity": "bar",
    "name": "Le chinois",
    "website": "https://www.facebook.com/lechinoisdemontreuil"
  }
},
{
  "type": "node",
  "id": 2078512771,
  "lat": 48.8743652,
  "lon": 2.3625584,
  "tags": {
    "amenity": "pub",
    "name": "L\'atmosphere"
  }
},
{
  "type": "node",
  "id": 2078918263,
  "lat": 48.8153363,
  "lon": 2.4297044,
  "tags": {
    "addr:housenumber": "2",
    "amenity": "bar",
    "name": "Bar des 2 Moulins",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2081291845,
  "lat": 48.8405572,
  "lon": 2.3224049,
  "tags": {
    "alt_name": "Le bar des amis des amis",
    "amenity": "bar",
    "name": "L\'Adada"
  }
},
{
  "type": "node",
  "id": 2081656009,
  "lat": 48.8713202,
  "lon": 2.3658560,
  "tags": {
    "addr:housenumber": "70",
    "addr:postcode": "75010",
    "addr:street": "Quai de Jemmapes",
    "amenity": "pub",
    "name": "The Cork and Cavan"
  }
},
{
  "type": "node",
  "id": 2084076530,
  "lat": 48.8142316,
  "lon": 2.3612488,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "23",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "pub",
    "entrance": "main",
    "name": "New Billard",
    "sport": "billard",
    "website": "http://www.new-billard.fr",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2086399143,
  "lat": 48.8407069,
  "lon": 2.3164233,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2086399144,
  "lat": 48.8428397,
  "lon": 2.3260649,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe;guinness;carlsberg;Leffe_Royale;Magner;Pilsner_Urquell;Trappe_Triple;Maredsous;John_Martin\'s;Blanche_de_Bruxelles;Carolus_d\'or;Cuvee_des_Trolls;Framboise_Lindemans;Bière_de_saison",
    "name": "Le Falstaff",
    "opening_hours": "Mo-Fr 00:00-04:00, 08:30-24:00;Sa-Su 00:00-05:00, 08:30-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2086399148,
  "lat": 48.8409248,
  "lon": 2.3157527,
  "tags": {
    "amenity": "bar",
    "name": "Café le Blüe Boy",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2086399151,
  "lat": 48.8413133,
  "lon": 2.3184421,
  "tags": {
    "amenity": "bar",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2086399153,
  "lat": 48.8414979,
  "lon": 2.3246397,
  "tags": {
    "amenity": "bar",
    "name": "Café Odessa"
  }
},
{
  "type": "node",
  "id": 2086399154,
  "lat": 48.8432840,
  "lon": 2.3249954,
  "tags": {
    "amenity": "bar",
    "name": "Indiana Café",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2086399158,
  "lat": 48.8407506,
  "lon": 2.3165877,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2086399172,
  "lat": 48.8415356,
  "lon": 2.3248762,
  "tags": {
    "amenity": "bar",
    "name": "Café de la place"
  }
},
{
  "type": "node",
  "id": 2086423565,
  "lat": 48.8781338,
  "lon": 2.2877691,
  "tags": {
    "amenity": "bar",
    "name": "Bistro le Florilège"
  }
},
{
  "type": "node",
  "id": 2087542131,
  "lat": 48.8910090,
  "lon": 2.3460570,
  "tags": {
    "addr:city": "Paris",
    "addr:postcode": "75018",
    "addr:street": "Rue Eugène Sue",
    "amenity": "bar",
    "food": "no",
    "name": "L\'absurde imposture",
    "outdoor_seating": "no",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2090756579,
  "lat": 48.8498032,
  "lon": 2.4508417,
  "tags": {
    "amenity": "bar",
    "name": "Le Royal"
  }
},
{
  "type": "node",
  "id": 2103216539,
  "lat": 48.8728753,
  "lon": 2.3429491,
  "tags": {
    "amenity": "bar",
    "name": "La Comete",
    "note:fr": "Bar Resto",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2108026249,
  "lat": 48.8394700,
  "lon": 2.3227210,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue Vandamme",
    "amenity": "bar",
    "name": "Kriza Bar"
  }
},
{
  "type": "node",
  "id": 2112678889,
  "lat": 48.8419451,
  "lon": 2.2631629,
  "tags": {
    "amenity": "bar",
    "name": "Le Tunnel"
  }
},
{
  "type": "node",
  "id": 2112678904,
  "lat": 48.8420009,
  "lon": 2.2643568,
  "tags": {
    "amenity": "bar",
    "brewery": "Super bock",
    "name": "Nela café"
  }
},
{
  "type": "node",
  "id": 2116553868,
  "lat": 48.8913333,
  "lon": 2.3185158,
  "tags": {
    "amenity": "bar",
    "name": "Au Bistro Cardinet"
  }
},
{
  "type": "node",
  "id": 2124308289,
  "lat": 48.8561348,
  "lon": 2.4048284,
  "tags": {
    "amenity": "bar",
    "name": "L\'Aubisque"
  }
},
{
  "type": "node",
  "id": 2124487512,
  "lat": 48.8468777,
  "lon": 2.4086290,
  "tags": {
    "amenity": "bar",
    "name": "Le Bar Botté"
  }
},
{
  "type": "node",
  "id": 2124487682,
  "lat": 48.8468470,
  "lon": 2.4088515,
  "tags": {
    "amenity": "bar",
    "name": "Le Métro"
  }
},
{
  "type": "node",
  "id": 2124494286,
  "lat": 48.8479121,
  "lon": 2.4058825,
  "tags": {
    "amenity": "bar",
    "name": "Le Vincennes"
  }
},
{
  "type": "node",
  "id": 2124933205,
  "lat": 48.8493703,
  "lon": 2.2944544,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2125406245,
  "lat": 48.8836495,
  "lon": 2.3167431,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "13",
    "addr:postcode": "75017",
    "addr:street": "Rue de Saussure",
    "amenity": "bar",
    "name": "La Colombe"
  }
},
{
  "type": "node",
  "id": 2125571208,
  "lat": 48.8720494,
  "lon": 2.3430269,
  "tags": {
    "amenity": "bar",
    "name": "Le Longchamp",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2134878775,
  "lat": 48.8228779,
  "lon": 2.3555122,
  "tags": {
    "amenity": "bar",
    "name": "Century Bar"
  }
},
{
  "type": "node",
  "id": 2137762218,
  "lat": 48.8610880,
  "lon": 2.3512876,
  "tags": {
    "amenity": "restaurant",
    "brewery": "yes",
    "cocktails": "yes",
    "name": "Bistrot du centre",
    "note:fr": "Pizza, Brasserie, Cocktails",
    "pizza": "yes",
    "source": "survey",
    "terrasse": "yes"
  }
},
{
  "type": "node",
  "id": 2149899597,
  "lat": 48.8281219,
  "lon": 2.3158457,
  "tags": {
    "amenity": "bar",
    "brewery": "yes",
    "name": "L\'Europe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2151917025,
  "lat": 48.8193316,
  "lon": 2.3202827,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "bar",
    "name": "Bar du Théâtre",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2161521592,
  "lat": 48.8795597,
  "lon": 2.2361944,
  "tags": {
    "amenity": "bar",
    "name": "Le cartel"
  }
},
{
  "type": "node",
  "id": 2161550350,
  "lat": 48.8799240,
  "lon": 2.2408721,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2161550362,
  "lat": 48.8796867,
  "lon": 2.2405301,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2161550366,
  "lat": 48.8792219,
  "lon": 2.2401358,
  "tags": {
    "amenity": "bar",
    "name": "Night city"
  }
},
{
  "type": "node",
  "id": 2161550371,
  "lat": 48.8793357,
  "lon": 2.2407594,
  "tags": {
    "amenity": "bar",
    "name": "Le Brazza"
  }
},
{
  "type": "node",
  "id": 2161550374,
  "lat": 48.8795298,
  "lon": 2.2403356,
  "tags": {
    "amenity": "bar",
    "name": "Au RDV du batiment"
  }
},
{
  "type": "node",
  "id": 2164023034,
  "lat": 48.8730582,
  "lon": 2.3434334,
  "tags": {
    "amenity": "bar",
    "name": "Floquifil",
    "note:fr": "Cave à vin- table",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2165038781,
  "lat": 48.8613396,
  "lon": 2.3430061,
  "tags": {
    "amenity": "bar",
    "name": "Woozy"
  }
},
{
  "type": "node",
  "id": 2167679211,
  "lat": 48.8823621,
  "lon": 2.2384781,
  "tags": {
    "amenity": "bar",
    "name": "Chez José"
  }
},
{
  "type": "node",
  "id": 2178785512,
  "lat": 48.8836139,
  "lon": 2.2408165,
  "tags": {
    "addr:housenumber": "24",
    "addr:postcode": "92800",
    "addr:street": "Rue Marius Jacotot",
    "amenity": "bar",
    "name": "Le zig-zag"
  }
},
{
  "type": "node",
  "id": 2178785515,
  "lat": 48.8829754,
  "lon": 2.2399394,
  "tags": {
    "amenity": "bar",
    "name": "Le jacoto"
  }
},
{
  "type": "node",
  "id": 2179774059,
  "lat": 48.8480339,
  "lon": 2.3711696,
  "tags": {
    "addr:housenumber": "47",
    "addr:street": "Avenue Ledru-Rollin",
    "amenity": "restaurant",
    "brewery": "Heineken;Affligem;Edelweiss",
    "happy_hours": "Mo-Sa 17:00-20:00",
    "name": "Tarmac",
    "opening_hours": "Mo-Sa 07:30-01:00",
    "source": "survey;cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2179813041,
  "lat": 48.8537089,
  "lon": 2.3705103,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Grimbergen;Kronenbourg;1664;Grimbergen_white;",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Bastille",
    "opening_hours": "Mo-Su 07:30-04:30",
    "phone": "+33 (0) 1 43 07 79 95",
    "source": "survey",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2179813042,
  "lat": 48.8537227,
  "lon": 2.3702879,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "10",
    "addr:postcode": "75012",
    "addr:street": "place de la Bastille",
    "amenity": "restaurant",
    "brewery": "Kilkenny;Guinness;Lindemans_raspberry;Grimbergen;Grimbergen_white;Carlsberg;1664;Warsteiner",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Falstaff",
    "opening_hours": "Mo-Fr 08:30-02:00; Fr-Su 00:00-24:00",
    "phone": "+33 (0) 1 43 43 18 33",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 2181213237,
  "lat": 48.8480582,
  "lon": 2.4401437,
  "tags": {
    "amenity": "bar",
    "name": "Le Boudoir"
  }
},
{
  "type": "node",
  "id": 2193098985,
  "lat": 48.8227998,
  "lon": 2.3462308,
  "tags": {
    "amenity": "bar",
    "name": "Le Phenix",
    "note": "restaurant whisky\'s bar"
  }
},
{
  "type": "node",
  "id": 2194256993,
  "lat": 48.8765119,
  "lon": 2.3549110,
  "tags": {
    "amenity": "bar",
    "name": "Le derby",
    "note:fr": "Café, Tabac, Brasserie, PMU",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2197417205,
  "lat": 48.8309811,
  "lon": 2.3172117,
  "tags": {
    "amenity": "bar",
    "name": "Le Bardinet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2202834766,
  "lat": 48.9054883,
  "lon": 2.3920560,
  "tags": {
    "amenity": "bar",
    "name": "Les Arcades",
    "note": "Salon de thé"
  }
},
{
  "type": "node",
  "id": 2202938764,
  "lat": 48.8117474,
  "lon": 2.3906746,
  "tags": {
    "amenity": "bar",
    "name": "Café aux sports"
  }
},
{
  "type": "node",
  "id": 2202938765,
  "lat": 48.8115778,
  "lon": 2.3903715,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Just"
  }
},
{
  "type": "node",
  "id": 2206035004,
  "lat": 48.8143764,
  "lon": 2.3434872,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "microbrewery": "yes",
    "name": "La Taverne",
    "opening_hours": "Mo-Fr 08:00-14:30",
    "phone": "0145464794"
  }
},
{
  "type": "node",
  "id": 2206035007,
  "lat": 48.8149595,
  "lon": 2.3483612,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "microbrewery": "yes",
    "name": "Pizzeria La Fontana"
  }
},
{
  "type": "node",
  "id": 2206746831,
  "lat": 48.8772965,
  "lon": 2.4093947,
  "tags": {
    "amenity": "pub",
    "name": "Corcoran\'s"
  }
},
{
  "type": "node",
  "id": 2207088674,
  "lat": 48.8240226,
  "lon": 2.3413467,
  "tags": {
    "amenity": "bar",
    "name": "La Brigandine"
  }
},
{
  "type": "node",
  "id": 2207095060,
  "lat": 48.8248954,
  "lon": 2.3414221,
  "tags": {
    "amenity": "bar",
    "name": "Les Mains d\'Or"
  }
},
{
  "type": "node",
  "id": 2210579328,
  "lat": 48.8192916,
  "lon": 2.3029814,
  "tags": {
    "amenity": "pub",
    "name": "La Rose des Sables",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2213842106,
  "lat": 48.8215741,
  "lon": 2.3044405,
  "tags": {
    "amenity": "pub",
    "name": "La Divette de Malakoff",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2213842109,
  "lat": 48.8218241,
  "lon": 2.2996401,
  "tags": {
    "amenity": "pub",
    "name": "Le Pareloup",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2231087192,
  "lat": 48.8295986,
  "lon": 2.3338514,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2234720465,
  "lat": 48.8686121,
  "lon": 2.3859914,
  "tags": {
    "amenity": "pub",
    "name": "Demain c\'est loin"
  }
},
{
  "type": "node",
  "id": 2239362634,
  "lat": 48.8364982,
  "lon": 2.2975868,
  "tags": {
    "amenity": "bar",
    "name": "Mini Bar"
  }
},
{
  "type": "node",
  "id": 2239374813,
  "lat": 48.8352818,
  "lon": 2.3025475,
  "tags": {
    "amenity": "bar",
    "name": "Tasco Café"
  }
},
{
  "type": "node",
  "id": 2239380278,
  "lat": 48.8355625,
  "lon": 2.3019038,
  "tags": {
    "amenity": "bar",
    "name": "Le relais Convention",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2239397378,
  "lat": 48.8358980,
  "lon": 2.3007035,
  "tags": {
    "amenity": "bar",
    "name": "Café du marché"
  }
},
{
  "type": "node",
  "id": 2244554034,
  "lat": 48.8597184,
  "lon": 2.4028281,
  "tags": {
    "addr:housename": "Mama Shelter Hotel",
    "addr:housenumber": "109",
    "addr:street": "Rue de Bagnolet",
    "amenity": "bar",
    "name": "Mama Shelter Bar",
    "source": "+33 1 43 48 48 48",
    "website": "http://www.mamashelter.com/de/paris/restaurants/bar/"
  }
},
{
  "type": "node",
  "id": 2244578060,
  "lat": 48.8608921,
  "lon": 2.3439350,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue du Roule",
    "amenity": "bar",
    "name": "N\'Importe Quoi",
    "source": "+33 1 40 26 29 71",
    "website": "http://www.nimportequoi.fr/"
  }
},
{
  "type": "node",
  "id": 2244600614,
  "lat": 48.8581223,
  "lon": 2.3362437,
  "tags": {
    "addr:street": "Quai Malaquais",
    "amenity": "bar",
    "name": "La Balle au Bond",
    "website": "http://www.laballeaubond.fr/Bienvenue.html"
  }
},
{
  "type": "node",
  "id": 2245381991,
  "lat": 48.8902743,
  "lon": 2.3602888,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "name": "Au Roi du Café",
    "phone": "0146074110",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2245452103,
  "lat": 48.8889739,
  "lon": 2.3623979,
  "tags": {
    "amenity": "pub",
    "name": "Paris Pajol",
    "website": "https://www.facebook.com/pages/Paris-Pajol-Bar-Restaurant/50837276428"
  }
},
{
  "type": "node",
  "id": 2247185897,
  "lat": 48.8906110,
  "lon": 2.3613962,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "name": "Brasserie L\'Olive",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2247185908,
  "lat": 48.8899355,
  "lon": 2.3618064,
  "tags": {
    "amenity": "pub",
    "name": "Le Blanco",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2247185911,
  "lat": 48.8911052,
  "lon": 2.3611596,
  "tags": {
    "amenity": "pub",
    "name": "Le Commerce"
  }
},
{
  "type": "node",
  "id": 2247185914,
  "lat": 48.8908415,
  "lon": 2.3611676,
  "tags": {
    "amenity": "pub",
    "name": "Le Monde de Léa",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2258450453,
  "lat": 48.8901550,
  "lon": 2.3611961,
  "tags": {
    "amenity": "pub",
    "name": "Café de la Poste"
  }
},
{
  "type": "node",
  "id": 2258450459,
  "lat": 48.8900693,
  "lon": 2.3622119,
  "tags": {
    "amenity": "pub",
    "name": "Populettes",
    "phone": "0980374147",
    "website": "https://www.facebook.com/populettes"
  }
},
{
  "type": "node",
  "id": 2265964339,
  "lat": 48.8427979,
  "lon": 2.2601266,
  "tags": {
    "amenity": "bar",
    "name": "L\'Empire"
  }
},
{
  "type": "node",
  "id": 2265998704,
  "lat": 48.8394583,
  "lon": 2.2629179,
  "tags": {
    "amenity": "bar",
    "name": "Le 191"
  }
},
{
  "type": "node",
  "id": 2268459863,
  "lat": 48.8900145,
  "lon": 2.3627866,
  "tags": {
    "amenity": "pub",
    "name": "Le Riquet",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2268459870,
  "lat": 48.8913601,
  "lon": 2.3631469,
  "tags": {
    "amenity": "pub",
    "name": "Triangle d\'or"
  }
},
{
  "type": "node",
  "id": 2268459882,
  "lat": 48.8899105,
  "lon": 2.3620699,
  "tags": {
    "alt_name": "Au Bon Couscous",
    "amenity": "pub",
    "name": "Le Bon Couscous"
  }
},
{
  "type": "node",
  "id": 2268836966,
  "lat": 48.8277530,
  "lon": 2.3505091,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue de la Butte aux Cailles",
    "amenity": "bar",
    "name": "Le Merle Moqueur",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2013"
  }
},
{
  "type": "node",
  "id": 2270829889,
  "lat": 48.8817430,
  "lon": 2.3657091,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 2273232846,
  "lat": 48.8426097,
  "lon": 2.2818352,
  "tags": {
    "addr:housenumber": "150",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "bar",
    "name": "Le pari Saint-Charles",
    "note": "bar PMU"
  }
},
{
  "type": "node",
  "id": 2274029184,
  "lat": 48.8901067,
  "lon": 2.3618300,
  "tags": {
    "amenity": "pub",
    "name": "La Chope à Mou\'s"
  }
},
{
  "type": "node",
  "id": 2279508873,
  "lat": 48.8901377,
  "lon": 2.3597002,
  "tags": {
    "amenity": "pub",
    "name": "Café de la Poste"
  }
},
{
  "type": "node",
  "id": 2279711294,
  "lat": 48.8908511,
  "lon": 2.3602853,
  "tags": {
    "amenity": "pub",
    "name": "La Petite Chope"
  }
},
{
  "type": "node",
  "id": 2279711295,
  "lat": 48.8916443,
  "lon": 2.3596030,
  "tags": {
    "amenity": "pub",
    "name": "Bar-Tabac Le Bergerac",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2280474429,
  "lat": 48.8763474,
  "lon": 2.3877275,
  "tags": {
    "amenity": "pub",
    "name": "Le Mustang",
    "phone": "09 51 24 20 97"
  }
},
{
  "type": "node",
  "id": 2284410407,
  "lat": 48.8999979,
  "lon": 2.4383783,
  "tags": {
    "amenity": "pub",
    "name": "La Mascotte de l\'Europe"
  }
},
{
  "type": "node",
  "id": 2285154160,
  "lat": 48.8908932,
  "lon": 2.3596443,
  "tags": {
    "amenity": "pub",
    "name": "Stop Chapelle"
  }
},
{
  "type": "node",
  "id": 2290944644,
  "lat": 48.8489746,
  "lon": 2.2907647,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "28",
    "addr:postcode": "75015",
    "addr:street": "Rue de Lourmel",
    "amenity": "cafe",
    "brewery": "heineken;pelforth;affligem",
    "name": "La Succursale",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2293740285,
  "lat": 48.8482373,
  "lon": 2.3469649,
  "tags": {
    "amenity": "pub",
    "name": "Le ZigZag"
  }
},
{
  "type": "node",
  "id": 2293740288,
  "lat": 48.8508540,
  "lon": 2.3477158,
  "tags": {
    "amenity": "pub",
    "name": "Le Bistrot des Artistes"
  }
},
{
  "type": "node",
  "id": 2295269479,
  "lat": 48.8141498,
  "lon": 2.3492667,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "microbrewery": "yes",
    "name": "L\'Alliance Bis"
  }
},
{
  "type": "node",
  "id": 2295269486,
  "lat": 48.8146703,
  "lon": 2.3477824,
  "tags": {
    "amenity": "bar",
    "name": "Le Vouvray"
  }
},
{
  "type": "node",
  "id": 2295812293,
  "lat": 48.8196529,
  "lon": 2.3647206,
  "tags": {
    "amenity": "bar",
    "name": "Tabac des Sports",
    "source": "local Knowledge",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2298160176,
  "lat": 48.8457908,
  "lon": 2.3539346,
  "tags": {
    "amenity": "pub",
    "name": "Finnegan\'s Wake"
  }
},
{
  "type": "node",
  "id": 2298283303,
  "lat": 48.8526747,
  "lon": 2.4487663,
  "tags": {
    "amenity": "bar",
    "name": "Café A l\'Habitude"
  }
},
{
  "type": "node",
  "id": 2298283305,
  "lat": 48.8526583,
  "lon": 2.4495538,
  "tags": {
    "amenity": "bar",
    "name": "Nostalgie Caffè"
  }
},
{
  "type": "node",
  "id": 2298283306,
  "lat": 48.8526136,
  "lon": 2.4491561,
  "tags": {
    "amenity": "bar",
    "name": "POINT B@R"
  }
},
{
  "type": "node",
  "id": 2298657606,
  "lat": 48.8478098,
  "lon": 2.4348432,
  "tags": {
    "amenity": "bar",
    "name": "Val de Marne"
  }
},
{
  "type": "node",
  "id": 2298657607,
  "lat": 48.8473408,
  "lon": 2.4348372,
  "tags": {
    "amenity": "bar",
    "name": "Vincennes Bastille"
  }
},
{
  "type": "node",
  "id": 2299590422,
  "lat": 48.8585317,
  "lon": 2.4337075,
  "tags": {
    "amenity": "bar",
    "name": "Bar L\'Anjou",
    "source": "Visite sur place"
  }
},
{
  "type": "node",
  "id": 2305186080,
  "lat": 48.8904400,
  "lon": 2.3637643,
  "tags": {
    "amenity": "pub",
    "name": "Le Cadre Noir"
  }
},
{
  "type": "node",
  "id": 2305186081,
  "lat": 48.8901985,
  "lon": 2.3637340,
  "tags": {
    "amenity": "pub",
    "name": "Le Sagitaire"
  }
},
{
  "type": "node",
  "id": 2305979353,
  "lat": 48.8551489,
  "lon": 2.3398837,
  "tags": {
    "amenity": "bar",
    "name": "Le cavern - bar, concert"
  }
},
{
  "type": "node",
  "id": 2312084274,
  "lat": 48.8512675,
  "lon": 2.3899326,
  "tags": {
    "amenity": "bar",
    "name": "Le BizArt"
  }
},
{
  "type": "node",
  "id": 2317308530,
  "lat": 48.8868550,
  "lon": 2.3608645,
  "tags": {
    "alt_name": "Le Vénéto",
    "amenity": "pub",
    "name": "Le Veneto"
  }
},
{
  "type": "node",
  "id": 2325915038,
  "lat": 48.8845594,
  "lon": 2.3650486,
  "tags": {
    "amenity": "bar",
    "name": "Tout va Mieux"
  }
},
{
  "type": "node",
  "id": 2327358561,
  "lat": 48.8107575,
  "lon": 2.3081708,
  "tags": {
    "amenity": "pub",
    "name": "Le Pélican",
    "source": "local Knowledge"
  }
},
{
  "type": "node",
  "id": 2328281907,
  "lat": 48.8862013,
  "lon": 2.3566961,
  "tags": {
    "amenity": "pub",
    "name": "La môme"
  }
},
{
  "type": "node",
  "id": 2329096678,
  "lat": 48.8904042,
  "lon": 2.3201855,
  "tags": {
    "amenity": "bar",
    "name": "Le Libre Echange"
  }
},
{
  "type": "node",
  "id": 2329855383,
  "lat": 48.8977200,
  "lon": 2.3586590,
  "tags": {
    "amenity": "pub",
    "name": "Le Celtic"
  }
},
{
  "type": "node",
  "id": 2333397301,
  "lat": 48.8901546,
  "lon": 2.3614003,
  "tags": {
    "amenity": "pub",
    "name": "En vrac",
    "opening_hours": "Mo 17:00-21:00;Tu-Sa 10:00-22:00;Su 10:00-21:00",
    "website": "http://www.vinenvrac.fr/"
  }
},
{
  "type": "node",
  "id": 2343464256,
  "lat": 48.8960136,
  "lon": 2.4601436,
  "tags": {
    "amenity": "pub",
    "name": "Le Rond Point de la Gare"
  }
},
{
  "type": "node",
  "id": 2345324859,
  "lat": 48.8917130,
  "lon": 2.3492982,
  "tags": {
    "amenity": "bar",
    "name": "La Grappe d\'Or"
  }
},
{
  "type": "node",
  "id": 2347257305,
  "lat": 48.8392807,
  "lon": 2.3902734,
  "tags": {
    "amenity": "bar",
    "name": "La Truyère"
  }
},
{
  "type": "node",
  "id": 2349337349,
  "lat": 48.8863988,
  "lon": 2.3563957,
  "tags": {
    "amenity": "pub",
    "name": "Le Mistral"
  }
},
{
  "type": "node",
  "id": 2349345389,
  "lat": 48.8871043,
  "lon": 2.3599792,
  "tags": {
    "amenity": "pub",
    "name": "Le Bouquet"
  }
},
{
  "type": "node",
  "id": 2349350818,
  "lat": 48.8875981,
  "lon": 2.3596144,
  "tags": {
    "amenity": "pub",
    "name": "La Belle Époque"
  }
},
{
  "type": "node",
  "id": 2355778352,
  "lat": 48.8456711,
  "lon": 2.3490720,
  "tags": {
    "amenity": "pub",
    "name": "River"
  }
},
{
  "type": "node",
  "id": 2355778353,
  "lat": 48.8452705,
  "lon": 2.3491887,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness;heineken;kronenbourg;grimbergen",
    "internet_access": "no",
    "name": "L\'antidote"
  }
},
{
  "type": "node",
  "id": 2355778354,
  "lat": 48.8455873,
  "lon": 2.3490693,
  "tags": {
    "amenity": "bar",
    "name": "Le bateau Ivre"
  }
},
{
  "type": "node",
  "id": 2357227463,
  "lat": 48.8352427,
  "lon": 2.3769655,
  "tags": {
    "amenity": "bar",
    "name": "Nix Nox"
  }
},
{
  "type": "node",
  "id": 2357227464,
  "lat": 48.8369196,
  "lon": 2.3750884,
  "tags": {
    "amenity": "bar",
    "name": "Péniche B2",
    "phone": "0145854032"
  }
},
{
  "type": "node",
  "id": 2358454956,
  "lat": 48.8848468,
  "lon": 2.3565674,
  "tags": {
    "amenity": "pub",
    "name": "Le Nemrod"
  }
},
{
  "type": "node",
  "id": 2358458775,
  "lat": 48.8849808,
  "lon": 2.3595500,
  "tags": {
    "amenity": "pub",
    "name": "Le Capucin"
  }
},
{
  "type": "node",
  "id": 2359132129,
  "lat": 48.8139728,
  "lon": 2.3169522,
  "tags": {
    "amenity": "bar",
    "name": "Le Gaulois"
  }
},
{
  "type": "node",
  "id": 2361287649,
  "lat": 48.8903987,
  "lon": 2.3592281,
  "tags": {
    "amenity": "pub",
    "name": "Le Provençal"
  }
},
{
  "type": "node",
  "id": 2364689548,
  "lat": 48.8129242,
  "lon": 2.3159777,
  "tags": {
    "amenity": "bar",
    "name": "Le Jean Bart"
  }
},
{
  "type": "node",
  "id": 2365654407,
  "lat": 48.8482693,
  "lon": 2.4357193,
  "tags": {
    "amenity": "bar",
    "name": "Mon P\'tit Bistrot"
  }
},
{
  "type": "node",
  "id": 2365811674,
  "lat": 48.8137588,
  "lon": 2.3477625,
  "tags": {
    "amenity": "bar",
    "name": "Le Gallia"
  }
},
{
  "type": "node",
  "id": 2365870598,
  "lat": 48.8150129,
  "lon": 2.3494093,
  "tags": {
    "amenity": "bar",
    "name": "Brasserie de la Mairie"
  }
},
{
  "type": "node",
  "id": 2367321705,
  "lat": 48.8614043,
  "lon": 2.3675596,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "105",
    "addr:postcode": "75011",
    "addr:street": "Rue Amelot",
    "amenity": "bar",
    "brewery": "guinness;Smithwick\'s",
    "internet_access": "no",
    "name": "Pop In",
    "website": "http://popin.fr/"
  }
},
{
  "type": "node",
  "id": 2369244236,
  "lat": 48.8741216,
  "lon": 2.3427260,
  "tags": {
    "amenity": "bar",
    "name": "The B58"
  }
},
{
  "type": "node",
  "id": 2369268910,
  "lat": 48.8127087,
  "lon": 2.3161585,
  "tags": {
    "amenity": "bar",
    "name": "Le Bienvenu",
    "source": "local Knowledge"
  }
},
{
  "type": "node",
  "id": 2370745418,
  "lat": 48.8537623,
  "lon": 2.3817697,
  "tags": {
    "amenity": "pub",
    "name": "Le petit Baiona",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2370785832,
  "lat": 48.8944467,
  "lon": 2.3202187,
  "tags": {
    "addr:housenumber": "78",
    "addr:postcode": "75017",
    "addr:street": "Rue de la Jonquière",
    "amenity": "bar",
    "name": "Le Fer à Cheval - Bar and music"
  }
},
{
  "type": "node",
  "id": 2373476022,
  "lat": 48.8772925,
  "lon": 2.4158179,
  "tags": {
    "amenity": "bar",
    "description": "bar-tabac-journaux",
    "name": "Le Ponsard"
  }
},
{
  "type": "node",
  "id": 2374813500,
  "lat": 48.8526175,
  "lon": 2.3431162,
  "tags": {
    "amenity": "bar",
    "name": "The Gentleman"
  }
},
{
  "type": "node",
  "id": 2375009703,
  "lat": 48.8784205,
  "lon": 2.4222948,
  "tags": {
    "amenity": "bar",
    "description": "bar/tabac/journaux",
    "name": "Les Épinettes"
  }
},
{
  "type": "node",
  "id": 2375148543,
  "lat": 48.8855875,
  "lon": 2.3531342,
  "tags": {
    "amenity": "pub",
    "name": "La Goutte Rouge"
  }
},
{
  "type": "node",
  "id": 2375335936,
  "lat": 48.9066772,
  "lon": 2.3353672,
  "tags": {
    "amenity": "pub",
    "name": "Bihan café"
  }
},
{
  "type": "node",
  "id": 2375536643,
  "lat": 48.9052809,
  "lon": 2.3370838,
  "tags": {
    "amenity": "pub",
    "name": "Le Week-end"
  }
},
{
  "type": "node",
  "id": 2379040874,
  "lat": 48.8103949,
  "lon": 2.3618092,
  "tags": {
    "amenity": "bar",
    "name": "bar du PMU",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2381306274,
  "lat": 48.8806262,
  "lon": 2.4186147,
  "tags": {
    "amenity": "bar",
    "description": "bar/tabac",
    "name": "Le Jean Bart"
  }
},
{
  "type": "node",
  "id": 2381308257,
  "lat": 48.8803431,
  "lon": 2.4217569,
  "tags": {
    "amenity": "bar",
    "description": "bar/hotel/restaurant",
    "name": "Hôtel du Parc",
    "tourism": "hotel"
  }
},
{
  "type": "node",
  "id": 2381310461,
  "lat": 48.8808347,
  "lon": 2.4251705,
  "tags": {
    "amenity": "bar",
    "description": "bar/tabac",
    "name": "Le Royal"
  }
},
{
  "type": "node",
  "id": 2382238078,
  "lat": 48.8777259,
  "lon": 2.4176779,
  "tags": {
    "amenity": "bar",
    "description": "bar/hotel",
    "name": "Le Mace"
  }
},
{
  "type": "node",
  "id": 2383363290,
  "lat": 48.8660965,
  "lon": 2.3482633,
  "tags": {
    "addr:housenumber": "37",
    "addr:street": "Rue Saint-Sauveur",
    "amenity": "bar",
    "name": "Experimental Cocktail Club",
    "phone": "+33 1 45 08 88 09",
    "website": "http://www.experimentalcocktailclub.com"
  }
},
{
  "type": "node",
  "id": 2383363291,
  "lat": 48.8549614,
  "lon": 2.3379207,
  "tags": {
    "addr:housenumber": "23",
    "addr:street": "Rue Mazarine",
    "amenity": "bar",
    "name": "Prescription Cocktail Club",
    "phone": "+33 1 46 34 67 73",
    "website": "http://www.prescriptioncocktailclub.com"
  }
},
{
  "type": "node",
  "id": 2386674838,
  "lat": 48.8715766,
  "lon": 2.3537539,
  "tags": {
    "amenity": "bar",
    "internet_access": "no",
    "name": "Le Mauri7",
    "opening_hours": "Mo-Sa 08:00-02:00",
    "website": "http://www.lemauri7.com/"
  }
},
{
  "type": "node",
  "id": 2387361474,
  "lat": 48.8712919,
  "lon": 2.3698711,
  "tags": {
    "amenity": "bar",
    "name": "Opus Parmentier",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 2387389298,
  "lat": 48.8733970,
  "lon": 2.3707413,
  "tags": {
    "amenity": "bar",
    "name": "Le Dude",
    "phone": "+33 9 73 54 27 14",
    "source": "survey 2014",
    "website": "http://www.ledude.fr"
  }
},
{
  "type": "node",
  "id": 2387390494,
  "lat": 48.8734671,
  "lon": 2.3704021,
  "tags": {
    "amenity": "bar",
    "name": "Zoco",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 2387399043,
  "lat": 48.8733502,
  "lon": 2.3703282,
  "tags": {
    "amenity": "bar",
    "name": "San Luis bar",
    "source": "survey 2013",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 2392409656,
  "lat": 48.8668410,
  "lon": 2.3533606,
  "tags": {
    "amenity": "bar",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 2394065566,
  "lat": 48.8616362,
  "lon": 2.3492126,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe",
    "internet_access": "wlan",
    "name": "Hall\'s Beer Tavern",
    "note:fr": "Pub Restaurant, Bar à Bières",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 2394065575,
  "lat": 48.8610370,
  "lon": 2.3488844,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness;carlsberg",
    "name": "Mc Brides",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 2406196759,
  "lat": 48.8197803,
  "lon": 2.3430846,
  "tags": {
    "addr:housenumber": "10",
    "addr:street": "Boulevard Jourdan",
    "amenity": "bar",
    "name": "Le Fleurus",
    "source": "survey",
    "website": "www.lefleurus.com"
  }
},
{
  "type": "node",
  "id": 2408672196,
  "lat": 48.8441092,
  "lon": 2.4022649,
  "tags": {
    "amenity": "pub",
    "name": "Chez Gudule"
  }
},
{
  "type": "node",
  "id": 2408672211,
  "lat": 48.8453425,
  "lon": 2.4001936,
  "tags": {
    "amenity": "bar",
    "name": "Le P\'tit Gud"
  }
},
{
  "type": "node",
  "id": 2417976078,
  "lat": 48.8530718,
  "lon": 2.3455009,
  "tags": {
    "addr:street": "Rue de la Huchette",
    "amenity": "bar",
    "name": "Ze Bar"
  }
},
{
  "type": "node",
  "id": 2428529855,
  "lat": 48.8450252,
  "lon": 2.4362761,
  "tags": {
    "amenity": "bar",
    "name": "Le Drapeau"
  }
},
{
  "type": "node",
  "id": 2428529858,
  "lat": 48.8465650,
  "lon": 2.4366292,
  "tags": {
    "amenity": "bar",
    "name": "Le Fontenoy"
  }
},
{
  "type": "node",
  "id": 2437013968,
  "lat": 48.8466386,
  "lon": 2.3740238,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "6",
    "addr:postcode": "75012",
    "addr:street": "Rue Michel Chasles",
    "amenity": "restaurant",
    "brewery": "1664;Grimbergen;1664_blanche",
    "cuisine": "french",
    "happy_hours": "Mo-Sa 17:30-20:00",
    "internet_access": "wlan",
    "name": "Le bistrot de Lyon",
    "opening_hours": "Mo-Su 09:00-22:00",
    "phone": "+33 (0) 15578780642",
    "source": "survey",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2438004596,
  "lat": 48.8528075,
  "lon": 2.4386173,
  "tags": {
    "amenity": "bar",
    "name": "Le Couserans"
  }
},
{
  "type": "node",
  "id": 2444236544,
  "lat": 48.8608697,
  "lon": 2.3679199,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2445876965,
  "lat": 48.8930088,
  "lon": 2.3377693,
  "tags": {
    "amenity": "pub",
    "name": "Au Bon Coin"
  }
},
{
  "type": "node",
  "id": 2446096102,
  "lat": 48.8643323,
  "lon": 2.3740909,
  "tags": {
    "amenity": "bar",
    "name": "Udo",
    "website": "http://www.udobar.com/"
  }
},
{
  "type": "node",
  "id": 2446687418,
  "lat": 48.8396133,
  "lon": 2.3228908,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "10",
    "addr:postcode": "75014",
    "addr:street": "Rue Vandamme",
    "amenity": "bar",
    "name": "La Godinette",
    "website": "http://www.la-godinette.fr/"
  }
},
{
  "type": "node",
  "id": 2448452678,
  "lat": 48.8484639,
  "lon": 2.4321756,
  "tags": {
    "amenity": "bar",
    "name": "Le Brazza"
  }
},
{
  "type": "node",
  "id": 2449319201,
  "lat": 48.8637373,
  "lon": 2.3634903,
  "tags": {
    "amenity": "bar",
    "website": "http://www.marcovaldo.fr/"
  }
},
{
  "type": "node",
  "id": 2451926162,
  "lat": 48.8444534,
  "lon": 2.3488046,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "5",
    "addr:postcode": "75005",
    "addr:street": "Rue Blainville",
    "amenity": "bar",
    "name": "K BA NI TO"
  }
},
{
  "type": "node",
  "id": 2454102704,
  "lat": 48.8788639,
  "lon": 2.4164575,
  "tags": {
    "amenity": "bar",
    "name": "Les Lilas"
  }
},
{
  "type": "node",
  "id": 2460347252,
  "lat": 48.8613268,
  "lon": 2.3701752,
  "tags": {
    "amenity": "bar",
    "name": "Rush bar"
  }
},
{
  "type": "node",
  "id": 2460347253,
  "lat": 48.8614009,
  "lon": 2.3699607,
  "tags": {
    "amenity": "bar",
    "name": "Le splendid bar"
  }
},
{
  "type": "node",
  "id": 2464260467,
  "lat": 48.8706706,
  "lon": 2.3729576,
  "tags": {
    "amenity": "cafe",
    "brewery": "leffe",
    "name": "La Mascotte du Faubourg"
  }
},
{
  "type": "node",
  "id": 2469001986,
  "lat": 48.8891219,
  "lon": 2.3724461,
  "tags": {
    "amenity": "pub",
    "name": "Les Orgues"
  }
},
{
  "type": "node",
  "id": 2469138456,
  "lat": 48.8929100,
  "lon": 2.3599148,
  "tags": {
    "amenity": "pub",
    "name": "Le Bistrot du Nord"
  }
},
{
  "type": "node",
  "id": 2472600007,
  "lat": 48.8929554,
  "lon": 2.3636687,
  "tags": {
    "amenity": "pub",
    "name": "Café de la Gare",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2472600013,
  "lat": 48.8930915,
  "lon": 2.3631580,
  "tags": {
    "amenity": "pub",
    "name": "La Piscine",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2472600019,
  "lat": 48.8929606,
  "lon": 2.3633496,
  "tags": {
    "amenity": "pub",
    "name": "La Rotonde Hébertine",
    "restaurant": "yes",
    "shop": "tobacco"
  }
},
{
  "type": "node",
  "id": 2472924839,
  "lat": 48.8122984,
  "lon": 2.3156093,
  "tags": {
    "amenity": "bar",
    "name": "Les Marronniers Fleuris"
  }
},
{
  "type": "node",
  "id": 2477686045,
  "lat": 48.8569603,
  "lon": 2.3713113,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2478201171,
  "lat": 48.8661252,
  "lon": 2.3444240,
  "tags": {
    "amenity": "bar",
    "name": "Boca"
  }
},
{
  "type": "node",
  "id": 2478201207,
  "lat": 48.8659496,
  "lon": 2.3445011,
  "tags": {
    "amenity": "bar",
    "name": "Le coeur fou"
  }
},
{
  "type": "node",
  "id": 2478201267,
  "lat": 48.8657315,
  "lon": 2.3448468,
  "tags": {
    "amenity": "bar",
    "tobbaco": "yes"
  }
},
{
  "type": "node",
  "id": 2478201269,
  "lat": 48.8657774,
  "lon": 2.3445761,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2479295353,
  "lat": 48.8161781,
  "lon": 2.3128608,
  "tags": {
    "amenity": "bar",
    "name": "L\'annexe",
    "source": "local Knowledge"
  }
},
{
  "type": "node",
  "id": 2483572702,
  "lat": 48.8161412,
  "lon": 2.3059574,
  "tags": {
    "amenity": "bar",
    "name": "Le Weekend",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2489274291,
  "lat": 48.8511831,
  "lon": 2.3785314,
  "tags": {
    "addr:city": "PARIS",
    "addr:housenumber": "5",
    "addr:postcode": "75011",
    "addr:street": "Rue Trousseau",
    "amenity": "bar",
    "name": "The bottle shop",
    "phone": "+33 1 43 14 28 04",
    "website": "http://cheapblonde.com/bottleshop.html"
  }
},
{
  "type": "node",
  "id": 2490099597,
  "lat": 48.8956929,
  "lon": 2.4256426,
  "tags": {
    "amenity": "pub",
    "name": "La Source"
  }
},
{
  "type": "node",
  "id": 2490190445,
  "lat": 48.8753058,
  "lon": 2.3579456,
  "tags": {
    "amenity": "pub",
    "name": "Tabac de l\'Est"
  }
},
{
  "type": "node",
  "id": 2490249117,
  "lat": 48.8880878,
  "lon": 2.3625470,
  "tags": {
    "amenity": "pub",
    "name": "Les Petites Gouttes",
    "opening_hours": "Mo-Su 11:00-02:00",
    "website": "https://www.facebook.com/lespetitesgouttes"
  }
},
{
  "type": "node",
  "id": 2493529394,
  "lat": 48.8493078,
  "lon": 2.3774714,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "15",
    "addr:street": "Rue de Cotte",
    "amenity": "restaurant",
    "brewery": "licorne;licorne_black;floreffe",
    "cuisine": "regional",
    "name": "Le Charolais",
    "opening_hours": "Mo-Sa 06:00-22:00",
    "phone": "+331 43 45 14 72"
  }
},
{
  "type": "node",
  "id": 2494110187,
  "lat": 48.8392014,
  "lon": 2.3497085,
  "tags": {
    "amenity": "bar",
    "name": "Cave la Bourgogne",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2494555629,
  "lat": 48.8922743,
  "lon": 2.3450572,
  "tags": {
    "amenity": "pub",
    "name": "Café de la Place"
  }
},
{
  "type": "node",
  "id": 2496809985,
  "lat": 48.8964221,
  "lon": 2.4315268,
  "tags": {
    "alt_name": "L\'Arc-en-Ciel",
    "amenity": "pub",
    "brewery": "heineken",
    "gambling": "yes",
    "internet_access": "no",
    "name": "Chez Anna",
    "restaurant": "yes",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2499743219,
  "lat": 48.8304045,
  "lon": 2.3475111,
  "tags": {
    "amenity": "pub",
    "brewery": "Guinness;Duvel",
    "food": "yes",
    "name": "Le Havane",
    "outdoor_seating": "yes",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2507574254,
  "lat": 48.8115616,
  "lon": 2.3168235,
  "tags": {
    "amenity": "bar",
    "name": "Le Racine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2519949100,
  "lat": 48.8711280,
  "lon": 2.3521453,
  "tags": {
    "amenity": "bar",
    "name": "L\'inconnu"
  }
},
{
  "type": "node",
  "id": 2523989143,
  "lat": 48.8790612,
  "lon": 2.3664752,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "167",
    "addr:postcode": "75010",
    "addr:street": "Quai de Valmy",
    "amenity": "bar",
    "name": "Bizz\'art"
  }
},
{
  "type": "node",
  "id": 2525399700,
  "lat": 48.8189150,
  "lon": 2.3097778,
  "tags": {
    "amenity": "bar",
    "name": "Le Coq Hardi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2529697548,
  "lat": 48.8206096,
  "lon": 2.3214393,
  "tags": {
    "amenity": "bar",
    "name": "Sun 7 Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2531576666,
  "lat": 48.8265384,
  "lon": 2.3420357,
  "tags": {
    "amenity": "bar",
    "name": "L\'Ariel",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2013"
  }
},
{
  "type": "node",
  "id": 2533856387,
  "lat": 48.8221288,
  "lon": 2.3258121,
  "tags": {
    "amenity": "bar",
    "name": "La Rotonde",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2534780315,
  "lat": 48.8530831,
  "lon": 2.3451327,
  "tags": {
    "addr:street": "Rue de la Huchette",
    "amenity": "bar",
    "name": "Bull\'s Brother"
  }
},
{
  "type": "node",
  "id": 2534780414,
  "lat": 48.8529444,
  "lon": 2.3459453,
  "tags": {
    "addr:street": "Rue de la Huchette",
    "amenity": "bar",
    "name": "Le Relais de la Huchette"
  }
},
{
  "type": "node",
  "id": 2535031373,
  "lat": 48.8600507,
  "lon": 2.3566528,
  "tags": {
    "amenity": "bar",
    "name": "Le comptoir des archives",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2536393039,
  "lat": 48.8936524,
  "lon": 2.3592349,
  "tags": {
    "amenity": "pub",
    "name": "Le Citadin"
  }
},
{
  "type": "node",
  "id": 2549246541,
  "lat": 48.8539433,
  "lon": 2.3435961,
  "tags": {
    "amenity": "pub",
    "internet_access": "wlan",
    "name": "Galway Irish Pub",
    "phone": "+33 1 43 29 64 50",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 2553153345,
  "lat": 48.8527079,
  "lon": 2.3443015,
  "tags": {
    "amenity": "bar",
    "name": "Europe - St Séverin",
    "stars": "3",
    "tourism": "hotel"
  }
},
{
  "type": "node",
  "id": 2554450720,
  "lat": 48.8410792,
  "lon": 2.3509139,
  "tags": {
    "amenity": "pub",
    "name": "Connolly\'s Corner",
    "phone": "01 43 36 55 40"
  }
},
{
  "type": "node",
  "id": 2554450724,
  "lat": 48.8542344,
  "lon": 2.3429198,
  "tags": {
    "amenity": "pub",
    "fax": "01 46 33 59 42",
    "name": "Great Canadian Pub",
    "phone": "01 46 33 54 20",
    "website": "http://www.tgcparis.com"
  }
},
{
  "type": "node",
  "id": 2556489497,
  "lat": 48.8503692,
  "lon": 2.2930824,
  "tags": {
    "amenity": "pub",
    "name": "Au dernier Métro",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2013"
  }
},
{
  "type": "node",
  "id": 2558864738,
  "lat": 48.8822164,
  "lon": 2.3337987,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "26",
    "addr:postcode": "75009",
    "addr:street": "Rue Pierre Fontaine",
    "amenity": "bar",
    "name": "Le dandy",
    "website": "http://www.dandyclub.fr/"
  }
},
{
  "type": "node",
  "id": 2562735593,
  "lat": 48.8660577,
  "lon": 2.3461115,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "8",
    "addr:postcode": "75002",
    "addr:street": "Rue Bachaumont",
    "amenity": "bar",
    "name": "Aux Écuries du Roy"
  }
},
{
  "type": "node",
  "id": 2571494841,
  "lat": 48.8753587,
  "lon": 2.3704700,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "48",
    "addr:postcode": "75010",
    "addr:street": "Avenue Claude Vellefaux",
    "amenity": "bar",
    "name": "Le Belmonte",
    "website": "http://www.barbelmonte.fr/"
  }
},
{
  "type": "node",
  "id": 2575207494,
  "lat": 48.8528366,
  "lon": 2.3455838,
  "tags": {
    "addr:street": "Rue Xavier Privas",
    "amenity": "bar",
    "name": "Chabana\'s bar"
  }
},
{
  "type": "node",
  "id": 2575207523,
  "lat": 48.8525696,
  "lon": 2.3452847,
  "tags": {
    "addr:street": "Rue Xavier Privas",
    "amenity": "pub",
    "name": "Story Latin"
  }
},
{
  "type": "node",
  "id": 2577163620,
  "lat": 48.8576488,
  "lon": 2.2779659,
  "tags": {
    "amenity": "bar",
    "name": "L\'aéro"
  }
},
{
  "type": "node",
  "id": 2577856126,
  "lat": 48.8330093,
  "lon": 2.3868281,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "34",
    "addr:postcode": "75012",
    "addr:street": "Cour Saint-Émilion",
    "amenity": "restaurant",
    "brewery": "1664;Grimbergen;1664_blanche",
    "name": "Le Saint M\'"
  }
},
{
  "type": "node",
  "id": 2583431160,
  "lat": 48.8214649,
  "lon": 2.2532980,
  "tags": {
    "amenity": "pub",
    "brewery": "leffe",
    "name": "Le Maryland"
  }
},
{
  "type": "node",
  "id": 2590050869,
  "lat": 48.9047984,
  "lon": 2.2691480,
  "tags": {
    "amenity": "bar",
    "name": "Rapid Bar"
  }
},
{
  "type": "node",
  "id": 2591405226,
  "lat": 48.8884177,
  "lon": 2.3743799,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "18",
    "addr:postcode": "75019",
    "addr:street": "Rue Riquet",
    "amenity": "bar",
    "name": "Bar Le Riquet"
  }
},
{
  "type": "node",
  "id": 2595398906,
  "lat": 48.8475003,
  "lon": 2.3947757,
  "tags": {
    "amenity": "cafe",
    "brewery": "Leffe;Leffe_Ruby;Stella;Hoegaarden",
    "happy_hours": "Mo-Su 17:00-20:00",
    "name": "Le Triomphe",
    "opening_hours": "Mo-Fr 00:00-01:00,06:00-24:00; Sa-Su 00:00-02:00,06:00-24:00",
    "smoking": "outside",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2598272346,
  "lat": 48.8275172,
  "lon": 2.3481095,
  "tags": {
    "amenity": "bar",
    "name": "La folie en tête",
    "phone": "01 45 80 65 99",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2013",
    "website": "http://lafolieentete.wix.com/lesite"
  }
},
{
  "type": "node",
  "id": 2604801458,
  "lat": 48.8171046,
  "lon": 2.3289082,
  "tags": {
    "amenity": "bar",
    "name": "Le Beaujolais",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2614591568,
  "lat": 48.8518377,
  "lon": 2.3336366,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "20",
    "addr:postcode": "75006",
    "addr:street": "Rue des Canettes",
    "amenity": "bar",
    "name": "O’neil Bar",
    "website": "http://www.oneilbar.fr/"
  }
},
{
  "type": "node",
  "id": 2618640030,
  "lat": 48.8169918,
  "lon": 2.3258616,
  "tags": {
    "amenity": "bar",
    "name": "La Divette de Malakoff",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2624677962,
  "lat": 48.8831199,
  "lon": 2.3303330,
  "tags": {
    "amenity": "bar",
    "name": "Le Vintimille"
  }
},
{
  "type": "node",
  "id": 2624677963,
  "lat": 48.8834005,
  "lon": 2.3305918,
  "tags": {
    "amenity": "bar",
    "name": "Le Valois"
  }
},
{
  "type": "node",
  "id": 2626551371,
  "lat": 48.8597393,
  "lon": 2.3087639,
  "tags": {
    "addr:housenumber": "77",
    "addr:street": "Rue Saint-Dominique",
    "amenity": "pub",
    "name": "O\'Brien\'s",
    "opening_hours": "Mo-Su 17:00-2:00",
    "phone": "01.45.51.75.87",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.obriens-pub.com/"
  }
},
{
  "type": "node",
  "id": 2626884878,
  "lat": 48.8910795,
  "lon": 2.4008572,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2627569959,
  "lat": 48.8192793,
  "lon": 2.3258826,
  "tags": {
    "amenity": "bar",
    "name": "Le Nemrod",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2630584155,
  "lat": 48.8661080,
  "lon": 2.3480098,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "43",
    "addr:postcode": "75002",
    "addr:street": "Rue Saint-Sauveur",
    "amenity": "bar",
    "name": "Sof\'s Bar",
    "opening_hours": "Mo-Su 15:00-02:00",
    "payment:bitcoin": "yes",
    "phone": "+33 7 50 91 73 38",
    "website": "https://www.facebook.com/pages/Sofs-Bar/186530834694794"
  }
},
{
  "type": "node",
  "id": 2650495522,
  "lat": 48.8594247,
  "lon": 2.3541247,
  "tags": {
    "amenity": "cafe",
    "brewery": "guinness;1664",
    "internet_access": "no",
    "name": "Le Reinitas",
    "source": "survey 2014"
  }
},
{
  "type": "node",
  "id": 2653982089,
  "lat": 48.8650085,
  "lon": 2.3673694,
  "tags": {
    "amenity": "bar",
    "name": "L\'estaminet",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2653992673,
  "lat": 48.8629476,
  "lon": 2.3673110,
  "tags": {
    "amenity": "bar",
    "diet:vegan": "yes",
    "name": "Vegalia juice",
    "opening_hours": "We-Su 11:00-19:00",
    "website": "http://www.vegaliajuice.com"
  }
},
{
  "type": "node",
  "id": 2654266788,
  "lat": 48.8627650,
  "lon": 2.3673900,
  "tags": {
    "amenity": "bar",
    "name": "L\'autobus"
  }
},
{
  "type": "node",
  "id": 2654697181,
  "lat": 48.8467474,
  "lon": 2.3783883,
  "tags": {
    "amenity": "bar",
    "brewery": "kronenbourg",
    "name": "L\'Olivier",
    "opening_hours": "Mo-Sa 10:00-23:00"
  }
},
{
  "type": "node",
  "id": 2656051561,
  "lat": 48.8699476,
  "lon": 2.3254321,
  "tags": {
    "amenity": "bar",
    "name": "Paris London"
  }
},
{
  "type": "node",
  "id": 2656051567,
  "lat": 48.8696624,
  "lon": 2.3230123,
  "tags": {
    "amenity": "bar",
    "name": "Le passage"
  }
},
{
  "type": "node",
  "id": 2659019324,
  "lat": 48.8403450,
  "lon": 2.3126650,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:postcode": "75015",
    "addr:street": "Falguière",
    "amenity": "bar",
    "name": "Le Bréguet"
  }
},
{
  "type": "node",
  "id": 2685475660,
  "lat": 48.8594147,
  "lon": 2.3492122,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "26",
    "addr:postcode": "75004",
    "addr:street": "Rue des Lombards",
    "amenity": "bar",
    "name": "Black Dog"
  }
},
{
  "type": "node",
  "id": 2685481427,
  "lat": 48.8593718,
  "lon": 2.3493758,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "22",
    "addr:postcode": "75004",
    "addr:street": "Rue des Lombards",
    "amenity": "bar",
    "name": "Sly Bar"
  }
},
{
  "type": "node",
  "id": 2685527894,
  "lat": 48.8591750,
  "lon": 2.3498375,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "10",
    "addr:postcode": "75004",
    "addr:street": "Rue des Lombards",
    "amenity": "bar",
    "name": "Pub O\'Sullivans"
  }
},
{
  "type": "node",
  "id": 2685540508,
  "lat": 48.8591459,
  "lon": 2.3499381,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "8",
    "addr:postcode": "75004",
    "addr:street": "Rue des Lombards",
    "amenity": "bar",
    "name": "Les Piétons"
  }
},
{
  "type": "node",
  "id": 2689705042,
  "lat": 48.8666058,
  "lon": 2.3460447,
  "tags": {
    "amenity": "bar",
    "name": "L\'Hédoniste"
  }
},
{
  "type": "node",
  "id": 2690507625,
  "lat": 48.8274980,
  "lon": 2.3718441,
  "tags": {
    "amenity": "bar",
    "name": "La Roseraie"
  }
},
{
  "type": "node",
  "id": 2690913856,
  "lat": 48.8725856,
  "lon": 2.3023103,
  "tags": {
    "amenity": "bar",
    "name": "Le Jet Set"
  }
},
{
  "type": "node",
  "id": 2696259259,
  "lat": 48.8359481,
  "lon": 2.3498941,
  "tags": {
    "amenity": "bar",
    "name": "La Belette qui Tête"
  }
},
{
  "type": "node",
  "id": 2696636916,
  "lat": 48.8687270,
  "lon": 2.3475909,
  "tags": {
    "amenity": "bar",
    "name": "L\'ivress",
    "phone": "01 42 21 90 26",
    "website": "www.livress.fr/"
  }
},
{
  "type": "node",
  "id": 2696727064,
  "lat": 48.8902655,
  "lon": 2.3544161,
  "tags": {
    "amenity": "pub",
    "name": "L\'escale"
  }
},
{
  "type": "node",
  "id": 2696736610,
  "lat": 48.8907840,
  "lon": 2.3529231,
  "tags": {
    "amenity": "pub",
    "name": "Les deux marches"
  }
},
{
  "type": "node",
  "id": 2699839266,
  "lat": 48.8279631,
  "lon": 2.3510342,
  "tags": {
    "amenity": "bar",
    "name": "Sputnik"
  }
},
{
  "type": "node",
  "id": 2699839267,
  "lat": 48.8276841,
  "lon": 2.3501384,
  "tags": {
    "amenity": "bar",
    "brewery": "chouffe",
    "name": "Taverne de la Butte"
  }
},
{
  "type": "node",
  "id": 2700046087,
  "lat": 48.8904952,
  "lon": 2.2914692,
  "tags": {
    "addr:city": "Levallois-Perret",
    "addr:housenumber": "21",
    "addr:postcode": "92300",
    "addr:street": "Rue du Président Wilson",
    "amenity": "bar",
    "fixme": "missing building",
    "name": "Café Leffe",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2700277771,
  "lat": 48.8237415,
  "lon": 2.3254034,
  "tags": {
    "amenity": "bar",
    "name": "Porte d\'Orléans",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2701902544,
  "lat": 48.8468510,
  "lon": 2.3476720,
  "tags": {
    "amenity": "pub",
    "food": "yes",
    "name": "The Bombardier"
  }
},
{
  "type": "node",
  "id": 2707103486,
  "lat": 48.8551659,
  "lon": 2.3601680,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "127",
    "addr:postcode": "75004",
    "addr:street": "Rue Saint-Antoine",
    "amenity": "bar",
    "name": "Le Saint-Paul",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2709862311,
  "lat": 48.8142162,
  "lon": 2.2955675,
  "tags": {
    "amenity": "bar",
    "name": "Le Métro",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2710713597,
  "lat": 48.8624888,
  "lon": 2.3394585,
  "tags": {
    "amenity": "bar",
    "name": "Le Petit Flore"
  }
},
{
  "type": "node",
  "id": 2710713598,
  "lat": 48.8618771,
  "lon": 2.3408195,
  "tags": {
    "amenity": "bar",
    "name": "Louvre Bouteille"
  }
},
{
  "type": "node",
  "id": 2711186603,
  "lat": 48.8138082,
  "lon": 2.3000975,
  "tags": {
    "amenity": "bar",
    "name": "L\'Amitié Malakoff",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2715645721,
  "lat": 48.8678347,
  "lon": 2.3438681,
  "tags": {
    "addr:street": "Rue Montmartre",
    "amenity": "bar",
    "brewery": "chouffe;guinness",
    "name": "Thirsty Mad Cat"
  }
},
{
  "type": "node",
  "id": 2739184590,
  "lat": 48.8322154,
  "lon": 2.3982746,
  "tags": {
    "amenity": "cafe",
    "brewery": "affligem;edelweiss;pelforth",
    "happy_hours": "Mo-Sa 17:00-22:00",
    "name": "Espace Détente",
    "old_name": "Les Terrasses"
  }
},
{
  "type": "node",
  "id": 2744409685,
  "lat": 48.8336080,
  "lon": 2.3554429,
  "tags": {
    "amenity": "bar",
    "name": "Le Cheval d\'Or"
  }
},
{
  "type": "node",
  "id": 2745637273,
  "lat": 48.8569595,
  "lon": 2.3061913,
  "tags": {
    "amenity": "bar",
    "name": "L\'Éclair"
  }
},
{
  "type": "node",
  "id": 2751426304,
  "lat": 48.8728158,
  "lon": 2.3579631,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "90",
    "addr:postcode": "75010",
    "addr:street": "Rue du Faubourg Saint-Martin",
    "amenity": "bar",
    "name": "Petit Saint-Martin",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2756226765,
  "lat": 48.8843844,
  "lon": 2.3286648,
  "tags": {
    "addr:housenumber": "130 ter",
    "addr:street": "Boulevard de Clichy",
    "amenity": "pub",
    "name": "Le Carolus"
  }
},
{
  "type": "node",
  "id": 2760254111,
  "lat": 48.8299498,
  "lon": 2.3520500,
  "tags": {
    "amenity": "bar",
    "name": "La Butte aux Piafs"
  }
},
{
  "type": "node",
  "id": 2760254113,
  "lat": 48.8304537,
  "lon": 2.3536286,
  "tags": {
    "amenity": "bar",
    "name": "Le Kiosque"
  }
},
{
  "type": "node",
  "id": 2767960467,
  "lat": 48.8691288,
  "lon": 2.3921028,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "94",
    "addr:postcode": "75020",
    "addr:street": "Rue de Ménilmontant",
    "amenity": "bar",
    "name": "Le Café des Sports"
  }
},
{
  "type": "node",
  "id": 2771945181,
  "lat": 48.8531121,
  "lon": 2.4390125,
  "tags": {
    "amenity": "bar",
    "name": "O\'2 Villes"
  }
},
{
  "type": "node",
  "id": 2772914972,
  "lat": 48.8588424,
  "lon": 2.3620611,
  "tags": {
    "amenity": "bar",
    "name": "Le Wood"
  }
},
{
  "type": "node",
  "id": 2775842958,
  "lat": 48.8527486,
  "lon": 2.3889981,
  "tags": {
    "amenity": "bar",
    "name": "Le Dumas",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2775842962,
  "lat": 48.8526497,
  "lon": 2.3891013,
  "tags": {
    "amenity": "bar",
    "name": "Le Métro",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2776314134,
  "lat": 48.8440184,
  "lon": 2.3516159,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "30",
    "addr:postcode": "75005",
    "addr:street": "Rue Lacépède",
    "amenity": "bar",
    "name": "L\'Envol Québécois",
    "type": "canadian"
  }
},
{
  "type": "node",
  "id": 2778463121,
  "lat": 48.8703084,
  "lon": 2.3528255,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "13",
    "addr:postcode": "75010",
    "addr:street": "Rue du Faubourg Saint-Denis",
    "amenity": "bar",
    "name": "Le Sully",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2782314512,
  "lat": 48.8954857,
  "lon": 2.4007018,
  "tags": {
    "amenity": "pub",
    "source": "Obervations personnelles"
  }
},
{
  "type": "node",
  "id": 2788062497,
  "lat": 48.8174789,
  "lon": 2.3073187,
  "tags": {
    "amenity": "bar",
    "name": "L\'atelier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2788471668,
  "lat": 48.8422841,
  "lon": 2.3498549,
  "tags": {
    "amenity": "bar",
    "name": "Le Mouff\'tôt Mouff\'tard"
  }
},
{
  "type": "node",
  "id": 2788471673,
  "lat": 48.8424716,
  "lon": 2.3498216,
  "tags": {
    "amenity": "pub",
    "name": "Margen\'s Pub"
  }
},
{
  "type": "node",
  "id": 2788471698,
  "lat": 48.8442543,
  "lon": 2.3498651,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe;guinness;grimbergen",
    "internet_access": "no",
    "name": "The Wall"
  }
},
{
  "type": "node",
  "id": 2793649045,
  "lat": 48.8602435,
  "lon": 2.3561333,
  "tags": {
    "amenity": "bar",
    "name": "Le Fontenoy",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2799010414,
  "lat": 48.8727441,
  "lon": 2.3433035,
  "tags": {
    "amenity": "bar",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 2811094299,
  "lat": 48.8113502,
  "lon": 2.3833591,
  "tags": {
    "addr:housenumber": "11",
    "amenity": "bar",
    "name": "Le Terminus",
    "source": "cadastre-dgi-fr source : Direction Generale des Impots - Cadastre. Mise a jour : 2014",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2811493878,
  "lat": 48.8160826,
  "lon": 2.3772932,
  "tags": {
    "amenity": "bar",
    "name": "Le Pierre Curie",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2826091001,
  "lat": 48.8764040,
  "lon": 2.3270060,
  "tags": {
    "amenity": "bar",
    "name": "La Caravelle",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2826860411,
  "lat": 48.8892768,
  "lon": 2.3755008,
  "tags": {
    "amenity": "pub",
    "name": "Le Marigny",
    "shop": "tobacco"
  }
},
{
  "type": "node",
  "id": 2829177617,
  "lat": 48.8947706,
  "lon": 2.3527604,
  "tags": {
    "amenity": "pub",
    "name": "Ho\'s kfe",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2833518557,
  "lat": 48.8188142,
  "lon": 2.3041756,
  "tags": {
    "amenity": "bar",
    "name": "Bar Oasis",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2838973403,
  "lat": 48.8474070,
  "lon": 2.3524580,
  "tags": {
    "amenity": "cafe",
    "brewery": "leffe;pelforth",
    "cuisine": "french",
    "name": "Le Royal Jussieu"
  }
},
{
  "type": "node",
  "id": 2842142901,
  "lat": 48.8546210,
  "lon": 2.3304540,
  "tags": {
    "amenity": "bar",
    "food": "yes",
    "name": "Le Rouquet",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 2845039395,
  "lat": 48.8815103,
  "lon": 2.3372869,
  "tags": {
    "amenity": "bar",
    "name": "Le Glass"
  }
},
{
  "type": "node",
  "id": 2852733801,
  "lat": 48.8497474,
  "lon": 2.3380298,
  "tags": {
    "amenity": "bar",
    "name": "Le Bar",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2853546553,
  "lat": 48.8713994,
  "lon": 2.3446987,
  "tags": {
    "amenity": "bar",
    "brewery": "guinness",
    "name": "Sunset"
  }
},
{
  "type": "node",
  "id": 2855862328,
  "lat": 48.8655102,
  "lon": 2.2838972,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "84",
    "addr:postcode": "75016",
    "addr:street": "Rue de Longchamp",
    "amenity": "bar",
    "name": "L\'Acapulco",
    "phone": "01 45 53 79 67"
  }
},
{
  "type": "node",
  "id": 2862239836,
  "lat": 48.8474158,
  "lon": 2.4276466,
  "tags": {
    "amenity": "bar",
    "name": "Au Corner",
    "source": "survey 2014"
  }
},
{
  "type": "node",
  "id": 2863264450,
  "lat": 48.8532503,
  "lon": 2.3737978,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "43",
    "addr:postcode": "75011",
    "addr:street": "Rue de Lappe",
    "amenity": "bar",
    "name": "Some Girls",
    "opening_hours": "Mo-Sa 18:00-02:30",
    "phone": "01 48 06 40 33"
  }
},
{
  "type": "node",
  "id": 2863265740,
  "lat": 48.8670687,
  "lon": 2.3793313,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "13",
    "addr:postcode": "75011",
    "addr:street": "Rue Moret",
    "amenity": "bar",
    "name": "Cantada II",
    "opening_hours": "Mo-Th 18:00-01:30; Fr-Sa 18:00-05:00",
    "phone": "01.48.05.96.89",
    "website": "http://cantada.net/"
  }
},
{
  "type": "node",
  "id": 2863270880,
  "lat": 48.8667388,
  "lon": 2.3796639,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "5/7",
    "addr:postcode": "75011",
    "addr:street": "Rue Moret",
    "amenity": "bar",
    "name": "L\'International",
    "opening_hours": "Tu-Sa 15:00-02:00; Su 15:00-24:00",
    "phone": "01 49 29 76 45",
    "website": "http://www.linternational.fr/"
  }
},
{
  "type": "node",
  "id": 2863297981,
  "lat": 48.8672848,
  "lon": 2.3853206,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "3",
    "addr:postcode": "75020",
    "addr:street": "Rue Victor Letalle",
    "amenity": "bar",
    "name": "Chez Zak Bar",
    "opening_hours": "Tu-Su 17:00-02:00"
  }
},
{
  "type": "node",
  "id": 2863306134,
  "lat": 48.8671313,
  "lon": 2.3852348,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "6",
    "addr:postcode": "75020",
    "addr:street": "Rue Victor Letalle",
    "amenity": "bar",
    "name": "La Feline",
    "opening_hours": "We-Su 18:00-02:00"
  }
},
{
  "type": "node",
  "id": 2863318673,
  "lat": 48.8664979,
  "lon": 2.3850779,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "11",
    "addr:postcode": "75020",
    "addr:street": "Rue des Panoyaux",
    "amenity": "bar",
    "name": "Le Saint-Sauveur",
    "opening_hours": "Mo-Su 19:00-02:00"
  }
},
{
  "type": "node",
  "id": 2863322351,
  "lat": 48.8553007,
  "lon": 2.3755708,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "34",
    "addr:postcode": "75011",
    "addr:street": "Rue Keller",
    "amenity": "bar",
    "brewery": "chimay;pelforth;heineken",
    "internet_access": "no",
    "name": "Dr. Feelgood",
    "opening_hours": "Mo-Sa 17:00-02:00",
    "phone": "09 82 21 07 08",
    "website": "http://www.drfeelgoodrockbar.fr/"
  }
},
{
  "type": "node",
  "id": 2864175355,
  "lat": 48.8948851,
  "lon": 2.3827807,
  "tags": {
    "amenity": "bar",
    "name": "Time Square"
  }
},
{
  "type": "node",
  "id": 2866845693,
  "lat": 48.8191107,
  "lon": 2.3006492,
  "tags": {
    "amenity": "bar",
    "name": "Pluriel Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2867368733,
  "lat": 48.8760857,
  "lon": 2.3803012,
  "tags": {
    "amenity": "bar",
    "name": "Le Bolivar"
  }
},
{
  "type": "node",
  "id": 2868010096,
  "lat": 48.8387171,
  "lon": 2.4582291,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2868961712,
  "lat": 48.8775011,
  "lon": 2.3813787,
  "tags": {
    "amenity": "bar",
    "name": "L\'aiglon"
  }
},
{
  "type": "node",
  "id": 2869388478,
  "lat": 48.8910965,
  "lon": 2.3782517,
  "tags": {
    "amenity": "pub",
    "name": "108 Café",
    "source": "Observation personnelle"
  }
},
{
  "type": "node",
  "id": 2874534278,
  "lat": 48.8486443,
  "lon": 2.3753679,
  "tags": {
    "amenity": "bar",
    "brewery": "Carlsberg",
    "name": "Le Calbar",
    "opening_hours": "Mo-Sa 17:00-02:00"
  }
},
{
  "type": "node",
  "id": 2874555600,
  "lat": 48.8478160,
  "lon": 2.3772935,
  "tags": {
    "amenity": "cafe",
    "brewery": "Pelforth;Kronembourg",
    "happy_hours": "Mo-Sa 18:00-20:00",
    "name": "Le Bistro d\'Aligre"
  }
},
{
  "type": "node",
  "id": 2874632400,
  "lat": 48.8467962,
  "lon": 2.3835368,
  "tags": {
    "amenity": "cafe",
    "brewery": "Affligem;Heineken;Pelforth",
    "cuisine": "french",
    "name": "Le Philos Off",
    "opening_hours": "Mo-Sa 07:00-01:00"
  }
},
{
  "type": "node",
  "id": 2874676398,
  "lat": 48.8460012,
  "lon": 2.3764202,
  "tags": {
    "amenity": "restaurant",
    "brewery": "1664;grimbergen",
    "happy_hours": "Mo-Sa 16:00-23:00",
    "name": "Bistro 12",
    "opening_hours": "Mo-Sa 00:00-02:00,09:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2875881221,
  "lat": 48.8430061,
  "lon": 2.3486842,
  "tags": {
    "amenity": "bar",
    "brewery": "chouffe",
    "name": "Chouff\'bar",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2875922157,
  "lat": 48.8512299,
  "lon": 2.3698210,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Carlsberg;Grimbergen",
    "happy_hours": "Mo-Sa 17:00-19:00",
    "name": "Chez Félicien",
    "opening_hours": "Mo-Sa 08:00-00:00"
  }
},
{
  "type": "node",
  "id": 2875951497,
  "lat": 48.8534945,
  "lon": 2.3706179,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "8",
    "addr:postcode": "75012",
    "addr:street": "Rue de la Roquette",
    "amenity": "fast_food",
    "brewery": "Leffe;Stella;",
    "cuisine": "sandwich",
    "internet_access": "no",
    "name": "Le petit bistro",
    "opening_hours": "Mo-Su 10:00-02:00",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2875955222,
  "lat": 48.8535356,
  "lon": 2.3706586,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "10",
    "addr:postcode": "75012",
    "addr:street": "Rue de la Roquette",
    "amenity": "fast_food",
    "brewery": "Leffe;Stella;",
    "cuisine": "pizza",
    "internet_access": "no",
    "name": "La Tovala",
    "opening_hours": "Mo-Su 10:00-02:00",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2875971179,
  "lat": 48.8486058,
  "lon": 2.3978799,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "3",
    "addr:postcode": "75011",
    "addr:street": "Avenue du Trône",
    "amenity": "cafe",
    "brewery": "1664;Grimbergen_blache;Grimbergen",
    "name": "Le Café du Trone",
    "opening_hours": "Mo-Su 08:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2876117347,
  "lat": 48.8481689,
  "lon": 2.3925595,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "129",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "restaurant",
    "brewery": "Affligem;Biere_de_saison",
    "cuisine": "italian",
    "name": "Sogoosto",
    "opening_hours": "Mo-Su 09:30-23:30",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2876149573,
  "lat": 48.8842039,
  "lon": 2.3142441,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "25",
    "addr:postcode": "75017",
    "addr:street": "Rue Legendre",
    "brewery": "Brewdog",
    "name": "Bières Cultes",
    "shop": "beverages"
  }
},
{
  "type": "node",
  "id": 2876157726,
  "lat": 48.8469569,
  "lon": 2.3847760,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "96",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "restaurant",
    "brewery": "Stella",
    "cuisine": "italian",
    "name": "La Toscane",
    "opening_hours": "Mo-Su 10:30-15:00,19:00-23:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2876159417,
  "lat": 48.8469044,
  "lon": 2.3843200,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "92bis",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "cafe",
    "brewery": "Biere_de_saison;Grimbergen;1664;Kronenbourg",
    "happy_hours": "Mo-Sa 16:00-22:00",
    "name": "Au Ptit clin d\'oeil",
    "opening_hours": "Mo-Sa 10:00-24:00",
    "smoking": "outside",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2876169595,
  "lat": 48.8468648,
  "lon": 2.3840074,
  "tags": {
    "amenity": "bar",
    "brewery": "Kocher;Pelforth;1664",
    "name": "Oxalis",
    "opening_hours": "Mo-Sa 07:30-23:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2876174449,
  "lat": 48.8466247,
  "lon": 2.3789460,
  "tags": {
    "amenity": "cafe",
    "brewery": "Heineken;Leffe;Pelforth;Kronenbourg",
    "name": "Dido Cafe",
    "opening_hours": "Mo-Sa 6:00-21:30"
  }
},
{
  "type": "node",
  "id": 2879901501,
  "lat": 48.8598410,
  "lon": 2.3424752,
  "tags": {
    "amenity": "bar",
    "name": "La Régence",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2882461296,
  "lat": 48.8762491,
  "lon": 2.3755713,
  "tags": {
    "amenity": "bar",
    "name": "Le virage"
  }
},
{
  "type": "node",
  "id": 2882549696,
  "lat": 48.8752119,
  "lon": 2.3738600,
  "tags": {
    "amenity": "bar",
    "name": "Villette Bar"
  }
},
{
  "type": "node",
  "id": 2882551333,
  "lat": 48.8753782,
  "lon": 2.3736728,
  "tags": {
    "amenity": "bar",
    "name": "Le 9b"
  }
},
{
  "type": "node",
  "id": 2893835124,
  "lat": 48.8503538,
  "lon": 2.3905532,
  "tags": {
    "addr:housenumber": "19",
    "addr:street": "Rue des Boulets",
    "amenity": "pub",
    "name": "The Green Goose"
  }
},
{
  "type": "node",
  "id": 2895396562,
  "lat": 48.8135907,
  "lon": 2.3828193,
  "tags": {
    "amenity": "bar",
    "name": "Bar Nouveau Brooklyn (BNB)"
  }
},
{
  "type": "node",
  "id": 2900792405,
  "lat": 48.8782984,
  "lon": 2.3583405,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "1",
    "addr:postcode": "75010",
    "addr:street": "Rue des Deux Gares",
    "amenity": "bar",
    "brewery": "heineken;pelforth;affligem;Saint-Omer",
    "name": "Au train de vie"
  }
},
{
  "type": "node",
  "id": 2901434882,
  "lat": 48.8666813,
  "lon": 2.3854927,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "11",
    "addr:postcode": "75020",
    "addr:street": "Rue Victor Letalle",
    "amenity": "pub",
    "mail": "contact@lestrois8.fr",
    "name": "Les Trois 8",
    "note": "Bistro/Bar  Bière Artisanale & Vin Naturel",
    "opening_hours": "Mo-Sa 17:00-02: 00;Su 15:00-00:00",
    "phone": "0140334770",
    "smoking": "outside",
    "website": "http://www.lestrois8.fr/accueil.php"
  }
},
{
  "type": "node",
  "id": 2901750233,
  "lat": 48.8267959,
  "lon": 2.3271211,
  "tags": {
    "amenity": "bar",
    "name": "Le Daudet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2903101413,
  "lat": 48.9045165,
  "lon": 2.3043738,
  "tags": {
    "amenity": "bar",
    "name": "Le Colbert"
  }
},
{
  "type": "node",
  "id": 2906130405,
  "lat": 48.8203499,
  "lon": 2.3006124,
  "tags": {
    "amenity": "bar",
    "name": "Au Petit Chez Soi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2906403311,
  "lat": 48.8812111,
  "lon": 2.3720335,
  "tags": {
    "amenity": "bar",
    "name": "Le Five"
  }
},
{
  "type": "node",
  "id": 2908254158,
  "lat": 48.8747667,
  "lon": 2.3810283,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "1",
    "addr:postcode": "75019",
    "addr:street": "Rue Pradier",
    "amenity": "bar",
    "name": "KD"
  }
},
{
  "type": "node",
  "id": 2908315545,
  "lat": 48.8749554,
  "lon": 2.3828694,
  "tags": {
    "amenity": "bar",
    "name": "A l\'endroit"
  }
},
{
  "type": "node",
  "id": 2910141642,
  "lat": 48.9046353,
  "lon": 2.3380338,
  "tags": {
    "amenity": "pub",
    "name": "Le Coq d\'Or"
  }
},
{
  "type": "node",
  "id": 2912865201,
  "lat": 48.8962380,
  "lon": 2.2969850,
  "tags": {
    "amenity": "bar",
    "name": "O.z Café",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 2913397200,
  "lat": 48.8785529,
  "lon": 2.3744580,
  "tags": {
    "amenity": "bar",
    "name": "Dynamo"
  }
},
{
  "type": "node",
  "id": 2915128823,
  "lat": 48.8735251,
  "lon": 2.3828952,
  "tags": {
    "amenity": "bar",
    "name": "A Trianon"
  }
},
{
  "type": "node",
  "id": 2915892587,
  "lat": 48.8656456,
  "lon": 2.3001103,
  "tags": {
    "amenity": "bar",
    "name": "Le Baron"
  }
},
{
  "type": "node",
  "id": 2915896064,
  "lat": 48.8716947,
  "lon": 2.3062494,
  "tags": {
    "amenity": "bar",
    "name": "Chez Papillon"
  }
},
{
  "type": "node",
  "id": 2915905154,
  "lat": 48.8642117,
  "lon": 2.3138141,
  "tags": {
    "amenity": "bar",
    "name": "Le Showcase"
  }
},
{
  "type": "node",
  "id": 2915907935,
  "lat": 48.8743835,
  "lon": 2.3178889,
  "tags": {
    "amenity": "bar",
    "name": "Le Madam"
  }
},
{
  "type": "node",
  "id": 2915916854,
  "lat": 48.8723341,
  "lon": 2.3116489,
  "tags": {
    "amenity": "bar",
    "name": "La Cantine Du Faubourg"
  }
},
{
  "type": "node",
  "id": 2916165303,
  "lat": 48.8709008,
  "lon": 2.3059242,
  "tags": {
    "amenity": "bar",
    "name": "Le Madam"
  }
},
{
  "type": "node",
  "id": 2916403382,
  "lat": 48.8747420,
  "lon": 2.3873713,
  "tags": {
    "amenity": "bar",
    "name": "Le Barouf",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2916459383,
  "lat": 48.8783980,
  "lon": 2.3708887,
  "tags": {
    "amenity": "bar",
    "name": "A l\'unisson"
  }
},
{
  "type": "node",
  "id": 2916463883,
  "lat": 48.8786489,
  "lon": 2.3710845,
  "tags": {
    "amenity": "bar",
    "name": "Chez Ammad"
  }
},
{
  "type": "node",
  "id": 2916479218,
  "lat": 48.8793968,
  "lon": 2.3715404,
  "tags": {
    "amenity": "bar",
    "name": "Antalya"
  }
},
{
  "type": "node",
  "id": 2917495128,
  "lat": 48.8442836,
  "lon": 2.3233862,
  "tags": {
    "amenity": "bar",
    "name": "La Marine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2917987630,
  "lat": 48.8818625,
  "lon": 2.3741104,
  "tags": {
    "amenity": "bar",
    "name": "Aux deux amis"
  }
},
{
  "type": "node",
  "id": 2918014136,
  "lat": 48.8831168,
  "lon": 2.3764104,
  "tags": {
    "amenity": "bar",
    "name": "La caleche"
  }
},
{
  "type": "node",
  "id": 2918018990,
  "lat": 48.8835128,
  "lon": 2.3767725,
  "tags": {
    "amenity": "bar",
    "name": "O poele..."
  }
},
{
  "type": "node",
  "id": 2918045577,
  "lat": 48.8843991,
  "lon": 2.3787117,
  "tags": {
    "amenity": "bar",
    "name": "Verry Horse"
  }
},
{
  "type": "node",
  "id": 2921121578,
  "lat": 48.8855150,
  "lon": 2.3816003,
  "tags": {
    "amenity": "bar",
    "name": "Le Morlaix"
  }
},
{
  "type": "node",
  "id": 2922603068,
  "lat": 48.8833431,
  "lon": 2.3880013,
  "tags": {
    "amenity": "bar",
    "name": "Le rallye"
  }
},
{
  "type": "node",
  "id": 2924393159,
  "lat": 48.8525395,
  "lon": 2.3353602,
  "tags": {
    "addr:housenumber": "12",
    "addr:street": "Rue Clément",
    "amenity": "bar",
    "name": "MabCafé"
  }
},
{
  "type": "node",
  "id": 2924913363,
  "lat": 48.8525395,
  "lon": 2.3353602,
  "tags": {
    "addr:housenumber": "12",
    "addr:street": "Rue Clément",
    "amenity": "bar",
    "name": "MabCafé"
  }
},
{
  "type": "node",
  "id": 2925617830,
  "lat": 48.8423823,
  "lon": 2.3027121,
  "tags": {
    "amenity": "bar",
    "name": "Le Valencay Bar Brasserie"
  }
},
{
  "type": "node",
  "id": 2927795612,
  "lat": 48.8844100,
  "lon": 2.3396601,
  "tags": {
    "amenity": "bar",
    "name": "Bistro des Martyrs"
  }
},
{
  "type": "node",
  "id": 2927795614,
  "lat": 48.8843181,
  "lon": 2.3391723,
  "tags": {
    "amenity": "bar",
    "name": "Il Duca"
  }
},
{
  "type": "node",
  "id": 2927812404,
  "lat": 48.8528644,
  "lon": 2.3463229,
  "tags": {
    "amenity": "bar",
    "name": "Georges Café"
  }
},
{
  "type": "node",
  "id": 2931892304,
  "lat": 48.8861530,
  "lon": 2.3940741,
  "tags": {
    "amenity": "bar",
    "name": "Tabac de la porte chaumont"
  }
},
{
  "type": "node",
  "id": 2934439601,
  "lat": 48.8818660,
  "lon": 2.3056448,
  "tags": {
    "amenity": "bar",
    "name": "Le Valentin"
  }
},
{
  "type": "node",
  "id": 2939342985,
  "lat": 48.8197316,
  "lon": 2.3066939,
  "tags": {
    "amenity": "bar",
    "name": "Le Royal Malakoff",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2939342987,
  "lat": 48.8201164,
  "lon": 2.3084775,
  "tags": {
    "amenity": "bar",
    "name": "Sand-Jess",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2939351201,
  "lat": 48.8469280,
  "lon": 2.3518880,
  "tags": {
    "amenity": "bar",
    "name": "Taverne des Korrigans",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 2939357601,
  "lat": 48.8457050,
  "lon": 2.3517750,
  "tags": {
    "amenity": "bar",
    "name": "Tabac Alza",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2939803364,
  "lat": 48.8765843,
  "lon": 2.3876396,
  "tags": {
    "amenity": "bar",
    "name": "Le Maryland"
  }
},
{
  "type": "node",
  "id": 2942684992,
  "lat": 48.8765708,
  "lon": 2.3923094,
  "tags": {
    "amenity": "bar",
    "name": "L\'arc en ciel"
  }
},
{
  "type": "node",
  "id": 2957809405,
  "lat": 48.8768371,
  "lon": 2.3719871,
  "tags": {
    "amenity": "bar",
    "name": "Le Narval"
  }
},
{
  "type": "node",
  "id": 2963212028,
  "lat": 48.8755204,
  "lon": 2.3905491,
  "tags": {
    "amenity": "bar",
    "name": "L\'imprevu"
  }
},
{
  "type": "node",
  "id": 2973459634,
  "lat": 48.8837170,
  "lon": 2.3804450,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Valentin"
  }
},
{
  "type": "node",
  "id": 2973665417,
  "lat": 48.8755731,
  "lon": 2.3984479,
  "tags": {
    "amenity": "bar",
    "name": "Tele bar"
  }
},
{
  "type": "node",
  "id": 2973711267,
  "lat": 48.8770937,
  "lon": 2.4058924,
  "tags": {
    "amenity": "bar",
    "name": "Le leman"
  }
},
{
  "type": "node",
  "id": 2974330159,
  "lat": 48.8357004,
  "lon": 2.2929900,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "354 bis",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vaugirard",
    "amenity": "bar",
    "name": "Le Comptoir"
  }
},
{
  "type": "node",
  "id": 2974330160,
  "lat": 48.8350897,
  "lon": 2.3042236,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "13",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vouillé",
    "amenity": "bar",
    "brewery": "chouffe;guinness;carlsberg",
    "name": "Le Comptoir"
  }
},
{
  "type": "node",
  "id": 2974878652,
  "lat": 48.8309342,
  "lon": 2.3742973,
  "tags": {
    "amenity": "cafe",
    "brewery": "Beck\'s;Leffe;Hoegaarden",
    "cuisine": "french",
    "name": "Le Débonnaire",
    "terrace": "yes"
  }
},
{
  "type": "node",
  "id": 2984480810,
  "lat": 48.8212079,
  "lon": 2.3118008,
  "tags": {
    "amenity": "bar",
    "name": "Le Voltaire",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2984486433,
  "lat": 48.8889390,
  "lon": 2.2877460,
  "tags": {
    "addr:city": "Levallois-Perret",
    "addr:housenumber": "39",
    "addr:postcode": "92300",
    "addr:street": "Rue Louise Michel",
    "amenity": "bar",
    "food": "yes",
    "name": "Le Soleil",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 2986616045,
  "lat": 48.8149201,
  "lon": 2.3600274,
  "tags": {
    "amenity": "bar",
    "name": "Red Room",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2989389616,
  "lat": 48.8353583,
  "lon": 2.4058762,
  "tags": {
    "amenity": "restaurant",
    "brewery": "1664;Kronenbourg;Grimbergen",
    "cuisine": "french",
    "happy_hours": "Mo-Su 18:00-21:00",
    "name": "Le bonnet d\'âne",
    "terrace": "yes"
  }
},
{
  "type": "node",
  "id": 2991169114,
  "lat": 48.8837364,
  "lon": 2.3368191,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "14",
    "addr:postcode": "75018",
    "addr:street": "Rue Germain Pilon",
    "amenity": "bar",
    "name": "Marlusse et Lapin",
    "note": "Wifi. Toilet is downstairs. No food, but they have an arrangement with a pizza delivery place.",
    "opening_hours": "16:00-02:00",
    "phone": "+33 1 83 76 02 29",
    "smoking": "outside",
    "website": "http://www.marlusselapin.fr",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2991184194,
  "lat": 48.8840234,
  "lon": 2.3842246,
  "tags": {
    "amenity": "bar",
    "name": "Chaum\' Bar"
  }
},
{
  "type": "node",
  "id": 2997329281,
  "lat": 48.8556943,
  "lon": 2.3595261,
  "tags": {
    "amenity": "bar",
    "brewery": "tripel_karmeliet;Kwak;Cuvée des trolls",
    "name": "Le Rivolux"
  }
},
{
  "type": "node",
  "id": 2997413433,
  "lat": 48.8888030,
  "lon": 2.2827410,
  "tags": {
    "amenity": "bar",
    "food": "yes",
    "name": "Le Tire-Bouchon",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 2997420033,
  "lat": 48.8895550,
  "lon": 2.2842890,
  "tags": {
    "amenity": "bar",
    "food": "yes",
    "name": "Le Rallye"
  }
},
{
  "type": "node",
  "id": 3007346385,
  "lat": 48.8847149,
  "lon": 2.3814227,
  "tags": {
    "amenity": "bar",
    "name": "Bar du Rhin"
  }
},
{
  "type": "node",
  "id": 3011028852,
  "lat": 48.8606485,
  "lon": 2.3503847,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "36",
    "addr:postcode": "75003",
    "addr:street": "Rue Quincampoix",
    "amenity": "bar",
    "name": "Flaq",
    "opening_hours": "17:00 - 2:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 3014035111,
  "lat": 48.8227317,
  "lon": 2.3077289,
  "tags": {
    "amenity": "bar",
    "name": "La Guingette",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 3018115038,
  "lat": 48.8924468,
  "lon": 2.3253223,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "54",
    "addr:postcode": "75017",
    "addr:street": "Rue Guy Môquet",
    "amenity": "bar",
    "name": "Le Téléphone",
    "opening_hours": "17:00 - 02:00",
    "phone": "+33 9 81 95 07 95",
    "smoking": "outside",
    "website": "https://www.facebook.com/telephonebar54",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 3018267897,
  "lat": 48.8221589,
  "lon": 2.3058521,
  "tags": {
    "amenity": "bar",
    "name": "Le Cirta",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 3018323871,
  "lat": 48.8217824,
  "lon": 2.3051494,
  "tags": {
    "amenity": "bar",
    "name": "L\'Étoile",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 3018371234,
  "lat": 48.8231685,
  "lon": 2.3073744,
  "tags": {
    "amenity": "bar",
    "name": "Le Gambetta",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 3020757911,
  "lat": 48.8944719,
  "lon": 2.2271592,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "microbrewery": "yes",
    "name": "Le Piano",
    "phone": "01.40.99.18.46",
    "source": "survey 2014",
    "website": "http://www.restaurantlepiano.fr/"
  }
},
{
  "type": "node",
  "id": 3023066289,
  "lat": 48.8751698,
  "lon": 2.3943041,
  "tags": {
    "amenity": "bar",
    "name": "Le bel air"
  }
},
{
  "type": "node",
  "id": 3023129937,
  "lat": 48.8228834,
  "lon": 2.3049442,
  "tags": {
    "amenity": "bar",
    "name": "Le Fleuri",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 3023528838,
  "lat": 48.8845920,
  "lon": 2.3364580,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "18",
    "addr:postcode": "75009",
    "addr:street": "Rue Veron",
    "amenity": "bar",
    "atm": "no",
    "food": "no",
    "internet_access": "wlan",
    "name": "Le grand hôtel de Clermont",
    "outdoor_seating": "no",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 3023533333,
  "lat": 48.8815120,
  "lon": 2.3375130,
  "tags": {
    "amenity": "bar",
    "name": "Dirty Dick"
  }
},
{
  "type": "node",
  "id": 3033112234,
  "lat": 48.8844290,
  "lon": 2.3287650,
  "tags": {
    "amenity": "bar",
    "food": "yes",
    "name": "Carolus",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 3037631234,
  "lat": 48.8508788,
  "lon": 2.2213320,
  "tags": {
    "addr:city": "Saint-Cloud",
    "addr:housenumber": "13",
    "addr:postcode": "92210",
    "addr:street": "Boulevard Senard",
    "amenity": "bar",
    "cuisine": "sandwich",
    "name": "Le tabac des studios"
  }
},
{
  "type": "node",
  "id": 3037670737,
  "lat": 48.8568527,
  "lon": 2.2209066,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 3042311478,
  "lat": 48.8229490,
  "lon": 2.4137641,
  "tags": {
    "amenity": "bar",
    "name": "La Terrasse"
  }
},
{
  "type": "node",
  "id": 3042311479,
  "lat": 48.8231652,
  "lon": 2.4161555,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint Guerlet"
  }
},
{
  "type": "node",
  "id": 3043192994,
  "lat": 48.8744321,
  "lon": 2.3247119,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "58",
    "addr:postcode": "75008",
    "addr:street": "Rue de l\'Arcade",
    "amenity": "cafe",
    "brewery": "chouffe",
    "name": "Bistrot de l\'Arcade"
  }
},
{
  "type": "node",
  "id": 3043457790,
  "lat": 48.8704232,
  "lon": 2.3339330,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "25",
    "addr:postcode": "75002",
    "addr:street": "Rue Louis Le Grand",
    "amenity": "bar",
    "name": "Le Dock"
  }
},
{
  "type": "node",
  "id": 3048834230,
  "lat": 48.8727403,
  "lon": 2.3545304,
  "tags": {
    "addr:city": "paris",
    "addr:housenumber": "67",
    "addr:postcode": "75010",
    "addr:street": "Rue du Château d\'Eau",
    "amenity": "bar",
    "brewery": "chouffe",
    "name": "Le Château d\'Eau"
  }
},
{
  "type": "node",
  "id": 3048865608,
  "lat": 48.8857559,
  "lon": 2.2273722,
  "tags": {
    "amenity": "bar",
    "name": "Brasserie des sports"
  }
},
{
  "type": "node",
  "id": 3048865613,
  "lat": 48.8857003,
  "lon": 2.2267693,
  "tags": {
    "amenity": "bar",
    "name": "Le Montalegre"
  }
},
{
  "type": "node",
  "id": 3054183400,
  "lat": 48.8743038,
  "lon": 2.3728073,
  "tags": {
    "amenity": "bar",
    "name": "La cave à Michel"
  }
},
{
  "type": "node",
  "id": 3054282089,
  "lat": 48.8737082,
  "lon": 2.3705081,
  "tags": {
    "amenity": "bar",
    "name": "Le roy"
  }
},
{
  "type": "node",
  "id": 3054303518,
  "lat": 48.8745664,
  "lon": 2.3724688,
  "tags": {
    "amenity": "bar",
    "name": "Le baroc\'"
  }
},
{
  "type": "node",
  "id": 3054366573,
  "lat": 48.8738742,
  "lon": 2.3798465,
  "tags": {
    "amenity": "bar",
    "name": "Le petit Rampal"
  }
},
{
  "type": "node",
  "id": 3056093600,
  "lat": 48.8716356,
  "lon": 2.3717654,
  "tags": {
    "amenity": "bar",
    "name": "Le Royal"
  }
},
{
  "type": "node",
  "id": 3056202589,
  "lat": 48.8721986,
  "lon": 2.3733717,
  "tags": {
    "amenity": "bar",
    "name": "Pianotise"
  }
},
{
  "type": "node",
  "id": 3058148642,
  "lat": 48.8542603,
  "lon": 2.3716689,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "1",
    "addr:postcode": "75011",
    "addr:street": "Rue de Lappe",
    "amenity": "bar",
    "name": "Chantier Interdit"
  }
},
{
  "type": "node",
  "id": 3058148643,
  "lat": 48.8541774,
  "lon": 2.3718475,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "3",
    "addr:postcode": "75011",
    "addr:street": "Rue de Lappe",
    "amenity": "bar",
    "name": "Shelter\'s Pub"
  }
},
{
  "type": "node",
  "id": 3058148645,
  "lat": 48.8540652,
  "lon": 2.3718440,
  "tags": {
    "addr:city": "Paris",
    "addr:postcode": "75011",
    "addr:street": "Rue de Lappe",
    "amenity": "bar",
    "name": "Yellow Mad Monkey"
  }
},
{
  "type": "node",
  "id": 3058148646,
  "lat": 48.8542657,
  "lon": 2.3672153,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "11",
    "addr:postcode": "75004",
    "addr:street": "Rue des Tournelles",
    "amenity": "bar",
    "name": "Kabanito Cafe Cocktail",
    "opening_hours": "Tu-Sa 17:30-02:00"
  }
},
{
  "type": "node",
  "id": 3058756075,
  "lat": 48.8746926,
  "lon": 2.3541936,
  "tags": {
    "amenity": "pub",
    "brewery": "tripel_karmeliet",
    "name": "Paradis 13",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 3065232439,
  "lat": 48.8224719,
  "lon": 2.3032664,
  "tags": {
    "amenity": "bar",
    "name": "Le Carillon",
    "source": "survey"
  }
}

  ]
}';
    $items = array(
        array(
          "nom" => "Dirty Dick",
          "adresse" => "10 rue Frochot",
          "lat" => 48.881546,
          "long" => 2.3375950
        ),
        array(
          "nom" => "Le Cabaret Michou",
          "adresse" => "78 rue des Martyrs",
          "lat" => 48.883005,
          "long" => 2.339812
        ),
        array(
          "nom" => "Le Timbre Poste",
          "adresse" => "1 rue Rouget de Lisle",
          "lat" => 48.823832,
          "long" => 2.304364
        ),
        array(
          "nom" => "James Hetfeeld's Pub",
          "adresse" => "17 bd Poissonière",
          "lat" => 48.8708337,
          "long" => 2.3448435
        ),
        array(
          "nom" => "Les tonneaux parisiens",
          "adresse" => "12 Rue de Mazagran",
          "lat" => 48.8705101,
          "long" => 2.3518564
        ),

      );

    /*foreach($items as $i => $item)
    {
      $liste_items[$i] = new Business();
      $liste_items[$i]->setNom($item["nom"]);
      $liste_items[$i]->setAdresse($item["adresse"]);
      $liste_items[$i]->setVille("Paris");
      $liste_items[$i]->setCodePostal("75009");
      if ($item["nom"] == "Le Timbre Poste") {
        $liste_items[$i]->setVille("Malakoff");
        $liste_items[$i]->setCodePostal("92240");
      }
      $liste_items[$i]->setLatitude($item["lat"]);
      $liste_items[$i]->setLongitude($item["long"]);
      $liste_items[$i]->setType(Business::TYPE_BAR);

      $manager->persist($liste_items[$i]);
    }*/

    $items = json_decode($bigJson);
    $items = $items->elements;

    foreach($items as $i => $item)
    {
      $liste_items[$i] = new Business();
      if (isset($item->tags->name))
        $liste_items[$i]->setNom($item->tags->name);
      else
        $liste_items[$i]->setNom("NULL");
      $liste_items[$i]->setAdresse("5 rue Alexis Martin");
      $liste_items[$i]->setVille("Paris");
      $liste_items[$i]->setCodePostal("75009");
      if (isset($item->tags->name) && $item->tags->name == "Le Timbre Poste") {
        $liste_items[$i]->setVille("Malakoff");
        $liste_items[$i]->setCodePostal("92240");
      }
      $liste_items[$i]->setLatitude($item->lat);
      $liste_items[$i]->setLongitude($item->lon);
      $liste_items[$i]->setType(Business::TYPE_BAR);

      $manager->persist($liste_items[$i]);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
  public function getOrder()
  {
      return 1;
  }
}