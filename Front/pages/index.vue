
<template>
  <Header class="header-home"/>
  <main>
    <div class="jumbotron flex-col">
      <div class="main-text flex-col">
        <h1>Bienvenue sur</h1>
        <img
          src="/img/logos/shoten-transparent.png"
          class="logo-main-text"
          alt="logo shoten"
        />
      </div>
      <div class="text-cta">
        <p>Ne manque plus aucune sorties.</p>
        <p>N’achète plus de mangas en double.</p>
        <p>Grâce à Shoten, gère ta collection.</p>
      </div>
      <NuxtLink to="/auth/login"><ButtonsCTA>Inscris-toi</ButtonsCTA></NuxtLink>
    </div>
    <section>
      <h2>Les dernières sorties</h2>
      <Slider class="slider" @minusClick="slider1ID--" @plusClick="slider1ID++">
        <div
          :class="
            ({ active: slider1ID === index },
            { 'not-active': slider1ID !== index })
          "
          class="tome"
          v-for="(manga, index) in mangasByDate"
          :key="index"
        >
          <NuxtLink :to="`/catalog/${manga.id}`">
            <img :src="manga.image" />
            <p>{{ manga.title }}</p>
          </NuxtLink>
        </div>
      </Slider>
    </section>
    <section>
      <h2>Les plus populaire</h2>
      <Slider class="slider" @minusClick="slider2ID--" @plusClick="slider2ID++">
        <div
          :class="
            ({ active: slider2ID === index },
            { 'not-active': slider2ID !== index })
          "
          class="tome"
          v-for="(manga, index) in mangasByPopularity"
          :key="index"
        >
          <NuxtLink :to="`/catalog/${manga.id}`">
          <img :src="manga.image" />
          <p>{{ manga.title }}</p>
          </NuxtLink>
        </div>
      </Slider>
    </section>
  </main>
  <Footer/>
</template>

<script setup>

definePageMeta({
  layout: "content",
})
//Get all mangas and store it in array mangas
const mangas = ref([]);

const { data, pending, error, refresh } = await useFetch(
  "http://127.0.0.1:8000/api/manga"
);

mangas.value = data.value;

// Create new variable to store mangas sorted
const mangasByDate = ref([...mangas.value]);
const mangasByPopularity = ref([...mangas.value]);

const sortMangasByPopularity = () => {
  mangasByPopularity.value = mangasByPopularity.value.sort(
    (a, b) => b.popularity - a.popularity
  );
};

const sortMangasByDate = () => {
  mangasByDate.value = mangasByDate.value.sort(
    (a, b) => new Date(b.release_date) - new Date(a.release_date)
  );
};

// Sort mangas
sortMangasByDate();
sortMangasByPopularity();

// Slice mangas to 5
mangasByDate.value = mangasByDate.value.slice(0, 5);
mangasByPopularity.value = mangasByPopularity.value.slice(0, 5);


// Change title
useHead({
  title: "Shoten | Bienvenue",
});

// Create emits for slider with variables to change the manga currently showed.
defineEmits(["minusClick", "plusClick"]);
let slider1ID = ref(1);
let slider2ID = ref(1);
</script>

<style scoped lang="scss">
.header-home {
  @media screen and (max-width: 768px) {
    display: none;
  }
}
.jumbotron {
  width: 100%;
  padding: 2rem;
  position: relative;
  color: $light-text-color;
  font-weight: bold;
  gap: 3rem;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: linear-gradient(
      0deg,
      rgba(0, 0, 0, 0.65) 0%,
      rgba(0, 0, 0, 0.65) 100%
    ),
    url("https://c4.wallpaperflare.com/wallpaper/787/854/424/jujutsu-kaisen-satoru-gojo-anime-boys-anime-girls-hd-wallpaper-preview.jpg"),
    lightgray 50% / cover no-repeat;
  background-size: cover;
  background-position: center;
  .main-text {
    h1 {
      font-size: 5rem;
    }
    justify-content: center;
    align-items: center;
    gap: 1rem;
    font-size: 2rem;
  }
  .text-cta {
    font-size: 3rem;
  }
}
.logo-main-text {
  width: 20rem;
}

section {
  padding: 2rem;
  .tome {
    width: 15rem;
    height: 20rem;
    cursor: pointer;
    img {
      width: 100%;
      height: 100%;
    }
  }
}

//Mobile responsive
@media screen and (max-width: 768px) {
  .jumbotron {
    gap: 1rem;
    padding: 1rem;
  }

  h2 {
    text-align: center;
  }

  .slider {
    .active {
      display: block;
    }

    .not-active {
      display: none;
    }
  }
}
</style>

