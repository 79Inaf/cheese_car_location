<?php

namespace App\DataFixtures;

use App\Entity\Vehicle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class VehicleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $vehicle = new Vehicle;
        $vehicle->setType('Berline');
        $vehicle->setNombrePlaces('5');
        $vehicle->setAnnee('2021');
        $vehicle->setBoiteVitesse('Automatique');
        $vehicle->setEnergie('Hybride');
        $vehicle->setMarque('Skoda Superb');
        $vehicle->setPhoto('https://s2.qwant.com/thumbr/0x380/4/8/3bd0d32af19077672503d0dff18c48e602482ba515cf85bb0571e4ad96e7a4/superb-3-lb-fl-front.jpg?u=https%3A%2F%2Fauto.ironhorse.ru%2Fwp-content%2Fuploads%2F2015%2F10%2Fsuperb-3-lb-fl-front.jpg&q=0&b=1&p=0&a=0');
        $vehicle->setKilometrage('65000');
        $vehicle->setLocalisation('Lyon');
        $vehicle->setOwner($this->getReference('vehicle_owner'));
        $manager->persist($vehicle);

        $vehicle4 = new Vehicle;
        $vehicle4->setType('Cabriolet');
        $vehicle4->setNombrePlaces('1');
        $vehicle4->setAnnee('1949');
        $vehicle4->setBoiteVitesse('aucune');
        $vehicle4->setEnergie('Pédales');
        $vehicle4->setMarque('Oui-Oui-mobile');
        $vehicle4->setPhoto('https://s2.qwant.com/thumbr/700x0/f/3/f4524518eff25b70e2e323b33b63d108ded8a996193615a54cf3e11a5e5945/71DI8A8-4oL._SL1500_.jpg?u=http%3A%2F%2Fwww.e-motoculture.fr%2Fwp-content%2Fuploads%2F2019%2F05%2F71DI8A8-4oL._SL1500_.jpg&q=0&b=1&p=0&a=0');
        $vehicle4->setKilometrage('135000');
        $vehicle4->setLocalisation('Lyon');
        $vehicle4->setOwner($this->getReference('vehicle_owner'));
        $manager->persist($vehicle4);

        $vehicle2 = new Vehicle;
        $vehicle2->setType('Familiale');
        $vehicle2->setNombrePlaces('6');
        $vehicle2->setAnnee('2005');
        $vehicle2->setBoiteVitesse('Manuelle');
        $vehicle2->setEnergie('Diesel');
        $vehicle2->setMarque('Opel Astra break');
        $vehicle2->setPhoto('https://s2.qwant.com/thumbr/0x380/d/2/82ea51a5659b2b14577744999db47fa6b8a40c60f7efd6b74f1231184c7f79/opel-astra-break-2.jpg?u=https%3A%2F%2Fwww.car-top.fr%2Fwp-content%2Fuploads%2F2019%2F03%2Fopel-astra-break-2.jpg&q=0&b=1&p=0&a=0');
        $vehicle2->setKilometrage('190000');
        $vehicle2->setLocalisation('Lyon');
        $vehicle2->setOwner($this->getReference('vehicle_owner'));
        $manager->persist($vehicle2);

        $vehicle1 = new Vehicle;
        $vehicle1->setType('Citadine');
        $vehicle1->setNombrePlaces('4');
        $vehicle1->setAnnee('2010');
        $vehicle1->setBoiteVitesse('Manuelle');
        $vehicle1->setEnergie('Essence');
        $vehicle1->setMarque('Renault Clio');
        $vehicle1->setLocalisation('Lyon');
        $vehicle1->setPhoto('https://s1.qwant.com/thumbr/0x380/2/0/c118f28c4f5d4bc1117cdb017497974275e216bc989fa3855e906cf5caab1b/2010-Renault-Sport-Clio-1.jpg?u=https%3A%2F%2Fwww.drivearabia.com%2Fapp%2Fuploads%2F2009%2F11%2F2010-Renault-Sport-Clio-1.jpg&q=0&b=1&p=0&a=0');
        $vehicle1->setKilometrage('175000');
        $vehicle1->setOwner($this->getReference('vehicle_admin'));
        $manager->persist($vehicle1);

        $vehicle3 = new Vehicle;
        $vehicle3->setType('Coupé');
        $vehicle3->setNombrePlaces('2');
        $vehicle3->setAnnee('2022');
        $vehicle3->setBoiteVitesse('Automatique');
        $vehicle3->setEnergie('Hybride');
        $vehicle3->setMarque('Alfa Roméo');
        $vehicle3->setPhoto('https://s2.qwant.com/thumbr/0x380/7/9/84ca18912c01fa44502277d03bb2d77b7e9bcbe5d452dfe57679949ca538d0/alfa-romeo-montreal.jpg?u=https%3A%2F%2Fwww.largus.fr%2Fimages%2Fimages%2Falfa-romeo-montreal.jpg&q=0&b=1&p=0&a=0');
        $vehicle3->setKilometrage('12000');
        $vehicle3->setLocalisation('Lyon');
        $vehicle3->setOwner($this->getReference('vehicle_admin'));
        $manager->persist($vehicle3);

        $faker = Factory::create();
        $types = ['Berline', 'Citadine', 'Familiale', 'Coupé', 'Cabriolet'];
        $clutches = ['Automatique', 'Manuelle'];
        $energy = ['Hybride', 'Essence', 'Diesel', 'Electrique', 'Pédales'];
        $pictures = ['https://s2.qwant.com/thumbr/0x380/7/9/84ca18912c01fa44502277d03bb2d77b7e9bcbe5d452dfe57679949ca538d0/alfa-romeo-montreal.jpg?u=https%3A%2F%2Fwww.largus.fr%2Fimages%2Fimages%2Falfa-romeo-montreal.jpg&q=0&b=1&p=0&a=0', 'https://s1.qwant.com/thumbr/0x380/2/0/c118f28c4f5d4bc1117cdb017497974275e216bc989fa3855e906cf5caab1b/2010-Renault-Sport-Clio-1.jpg?u=https%3A%2F%2Fwww.drivearabia.com%2Fapp%2Fuploads%2F2009%2F11%2F2010-Renault-Sport-Clio-1.jpg&q=0&b=1&p=0&a=0', 'https://s2.qwant.com/thumbr/0x380/d/2/82ea51a5659b2b14577744999db47fa6b8a40c60f7efd6b74f1231184c7f79/opel-astra-break-2.jpg?u=https%3A%2F%2Fwww.car-top.fr%2Fwp-content%2Fuploads%2F2019%2F03%2Fopel-astra-break-2.jpg&q=0&b=1&p=0&a=0', 'https://s2.qwant.com/thumbr/700x0/f/3/f4524518eff25b70e2e323b33b63d108ded8a996193615a54cf3e11a5e5945/71DI8A8-4oL._SL1500_.jpg?u=http%3A%2F%2Fwww.e-motoculture.fr%2Fwp-content%2Fuploads%2F2019%2F05%2F71DI8A8-4oL._SL1500_.jpg&q=0&b=1&p=0&a=0', 'https://s2.qwant.com/thumbr/0x380/4/8/3bd0d32af19077672503d0dff18c48e602482ba515cf85bb0571e4ad96e7a4/superb-3-lb-fl-front.jpg?u=https%3A%2F%2Fauto.ironhorse.ru%2Fwp-content%2Fuploads%2F2015%2F10%2Fsuperb-3-lb-fl-front.jpg&q=0&b=1&p=0&a=0'];

        for ($i = 0; $i < 50; $i++) {
            $vehicle = new Vehicle();
            $vehicle->setType($faker->randomElement($types));
            $vehicle->setNombrePlaces($faker->numberBetween(1, 6));
            $vehicle->setAnnee($faker->year());
            $vehicle->setBoiteVitesse($faker->randomElement($clutches));
            $vehicle->setEnergie($faker->randomElement($energy));
            $vehicle->setMarque($faker->words(2, true));
            $vehicle->setLocalisation('Lyon');
            $vehicle->setKilometrage($faker->numberBetween(10, 300000));
            $vehicle->setPhoto($faker->randomElement($pictures));
            $vehicle->setOwner($this->getReference('vehicle_admin'));
            $manager->persist($vehicle);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
