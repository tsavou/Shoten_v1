export default defineNuxtRouteMiddleware((to, from) => {
    const auth = useAuthStore();
    
    // If logged in, redirect to index
    if (auth.isLoggedIn) {
        abortNavigation();
        return navigateTo('/');
    }
})
