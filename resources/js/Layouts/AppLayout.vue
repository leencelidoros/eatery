<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import Footer from '@/Components/Footer.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div class="container">
      <Head :title="title" />
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="flex">
                      <!-- Logo -->
                        <div class="shrink-0">
                            <Link :href="route('dashboard')">
                                <ApplicationMark class="block h-9 w-auto" />
                            </Link>
                        </div>

  
                      <!-- Navigation Links --> 
                  </div>
                    <NavLink :href="route('dashboard')" :active="route().current('dashboard')" class="navbar-brand">
                              Dashboard
                    </NavLink>
                    <NavLink :href="route('dashboard')" :active="route().current('dashboard')" class="navbar-brand">
                              Dashboard
                    </NavLink>
                    <NavLink :href="route('dashboard')" :active="route().current('dashboard')" class="navbar-brand">
                              Dashboard
                    </NavLink>
                    <NavLink :href="route('dashboard')" :active="route().current('dashboard')" class="navbar-brand">
                              Dashboard
                    </NavLink>
                  <Dropdown align="right" width="" class="navbar-brand">
                        <template #trigger>
                            <span  class="inline-flex rounded-md">
                            <button class="btn btn secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Select
                            </button>
                            </span>
                        </template>
                        <template #content>
                            <ul>
                            <li><DropdownLink>Action</DropdownLink></li>
                            <li><DropdownLink>Another action</DropdownLink></li>
                            <li><DropdownLink>Something else here</DropdownLink></li>
                            </ul>
                        </template>
                    </Dropdown>
  
                <ul>
                    <Dropdown align="right" width="90">
                        <template #trigger>
                            <button v-if="$page.props.jetstream.managesProfilePhotos" class="btn btn-secondary">
                                <img class="rounded float-start" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                            </button>

                            <span v-else class="inline-flex rounded-md">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ $page.props.auth.user.name }}
                                </button>
                            </span>
                        </template>

                        <template #content>
                            <!-- Account Management -->
                            <div class="container text-center">
                                Manage Account

                            <DropdownLink :href="route('profile.show')">
                                Profile
                            </DropdownLink>

                            <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                API Tokens
                            </DropdownLink>

                            <div class="border-t border-gray-200" />

                            <!-- Authentication -->
                            <form @submit.prevent="logout">
                                <DropdownLink as="button">
                                    Log Out
                                </DropdownLink>
                            </form>
                            </div>
                        </template>
                    </Dropdown>
                </ul> 
              </div>
  
            
          </div>
      </nav>
      <!-- Page Heading -->
        <header v-if="$slots.header" class="bg-white shadow">
            <div class="container py-6">
                <slot name="header" />
            </div>
        </header>

  
      <!-- Page Content -->
      <main>
          <div class="container">
              <slot />
          </div>
      </main>
    </div>
    <Footer></Footer>
  </template>

