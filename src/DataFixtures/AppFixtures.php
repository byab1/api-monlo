<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Galerie;
use App\Entity\Package;
use App\Entity\Propriete;
use App\Entity\TypePackage;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        // $genres = ['male', 'female'];
        // $users = [];


        //Création des types de packages
        for ($u = 0; $u < 5; $u++) {
            $typePackage = new TypePackage();
            $typePpackage = ['Gratuit', 'Standard', 'Premium', 'Business', 'Sur mesure'];

            $typePackage->setNomTypePackage($faker->randomElement($typePpackage));

            $manager->persist($typePackage);

            //     //Création des packages
            for ($p = 0; $p < mt_rand(2, 5); $p++) {
                $package = new Package();
                $package->setNomPackage($faker->word())
                    ->setPrixPackage($faker->randomFloat(2, 500000, 70000000))
                    ->setNbrPropriete(mt_rand(1, 5))
                    ->setNbVedetProp(1)
                    ->setDesProp('<p>' . join('<p></p>', $faker->paragraphs(3)) . '</p>')
                    ->setEtat(1)
                    ->setDateExpiration($faker->dateTimeBetween('-1 months'))
                    ->setTypePackage($typePackage);

                $manager->persist($package);
            }
            //Création des Users
            for ($su = 0; $su < 10; $su++) {
                $user = new User();

                $hash = $this->encoder->encodePassword($user, "password");
                $logo = $faker->imageUrl(640, 480);

                $user->setNom($faker->firstName())
                    ->setPrenom($faker->lastName())
                    ->setEmail($faker->email)
                    ->setAdresse($faker->streetAddress())
                    ->setTelephone($faker->email)
                    ->setLogo($logo)
                    ->setAccreditation($faker->streetSuffix())
                    ->setEtat(1)
                    ->setCote($faker->numberBetween(2, 5))
                    ->setDateCreation($faker->dateTimeBetween('-6 months'))
                    ->setPackage($package)
                    ->setPassword($hash);

                $manager->persist($user);
                
                //     //Création des propriétés
                for ($k = 1; $k < mt_rand(5, 10); $k++) {
                    $propriete = new Propriete();
                    $photoPropriete = $faker->imageUrl(640, 480);
                    $types = ['Villa', 'Appartement', 'Boutique', 'Maison', 'Entrepot', 'Ferme', 'Terrain', 'Lavage-auto'];
                    // $user = $users[mt_rand(0, count($users) - 1)];

                    $propriete->setNomPropriete(($faker->streetName()))
                        ->setDesPropriete('<p>' . join('<p></p>', $faker->paragraphs(3)) . '</p>')
                        ->setPrix($faker->randomNumber())
                        ->setAdrPropriete($faker->streetAddress())
                        ->setLocalisation($faker->city())
                        ->setVille($faker->city())
                        ->setCommune($faker->city())
                        ->setSuperficie($faker->buildingNumber() . ' m²')
                        ->setStatut($faker->randomElement(['En Vente', 'Location']))
                        ->setPiscine($faker->randomElement(['Oui', 'Non']))
                        ->setSpa($faker->randomElement(['Oui', 'Non']))
                        ->setPanneauSolaire($faker->randomElement(['Oui', 'Non']))
                        ->setGarage($faker->randomElement(['Oui', 'Non']))
                        ->setEtat(1)
                        ->setPhotoPropriete($photoPropriete)
                        ->setSalleEau(mt_rand(1, 2))
                        ->setNbrPiece(mt_rand(1, 5))
                        ->setType($faker->randomElement($types))
                        ->setDateAjout($faker->dateTimeBetween('-2 months'))
                        ->setUser($user);

                    $manager->persist($propriete);

                    //         //Création de la Galerie d'image
                    for ($m = 1; $m <= mt_rand(2, 5); $m++) {

                        $galerie = new Galerie();

                        $galerie->setUrl($faker->imageUrl())
                            ->setCaption($faker->sentence())
                            ->setPropriete($propriete);

                        $manager->persist($galerie);
                    }
                }
            }
            $manager->flush();
        }
    }
}
