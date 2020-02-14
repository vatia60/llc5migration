<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Categories::create([
            'name' => 'World',
            'slug' => 'World',
        ]);
    }
}
