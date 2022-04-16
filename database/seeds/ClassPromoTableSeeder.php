<?php

use Illuminate\Database\Seeder;
use App\ClassPromo;
class ClassPromoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ClassPromo::class)->create();
    }
}
