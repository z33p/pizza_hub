<template>
  <div class="d-flex justify-content-between">
    <span>{{ item.product.name }}</span>
    <div class="d-flex">
      <button
        class="btn badge badge badge-secondary"
        @click="() => $emit('cartRemoveProduct', item.product.id)"
      >-</button>
      <span class="px-2">{{item.count}}</span>
      <button class="btn badge badge badge-primary" @click="() => $emit('cartPush', item.product)">+</button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["item"]
};
</script>