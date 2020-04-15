<?php

use Illuminate\Database\Seeder;

class ChatterTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE USER

        /* if (!\DB::table('users')->find(1)) {
            \DB::table('users')->insert([
                0 => [
                    'id'             => 1,
                    'name'           => 'subhendu',
                    'email'          => 'admin@admin.com',
                    'password'       => '$2y$10$9ED4Exe2raEeaeOzk.EW6uMBKn3Ib5Q.7kABWaf4QHagOgYHU8ca.', //password
                    'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
                    'created_at'     => '2016-07-29 15:13:02',
                    'updated_at'     => '2016-08-18 14:33:50',
                ],
            ]);
        } */

        // CREATE THE CATEGORIES

        \DB::table('chatter_categories')->delete();

        \DB::table('chatter_categories')->insert([
            0 => [
                'id'         => 1,
                'parent_id'  => null,
                'order'      => 1,
                'name'       => 'Laravel',
                'color'      => '#E67E22',
                'slug'       => 'laravel',
                'created_at' => null,
                'updated_at' => null,
            ],
            1 => [
                'id'         => 2,
                'parent_id'  => null,
                'order'      => 2,
                'name'       => 'Vue',
                'color'      => '#2ECC71',
                'slug'       => 'vue',
                'created_at' => null,
                'updated_at' => null,
            ],
            2 => [
                'id'         => 3,
                'parent_id'  => null,
                'order'      => 3,
                'name'       => 'Other',
                'color'      => '#9B59B6',
                'slug'       => 'other',
                'created_at' => null,
                'updated_at' => null,
            ],
            3 => [
                'id'         => 4,
                'parent_id'  => null,
                'order'      => 4,
                'name'       => 'Random',
                'color'      => '#3498DB',
                'slug'       => 'random',
                'created_at' => null,
                'updated_at' => null,
            ],
            4 => [
                'id'         => 5,
                'parent_id'  => null,
                'order'      => 4,
                'name'       => 'Request',
                'color'      => 'yellow',
                'slug'       => 'request',
                'created_at' => null,
                'updated_at' => null,
            ],

            
        ]);

        // CREATE THE DISCUSSIONS

        \DB::table('chatter_discussion')->delete();

        \DB::table('chatter_discussion')->insert([
            0 => [
                'id'                  => 1,
                'chatter_category_id' => 1,
                'title'               => 'Hello Everyone, This is my Introduction',
                'user_id'             => 1,
                'current_character_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:27:56',
                'updated_at'          => '2016-08-18 14:27:56',
                'slug'                => 'hello-everyone-this-is-my-introduction',
                'color'               => '#239900',
            ],
            
        ]);

        // CREATE THE POSTS

        \DB::table('chatter_post')->delete();

        \DB::table('chatter_post')->insert([
                    0 => [
                        'id'                    => 1,
                        'chatter_discussion_id' => 1,
                        'user_id'               => 1,
                        'current_character_id'             => 1,
                        'body'                  => '<p>My name is Tony and I\'m a developer at <a href="https://devdojo.com" target="_blank">https://devdojo.com</a> and I also work with an awesome company in PB called The Control Group: <a href="http://www.thecontrolgroup.com" target="_blank">http://www.thecontrolgroup.com</a></p>
        <p>You can check me out on twitter at <a href="http://www.twitter.com/tnylea" target="_blank">http://www.twitter.com/tnylea</a></p>
        <p>or you can subscribe to me on YouTube at <a href="http://www.youtube.com/devdojo" target="_blank">http://www.youtube.com/devdojo</a></p>',
                        'created_at' => '2016-08-18 14:27:56',
                        'updated_at' => '2016-08-18 14:27:56',
                    ]
        ]);
    }
}
