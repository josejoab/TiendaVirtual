<?php
/**
    *Autor: Kevin Herrera
*/

use Illuminate\Database\Seeder;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Design::class, 10)->create();
    }
}
