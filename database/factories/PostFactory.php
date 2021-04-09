<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Database\Seeders\PostsTableSeeder;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = ['about-bg.jpg', 'contact-bg.jpg', 'home-bg.jpg', 'post-bg.jpg'];
        $title = $this->faker->title;
        return [
            //
            'slug'=>$this->faker->slug(),
            'title' => $title,
            'content_raw' => $this->faker->text,
            'published_at'=>$this->faker->dateTime,
            'subtitle'=>Str::limit($title,20),
            'page_image'=>$images[mt_rand(0,3)],
            'meta_description'=>"Meta for $title",
            'is_draft'=>false,
        ];
    }
}
