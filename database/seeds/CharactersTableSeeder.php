<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert(

            [
            'id' => 1,
            'user_id' => 1,
            'character_name' => 'Bilbo Baggins',
            ]
            );

            DB::table('characters')->insert(

                [
                'id' => 2,
                'user_id' => 2,
                'character_name' => 'Frodo Baggins',
                ]
                );
    
    }
}
