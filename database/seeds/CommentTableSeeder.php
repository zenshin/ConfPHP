<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
            'post_id' => 1,
            'email' =>'kim@jongun.kp',
            'message' => 'exemple',
            'status' => 'publié'
            ]
        ]);
    }
}
