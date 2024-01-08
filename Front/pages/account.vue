<script setup>
const auth = useAuthStore();

definePageMeta({
    middleware: 'auth'
})

useHead({
    title: 'Shoten - Mon compte',
})
</script>

<template>
    <body>

        <h2 class="text">Vous êtes connecté</h2>


        <div class="content">


            <div class="connect">

                <p> {{ auth.user.name }}</p>

                <p>{{ auth.user.email }}</p>
            </div>

            <div class="button">
                <button v-if="auth.isLoggedIn" @click="auth.logout" class="disco"> Déconnexion </button>
            </div>

            <div class="reseaux">
                <p>Suivez-nous </p>
                <img src="../public/icons/logos/Apple.svg" alt="">
                <img src="../public/icons/logos/Facebook.svg" alt="">
                <img src="../public/icons/logos/Google.svg" alt="">
            </div>
        </div>

    </body>
</template>


<style scoped lang="scss">
body {

    

    .text {
            font-size: xxx-large;
            margin: 2rem;
            display: flex;
            justify-content: center;
            color: #F8F9FA;
            
        }

        .content {
            background-color: #142034;
            color: hsl(210, 17%, 98%);
            margin: 27rem;
            margin-top: 1rem;
            border-radius: 1rem;



            .connect {
                display: flex;
                justify-content: center;
                margin: 2rem;
                font-weight: bold;

                p {
                    padding: 1rem;
                    font-size: x-large;
                }
            }

            .button {
                display: flex;
                justify-content: center;
                flex-direction: row;
                
                


                .disco {
                    background-color: #0CA06B;
                    border: none;
                    border-radius: 0.5rem;
                    padding: 3rem;
                    margin: 5rem;
                    cursor: pointer;
                    font-size: x-large;
                }
            }

            .reseaux {
                font-size: x-large;
                

                p {
                    display: flex;
                    justify-content: center;
                }

                img {
                    padding: 5rem;
                    margin-left: 15rem;
                    

                }
            }
        }
    @media screen and (max-width: 768px) {
        .text {
            font-size: medium;
            margin: 2rem;
            display: flex;
            justify-content: center;
        }

        .content {
            background-color: #142034;
            color: #F8F9FA;
            margin: 3rem;
            border-radius: 1rem;
            .connect {
                display: flex;
                justify-content: center;
                margin: 2rem;
                font-weight: bold;

                p {
                    padding: 1rem;
                    font-size: medium;
                }
            }

            .button {
                display: flex;
                justify-content: center;
                flex-direction: column;
                .disco {
                    background-color: #0CA06B;
                    border: none;
                    border-radius: 0.5rem;
                    font-size: medium;
                    margin: 3rem;
                    padding: 0.5rem;
                }
            }

            .reseaux {
                font-size: x-large;

                p {
                    display: flex;
                    justify-content: center;
                }

                img {
                    margin: 2rem;
                    padding: 0rem;
                    margin-left: 2rem;
                }
            }
        }
    }







}
</style>