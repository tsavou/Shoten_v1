<script >
import { useMenuStore } from "@/stores/Showmenu";

export default {
    data() {
        const store = useMenuStore();
        const route = useRoute();

        return {
            mobile: false,
            store,
            route

        };
    },
    mounted() {
        this.checkIfMobile();
        window.addEventListener('resize', this.checkIfMobile);
    },
    beforeUnmount() {
        window.removeEventListener('resize', this.checkIfMobile);
    },
    methods: {
        checkIfMobile() {
            this.mobile = window.innerWidth <= 768;
        },
    }
};


</script>

<template>
    <header>
        <div class="head">
            <NuxtLink to="/">
                <div class="logo">
                    <img src="/img/logos/shoten-transparent-blue.png" alt="">
                </div>
            </NuxtLink>


            <NuxtLink to="/">
                <div class="title" :class="{ 'active-link': $route.path === '/' }">
                    <h2>Accueil</h2>
                </div>
            </NuxtLink>

            <NuxtLink to="/catalog">
                <div class="title" :class="{ 'active-link': $route.path === '/catalog' }">
                    <h2>Catalogue</h2>
                </div>
            </NuxtLink>

            <NuxtLink to="/planning">
                <div class="title" :class="{ 'active-link': $route.path === '/planning' }">
                    <h2>Sorties </h2>
                </div>
            </NuxtLink>

            <NuxtLink to="/collection">
                <div class="title" :class="{ 'active-link': $route.path === '/collection' }">
                    <h2>Ma collection</h2>
                </div>
            </NuxtLink>
            <Search />

            <NuxtLink to="/account">
                <div class="iconix">
                    <img src="../icons/user.svg" alt="">
                </div>

            </NuxtLink>

            <div v-if="mobile && route.path == '/catalog'" class="mobi">

                <button @click="store.showFilter">
                    <img src="../icons/filter.svg" alt="">
                </button>
                <button @click="store.showSort"><img src="../icons/bar-chart.svg" alt=""></button>
            </div>
        </div>

    </header>
</template>

<style scoped lang="scss">
header {
    color: #F8F9FA;
    background-color: #0CA06B;
    position: relative;

    @media screen and (max-width: 768px) {
        position: fixed;
        right: 0;
        left: 0;
        top: 0;

    }

    .head {
        display: flex;
        flex-direction: row;
        justify-content: space-between;

        a {
            display: flex;
            justify-content: center;
            align-items: center;

            .logo {

                img {
                    width: 10rem;

                    @media screen {max-width: 768px;
                        width: 8rem;
                    }
                }
            }
        }


        .title {
            display: flex;
            justify-content: center;
            padding: 4rem;
            color: #F8F9FA;
        }

        .active-link {
            color: #142034;
        }

        .iconix {
            img {
                height: 5rem;
                width: 5rem;
                margin: 3.5rem;
            }
        }

        @media screen and (max-width: 768px) {
            .head {
                display: flex;
            }

            .mobi {
                display: flex;
                flex-direction: row;

                button {
                    background-color: #0CA06B;
                    border: none;

                    img {
                        justify-content: space-between;
                        height: 2rem;
                        width: 2rem;
                        margin: 1rem;
                    }
                }
            }

            .iconix {
                display: none;
            }

            .title {
                display: none;
            }
        }
    }
}
</style>