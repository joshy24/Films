<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('comments')->insert([
          'name' => "Joshua",
          'comment' => "I love this film",
          'film_id' => 1
      ]);

      DB::table('comments')->insert([
          'name' => "Richard",
          'comment' => "The best film ever made by far. Its not even close",
          'film_id' => 2
      ]);

      DB::table('comments')->insert([
          'name' => "Donald",
          'comment' => "Average to be honest",
          'film_id' => 3
      ]);
    }
}
