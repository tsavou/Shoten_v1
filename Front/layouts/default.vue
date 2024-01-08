<script setup>
const route = useRoute();
</script>
<template>
    <Header v-if="route.path !== '/' && route.name !== 'catalog-id'" />
    <Header class="desk-header-home" v-else />
    <div class="DefaultLayout" v-if="route.path !== '/' && route.name !== 'catalog-id'">
        <slot />
    </div>
    <div v-else class="DefaultLayout-home">
        <slot />
    </div>
    <Footer />
</template>

<style scoped>
/*n'affiche le footer que sur la page d'accueil en desktop */
.desk-header-home {


    @media screen and (max-width: 768px) {
       display: none;

    }
}

.DefaultLayout-home {
   @media screen and (min-width: 768px) {
    
    margin-top: 12rem;
    
   }
}

.DefaultLayout {
    margin-bottom: 6rem;
    margin-top: 7rem;

    @media screen and (min-width: 768px) {
        margin-top: 12.5rem;

    }
}
</style>

