<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categoryGames = new Category();
        $categoryGames->setName('Games');
        $categoryGames->setCreatedAt(time());
        $categoryGames->setModifiedAt(time());
        $manager->persist($categoryGames);

        $categoryComputers = new Category();
        $categoryComputers->setName('Computers');
        $categoryComputers->setCreatedAt(time());
        $categoryComputers->setModifiedAt(time());
        $manager->persist($categoryComputers);

        $categoryTV = new Category();
        $categoryTV->setName('TVs and Accessories');
        $categoryTV->setCreatedAt(time());
        $categoryTV->setModifiedAt(time());
        $manager->persist($categoryTV);

        $product = new Product();
        $product->setName('Pong');
        $product->setCategory($categoryGames);
        $product->setSku('A0001');
        $product->setPrice(69.99);
        $product->setQuantity(20);
        $product->setCreatedAt(time());
        $product->setModifiedAt(time());
        $manager->persist($product);

        $product = new Product();
        $product->setName('GameStation 5');
        $product->setCategory($categoryGames);
        $product->setSku('A0002');
        $product->setPrice(269.99);
        $product->setQuantity(15);
        $product->setCreatedAt(time());
        $product->setModifiedAt(time());
        $manager->persist($product);

        $product = new Product();
        $product->setName('AP Oman PC - Aluminum');
        $product->setCategory($categoryComputers);
        $product->setSku('A0003');
        $product->setPrice(1399.99);
        $product->setQuantity(10);
        $product->setCreatedAt(time());
        $product->setModifiedAt(time());
        $manager->persist($product);

        $product = new Product();
        $product->setName('Fony UHD HDR 55\" 4k TV');
        $product->setCategory($categoryTV);
        $product->setSku('A0004');
        $product->setPrice(1399.99);
        $product->setQuantity(5);
        $product->setCreatedAt(time());
        $product->setModifiedAt(time());
        $manager->persist($product);

        $user = new User();
        $user->setName('Bobby Fischer');
        $user->setEmail('bobby@foo.com');
        $user->setCreatedAt(time());
        $user->setModifiedAt(time());
        $manager->persist($user);

        $user = new User();
        $user->setName('Betty Rubble');
        $user->setEmail('betty@foo.com');
        $user->setCreatedAt(time());
        $user->setModifiedAt(time());
        $manager->persist($user);


        $manager->flush();
    }
}
