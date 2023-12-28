<?php

namespace App\Http\Controllers;

use App\Models\Manga;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        $manga= Manga::with(['genre','type','volumes'])->get();

        return $manga;
    }

    public function show($id){

        $manga = Manga::with(['genre','type','volumes'])->find($id);

        return $manga;
    }
}
