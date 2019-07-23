<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    $classes = ClassRoom::all();
    return view('classes',['classes'=>$classes]);
}
?>