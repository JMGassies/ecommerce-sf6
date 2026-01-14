<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    
    // Créer un nouvel objet Category 
    $category = new Category(); 
    // Nourrir l'objet Category 
    $category->setName('Informatique');
    // Persister les données 
    $manager->persist($category);
    // $product = new Product();
        // $manager->persist($product);
     $category = new Category(); 
    // Nourrir l'objet Category 
    $category->setName('Ordinateur');
    // Persister les données 
    $manager->persist($category);

        $manager->flush();
    }
}
