<?php

namespace App\DataFixtures;

use App\Entity\Vehicle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VehicleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $vehicle = new Vehicle;
        $vehicle->settype('berline');
        $vehicle->setNombrePlaces('6');
        $vehicle->setAnnee('2021');
        $vehicle->setBoiteVitesse('automatique');
        $vehicle->setEnergie('hybride');
        $vehicle->setMarque('Skoda superbe');
        $vehicle->setPhoto('https://i0.wp.com/www.photoscar.fr/wp-content/uploads/2019/05/Skoda-Superb-Scout-2020-01.jpg?w=1571&ssl=1');
        $vehicle->setKilometrage('65000');

        $manager->persist($vehicle);

        $manager->flush();
    }
}
