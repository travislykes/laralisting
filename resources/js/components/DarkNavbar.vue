<template>
  <div class="main-nav-section main-nav-two-section">
    <div class="user-panel">
      <router-link :to="{ name: 'login' }">
      <a href="#" class="user-login-btn border-btn">
        <i class="fa fa-user-o" aria-hidden="true"></i> Log in
      </a>
      </router-link>
    </div>
    <nav class="navbar navbar-toggleable-md fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars navbar-toggle-btn" aria-hidden="true"></i>
      </button>
      <a class="navbar-brand" href="home-one.html">
        <img src="images/logo-two.png" alt="img" class="img-responsive">
      </a>
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                <router-link :to="{ name: 'home' }">
                  <li>
                <a class="dropdown-item" href="#">Dashboard</a>
                  </li>
                </router-link>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script>
  export default {
    name: 'DarkNavbar'
  }
</script>

<style scoped>

</style>
