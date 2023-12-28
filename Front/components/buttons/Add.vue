<template>
  <div class="Secondary-btn flex">
    <IconsAdd /> Ajouter
  </div>
</template>

<style scoped lang="scss">
.Secondary-btn {
  align-items: center;
  gap: 0.5rem;
  background-color: $background-color;
  padding: 1rem;
  border-radius: 2rem;
  cursor: pointer;
  color: $main-color;
  border: solid 1px $main-color;
  box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.60);


  &:hover {
    background-color: $main-color;
    transition: 0.5s;
    color: $light-text-color;
    box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.60);

  }

}
</style>