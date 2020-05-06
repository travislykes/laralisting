<template>
  <div class="main-nav-section">
    <div class="user-panel">
      <a href="login.html" class="user-login-btn border-btn">
        <i class="fa fa-user-o" aria-hidden="true"></i> Log in
      </a>
      <a href="add-listing.html" class="user-addlisting-btn">
        <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
      </a>
    </div>
    <nav class="navbar navbar-toggleable-md fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars navbar-toggle-btn" aria-hidden="true"></i>
      </button>
      <router-link :to="{ name: user ? 'home' : 'welcome' }" class="navbar-brand">
      <a class="navbar-brand">
        <img v-bind:src="'images/logo.png'" alt="img" class="img-responsive">
      </a>
      </router-link>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="listing-map-left.html" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Explore
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
              <li><a class="dropdown-item" href="listing-map-left.html">Map Left</a></li>
              <li><a class="dropdown-item" href="listing-map-right.html">Map Right</a></li>
              <li><a class="dropdown-item" href="listing-map-full.html">Map Fullwidth</a></li>
              <li><a class="dropdown-item" href="single-listing.html">Listing Details</a></li>
              <li><a class="dropdown-item" href="add-listing.html">Add Listing</a></li>
              <li><a class="dropdown-item" href="favorite-listing.html">Favorite Listings</a></li>
              <li><a class="dropdown-item" href="single.html">Single</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="home-one.html" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
              <li><a class="dropdown-item" href="home-one.html">Home One</a></li>
              <li><a class="dropdown-item" href="home-two.html">Home Two</a></li>
              <li><a class="dropdown-item" href="about.html">About Us</a></li>
              <li><a class="dropdown-item" href="working-process.html">How It Works</a></li>
              <li><a class="dropdown-item" href="packages.html">Listing Package</a></li>
              <li><a class="dropdown-item" href="gallery.html">Photo Gallery</a></li>
              <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
              <li><a class="dropdown-item" href="404.html">404</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dashboard
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
              <li><a class="dropdown-item">Dashboard</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import LocaleDropdown from './LocaleDropdown'

export default {
  components: {
    LocaleDropdown
  },

  data: () => ({
    appName: window.config.appName
  }),

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
.profile-photo {
  width: 2rem;
  height: 2rem;
  margin: -.375rem 0;
}
</style>
