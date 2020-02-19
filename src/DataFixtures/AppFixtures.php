<?php

namespace App\DataFixtures;

use App\Entity\Musee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //une instance de type Musee
        $louvre = new Musee;
        $louvre
            ->setNom('Musée du Louvre')
            ->setPhoto('https://lh4.googleusercontent.com/proxy/U57T3qrPM7P9LdOh3rR_W_CXo-FjxQhpBfqMivLRcCwvrvLL34z2PsZJj8z0y_fueTwZu7Zoi7cl57-930LBmimW03CgLI4cNWfUN-x1YfbLtINO8ofu2yONlX7s-YzhgEX-JZeqshfaUPM8wu4lDQudV8oP7mXfZUhUY50sS1ayUhVPYDoDdiavw5aGtIawv8zmSpFXawgk0DBTKDWMlMRGn9PX0QvbS4y6LJOwz_iiotwQJe3-A0NGvx95KWUqfCVnyzFXJRigUAVAfjGbvD2lRwGV4LEDJPJCvV_ygW1nnPYWsSH_1fE')
            ->setAdresse('Rue de Rivoli, 75001 Paris')
            ->setPrix('entre 0 et 17 €')
            ->setPresentation("Musée universaliste, le Louvre couvre une chronologie et une aire géographique étendues, depuis l'Antiquité jusqu'à 1848 et de l'Europe occidentale jusqu'à l'Iran, via la Grèce, l'Égypte et le Proche-Orient.")
            ->setOeuvre("La Joconde, La Venus de Milo, le sacre de Napoléon, le radeau de la méduse...");

        $manager->persist($louvre);


        $manager->flush();
    }
}
