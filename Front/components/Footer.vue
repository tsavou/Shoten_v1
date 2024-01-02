<script setup>

const route = useRoute();

</script>

<template>
    <footer>

        <nav>
            <NuxtLink to="/catalog">
                <IconsCatalogActive v-if="route.path === '/catalog'" />
                <IconsCatalog v-else />

                <div class="nav-title">
                    Catalogue
                </div>

            </NuxtLink>

            <NuxtLink to="/planning">

                <IconsPlanningActive v-if="route.path === '/planning'" />
                <IconsPlanning v-else />

                <div class="nav-title">
                    Sorties
                </div>

            </NuxtLink>

            <NuxtLink to="/">
                <img class="logo" src="/img/logos/shoten-transparent-blue.png" alt="">
            </NuxtLink>

            <NuxtLink to="/collection">
                <IconsCollecActive v-if="route.path === '/collection'" />
                <IconsCollec v-else />

                <div class="nav-title">
                    Collection
                </div>
            </NuxtLink>

            <NuxtLink to="/account">

                <IconsUserActive v-if="route.path === '/auth/login' || route.path === '/auth/register' || route.path === '/account'" />
                <IconsUser v-else />

                <div class="nav-title">
                    Compte
                </div>
            </NuxtLink>
        </nav>

    </footer>
</template>

<style scoped lang="scss">
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: $main-color;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem;

    @media screen and (min-width: 768px) {
        position: static;

    }



    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 2.5rem;



        a {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            @media screen and (min-width: 768px) {
                &:not(:nth-child(3)) {
                    display: none;
                }
            }


            svg {
                width: 3rem;
            }

        }

        .logo {
            width: 6rem;

            @media screen and (min-width: 768px) {
                width: 3rem;
            }
        }

        .nav-title {
            font-size: 1rem;
        }

    }

}
</style>