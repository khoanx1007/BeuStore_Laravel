<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories = [
            [
                'name' => 'Switch',
                'slug' => str::slug('switch'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Máy tính',
                'slug' => str::slug('may-tinh'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Console',
                'slug' => str::slug('console'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        foreach($categories as $category)
        {
            DB::table('categories')->insert($category);
        }
    }
}
