<script >
import mangaData from "../api/mangas.json"

export default {
  data() {
    return {
      searchQuery: '',  //recherche user
      dataToSearch: mangaData, //donneés depuis json
      searchResults: {},  //résulat de la recherche
      lastSearchQuery: '',
    };
  },

  methods: {
    performSearch() {
      const query = this.searchQuery.toLowerCase();
      this.searchResults = {};

      for (const key in this.dataToSearch) {
        for (const i in this.dataToSearch[key]) {
          const manga = this.dataToSearch[key][i];
          if (
            manga.title && manga.title.toLowerCase().includes(query) ||
            manga.author && manga.author.toLowerCase().includes(query) ||
            manga.genres && manga.genres.some(genre => genre.toLowerCase().includes(query))
          ) {
            this.searchResults[i] = manga;
          }
        }
      }
    },
    reloadPage() {
      this.$router.go();
    },

    click() {
      this.lastSearchQuery = this.searchQuery;
    },
  },
}
</script>

<template>
  <div class="search">
    <input type="text" input v-model="searchQuery" @input="performSearch" name="search" id="recherche"
      placeholder="Recherche un manga">
    <img class="rech" src="../icons/search.svg">

    <div class="pro" v-if="Object.keys(searchResults).length > 0 && lastSearchQuery !== searchQuery">
      <ul>
        <li v-for="(manga, index) in searchResults" :key="manga.id">

          <NuxtLink :to="`/catalog/${manga.id}`">
            <img :key="index" :src="manga.image" :alt="manga.title" class="icato" @click="click()">
            <p>{{ manga.title }} </p>
          </NuxtLink>
          <hr>
        </li>
      </ul>
    </div>
  </div>
</template>

<style scoped lang="scss">
.search {
  display: flex;

  #recherche {
    border: none;
    border-bottom: 0.3rem black solid;
    background-color: #0CA06B;
    color: #F8F9FA;
    justify-content: space-between;
    align-self: center;
    padding: 2rem;
  }

  #recherche::placeholder {
    color: #F8F9FA;
  }

  .rech {
    justify-content: space-between;
    width: 3rem;
    height: 3rem;
    align-self: center;
  }

  .pro {
    background: #0CA06B;
    color: #F8F9FA;
    position: absolute;
    display: flex;
    padding: 4rem;
    margin-top: 10rem;
    z-index: 999;
    height: 30rem;
    overflow-y: auto;
    justify-content: space-between;

    .icato {
      justify-content: space-between;
      height: 10rem;
    }

    li {
      justify-content: space-between;
    }
  }

  @media screen and (max-width: 768px) {

    #recherche {
      border: none;
      border-bottom: 0.1rem black solid;
      background-color: #0CA06B;
      color: #F8F9FA;
      justify-content: space-between;
      align-self: center;
      width: 14rem;
      padding: 0.2rem;
    }


    .rech {
      justify-content: space-between;
      width: 2rem;
      height: 2rem;

    }
  }
}
</style>



