<script setup>
definePageMeta({
    middleware: ['auth'],
});


import { useCollectionStore } from "@/stores/Collection";


const store = useCollectionStore()

const collection = store.collection

const mangaCount= ref(0)

const groupedCollection = ref([])

// Groupe les volumes par manga
groupedCollection.value = collection.reduce((acc, current) => {

    // Vérifie si le manga existe déjà dans l'accumulateur
    const existingManga = acc.find(item => item.manga_id === current.manga_id);

    if (existingManga) {
        // Si le manga existe, ajoute juste le volume à la liste du manga
        existingManga.volumes.push(current);
    } else {
        // Si le manga n'existe pas encore, crée un nouvel élément
        acc.push({
            manga_id: current.manga_id,
            manga: current.manga,
            volumes: [current],
        });

        mangaCount.value++;
    }

    return acc;
}, []);

console.log(groupedCollection)

</script>

<template>

    <p class="total"> <strong>{{ store.total }} </strong> tomes - <strong>{{ mangaCount }} </strong> mangas </p>
    <hr>
    

    <div v-for="manga in groupedCollection" :key="manga.manga_id">

        <div>

            <NuxtLink class="card flex" :to="`/catalog/${manga.manga_id}`">

                <div class="img-wrapper">
                    <img :src="manga.manga.image" :alt="manga.manga.title">
                </div>

                <div class="manga-info">

                    <h2>{{ manga.manga.title }}</h2>
                    <p> {{ manga.volumes.length }} / {{ manga.manga.volumes.length }}  tomes - {{ manga.manga.status }}</p>

                    <progress class="progress" :value="manga.volumes.length" :max="manga.manga.volumes.length"></progress>

                </div>

                <div>
                    <IconsArrowToGo />
                </div>           
            </NuxtLink>
        </div>
        <hr>

    </div>

    <!-- <div v-if="mangas.length>0" v-for="volume in store.collection" :key="volume.id">

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
    <div v-else> Chargement...</div> -->
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
