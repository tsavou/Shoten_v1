<script setup>

import { useMenuStore } from "@/stores/Showmenu";
import { getMangas, getGenres, getTypes } from "@/api/manga";

useHead({
    title: "Shoten - Catalogue",
});

const mangas = ref([]);
const genres = ref([]);
const types = ref([]);
const loading = ref(true);


getMangas().then((data) => {
    mangas.value = data;
    filterBy();
    loading.value = false

});

getGenres().then((data) => {
    genres.value = data;
});

getTypes().then((data) => {
    types.value = data;
});

const store = useMenuStore();



const filteredMangas = ref([...mangas.value]);

const selectedTypes = ref([]);
const selectedGenres = ref([]);

const filterBy = () => {
    filteredMangas.value = mangas.value.filter((manga) => {
        const typesFilter = selectedTypes.value.length == 0 || selectedTypes.value.includes(manga.type.name);
        const genreFilter = selectedGenres.value.length === 0 || selectedGenres.value.some((selectedGenre) => manga.genre.some((mangaGenre) => mangaGenre.name === selectedGenre));
        return typesFilter && genreFilter

    })
    return store.selectedMenu = "";
};

const sortBy = ref("");

const sortMangas = () => {
    filteredMangas.value.sort((a, b) => {
        if (sortBy.value == "title") {
            return a.title.localeCompare(b.title);
        } else if (sortBy.value == "date") {
            return new Date(b.release_date) - new Date(a.release_date);
        } else if (sortBy.value == "popularity") {
            return b.popularity - a.popularity;
        }
    })

    return store.selectedMenu = "";
}



</script>


<template>
    <div v-if="store.selectedMenu == 'filter'" class="filter flex-col">
        <form @submit.prevent="filterBy">

            <input class="submit-btn" type="submit" value="Filtrer">

            <div class="filter-group">
                <p>Types</p>
                <div class="types" v-for="(type, index) in types" :key="index">
                    <label :for="type.name">
                        <input type="checkbox" name="type" :value="type.name" :id="type.name" v-model="selectedTypes">
                        <span> {{ type.name }}</span>
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <p>Genres</p>
                <div class="genres" v-for="(genre, index) in genres" :key="index">
                    <label :for="genre.name">
                        <input type="checkbox" name="genre" :value="genre.name" :id="genre.name" v-model="selectedGenres">
                        <span>{{ genre.name }}</span>
                    </label>

                </div>
            </div>
        </form>
    </div>

    <div v-if="store.selectedMenu == 'sort'" class="sort flex-col">
        <p>Trier par :</p>

        <div class="sort-group">
            <label for="popularity">
                <input type="radio" name="sort" value="popularity" id="popularity" v-model="sortBy" @change="sortMangas">
                <span>Popularité</span>
            </label>
        </div>

        <div class="sort-group">
            <label for="date">
                <input type="radio" name="sort" value="date" id="date" v-model="sortBy" @change="sortMangas">
                <span>Les plus récents</span>
            </label>
        </div>
        <div class="sort-group">
            <label for="title">
                <input type="radio" name="sort" value="title" id="title" v-model="sortBy" @change="sortMangas">
                <span>Nom</span>
            </label>
        </div>
    </div>

    <main class="flex">

        <div class="loader" v-if="loading">
            <IconsLoader />
            <p>Loading</p>
        </div>

        <div class="manga-list flex">
            <div class="manga" v-for="(manga, index) in filteredMangas" :key="index">
                <NuxtLink :to="`/catalog/${manga.id}`">
                    <img :key="index" :src="manga.image" :alt="manga.title">
                </NuxtLink>
            </div>
        </div>

    </main>
</template>


<style scoped lang="scss">
.filter,
.sort {
    position: fixed;
    top: 5.2rem; //header height
    right: 0;
    bottom: 0;
    width: 40vw;
    background-color: rgba(12, 160, 108, 0.96);
    color: $light-text-color;
    padding: 1rem;
    overflow: scroll;



    p {
        color: $dark-text-color;
        font-weight: bold;
        margin: 0.5rem;
    }


    form {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
    }

    label {
        display: flex;
        cursor: pointer;
        font-weight: 500;
        position: relative;
        overflow: hidden;
        margin-bottom: 0.1rem;
    }

    label input {
        position: absolute;
        left: -9999px;
    }

    label input:checked+span {
        background-color: $secondary-color;
        color: white;
    }

    label input:checked+span:before {
        box-shadow: inset 0 0 0 0.5rem #142034d3;

    }

    label span {
        display: flex;
        align-items: center;
        padding: 0.375em 0.75em 0.375em 0.375em;
        border-radius: 99em;
        transition: 0.25s ease;
        color: $light-text-color;
        font-size: 1.3rem;
    }

    label span:hover {
        background-color: #d6d6e5;
    }

    label span:before {
        display: flex;
        flex-shrink: 0;
        content: "";
        background-color: #fff;
        width: 1.5rem;
        height: 1.5rem;
        border-radius: 50%;
        margin-right: 0.375em;
        transition: 0.25s ease;
        box-shadow: inset 0 0 0 0.125em #00005c;
    }

    .submit-btn {
        background-color: $secondary-color;
        color: $light-text-color;
        border: none;
        border-radius: 1rem;
        padding: 0.5rem;
        margin-top: 1rem;
        cursor: pointer;
        width: 10rem;
        align-self: flex-end;
    }


}




main {
    justify-content: center;
    padding: 2rem;

    @media screen and (min-width: 768px) {
        padding: 1rem 10rem 0;
    }


    .manga-list {
        flex-wrap: wrap;
        gap: 2rem;
        margin-left: 2rem;


        .manga {
            flex-basis: calc(100%/2 - 2rem);

            @media screen and (min-width: 480px) {
                flex-basis: calc(100%/3 - 2rem);
            }


            @media screen and (min-width: 600px) {
                flex-basis: calc(100%/4 - 2rem);
            }



            @media screen and (min-width: 768px) {
                flex-basis: calc(100%/6 - 2rem);
            }

            img {
                width: 100%;
                height: 100%;
                border-radius: 0.5rem;
                min-width: 13rem;

            }


        }
    }
}
</style>