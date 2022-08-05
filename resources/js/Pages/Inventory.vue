<template>

<h1>Inventory Lab</h1>
<hr>
<!-- <ul>
  <li v-for="inventory in inventory" :key="inventory.id">
    {{inventory.name}}
  </li>
</ul> -->
<div class="d-flex justify-content-between">
  <div class="card mb-3" v-for="inve in inventory" :key="inve.id">
      <div class="card-header bg-info">
          <h4>{{inve.name}}</h4>
      </div>
      <div class="card-body">
          <h6>Tracking</h6>
          <ul>
            <li v-for="trak in inve.track" :key="trak.id">
              {{ trak.time }} 
            </li>
            <li v-for="trak in inve.track" :key="trak.id">
              {{ trak.date }} 
            </li>
            <li v-for="trak in inve.track" :key="trak.id">
              {{ trak.type }} 
            </li>
          </ul>
      </div>
  </div>
</div>

</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
  layout:Layout,
  props: {
    inventory: Array
  }
}
</script>

<style scoped>
.card{
  width:375px;
}
</style>