<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class ProductFixtures extends Fixture
{
    public const PRODUCT = [
        ['product_name' => 'Ta peau !','category' => 'body care','price' => 12,'brand' => 'Garnier'],
        ['product_name' => 'Ton hygiene !','category' => 'hygiene','price' => 15,'brand' => 'Mixa'],
        ['product_name' => 'Ta face','category' => 'face care','price' => 11,'brand' => 'Yves Saint Laurent'],
        ['product_name' => 'Tes cheveux','category' => 'hair care','price' => 14,'brand' => 'Armani'],
        ['product_name' => 'Cheveux plaisir','category' => 'shampoo','price' => 15,'brand' => 'Khiels'],
        ['product_name' => 'Plaisir de peau','category' => 'body care','price' => 20,'brand' => 'Khiels'],
        ['product_name' => 'Naturelle javel','category' => 'hygiene','price' => 22,'brand' => 'Garnier'],
        ['product_name' => 'Plaisir de visage','category' => 'face care','price' => 21,'brand' => 'Mixa'],
        ['product_name' => 'Plaisir cheveux','category' => 'hair care','price' => 25,'brand' => 'Yves Saint Laurent'],
        ['product_name' => 'Plus de cheveux','category' => 'shampoo','price' => 24,'brand' => 'Armani'],


    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PRODUCT as $products) {
            $product = new Product();
            $product->setNameProduct($products['product_name']);
            $product->setCategory($products['category']);
            $product->setPrice($products['price']);
            $product->setBrand($products['brand']);

            $manager->persist($product);
            $manager->flush();

        };
    }
}
