<template>
    <div class="Added-btn">
        <span class="flex">
            <IconsCheck /> Collec
        </span>
    </div>
</template>

<style scoped lang="scss">
.Added-btn {
    
    background-color: $main-color;
    padding: 1rem;
    border-radius: 2rem;
    box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.60);
    cursor: pointer;
    color: $light-text-color;

    span {
        align-items: center;
        gap: 0.5rem;
    }


        &:hover {
            background-color: $background-color;
            transition: 0.5s;
            box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.60);
            color: $main-color;
        }

        &:hover span {
            display: none;
        }

        &:hover::before {
            content: " X Retirer";
        }
    

}
</style>