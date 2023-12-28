import { defineStore } from 'pinia'

export const useMenuStore = defineStore('selectedMenu', () => {
    const selectedMenu = ref("");

    function showFilter() {
        if (selectedMenu.value == "filter") {
            selectedMenu.value = "";
        } else {
            selectedMenu.value = "filter";
        }
        
    }

    function showSort() {
        if (selectedMenu.value == "sort") {
            selectedMenu.value = "";
        } else {
            selectedMenu.value = "sort";
        }
        
    }

    return {
        selectedMenu,
        showFilter,
        showSort
    }

})
