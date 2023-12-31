<script setup>

import { getManga, addToCollection, getCollection } from "@/api/manga";
import { useCollectionStore } from "@/stores/Collection";

definePageMeta({
    layout: "content"
});

const route = useRoute();

const mangaID = route.params.id;
const manga = ref({});
const loading = ref(true);

const store = useCollectionStore()


// Récupération du manga selon l'id
getManga(mangaID).then((data) => {
    manga.value = data
    loading.value = false

});


</script>

<template>
    <Header class="header-manga" />
    <div v-if="!loading" class="manga-container">
        <div class="overlay">
            <img class="mobile-bg" :src="manga.image" alt="">
            <div class="manga-header flex">
                <div></div>

                <h1>{{ manga.title }}</h1>
                <div class="btn flex">
                    <div class="follow-btn" v-if="store.isMangaAdded(manga)">
                        <IconsLike /> Suivi
                    </div>

                    <ButtonsAdd v-if="!store.isMangaAdded(manga)" @click="store.addMangaToCollection(manga)" />
                    <ButtonsAdded v-else @click="store.removeMangaFromCollection(manga)" />



                </div>
            </div>
            <div class="manga-content flex">


                <div class="img-wrapper">
                    <img class="manga-img" :src="manga.image" :alt="manga.title">
                </div>

                <div>
                    <ul>
                        <li><span>Type : </span>{{ manga.type ? manga.type.name : 'N/A' }}</li>
                        <li><span>Genres : </span> {{ manga.genre ? manga.genre.map(genre => genre.name).join(', ') : 'N/A'
                        }} </li>
                        <li><span>Auteur : </span>{{ manga.author ? manga.author : 'N/A' }}</li>
                        <li><span>Editeur : </span>{{ manga.editor ? manga.editor : 'N/A' }}</li>
                        <li><span>Date de 1ère publication : </span>{{ manga.release_date ? new
                            Date(manga.release_date).getFullYear() : 'N/A' }}</li>
                        <li><span>Nombre de volumes : </span>{{ manga.volumes ? manga.volumes.length : 'N/A' }} ({{
                            manga.status ? manga.status : 'N/A' }})</li>
                        <li><span>Synopsis : </span>{{ manga.synopsis ? manga.synopsis : 'N/A' }}</li>
                    </ul>

                </div>

            </div>

        </div>
    </div>


    <div class="loader" v-else>
        <IconsLoader />
        <p>Loading</p>
    </div>

    <div class="volumes-container flex">
        <div class="volume-card flex" v-for="volume in manga.volumes">

            <div class="volume-img-wrapper">
                <img :src="volume.image" :alt="manga.title + 'tome' + volume.number">
                
                <div class="desktop-btn flex">
                    <IconsCheck v-if="store.isVolumeInCollection(volume.id)"
                        @click="store.removeVolumeFromCollection(volume)" />
                    <IconsAdd v-else @click="store.addVolumeToCollection(volume)" />
                </div>

            </div>

            <div class="volume-info  flex-col">
                <p>Tome {{ volume.number }}</p>
                <div class="btn">
                    <ButtonsAdd v-if="!store.isVolumeInCollection(volume.id)"
                        @click="store.addVolumeToCollection(volume)" />
                    <ButtonsAdded v-else @click="store.removeVolumeFromCollection(volume)" />
                </div>
            </div>

        </div>

    </div>
    <Footer />
</template>

<style scoped lang="scss">
.loader {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 5rem;

}

.header-manga {
    @media screen and (max-width: 768px) {
        display: none;

    }
}

.manga-container {
    color: $light-text-color;

    .overlay {
        background-color: #000000bd;
        position: relative;
        padding: 3rem;

        @media screen and (min-width: 768px) {
            background-color: $secondary-color;

        }

        .manga-header {
            align-items: center;
            justify-content: space-between;
            gap: 2rem;

            .follow-btn {
                background-color: $main-color;
                padding: 1rem;
                border-radius: 2rem;
            }

            h1 {
                text-align: center;
            }

            .btn {
                gap: 1rem;

                @media screen and (max-width: 768px) {
                    flex-direction: column;

                }


            }

        }


        .mobile-bg {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;

            @media screen and (min-width: 768px) {
                display: none;
            }

        }

        .manga-content {


            @media screen and (min-width: 768px) {
                gap: 3rem;
                align-items: center;
            }

            .manga-img {
                border-radius: 1rem;

                @media screen and (max-width: 768px) {
                    display: none;
                }
            }

            ul {
                li {
                    margin-top: 0.5rem;
                    font-size: 1.4rem;
                    text-align: justify;

                    span {
                        font-weight: bold;
                    }
                }
            }

        }




    }
}

.volumes-container {
    padding: 3rem;
    flex-direction: column;
    margin-bottom: 2rem;

    @media screen and (min-width: 768px) {
        flex-direction: row;
        flex-wrap: wrap;
    }

    .volume-card {
        align-items: center;
        justify-content: space-between;
        padding: 1rem;
        border-radius: 1rem;

        @media screen and (min-width: 768px) {
            flex-direction: column;
            flex-basis: calc(100% / 8);
            ;

        }


        .volume-img-wrapper {
            width: 50%;
            padding: 1rem;
            position: relative;

            @media screen and (min-width: 768px) {
                width: 100%;
            }

            img {
                border-radius: 1rem;
                width: 100%;
            }

            .desktop-btn {
                position: absolute;
                top: 0.5rem;
                right: 0.5rem;
                border-radius: 1rem;
                cursor: pointer;
                padding: 0.4rem;
                background-color: $main-color;

                svg {
                    color: $background-color;
                }


                @media screen and (max-width: 768px) {
                    display: none;
                }
            }

        }

        .volume-info {
            align-items: center;
            gap: 2rem;

            p {
                font-weight: bold;
            }

            .btn {
                @media screen and (min-width: 768px) {
                    display: none;
                }
            }

        }

    }
}</style>
