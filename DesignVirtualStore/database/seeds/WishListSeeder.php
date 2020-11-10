<?php
/**
    *Autor: Kevin Herrera
*/

use Illuminate\Database\Seeder;

class WishListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\WishList::class, 23)->create();
    }
}
