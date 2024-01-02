<script setup>
definePageMeta({
    middleware: ['auth'],
});


import { useCollectionStore } from "@/stores/Collection";


const store = useCollectionStore();


</script>

<template>
    <div class="cards-container">
        <h1>Votre collection</h1>
        <p class="total"> <strong>{{ store.totalVolumes }} </strong> tomes - <strong>{{ store.totalManga }} </strong> mangas
        </p>
        <hr>

        <div v-for="manga in store.groupedCollection" :key="manga.manga_id">


            <NuxtLink class="card flex" :to="`/catalog/${manga.manga_id}`">

                <div class="img-wrapper">
                    <img :src="manga.manga.image" :alt="manga.manga.title">
                </div>

                <div class="manga-info">

                    <h2>{{ manga.manga.title }}</h2>

                    <!-- affcihe le nombre de volumes possédés / le nombre total de volumes du manga -->
                    <p> {{ manga.volumes.length }} / {{ manga.volumes[0].volume_count ? manga.volumes[0].volume_count :
                        manga.manga.volumes.length }} tomes - {{ manga.manga.status }}</p>
                    <!--manga.volumes[0].volume_count vient de l'objet volume ajouté dans le store collection pour l'affichage dynamique  -->
                    <!-- manga.manga.volumes.length vient des objets manga récupérés depuis la bdd  -->


                    <progress class="progress" :value="manga.volumes.length"
                        :max="manga.volumes[0].volume_count ? manga.volumes[0].volume_count : manga.manga.volumes.length"></progress>

                </div>

                <div>
                    <IconsArrowToGo />
                </div>
            </NuxtLink>
            <hr>

        </div>
    </div>
</template>

<style scoped lang="scss">
h1 {
    text-align: center;
    color: $dark-text-color;
    font-size: 2rem;
}

.total {
    color: $dark-text-color;
    font-size: 1.7rem;
    text-align: center;
    margin: 1rem;
}

.cards-container {
    @media screen and (min-width: 768px) {
        padding: 3rem;
    }


    .card {
        align-items: center;
        gap: 1rem;
        cursor: pointer;
        padding: 1rem;

        @media screen and (min-width: 768px) {
            justify-content: space-around;
            border: solid 1px $dark-text-color;
        }

        .img-wrapper {

            padding: 2rem;

            @media screen and (min-width: 768px) {
                width: 200px;
            }

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

            @media screen and (min-width: 768px) {
                width: 50%;

                h2{
                    font-size: 2.5rem;
                }

                p{
                    font-size: 2rem;
                }

                progress{
                    width: 100%;
                }
                
            }

        }


    }
}
</style>
