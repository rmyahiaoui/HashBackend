<?php

namespace App\DataFixtures;

use App\Entity\Site;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
         $site = new Site();
         $url = 'https://github.com/rmyahiaoui/HashBackend';
         $site->setUrl($url);
         $site->setHash(hash('crc32b', $url));
         $manager->persist($site); 
         $site = new Site();
         $url = 'https://github.com/rmyahiaoui/hash-fronted';
         $site->setUrl($url);
         $site->setHash(hash('crc32b', $url));
         $manager->persist($site); 
        $manager->flush();
    }
}
