<?php

use Illuminate\Database\Seeder;

class TagPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->delete();
        DB::statement('ALTER TABLE post_tag AUTO_INCREMENT=1');
        DB::table('post_tag')->insert([
            [
                'post_id'=>1,
                'tag_id'=>1,
            ],
            [
                'post_id'=>1,
                'tag_id'=>2,
            ],
            [
                'post_id'=>1,
                'tag_id'=>5,
            ],

            [
                'post_id'=>2,
                'tag_id'=>2,
            ],
            [
                'post_id'=>2,
                'tag_id'=>5,
            ],
            [
                'post_id'=>2,
                'tag_id'=>8,
            ],

            [
                'post_id'=>3,
                'tag_id'=>7,
            ],
            [
                'post_id'=>3,
                'tag_id'=>3,
            ],
            [
                'post_id'=>3,
                'tag_id'=>4,
            ],

            [
                'post_id'=>4,
                'tag_id'=>5,
            ],
            [
                'post_id'=>4,
                'tag_id'=>7,
            ],
            [
                'post_id'=>4,
                'tag_id'=>8,
            ],


        ]);
    }

}
