
export default defineNuxtRouteMiddleware( async (to, from) => {
    const auth = useAuthStore();

    // If not logged in, redirect to login
    if (!auth.isLoggedIn) {

        await auth.fetchUser();

        if (!auth.isLoggedIn) {
            return navigateTo('/auth/login');
        }
    }
});