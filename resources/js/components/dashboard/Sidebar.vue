<template>
<div>
  <a href="#" id="slide-nav-trigger" class="slide-nav-trigger">
    <i class="fa fa-bars" aria-hidden="true"></i>
    Dashboard Navigation
  </a>
  <div class="slide-menu-wrap">
    <nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
      <div class="user-profile-block">
        <div>
          <div class="user-thumb">
            <img :src="user.photo_url" class="rounded-circle profile-photo mr-1">
<!--            <img :src="'images/misc/9.jpg'" alt="img" class="img-responsive">-->
          </div>
          <div class="user-info">
            <h5>
              {{ user.name }}
            </h5>
            <span>{{ user.role ? 'user' :'admin'}}</span>
          </div>
        </div>
        <a href="#" class="listing-btn-cmn">Update Profile</a>
      </div>
      <div class="accordion-menu responsive-menu" data-accordion-group>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="#">
              <span class="menu-icon-wrap icon ti-layers-alt"></span>
              <span class="menu-title">Dashboard</span>
            </a>
          </div>
        </div>
        <div v-if="user.role === 'admin'" class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="#">
              <span class="menu-icon-wrap icon ti-game"></span>
              <span class="menu-title">Listing Config</span>
            </a>
          </div>
        </div>
        <div class="slide-navigation-wrap" data-accordion>
          <div class="nav-item has-sub" data-control>
            <a href="javascript:void(0)">
              <span class="menu-icon-wrap icon ti-location-pin"></span>
              <span class="menu-title">My Listing</span>
            </a>
          </div>
          <div class="menu-content" data-content>
            <div class="nav-item">
              <a href="#">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">All listings</span>
              </a>
            </div>
            <router-link :to="{ name: 'add.listing' }">
            <div class="nav-item">
              <a href="#">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Add new listings</span>
              </a>
            </div>
            </router-link>
            <router-link :to="{ name: 'settings.profile' }">
            <div class="nav-item">
              <a href="#">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Account Settings</span>
              </a>
            </div>
            </router-link>
            <div class="nav-item">
              <a href="#">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Expired Listings</span>
              </a>
            </div>
          </div>
        </div>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="#" @click.prevent="logout">
              <span class="menu-icon-wrap icon ti-heart"></span>
              <span class="menu-title">Logout</span>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
</template>

<script>
  import { mapGetters } from 'vuex'
  export default {
    name: 'Sidebar',

    computed: mapGetters({
      user: 'auth/user'
    }),

    methods: {
      async logout () {
        // Log out the user.
        await this.$store.dispatch('auth/logout')

        // Redirect to login.
        this.$router.push({ name: 'login' })
      }
    }
  }
</script>

<style scoped>

</style>
