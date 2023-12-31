import { defineStore } from 'pinia'
import { addAllToCollection, addToCollection, getCollection, removeAllFromCollection, removeFromCollection } from '~/api/manga'



export const useCollectionStore = defineStore('collection', () => {

    const auth = useAuthStore()
    const collection = ref([])
    const total = computed(() => collection.value.length)

    // Récuperation de la collection de l'utilisateur si il est connecté
    if (auth.isLoggedIn) {
        getCollection(auth.user.id).then(data => {
            collection.value = data.volumes
        })
    }

    // Verification si un volume est dans la collection
    const isVolumeInCollection = (volumeId) => {
        if (auth.isLoggedIn) {
            return collection.value.some(v => v.id === volumeId)
        } else {
            return false
        }

    }

    function addVolumeToCollection(volume) {
        if (!auth.isLoggedIn) {
            // l'utilisateur n'est pas connecté, redirection vers la page de connexion
            navigateTo('/auth/login')
        } else {
            // l'utilisateur est connecté, ajout du volume dans la collection
            // Ajout dans la bdd
            addToCollection(auth.user.id, volume.id)

            // Ajout dans le store pour éviter de récupérer la collection via un nouvel appel API
            collection.value.push(volume)

        }
    }

    function removeVolumeFromCollection(volume) {
        if (!auth.isLoggedIn) {
            // l'utilisateur n'est pas connecté, redirection vers la page de connexion
            navigateTo('/auth/login')
        } else {
            // l'utilisateur est connecté, suppression du volume de la collection
            // Suppression dans la bdd
            removeFromCollection(auth.user.id, volume.id)
            // Suppression dans le store
            collection.value = collection.value.filter(v => v.id !== volume.id)
        }
    }

    const isMangaAdded = (manga) => {
        return collection.value.some(v => v.manga_id === manga.id)
    }

    function addMangaToCollection(manga) {
        if (!auth.isLoggedIn) {
            // l'utilisateur n'est pas connecté, redirection vers la page de connexion
            navigateTo('/auth/login')
        }

        // l'utilisateur est connecté, ajout de tous les volumes de ce manga dans la collection
        // Ajout dans la bdd
        addAllToCollection(auth.user.id, manga.id)

        // Ajout dans le store
        for (const volume of manga.volumes) {
            collection.value.push(volume)
        }
    }

    function removeMangaFromCollection(manga) {
        if (!auth.isLoggedIn) {
            // l'utilisateur n'est pas connecté, redirection vers la page de connexion
            navigateTo('/auth/login')
        }

        // l'utilisateur est connecté, suppression de tous les volumes de ce manga de la collection
        // Suppression dans la bdd
        removeAllFromCollection(auth.user.id, manga.id)

        // Suppression dans le store
        for (const volume of manga.volumes) {
            collection.value = collection.value.filter(v => v.id !== volume.id)
        }
    }
    


    return {
        collection,
        total,
        isVolumeInCollection,
        addVolumeToCollection,
        removeVolumeFromCollection,
        isMangaAdded,
        addMangaToCollection,
        removeMangaFromCollection
    }

})