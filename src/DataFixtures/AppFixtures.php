<?php

namespace App\DataFixtures;
use App\Entity\Genre;
use App\Entity\Auteur;
use App\Entity\Livre;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use Faker;

class AppFixtures extends Fixture

{
    public UserPasswordHasherInterface $passwordEncoder;

    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)

    {  // $product = new Product();
        // $manager->persist($product);
        // On va créer (fake) des données 
        $faker = \Faker\Factory::create('fr_FR');
        //créer 10 genres
        $genres=[];

        for($i=0; $i<10; $i++){
            $genre= new Genre();
            $genre->setNom($faker->randomElement(['Roman', 'Nouvelle', 'conte','Poéme','Histoire courte','Théâtre','Articles','Encyclopédies','Apologue','Discours']));
         
            $manager->persist($genre);

            $genres[] = $genre;

        }

         //créer 20 auteurs
         $auteurs=[];

         for($i=0; $i <20; $i++){
             $auteur= new Auteur();
             $auteur->setNomPrenom($faker->name);
             $auteur->setSexe($faker->randomElement(['M', 'F']));
             $auteur->setDateDeNaissance($faker->dateTime($format = 'Y-m-d', $max = 'now'));
             $auteur->setNationalite($faker->country);
     
             $manager->persist($auteur);
             $auteurs[] = $auteur;
 
         }

          //créer 50 livres
          $livres=[];

          for($i=0; $i <50; $i++){
              $livre= new Livre();
              $livre->setIsbn($faker->isbn13);
              $livre->setTitre($faker->realText(18));
              $livre->setNombrePages($faker->numberBetween(10,200) );
              $livre->setDateDeParution(
                  $faker->dateTimeBetween('1900-01-01', '2021-12-31')
                     );
              $livre-> setNote($faker->numberBetween(0,20));
              $livre->addAuteur($auteurs[mt_rand(1, 3)]);
              $livre->addGenre($genres[$faker->numberBetween(0,9)]);
              $manager->persist($livre);
              $livres[] = $livre;
  
          }
          $admin = new User();
          $admin->setEmail('admin@gmail.com');
          $admin->setPassword($this->passwordEncoder->hashPassword(
              $admin,
              'admin'
          ));
          $admin->setRoles(["ROLE_ADMIN"]);
          $manager->persist($admin);
  
         
      

        $manager->flush();
    }
}
