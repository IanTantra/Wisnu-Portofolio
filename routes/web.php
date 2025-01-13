<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Models\Project;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('home', [
        'title' => '',
    ]);
});

Route::get('/projects', [ProjectController::class, 'ProjectList']);

Route::get('/skills', 
[SkillController::class, 'SkillList']
);

Route::get('/profile', function(){
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Wisnu Dharmasatria Tantra',
        'image' => 'Profile.jpg'
    ]
);
});



Route::get('/project/{project:key}', [ProjectController::class, 'ProjectDetail']
    // $projects = [
    //     [
    //     'title' => 'Projek1',
    //     'slug' => 'slug 1',
    //     'description' => 'njdkashjkfdafkhakfnnuicac adfbjdfnsd cjsabf jdbjbajfbsd hjdfbajksd'
    //     ],
    //     [
    //         'title' => 'Projek 2',
    //         'slug' => 'slug 2',
    //         'description' => 'hdjashdjasbdasda hjfhadf gsdgfhgs  sdagfyugdayuf afsgdyfa'
    //     ]
    // ];

    

    // return view('project', [
    //     'title' => Project::find($slug)['title'],
    //     'project' => Project::find($slug)

    // ]);
);

