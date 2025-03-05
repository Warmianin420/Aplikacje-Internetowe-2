<?php

class Trip {
    public $id;
    public $location;
    public $continent;
    public $country;
    public $period;
    public $description;
    public $price;
    public $image;

    public function __construct($id, $location, $continent, $country, $period, $description, $price, $image) {
        $this->id = $id;
        $this->location = $location;
        $this->continent = $continent;
        $this->country = $country;
        $this->period = $period;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }
}


$t1 = new Trip(1, 'Kolorado', 'Ameryka Północna', 'USA', 7, 
'jest wyżynno-górzystym stanem, którego średnia wysokość nad 
poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado, 
Mount Elbert, wznosi się na 4399 m n.p.m.',
19000, 'colorado.jpg');

$t2 = new Trip(2, 'Alaska', 'Ameryka Północna', 'USA', 10, 
'pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to 
najwyższa część łańcucha Kordylierów z najwyższym szczytem 
kontynentu - Denali (McKinley) (6194 m n.p.m.).
',
24000, 'alaska.jpg');

$t3 = new Trip(3, 'Everest', 'Azja', 'Chiny', 7, 
'najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość
 8844 lub 8850), ośmiotysięcznik położony w Himalajach Wysokich,
 na granicy Nepalu i Tybetu.',
22000, 'everest.jpg');

$t4 = new Trip(4, 'Alpy', 'Europa', 'Austria', 6, 
'najwyższy łańcuch górski Europy, ciągnący się łukiem od wybrzeża 
Morza Śródziemnego w okolicy Savony po dolinę Dunaju w okolicach Wiednia.',
16000, 'alps.jpg');

$trips = [$t1, $t2, $t3, $t4];
