<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Role Users
         *
         */
        DB::table('role_user')->insert(

            [
            'role_id' => '1',
            'user_id' => '1'
            ]);


        
    }
}