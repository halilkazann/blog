<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=["eğlence","bilişim","teknoloji","sağlık","spor","günlük yaşam"];
        foreach ($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>str_slug($category)
                ]);
        }
    }
}
