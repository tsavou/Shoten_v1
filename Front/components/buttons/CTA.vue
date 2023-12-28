<template>
  <div class="btn-cta">
    <slot></slot>
  </div>
</template>

<style scoped lang="scss">
.btn-cta {
  background-color: $main-color;
  padding: 2rem;
  border-radius: 0.8rem;
  box-shadow: 7px 7px 4px 0px rgba(0, 0, 0, 0.60);
  cursor: pointer;
  &:hover {
    background-color: $main-color-hover;
    box-shadow: 7px 7px 4px 0px rgba(0, 0, 0, 0.60);
    transition: 0.5s;
  }

  &:active {
    background-color: $main-color-active;
    box-shadow: 7px 7px 4px 0px rgba(0, 0, 0, 0.60);
    transition: 0.5s;
    transform: translate(4px, 4px);
  }

  &:focus {
    outline: none;
    box-shadow: 7px 7px 4px 0px rgba(0, 0, 0, 0.60);
    transition: 0.5s;
  }
}

@media screen and (max-width: 768px) {
  .btn-cta {
    padding: 1rem;
    width: 80%;
  }
}
</style>


