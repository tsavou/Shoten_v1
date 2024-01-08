
export default defineNuxtRouteMiddleware(async (to, from) => {
    const auth = useAuthStore();

    // Si l'utilisateur n'est pas connecté
    if (!auth.user) {

        // Redirige vers la page de connexion
        return navigateTo('/auth/login');

    }
});