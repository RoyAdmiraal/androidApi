<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('character')->insert([
            'name' => 'Roy',
            'age' => 23,
            'gender' => 'Male',
            'size' => 123,
            'weight' => 123,
            'hair' => 'Blond',
            'skin' => 'vuyqewr',
            'alignment' => 'biqlewrbeqwr'
        ]);

        DB::table('stats')->insert([
            'strength' => 10,
            'dexterity' => 10,
            'consitution' => 10,
            'intelligence' =>10 ,
            'wisdom' =>10 ,
            'charisma' => 10
        ]);
    }
}
