<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\AnecdoteComment;
use App\SeekAdviceComment;
use App\ConfessionComment;
use App\AnecdoteSubcomment;
use App\SeekAdviceSubcomment;
use App\ConfessionSubcomment;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        AnecdoteComment::query()->delete();
        SeekAdviceComment::query()->delete();
        ConfessionComment::query()->delete();

        for ($i = 0; $i < 1000; $i++)
        {
            AnecdoteComment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'popularity' => $faker->numberBetween(2, 100),
                'number_of_subcomments' => $faker->numberBetween(1, 10),
                'story_id' => $faker->numberBetween(1, 50)
            ]);
            SeekAdviceComment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'popularity' => $faker->numberBetween(2, 100),
                'number_of_subcomments' => $faker->numberBetween(1, 10),
                'story_id' => $faker->numberBetween(1, 50)
            ]);
            ConfessionComment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'popularity' => $faker->numberBetween(2, 100),
                'number_of_subcomments' => $faker->numberBetween(1, 10),
                'story_id' => $faker->numberBetween(1, 50)
            ]);
        }

        AnecdoteSubcomment::query()->delete();
        SeekAdviceSubcomment::query()->delete();
        ConfessionSubcomment::query()->delete();

        for ($i = 0; $i < 500; $i++)
        {
            AnecdoteSubcomment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'comment_id' => $faker->numberBetween(1, 100)
            ]);
            SeekAdviceSubcomment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'comment_id' => $faker->numberBetween(1, 100)
            ]);
            ConfessionSubcomment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'comment_id' => $faker->numberBetween(1, 100)
            ]);
        }
    }
}
