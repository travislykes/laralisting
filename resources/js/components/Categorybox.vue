<template>
  <!-- main-header section -->
  <div class="listing-catagory-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="row">
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
          </div>
        </div>
        <div class="col">
          <div class="row">
            <div class="listing-catagory-block">
              <div class="catagory-image">
                <img v-bind:src="'../images/category/1.jpg'" alt="img" class="img-responsive">
                <div class="catagory-text">
                  <h4>
                    <a href="javascript:void(0)">Health & Medical</a>
                  </h4>
                  <p class="hide-text">125 Listings</p>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <div class="listing-catagory-block">
              <div class="catagory-image">
                <img v-bind:src="'../images/category/3.jpg'"  alt="img" class="img-responsive">
                <div class="catagory-text">
                  <h4>
                    <a href="javascript:void(0)">Hotel</a>
                  </h4>
                  <p class="hide-text">125 Listings</p>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <div class="listing-catagory-block">
              <div class="catagory-image">
                <img v-bind:src="'../images/category/4.jpg'"  alt="img" class="img-responsive">
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
        <div class="col">
          <div class="row">
            <div class="listing-catagory-block">
              <div class="catagory-image">
                <img v-bind:src="'../images/category/5.jpg'" alt="img" class="img-responsive">
                <div class="catagory-text">
                  <h4>
                    <a href="javascript:void(0)">Shopping</a>
                  </h4>
                  <p class="hide-text">125 Listings</p>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        name: "Categorybox"
    }
</script>


