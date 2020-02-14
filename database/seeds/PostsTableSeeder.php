<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Posts::create([
            'user_id' => '1',
            'category_id' => '1',
            'title' => 'This is first title',
            'content' => 'Multiple lines of text that form the lede, informing new readers quickly. Multiple lines of text that form the lede, informing new readers quickly.',
            'thumbnail_path' => 'photo_5e35159aae8c11.84457451MJcrH03RTm.jpg',
        ]);
    }
}
