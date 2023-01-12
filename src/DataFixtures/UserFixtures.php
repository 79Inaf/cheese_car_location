<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Création d’un utilisateur de type “user” 
        $user = new User();
        $user->setEmail('user@voiture.com');
        $user->setRoles(['ROLE_USER']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            'userpassword'
        );
        $user->setPassword($hashedPassword);
        $user->setPrenom('Olivier');
        $user->setNom('DeCarglass');

        $manager->persist($user);

        // Création d’un utilisateur de type “pro” 
        $pro = new User();
        $pro->setEmail('pro@voiture.com');
        $pro->setRoles(['ROLE_OWNER']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $pro,
            'propassword'
        );

        $pro->setPassword($hashedPassword);
        $manager->persist($pro);

        // Création d’un utilisateur de type “admin” 
        $admin = new User();
        $admin->setEmail('admin@voiture.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin,
            'adminpassword'
        );

        $admin->setPassword($hashedPassword);
        $manager->persist($admin);

        $manager->flush();
    }
}
