
export default defineNuxtRouteMiddleware((to, from) => {
    const auth = useAuthStore();

    // If not logged in, redirect to login
    if (!auth.isLoggedIn) {
        return navigateTo('/auth/login');
    } 
});