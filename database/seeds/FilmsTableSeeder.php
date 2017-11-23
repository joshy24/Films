<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('films')->insert([
          'name' => "Lord of the Rings",
          'description' => "An Epic Movie",
          'release_date' => "2011-04-05",
          'rating' => 4,
          'ticket_price' => 600,
          'country' => "Spain",
          'genre' => "Action, Comedy",
          'photo' => "lord.jpg",
          'slug' => "lord_of_the_rings"
      ]);

      DB::table('films')->insert([
          'name' => "Pirates Of the Caribbean",
          'description' => "An Wonderful Movie",
          'release_date' => "2011-04-05",
          'rating' => 3,
          'ticket_price' => 500,
          'country' => "Spain",
          'genre' => "Action, Comedy, Funny",
          'photo' => "pirates.jpg",
          'slug' => "pirates_of_the_caribbean"
      ]);

      DB::table('films')->insert([
          'name' => "The Great Gatsby",
          'description' => "A Complete Film",
          'release_date' => "2011-04-05",
          'rating' => 5,
          'ticket_price' => 500,
          'country' => "Spain",
          'genre' => "Romance, Comedy",
          'photo' => "gatsby.png",
          'slug' => "the_great_gatsby"
      ]);
    }
}
