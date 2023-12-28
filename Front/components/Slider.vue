<template>
  <div class="slider-container flex">
    <div class="left-arrow" @click="$emit('minusClick')"></div>
    <div class="content flex">
      <slot></slot>
    </div>
    <div class="right-arrow" @click="$emit('plusClick')"></div>
  </div>
</template>

<style scoped lang="scss">
.slider-container {
  height: 30rem;
  width: 100%;
  justify-content: space-between;
  align-items: center;
  .content {
    width: 100%;
    height: 100%;
    justify-content: space-around;
    align-items: center;
    text-align: center;
  }
}
.left-arrow {
  display: none;
  background-image: url("/icons/chevron-left.svg");
  @include Arrow;
  float: left;
}

.right-arrow {
  display: none;
  background-image: url("/icons/chevron-right.svg");
  @include Arrow;
  float: right;
}

//Mobile responsive

@media screen and (max-width: 768px) {
  .left-arrow,
  .right-arrow {
    display: block;
  }
}
</style>
