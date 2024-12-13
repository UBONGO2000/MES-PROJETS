<?php

namespace App\DataFixtures;

use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PersonneFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i < 100; $i++) {
            $faker = Factory::create('fr_FR');

            $personne = new Personne();
            $personne->setFirstname($faker->firstName);
            $personne->setLastname($faker->lastName);
            $personne->setAge($faker->numberBetween(18,99));
            $personne->setTrade($faker->company);
            $manager->persist($personne);
        }

        $manager->flush();
    }
}
