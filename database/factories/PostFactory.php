<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [

            'category_id' => rand(1,3),
            'subcategory_id' => rand(1,3),
            'district_id' => rand(1,3),
            'subdistrict_id' => rand(1,3),
            'user_id' => rand(1,3),
            'title_en' => $this->faker->word(),
            'title_urdu' => 'پوسٹ 1',
            'image' => 'http://placehold.it/350x182',
            'details_en' => $this->faker->sentence(30),
            'details_urdu' => 'تفصیل 1',
            'tags_en' => $this->faker->realText(11),
            'tags_urdu' => 'ٹیگ',
            'headline' => 1,
            'first_section' => 1,
            'first_section_thumbnail' => 1,
            'bigthumbnail' => 1,
            'post_date' => date('d-m-y'),
            'post_month' => date('F'),
        ];
    }
}
