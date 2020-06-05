<template>
  <div class="p-4">
    <div class="px-4 d-flex justify-content-between">
      <h1>Menu</h1>
      <a href="#" data-toggle="modal" data-target="#cart-view">
        <h3>
          Cart:
          <span id="cart-count" v-if="user !== null">{{ user.cart.products.length }}</span>
        </h3>
      </a>
    </div>
    <cart-modal
      v-if="user !== null"
      v-bind:products="user.cart.products"
      v-bind:store-order-url="storeOrderUrl"
    ></cart-modal>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-4 p-4" v-for="product in products" :key="product.id">
          <div class="card" style="width: 286px;">
            <img
              class="card-img-top"
              v-bind:src="product.figure"
              style="width: 286px; height: 180px"
            />
            <div class="card-body p-4">
              <h5 class="card-title">{{ product.name }}</h5>
              <h6 class="card-subtitle">Detalhes: {{ product.caption }}</h6>
              <br />
              <p class="card-text">
                Sabor: {{ product.flavors[0].name }}
                <br />
                Tamanho: {{ product.sizes[0].name }}
              </p>
              <p class="card-text float-right">
                <button
                  class="btn btn-primary"
                  @click="() => addToCart(product)"
                >Add {{ product.price }} R$</button>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CartModal from "./CartModal";

export default {
  mounted() {
    this.getUser();
    this.getProducts();
  },
  components: {
    "cart-modal": CartModal
  },
  data: () => ({
    user: null,
    products: []
  }),
  props: [
    "products-url",
    "cart-products-url",
    "carts-push-url",
    "store-order-url"
  ],
  methods: {
    getProducts() {
      axios
        .get(this.productsUrl)
        .then(res => (this.products = res.data))
        .catch(err => console.log(err));
    },
    getUser() {
      axios
        .get(this.cartProductsUrl)
        .then(res => (this.user = res.data))
        .catch(err => console.log(err));
    },
    addToCart(product) {
      this.user.cart.products.push(product);
      // axios
      //   .post(this.cartsPushUrl, {
      //     productId: this.product.id
      //   })
      //   .then(res => console.log(res.data))
      //   .catch(err => console.log(err));
    }
  }
};
</script>