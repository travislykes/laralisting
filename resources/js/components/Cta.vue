<template>
  <div class="call-to-action-section">
    <div class="container">
      <h2>
        Start today to get more exposure and <br> grow your business
      </h2>
      <p>
        There are many consumers & business owners find this directory is helpful.
      </p>
      <div class="btn-group">
        <router-link :to="{ name: 'add.listing' }">
        <a href="#" class="icon-btn adining-listing-btn">
          <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
        </a>
        </router-link>
        <router-link :to="{ name: 'listings' }">
        <a href="#" class="icon-btn explore-listing-btn">
          <i class="fa fa-search" aria-hidden="true"></i> Explore Listings
        </a>
        </router-link>
      </div>
    </div>
  </div>
  <!-- call-to-action section-->
</template>

<script>
  export default {
    name: 'Cta'
  }
</script>

<style scoped>

</style>
