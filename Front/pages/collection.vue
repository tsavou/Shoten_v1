<script setup>
definePageMeta({
    middleware: ['auth'],
});


import { useCollectionStore } from "@/stores/Collection";
import { getMangas } from "@/api/manga";



const mangas =ref([]);

getMangas().then((data) => {
  mangas.value = data;
});

const getMangaById = (volume) => {
    return mangas.value.find(manga => manga.id === volume.manga_id)
}

const store = useCollectionStore()

const countVolumesByMangaId = store.collection.reduce((acc, volume) => {
    const mangaId = volume.manga_id;
    acc[mangaId] = (acc[mangaId] || 0) + 1;
    return acc;
}, {});

console.log(store.collection)

</script>

<template>
    <p class="total"> <strong>{{ store.total }} tomes</strong> dans ta Mangathèque</p>
    <hr>


    <div v-if="mangas.length>0" v-for="volume in store.collection" :key="volume.id">

        <div>


            <NuxtLink class="card flex" :to="`/catalog/${volume.manga_id}`">
                <div class="img-wrapper">
                    <img :src="volume.image" :alt="volume.title">
                </div>
                <div class="manga-info">
                    <h2><strong>{{ getMangaById(volume).title }}</strong></h2>
                    <p> {{ countVolumesByMangaId[volume.manga_id] }} / {{ getMangaById(volume).volumes.length }}
                        tomes - {{
                            getMangaById(volume).status }}</p>

                    <progress class="progress" :value="countVolumesByMangaId[volume.manga_id]"
                        :max="getMangaById(volume).volumes.length"></progress>
                </div>

                >

            </NuxtLink>
        </div>

        <hr>




    </div>
    <div v-else> Chargement...</div>
</template>

<style scoped lang="scss">
.total {
    color: $dark-text-color;
    font-size: 1.7rem;
    text-align: center;
    margin: 1rem;
}


.card {
    align-items: center;
    gap: 1rem;
    cursor: pointer;
    padding: 1rem;

    .img-wrapper {

        padding: 2rem;

        img {
            width: 100%;
            border-radius: 1rem;
        }
    }

    .manga-info {
        color: $dark-text-color;

        h2 {
            font-size: 1.8rem;
        }

        p {
            font-size: 1.2rem;
        }


    }


}
</style>
