<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 4; $i++) {
            $post = new Page;
            $post->title = $this->faker->words(3, true);
            $post->slug = \Str::slug($this->faker->words(3, true));
            $post->description = $this->faker->paragraph();
            $post->author = 1;
            $post->save();
        }
    }
}
