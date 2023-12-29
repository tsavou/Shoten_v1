<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        $collection = Collection::with(['volume', 'user'])->get();

        return $collection;
    }

    public function showUserCollection()
    {


        // // $userId = auth()->user()->id;
        $user_id = 7;
        // $user = User::with(['volumes'])->find($user_id);

        $collection = Collection::with(['volume', 'user'])->where('user_id', $user_id)->get();

        // return $user;
        return $collection;
    }

    public function showUser(){
        // // $userId = auth()->user()->id;
        $user_id = 7;
        $user = User::with(['volumes'])->find($user_id);

        return $user;

    }

    public function addToCollection($volumeId)
    {

        // $userId = auth()->user()->id;
        $userId = 7;

        if (Collection::where('volume_id', $volumeId)->where('user_id', $userId)->exists()) {
            return "le volume $volumeId est déjà dans votre collection";
        }

        Collection::create([
            'volume_id' => $volumeId,
            'user_id' => $userId
        ]);

        return "le volume $volumeId a bien été ajouté à votre collection";
    }

    public function removeFromCollection($volumeId)
    {

        $userId = auth()->user()->id;

        $volume = Collection::where('volume_id', $volumeId)->where('user_id', $userId)->first();
        $volume->delete();
    }
}
