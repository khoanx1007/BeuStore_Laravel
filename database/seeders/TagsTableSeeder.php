<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();
        $tags=[
            'Hot','Mới','Sale','Yêu thích'
        ];
        foreach ($tags as $tag){
            DB::table('tags')->insert(
                [
                    'name' => $tag,
                    'slug' => Str::slug($tag),
                    'created_at'=> now(),
                    'updated_at'=> now()
                ]);
        }
    }
}
