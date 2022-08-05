<template>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <Link class="nav-link" :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
        <Link class="nav-link" :class="{'selected': $page.component=='Inventory'}" href="/inventory">Inventory</Link>
        <Link class="nav-link" :class="{'selected': $page.component=='Track'}" href="/track">Track</Link>
        <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="/about">About Us</Link>
        <Link class="nav-link" :class="{'selected': $page.component=='Contact'}" href="/contact">Contact Us</Link>
      </div>
    </div>
  </div>
</nav>

<section class="container bg-white p-4 rounded-4 mt-4 opacity-75 my-5 shadow" style="min-height: 700px;">
<slot />
</section>

<footer class="text-center mt-5" style="color: white;">
    Copyright &copy; 2022. All right reserved.
</footer>

</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style>
.navbar .navbar-nav .nav-link {
    /* color: #000000; */
    font-size: 1.1em;
    border-right:2px solid #000;
}
.navbar .navbar-nav .nav-link:hover{
    color: #808080;
}
.selected {
  color: rgb(0, 255, 38);
  font-weight: bold;
}
  
</style>