import { defineStore } from 'pinia'

export const useCollectionStore = defineStore('collection',() => {

    const collection = ref([])
    const total = computed(() => collection.value.length)

    const isAdded = (volume) => {
        return collection.value.some(v => v.id === volume.id)
    }

    const isMangaAdded = (manga) => {
        return collection.value.some(v => v.manga_id === manga.id)
    }

    function addToCollection(volume) {
        collection.value.push(volume)
    }

    function removeFromCollection(volume) {
        collection.value = collection.value.filter(v => v.id !== volume.id)
    }

    function addMangaToCollection(manga) {
        collection.value.push(...manga.volumes)
    }

    function removeMangaFromCollection(manga) {
        collection.value = collection.value.filter(v => v.manga_id !== manga.id)
    }
    

    return {
        collection,
        total,
        isAdded,
        isMangaAdded,
        addToCollection,
        removeFromCollection,
        addMangaToCollection,
        removeMangaFromCollection
    }
    
})