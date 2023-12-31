import { ofetch } from "ofetch";
import { useApiFetch } from "~/composables/useApiFetch";

export const api = ofetch.create({
    baseURL: "http://127.0.0.1:8000/api/"
})

export const getMangas = async () => await api("/manga")
export const getGenres = async () => await api("/genres")
export const getTypes = async () => await api("/types") 

export const getManga = async (id) => await api(`/manga/${id}`)

export const addToCollection = async (userId, volumeId) => await useApiFetch(`/api/user/${userId}/collection/${volumeId}`, { method: "POST" })
export const addAllToCollection = async (userId, mangaId) => await useApiFetch(`/api/user/${userId}/collection/manga/${mangaId}`, { method: "POST" })

export const removeFromCollection = async (userId, volumeId) => await useApiFetch(`/api/user/${userId}/collection/${volumeId}`, { method: "DELETE" })
export const removeAllFromCollection = async (userId, mangaId) => await useApiFetch(`/api/user/${userId}/collection/manga/${mangaId}`, { method: "DELETE" })
    

export const getCollection = async (userId) => await api(`/user/${userId}/collection`)