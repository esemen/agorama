<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

class AgoramaController extends Controller
{
    protected function menu(Request $request)
    {
        $path = storage_path('json/food-menu.json');
        $json = json_decode(File::get($path));

        return view('menu', ['foodMenu' => $json]);
    }
}
