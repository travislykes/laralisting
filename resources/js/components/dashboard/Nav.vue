<template>
  <div class="main-nav-section">
    <div class="user-panel">
      <router-link :to="{ name: 'add.listing' }">
      <a href="#" class="user-login-btn border-btn">
        <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
      </a>
      </router-link>
<!--      <a href="#" class="user-addlisting-btn">-->
<!--        <i class="fa fa-plus" aria-hidden="true"></i> Add Listing-->
<!--      </a>-->
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
              <li><a class="dropdown-item" href="#">Support</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              FAQs
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
              <li><a class="dropdown-item" href="#">Privacy</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  export default {
    name: 'Nav',

    computed: mapGetters({
      user: 'auth/user'
    }),
  }
</script>

<style scoped>

</style>
