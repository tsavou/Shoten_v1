// Import the defineStore function from Pinia for creating a store
import { defineStore } from "pinia";
// Import the useApiFetch function for making API requests
import { useApiFetch } from "~/composables/useApiFetch";

// Declare the type for the User object
type User = {
  id: number;
  name: string;
  email: string;
};

// Declare the type for the credentials used during login
type Credentials = {
  email: string;
  password: string;
};

type RegistrationInfo = {
  nickname: string;
  mail: string;
  mailConfirm: string;
  password: string;
  passwordConfirm: string;
}

// Declare the authentication store using Pinia's defineStore function
export const useAuthStore = defineStore("auth", () => {
  const user = ref<User | null>(null); // Create a new User object with a default value of null
  const isLoggedIn = computed(() => !!user.value);
  // Create a computed property that returns true if the user is not null, and false if the user is null.

  // Fetch user data from the API
  async function fetchUser() {
    const { data } = await useApiFetch("/api/user");
    user.value = data.value as User;
  }

  // Logout user and redirect to the login page
  async function logout() {
    await useApiFetch("/logout", { method: "POST" });
    user.value = null;
    navigateTo("/auth/login");
  }

  // Login user, fetch user data from the API, and return the login response
  async function login(credentials: Credentials) {
    // Fetch the CSRF cookie for Sanctum
    await useApiFetch("/sanctum/csrf-cookie");

    // Perform the login API request
    const login = await useApiFetch("/login", {
      method: "POST",
      body: credentials,
    });

    // Fetch the user data after successful login
    await fetchUser();

    // Return the login response
    return login;
  }

  // Register a new account via register page's form
  async function register(info: RegistrationInfo) {
    await useApiFetch("/sanctum/csrf-cookie");

    const register = await useApiFetch("/register", {
      method: "POST",
      body: info,
    });

  }

  // Return the properties and functions that can be used by components
  return { user, login, isLoggedIn, fetchUser, logout, register };
});