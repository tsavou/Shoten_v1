<?php

namespace App\Http\Controllers;

use App\Models\Volume;
use Illuminate\Http\Request;

class VolumeController extends Controller
{
    public function index(){
        $volumes=Volume::all();

        return $volumes;
    }
}
