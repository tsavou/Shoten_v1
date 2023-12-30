import { defineStore } from 'pinia'
import { addToCollection, getCollection, removeFromCollection } from '~/api/manga'



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

    // function addMangaToCollection(manga) {
    //     collection.value.push(...manga.volumes)
    // }

    // function removeMangaFromCollection(manga) {
    //     collection.value = collection.value.filter(v => v.manga_id !== manga.id)
    // }


    return {
        collection,
        total,
        isVolumeInCollection,
        addVolumeToCollection,
        removeVolumeFromCollection,
        isMangaAdded,
        // addMangaToCollection,
        // removeMangaFromCollection
     }

})