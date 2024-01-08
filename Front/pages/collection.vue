<script setup>
definePageMeta({
    middleware: ['auth'],
});

useHead({
    title: "Shoten - Collection",
});

import { useCollectionStore } from "@/stores/Collection";


const store = useCollectionStore();


</script>

<template>
    <div class="cards-container">
        <div class="collec-header">
            <h1>Votre collection</h1>
            <p class="total"> <strong>{{ store.totalVolumes }} </strong> tomes - <strong>{{ store.totalManga }} </strong>
                mangas
            </p>
        </div>

        <div class="loader" v-if="store.loading">
            <IconsLoader />
        </div>
        <div class="cards-list" v-else>
            <div v-if="store.totalVolumes === 0" class="no-manga">
                <p>Vous n'avez aucun manga dans votre collection. </p>
                <p>Parcourez les <NuxtLink to="/catalog">mangas</NuxtLink>
                    pour en ajouter</p>
            </div>
            <div v-for="manga in store.groupedCollection" :key="manga.manga_id">

                <NuxtLink class="card flex" :to="`/catalog/${manga.manga_id}`">

                    <div class="img-wrapper">
                        <img :src="manga.manga.image" :alt="manga.manga.title">
                    </div>

                    <div class="manga-info">

                        <h2>{{ manga.manga.title }}</h2>

                        <!-- affiche le nombre de volumes possédés / le nombre total de volumes du manga -->
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
    </div>
</template>

<style scoped lang="scss">
.loader {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10rem;
}

.cards-container {
    @media screen and (min-width: 768px) {
        padding: 3rem;
    }

    .collec-header {

        position: fixed;
        right: 0;
        left: 0;
        top: 6rem;
        background-color: #142034f2;
        color: $light-text-color;
        border: 0.8rem solid $main-color;
        height: 9rem;


        @media screen and (min-width: 768px) {
            top: 12rem;

        }

        h1 {
            text-align: center;
            font-size: 2rem;
        }

        .total {
            font-size: 1.7rem;
            text-align: center;
            margin: 1rem;
        }
    }


    .cards-list {
        margin-top: 15rem;

        .no-manga {
            text-align: center;
            margin-top: 15rem;
            padding: 3rem;
            font-weight: bold;

            p {
                a {
                    color: $main-color;
                    text-decoration: underline;
                    ;
                }
            }
        }

        @media screen and (min-width: 768px) {
            margin-top: 7rem;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
        }


        .card {
            align-items: center;
            gap: 1rem;
            cursor: pointer;
            padding: 1rem;

            @media screen and (min-width: 768px) {
                justify-content: space-around;
                border: solid 1px $dark-text-color;
                border-radius: 1rem;
                height: 30rem;
                background-color: #142034f2;
                color: $main-color;
            }

            .img-wrapper {

                padding: 2rem;
                max-width: 200px;

                @media screen and (min-width: 768px) {
                    max-width: 200px;
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
                    color: $light-text-color;

                    h2 {
                        font-size: 2.5rem;
                        color: $main-color;
                    }

                    p {
                        font-size: 2rem;
                    }

                    progress {
                        width: 100%;
                    }

                }

            }

        }


    }
}
</style>
