<template>
    <footer class="footer ">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="shrink-0">
                <Link :href="route('dashboard')">
                    <AuthenticationCardLogo></AuthenticationCardLogo>
                </Link>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h5 class="h5">Quick Links</h5>
                <ul class="list-unstyled">
                  <li><a href="#" class="text-light">Home</a></li>
                  <li><a href="#" class="text-light">About Us</a></li>
                  <li><a href="#" class="text-light">Our Menu</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <h5>Contact Us</h5>
                <address class="text-light">
                  <p>123 Main Street</p>
                  <p>City, Country</p>
                  <p>Email: info@example.com</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="text-center">
        <p class="text-light">&copy; 2023 Eatery. All rights reserved.</p>
      </div>
    </footer>
  </template>
  
  <script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
  </script>
  
  <style scoped>

  .footer {
    background-color: black;
    padding-top: 30px;
    color:white;
    padding-bottom: 30px;
  
  }
  .h5{
    text-emphasis-color: chartreuse;

  }
  </style>
  