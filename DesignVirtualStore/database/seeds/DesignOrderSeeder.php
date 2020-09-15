<?php
/**
    *Autor: José Joab Romero Humba
*/

use Illuminate\Database\Seeder;

class DesignOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DesignOrder::class, 100)->create();
    }
}
