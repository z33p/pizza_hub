<template>
  <div id="cart-view" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Cart</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <ul class="list-group" v-if="products.length > 0">
            <li class="list-group-item" v-for="item in items" :key="item.product.id">
              <product-item
                :item="item"
                v-on:cartPush="cartPush($event)"
                v-on:cartRemoveProduct="cartRemoveProduct($event)"
              ></product-item>
            </li>
          </ul>
          <div class="d-flex justify-content-center" v-else>
            <h4>Empty</h4>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary">Order</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ProductItem from "./ProductItem";

export default {
  mounted() {
    console.log("Component mounted.");
  },
  components: {
    "product-item": ProductItem
  },
  props: ["products", "store-order-url"],
  computed: {
    items: ({ products }) => {
      let items = [];

      products.forEach(product => {
        let itemIndex = items.findIndex(item => item.product.id === product.id);

        if (itemIndex === -1) items.push({ product, count: 1 });
        else {
          items[itemIndex].count += 1;
        }
      });

      return items;
    }
  },
  methods: {
    cartPush(product) {
      this.products.push(product);
    },
    cartRemoveProduct(id) {
      let productIndex = this.products.findIndex(p => p.id === id);
      if (productIndex !== -1) this.products.splice(productIndex, 1);
    }
  }
};
</script>