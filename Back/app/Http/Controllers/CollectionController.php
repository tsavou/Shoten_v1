<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\User;
use App\Models\Volume;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        $collection = Collection::with(['volume', 'user'])->get();

        return $collection;
    }

    public function showUserCollection($userId)
    {

        $collection = Collection::with(['volume.manga', 'user'])->where('user_id', $userId)->get();

        // return $user;
        return $collection;
    }

    public function showUser($userId){

        $user = User::with(['volumes.manga'])->find($userId);

        return $user;

    }

    public function addToCollection( $userId, $volumeId)
    {
        if (Collection::where('volume_id', $volumeId)->where('user_id', $userId)->exists()) {
            return "le volume $volumeId est déjà dans votre collection";
        }

        Collection::create([
            'volume_id' => $volumeId,
            'user_id' => $userId
        ]);

        return "le volume $volumeId a bien été ajouté à votre collection user $userId";
    }

    public function removeFromCollection($userId, $volumeId)
    {
        if (!Collection::where('volume_id', $volumeId)->where('user_id', $userId)->exists()) {
            return "le volume $volumeId n'est pas dans votre collection";
        }

        $volume = Collection::where('volume_id', $volumeId)->where('user_id', $userId)->first();
        $volume->delete();

        return "le volume $volumeId a bien été supprimé de votre collection user $userId";
    }

    // public function addAllToCollection($userId,$mangaId)
    // {
    //     $volumes = Volume::where('manga_id', $mangaId)->get();

    //     foreach ($volumes as $volume) {

    //         $this->addToCollection($userId, $volume->id);

    //     }
    // }

    // public function removeAllFromCollection($userId, $mangaId)

    // {

    //     $volumes = Volume::where('manga_id', $mangaId)->get();

    //     foreach ($volumes as $volume) {

    //         $this->removeFromCollection($userId, $volume->id);
    //     }
    // }
}
