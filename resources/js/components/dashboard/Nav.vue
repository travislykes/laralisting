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
      <a class="navbar-brand" href="home-one.html">
        <img v-bind:src="'images/logo.png'" alt="img" class="img-responsive">
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="listing-map-left.html" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Explore
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
              <li><a class="dropdown-item" href="listing-map-left.html">Map Left</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="home-one.html" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
              <li><a class="dropdown-item" href="home-one.html">Home One</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="dshboard.html" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dashboard
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
              <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script>
  export default {
    name: 'Nav'
  }
</script>

<style scoped>

</style>
