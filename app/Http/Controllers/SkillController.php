<?php

namespace App\Http\Controllers;
use App\Models\Skill;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function SkillList(){
        return view('skills', [
            'title' => 'Halaman Skill'
            ,'skills' => Skill::all()]);
    }
}
