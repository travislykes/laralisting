<template>
  <div class="main-nav-section">
    <div class="user-panel">
      <router-link :to="{ name: 'login' }" class="user-login-btn border-btn" active-class="active">
        <a>
          <i class="fa fa-user-o" aria-hidden="true"></i> Log in
        </a>
      </router-link>

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
          <router-link :to="{ name: 'welcome' }">
            <li class="nav-item ">
              <a class="nav-link" id="navbarDropdownMenuLink14" aria-expanded="false">
                Home
              </a>
            </li>
          </router-link>
          <router-link :to="{ name: 'listings' }">
            <li class="nav-item ">
              <a class="nav-link" id="navbarDropdownMenuLink1" aria-expanded="false">
                Explore
              </a>
            </li>
          </router-link>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
              <!-- Authenticated -->
              <li v-if="user" class="nav-item dropdown">
                <a class="dropdown-item"
                   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img :src="user.photo_url" class="rounded-circle profile-photo mr-1">
                  {{ user.name }}
                </a>
                <div class="dropdown-menu">
                  <router-link :to="{ name: 'settings.profile' }" class="dropdown-item">
                    {{ $t('settings') }}
                  </router-link>

                  <div class="dropdown-divider" />
                  <a href="#" class="dropdown-item" @click.prevent="logout">
                    {{ $t('logout') }}
                  </a>
                </div>
              </li>
              <!-- Guest -->
              <template v-else>
                <li class="nav-item dropdown-item">
                  <router-link :to="{ name: 'login' }" class="nav-link" active-class="active">
                    {{ $t('login') }}
                  </router-link>
                </li>
                <li class="nav-item dropdown-item">
                  <router-link :to="{ name: 'register' }" class="nav-link" active-class="active">
                    {{ $t('register') }}
                  </router-link>
                </li>
              </template>
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
