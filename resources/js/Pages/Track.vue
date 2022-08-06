<template>

<h1>Tracking Lab</h1>
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
              Borrower's name: {{ trak.borrower }}
            </li>
            <li v-for="trak in inve.track" :key="trak.id">
              Rent Fee: {{ trak.leasefee }} 
            </li>
            <li v-for="trak in inve.track" :key="trak.id">
              Address: {{ trak.address }} 
            </li>
            <li v-for="trak in inve.track" :key="trak.id">
              Date Rent: {{ trak.daterent }} 
            </li>
            <li v-for="trak in inve.track" :key="trak.id">
              Return Date: {{ trak.returndue }} 
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