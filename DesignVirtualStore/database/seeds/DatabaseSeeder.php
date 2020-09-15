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
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            DesignSeeder::class,
            OrderSeeder::class,
            DesignOrderSeeder::class,
       ]);
    }
}
