// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  css: ["@/assets/sass/main.scss"],
  vite: {
    css: {
      preprocessorOptions: {
        scss: {
          additionalData: '@use "@/assets/sass/_variables.scss" as *;',
        },
      },
    },
  },
  modules: ['@pinia/nuxt'],
})