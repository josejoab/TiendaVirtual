<?php
/**
    *Autor: Kevin Herrera
*/

use Illuminate\Database\Seeder;

class WishDesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\WishDesign::class, 23)->create();
    }
}
