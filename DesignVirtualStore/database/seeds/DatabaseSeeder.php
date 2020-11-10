<?php
/**
    *Autor: Valeria Suárez
    *Autor: Kevin Herrera
    *Autor: Joab Romero
*/
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(DesignSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(DesignOrderSeeder::class);
        $this->call(WishListSeeder::class);
        $this->call(WishDesignSeeder::class);
    }
}
