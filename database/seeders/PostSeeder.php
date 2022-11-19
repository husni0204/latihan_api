<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        collect([
            [
                'title' => 'Judul Pertama',
                'content' => 'Isi bagian pertama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Judul Kedua',
                'content' => 'Isi bagian kedua',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])->each(function ($post) {
            DB::table('posts')->insert($post);
        });
    }
}
