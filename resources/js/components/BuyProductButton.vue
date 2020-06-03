<template>
  <button class="btn btn-primary" @click="addToCart">Add {{ this.productPrice }} R$</button>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  props: ["reqUrl", "productId", "productPrice"],
  computed: {
    cartElement: () => document.getElementById("cart-count")
  },
  methods: {
    addToCart() {
      this.cartElement.innerHTML = parseInt(this.cartElement.innerHTML) + 1;
      // axios
      //   .post(this.reqUrl, {
      //     productId: this.productId
      //   })
      //   .then(res => console.log(res.data))
      //   .catch(err => console.log(err));
    }
  }
};
</script>
