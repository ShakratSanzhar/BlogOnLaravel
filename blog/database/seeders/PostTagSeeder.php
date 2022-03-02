<?php

namespace Database\Seeders;

use App\Models\PostTag;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        for($i=0;$i<20;$i++)
        {
            PostTag::create([
                'post_id'=>rand(1,15),
                'tag_id'=>rand(1,3),
                
            ]);
        }
    }
}
