<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('projects')->insert([
            'name' => 'Anishe',
            'key' => 'anishe',
            'synopsis' => 'Projek Anishe',
            'category' => 'personal',
            'image' => 'anishe.jpg',
            'description' => 'Pada Zaman Dahulu jshdjshjdkas sahudgasufbadn dfhgsdhf dhdgfha sfsdhfghsdfdsbhfb'
        ]);

        DB::table('projects')->insert([
            'name' => 'Projek 2',
            'key' => 'projek-2',
            'category' => 'team',
            'image' => 'anishe.jpg',
            'synopsis' => 'Pada Zaman Dahulu',
            'description' => 'Pada Zaman Dahulu jshdjshjdkas sahudgasufbadn dfhgsdhf dhdgfha sfsdhfghsdfdsbhfb'
        ]);
        

        DB::table('projects')->insert([
            'name' => 'Projek 3',
            'key' => 'projek-3',
            'image' => 'anishe.jpg',
            'category' => 'team',
            'synopsis' => 'Pada Zaman Dahulu',
            'description' => 'Pada Zaman Dahulu jshdjshjdkas sahudgasufbadn dfhgsdhf dhdgfha sfsdhfghsdfdsbhfb'
        ]);


        // Project::create([
        //     'name' => 'Projek 3',
        //     'key' => 'p3',
        //     'synopsis' => 'Pada Zaman Dahulu',
        //     'description' => 'Pada Zaman Dahulu jshdjshjdkas sahudgasufbadn dfhgsdhf dhdgfha sfsdhfghsdfdsbhfb'
        
        // ]);
        // //
    }
}
