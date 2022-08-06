<template>

<h1>Inventory Shelves</h1>
<hr>
<!-- <ul>
  <li v-for="inventory in inventory" :key="inventory.id">
    {{inventory.name}}
  </li>
</ul> -->
<div class="d-flex justify-content-between">
  <div class="card mb-3" v-for="inve in inventory" :key="inve.id">

      <div class="d-inline flex-row justify-content-between ">
  <div class="p-0 text-center">
       <div style="font-weight: bold;">
        Stock:
        {{inve.stock}}
       </div>
        <img :src="image" />
        
  </div>
  <div class="p-3">
       <div class="card-header bg-info">
          <h5>{{inve.name}}</h5>
          <h6>Category: {{inve.type}}</h6>
          <h6>Size: {{inve.size}}</h6>
          <h6><p>{{inve.description}}</p></h6>
       </div>
  </div>
      </div>
  </div>
</div>



</template>

<script setup>
import Layout from '../Shared/Layout.vue';
</script>

<script>
import image from "/public/img/sheinsuits.png"
export default {
  layout:Layout,
  props: {
    inventory: Array
  },
  data: function () {
    return {
      image: image
    }
  }
}
</script>

<style scoped>
.card{
  width:375px;
}
.card-body{
  background-image:url('./img/sheinsuits.png');
  background-size: 100%;
  height: auto;
}
img{
  padding-top: 8px;
  width: 180px;
  height: 180px;
  object-fit: cover;
}
</style>