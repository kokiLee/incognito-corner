<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\FunnyEventComment;
use App\SeekAdviceComment;
use App\ConfessionComment;
use App\FunnyEventSubcomment;
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
        
        FunnyEventComment::query()->delete();
        SeekAdviceComment::query()->delete();
        ConfessionComment::query()->delete();

        for ($i = 0; $i < 150; $i++)
        {
            FunnyEventComment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'popularity' => $faker->numberBetween(2, 100),
                'number_of_subcomments' => $faker->numberBetween(1, 10),
                'story_id' => $faker->numberBetween(1, 25)
            ]);
            SeekAdviceComment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'popularity' => $faker->numberBetween(2, 100),
                'number_of_subcomments' => $faker->numberBetween(1, 10),
                'story_id' => $faker->numberBetween(1, 25)
            ]);
            ConfessionComment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'popularity' => $faker->numberBetween(2, 100),
                'number_of_subcomments' => $faker->numberBetween(1, 10),
                'story_id' => $faker->numberBetween(1, 25)
            ]);
        }

        FunnyEventSubcomment::query()->delete();
        SeekAdviceSubcomment::query()->delete();
        ConfessionSubcomment::query()->delete();

        for ($i = 0; $i < 100; $i++)
        {
            FunnyEventSubcomment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'comment_id' => $faker->numberBetween(1, 40)
            ]);
            SeekAdviceSubcomment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'comment_id' => $faker->numberBetween(1, 40)
            ]);
            ConfessionSubcomment::create([
                'author' => $faker->name,
                'text' => $faker->realText(rand(20, 500)),
                'approvals' => $faker->numberBetween(1, 50),
                'disapprovals' => $faker->numberBetween(0, 20),
                'comment_id' => $faker->numberBetween(1, 40)
            ]);
        }
    }
}
