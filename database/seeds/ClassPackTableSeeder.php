<?php

use Illuminate\Database\Seeder;
use App\ClassPack;
class ClassPackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ClassPack::class,6)->create();
    }
}
