<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $i=1;
        $faker=Faker::create();
        foreach(range(1,100) as $index){
            DB::table('students')->insert([
                'name'=>'name number '.$i,
                'email'=>'email number '.$i,
                'phone'=>'phone number '.$i,
            ]);
            $i++;
        }
    }
}
