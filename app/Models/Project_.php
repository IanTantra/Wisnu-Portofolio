<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_ 
{

    private static $projects = [
        [
        'title' => 'Projek1',
        'slug' => 'slug 1',
        'description' => 'njdkashjkfdafkhakfnnuicac adfbjdfnsd cjsabf jdbjbajfbsd hjdfbajksd'
        ],
        [
            'title' => 'Projek 2',
            'slug' => 'slug 2',
            'description' => 'hdjashdjasbdasda hjfhadf gsdgfhgs  sdagfyugdayuf afsgdyfa'
        ]
    ];
    //


    public static function all(){
        return collect(self::$projects);
    }
    

    public static function find($slug){
        $temp = [];

        $project = static::all();

        // foreach ($project as $key) {
    
        //     if ($key['slug'] === $slug) {
    
        //         $temp = $key;
    
        //     }
        //     # code...
        // }

        return $project -> firstWhere('slug', $slug);
    
    }

}
