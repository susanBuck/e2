<?php

namespace App\Commands;

use App\Products;
use Faker\Factory;

class AppCommand extends Command
{
    /**
     * Example command
     */
    public function test()
    {
        dump('It works! You invoked your first command. :)');
    }

    /**
     * Run migrations and all seeds giving a “fresh start“ on the database
     */
    public function fresh()
    {
        $this->migrate();
        $this->seedProducts();
        $this->seedReviews();
    }

    /**
     * Migrations to build database tables
     */
    public function migrate()
    {
        # Note that the *createTable* method automatically adds an auto-incrementing
        # primary key column so you don’t have to include that in your array of columns.
        $this->app->db()->createTable('products', [
            'name' => 'varchar(255)',
            'sku' => 'varchar(255)',
            'description' => 'text',
            'price' => 'decimal(10,2)',
            'available' => 'int',
            'weight' => 'decimal(10,2)',
            'perishable' => 'tinyint(1)'
        ]);

        $this->app->db()->createTable('reviews', [
            'product_id' => 'int',
            'name' => 'varchar(255)',
            'review' => 'text',
        ]);

        dump('Migration complete; check the database for your new tables.');
    }

    /**
     * Seed `products` table with example data
     */
    public function seedProducts()
    {
        $products = new Products($this->app->path('database/products.json'));

        foreach ($products->getAll() as $product) {
            # We’re not tracking `categories`
            unset($product['categories']);

            # Don’t need ID - that will get automatically added
            unset($product['id']);

            # Convert perishable boolean to int
            $product['perishable'] = $product['perishable'] ? 1 : 0;

            # Insert product
            $this->app->db()->insert('products', $product);
        }

        dump('products table has been seeded');
    }

    /**
     * Seed `reviews` table with example data
     */
    public function seedReviews()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = Factory::create();

        # Use a loop to create 5 reviews
        for ($i = 0; $i < 5; $i++) {
            # Set up a review
            $review = [
                'name' => $faker->name,
                'review' => $faker->sentences(3, true),
                'product_id' => ($i % 2 == 0) ? 1 : 2, # Alternate between products 1 and 2
            ];

            # Insert the review
            $this->app->db()->insert('reviews', $review);
        }

        dump('reviews table has been seeded');
    }
}