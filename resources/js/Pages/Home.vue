<template>
  <h1>Take me Homes</h1>
  {{message}}
  <p>
    <button @click="decrement">-</button>
  {{number}}
  <button @click="increment">+</button>

  </p>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'

const message = "Hello I am an Inertia App";

const number = ref(0)

function increment(){
    number.value++;
}
function decrement(){
    number.value--;
}

</script>

<script>
export default {
  layout:Layout
}
</script>