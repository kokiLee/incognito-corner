<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Anecdote;
use App\SeekAdvice;
use App\Confession;
use App\UnconfirmedStory;

class StoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        Anecdote::query()->delete();
        SeekAdvice::query()->delete();
        Confession::query()->delete();
        UnconfirmedStory::query()->delete();

        for ($i = 0; $i < 1000; $i++)
        {
            Anecdote::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(50, 1000)),
                'tags' => $faker->randomElement(['#dika', '#laza', '#maksa', '#dika #jelena', '#laza #maksa', '#aleks #laza #maksa']),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'rating' => $faker->randomFloat(2, 0, 5),
                'rating_sum' => $faker->randomFloat(1, 100, 200),
                'number_of_ratings' => $faker->numberBetween(40, 50),
                'popularity' => $faker->randomFloat(2, 10, 1000),
                'number_of_comments' => $faker->numberBetween(1, 20)
            ]);
            SeekAdvice::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(50, 1000)),
                'tags' => $faker->randomElement(['#dika', '#laza', '#maksa', '#dika #jelena', '#laza #maksa', '#aleks #laza #maksa']),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'rating' => $faker->randomFloat(2, 0, 5),
                'rating_sum' => $faker->randomFloat(1, 100, 200),
                'number_of_ratings' => $faker->numberBetween(40, 50),
                'popularity' => $faker->randomFloat(2, 10, 1000),
                'number_of_comments' => $faker->numberBetween(1, 20)
            ]);
            Confession::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(50, 1000)),
                'tags' => $faker->randomElement(['#dika', '#laza', '#maksa', '#dika #jelena', '#laza #maksa', '#aleks #laza #maksa']),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'rating' => $faker->randomFloat(2, 0, 5),
                'rating_sum' => $faker->randomFloat(1, 100, 200),
                'number_of_ratings' => $faker->numberBetween(40, 50),
                'popularity' => $faker->randomFloat(2, 10, 1000),
                'number_of_comments' => $faker->numberBetween(1, 20)
            ]);
            UnconfirmedStory::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(50, 1000)),
                'tags' => $faker->randomElement(['#dika', '#laza', '#maksa', '#dika #jelena', '#laza #maksa', '#aleks #laza #maksa']),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'type' => $faker->randomElement(['anecdotes', 'seek-advice', 'confessions'])
            ]);
        }
    }
}
