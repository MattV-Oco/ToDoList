<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class TaskFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    { 
        $faker = Faker\Factory::create('fr_FR');

        for($ta = 1; $ta <= 10; $ta++){
            $task = new Task();
            $task->setTitle($faker->text(30));
            $task->setDescription($faker->text());

            $manager->persist($task);
        }

        $manager->flush();
    }
}
