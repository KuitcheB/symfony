<?php

namespace App\DataFixtures;

use App\Entity\Departement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getDepartement() as [$nom, $email]) {
            $departement = new Departement();
            $departement->setNom($nom);
            $departement->setEmail($email);
            
	    $manager->persist($departement);
        }

        $manager->flush();
    }
    private function getDepartement(): array
    {
        return [
            ['Direction', 'direction@test.com'],
            ['Rh', 'rh@test.com'],
            ['Com', 'com@test.com'],
            ['Dev', 'dev@test.com'],
        ];
    }
}
