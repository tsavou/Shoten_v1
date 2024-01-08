import { defineStore } from 'pinia'
import { addAllToCollection, addToCollection, getCollection, removeAllFromCollection, removeFromCollection } from '~/api/manga'



export const useCollectionStore = defineStore('collection', () => {

    const auth = useAuthStore()
    const collection = ref([])
    const groupedCollection = ref([])
    const loading = ref(true)

    const totalVolumes = computed(() => collection.value.length)
    const totalManga = computed(() => groupedCollection.value.length)

   

    // Récuperation de la collection de l'utilisateur si il est connecté
    if (auth.user) {
        getCollection(auth.user.id).then(data => {
            collection.value = data.volumes
        }).then(() => {
            updateGroupedCollection();
            loading.value = false
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

            // Ajout dans collection du store pour éviter de récupérer la collection via un nouvel appel API
            collection.value.push(volume)


            // Mise à jour de la collection groupee
            updateGroupedCollection()
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
            updateGroupedCollection()
        }
    }

    const isMangaAdded = (manga) => {
        return collection.value.some(v => v.manga_id === manga.id)
    }

    function addMangaToCollection(manga) {
        if (!auth.isLoggedIn) {
            navigateTo('/auth/login')
        }

        addAllToCollection(auth.user.id, manga.id)

        for (const volume of manga.volumes) {
            collection.value.push(volume)
        }
        updateGroupedCollection()
    }

    function removeMangaFromCollection(manga) {
        if (!auth.isLoggedIn) {
            navigateTo('/auth/login')
        }
        removeAllFromCollection(auth.user.id, manga.id)

        for (const volume of manga.volumes) {
            collection.value = collection.value.filter(v => v.id !== volume.id)
        }
        updateGroupedCollection()
    }


    // Compte le nombre de volume d'un manga 

 
    function updateGroupedCollection() {

        groupedCollection.value = collection.value.reduce((acc, current) => {

            // Vérifie si le manga existe déjà dans l'accumulateur
            const existingManga = acc.find(item => item.manga_id === current.manga_id);

            if (existingManga) {
                // Si le manga existe, ajoute juste le volume à la liste du manga
                existingManga.volumes.push(current);
            } else {
                // Si le manga n'existe pas encore, crée un nouvel élément
                acc.push({
                    manga_id: current.manga_id,
                    manga: current.manga,                    
                    volumes: [current],
                });
            }

            return acc;
        }, []);

    }


    return {
        collection,
        totalVolumes,
        totalManga,
        loading,
        groupedCollection,
        isVolumeInCollection,
        addVolumeToCollection,
        removeVolumeFromCollection,
        isMangaAdded,
        addMangaToCollection,
        removeMangaFromCollection,
    }

})

