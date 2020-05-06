<template>
  <div class="main-header-section main-header-section-two">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="header-content-block">
            <div class="header-title-block">
              <h2>Explore Your City</h2>
              <p>Discover what makes feel better nearest you.</p>
            </div>
            <form class="form-common filter-form filter-header-form">
              <div class="form-group outer-select-field">
                <a class="input-dropedown-btn catagory-btn" href="javascript:void(0)">
                  <i class="fa fa-bars" aria-hidden="true"></i> Categories
                </a>
                <input type="text" class="outer-select-input-box" id="listing_catagory_list" placeholder="Ex: Food, Drink">
              </div>
              <div class="form-group outer-select-field">
                <a class="input-dropedown-btn location-btn" href="javascript:void(0)">
                  <i class="fa fa-crosshairs" aria-hidden="true"></i> Location
                </a>
                <input type="text" class="outer-select-input-box" id="listing_location_list" placeholder="Ex: Food, Drink">
              </div>
              <div class="btn-group">
                <button type="submit" class="danger-btn">
                  <i class="ti-search" aria-hidden="true"></i>
                  Search
                </button>
              </div>
            </form>
          </div>
          <!-- header-content-block -->
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="listing-catagory-block">
            <div class="catagory-image">
              <img v-bind:src="'../images/category/1.jpg'" alt="img" class="img-responsive">
              <div class="catagory-text">
                <h4>
                  <a href="javascript:void(0)">Restaurant</a>
                </h4>
                <p class="hide-text">125 Listings</p>
              </div>
              <div class="overlay"></div>
            </div>
          </div>
          <div class="listing-catagory-block">
            <div class="catagory-image">
              <img v-bind:src="'../images/category/2.jpg'"  alt="img" class="img-responsive">
              <div class="catagory-text">
                <h4>
                  <a href="javascript:void(0)">Health & Medical</a>
                </h4>
                <p class="hide-text">125 Listings</p>
              </div>
              <div class="overlay"></div>
            </div>
          </div>
          <div class="listing-catagory-block">
            <div class="catagory-image">
              <img v-bind:src="'../images/category/3.jpg'" alt="img" class="img-responsive">
              <div class="catagory-text">
                <h4>
                  <a href="javascript:void(0)">Hotel</a>
                </h4>
                <p class="hide-text">125 Listings</p>
              </div>
              <div class="overlay"></div>
            </div>
          </div>
          <div class="listing-catagory-block">
            <div class="catagory-image">
              <img v-bind:src="'../images/category/4.jpg'" alt="img" class="img-responsive">
              <div class="catagory-text">
                <h4>
                  <a href="javascript:void(0)">Real Estate</a>
                </h4>
                <p class="hide-text">125 Listings</p>
              </div>
              <div class="overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
</template>

<script>
    export default {
        name: "Explore"
    }
</script>

<style scoped>

</style>
