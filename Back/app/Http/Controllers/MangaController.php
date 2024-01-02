<?php

namespace App\Http\Controllers;

use App\Models\Manga;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        $manga = Manga::with(['genre', 'type', 'volumes.manga'])->get();

        return $manga;
    }

    public function show($id)
    {

        $manga = Manga::with(['genre', 'type', 'volumes.manga'])->find($id);

        // Ajouter la clé "volume_count" à chaque volume dans le manga
        $manga->volumes->each(function ($volume) use ($manga) {
            $volume->volume_count = count($manga->volumes);
        });



        return $manga;
    }
}
