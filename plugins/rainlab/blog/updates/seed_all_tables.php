<?php namespace RainLab\Blog\Updates;

use Carbon\Carbon;
use RainLab\Blog\Models\Post;
use RainLab\Blog\Models\Category;
use RainLab\Blog\Models\PostCategory;
use October\Rain\Database\Updates\Seeder;
use Faker;

class SeedAllTables extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $arr_category = [];
        $c = Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);
        $arr_category[] = $c->id;
        $c = Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);
        $arr_category[] = $c->id;
        $c = Category::create([
            'name' => 'Event',
            'slug' => 'event'
        ]);
        $arr_category[] = $c->id;
        $c = Category::create([
            'name' => 'Philosophy',
            'slug' => 'philosophy'
        ]);
        $arr_category[] = $c->id;
        $c = Category::create([
            'name' => 'Technology',
            'slug' => 'Technology'
        ]);
        $arr_category[] = $c->id;
        for($i = 0; $i < 100; $i++){
          $name = $faker->sentence($nbWords = 5, $variableNbWords = true);
          $p =  Post::create([
                'title' => $name,
                'slug' => str_slug($name),
                'content' => $faker->paragraph($nbSentences = 100, $variableNbSentences = true),
                'excerpt' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'published_at' => $faker->dateTime($max='now'),
                'published' => $faker->boolean($chanceOfGettingTrue = 50)
            ]);
            PostCategory::create([
                'category_id' => $arr_category[array_rand($arr_category)],
                'post_id' => $p->id
            ]);
        }
    }

}
