import type { UseFetchOptions } from "nuxt/app";
import { useRequestHeaders, useCookie, useFetch } from "nuxt/app";

export function useApiFetch<T>(path: string, options: UseFetchOptions<T> = {}) {
  // Headers for CSRF token and referer
  let headers: any = {
    accept: "application/json",
    referer: "http://localhost:3000/",
  };

  // Get CSRF token from cookie
  const token = useCookie("XSRF-TOKEN");

  // Verify CSRF token exists and add to headers in X-XSRF-TOKEN
  if (token.value) {
    headers["X-XSRF-TOKEN"] = token.value as string;
  }

  // Prevent error 505 - Checking if the code is running on the server-side.
  // If it is, it adds some request headers to the existing headers.
  if (process.server) {
    headers = {
      ...headers,
      ...useRequestHeaders(["referer", "cookie"]),
    };
  }

  // Using the useFetch function to make the API call
  // The URL is the URL of our server with the /path/ to specify the destination of our API request.
  return useFetch("http://localhost:8000" + path, {
    credentials: "include", // Include credentials in the request
    watch: false, // Disable automatic change tracking
    ...options, // Additional properties passed as parameters
    headers: {
      ...headers, // Adding previously defined headers
      ...options?.headers, // Adding headers specified in the options, if any
    },
  });
}

