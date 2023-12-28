<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Manga;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function all() {
        $manga= Manga::all();
        $genres= Genre::all();
        $types = Type::all();

        return [
            'manga' => $manga,
            'genres' => $genres,
            'types' => $types,];

    }
}
