<template>
    <div class="main-btn flex">
      <slot></slot>
    </div>
  </template>

  <style scoped lang="scss">
  .main-btn {
    align-items: center;
    gap: 0.5rem;
    background-color: $main-color;
    padding: 1rem;
    border-radius: 0.8rem;
    box-shadow: 7px 7px 4px 0px rgba(0, 0, 0, 0.60);
    cursor: pointer;

    &:hover {
      background-color: $background-color;
      transition: 0.5s;
      color: $main-color;
      box-shadow: 7px 7px 4px 0px rgba(0, 0, 0, 0.60);
    }
  
  }
  
  
  
  </style>