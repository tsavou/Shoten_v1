import { ofetch } from "ofetch";

export const api = ofetch.create({
    baseURL: "http://127.0.0.1:8000/api/"
})

export const getMangas = async () => await api("/manga")
export const getGenres = async () => await api("/genres")
export const getTypes = async () => await api("/types") 

export const getManga = async (id) => await api(`/manga/${id}`)


    

