<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function editer()
    {
        return view ('editor');
    }
}
