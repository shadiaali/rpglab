<?php

use Illuminate\Database\Seeder;

class ChatterCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE CATEGORIES

        \DB::table('chatter_categories')->delete();

        \DB::table('chatter_categories')->insert([
            0 => [
                'id'         => 1,
                'parent_id'  => null,
                'order'      => 1,
                'name'       => 'Bog of Eternal Stench',
                'color'      => '#E67E22',
                'slug'       => 'bog-eternal-stench',
                'created_at' => null,
                'updated_at' => null,
            ],
            

            
        ]);

       
    }

}
