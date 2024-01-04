<script setup>
const route = useRoute();
</script>
<template>
    <Header v-if="route.path !== '/'" />
    <Header class="desk-header-home" v-else />
    <div class="DefaultLayout">
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
.DefaultLayout {
    margin-bottom: 6rem;

    @media screen and (max-width: 768px) {
        margin-top:7rem ;
        
    }
}
</style>

