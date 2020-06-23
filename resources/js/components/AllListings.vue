<template>
  <div class="listing-map-block-fullwrap">
    <div class="listing-map-section full-width">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="listing-map-filter-block">
              <form class="form-common filter-form">
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
                <div class="form-group outer-select-field">
                  <a class="input-dropedown-btn" href="javascript:void(0)">
                    <i class="fa fa-crosshairs" aria-hidden="true"></i> Keword
                  </a>
                  <input type="text" class="outer-select-input-box" id="listing_keword" placeholder="Ex: Food, Drink">
                </div>
                <div id="listing-advance-filter" class="listing-advance-filter collapse">
                  <div class="inner-row">
                    <fieldset class="range-input-block">
												<span class="leftlabel">
													<i class="fa fa-dribbble" aria-hidden="true"></i>
												</span>
                      <input type="range" id="listing_range" name="height" min="0" max="100">
                      <span class="rightlabel">3KM</span>
                    </fieldset>
                    <div class="listing-filter-options-block form-group">
                      <select id="listing_price_filter" class="form-control option-with-icon">
                        <option>
                          &#xf155;
                          Price
                        </option>
                        <option>
                          &#xf155;
                          220
                        </option>
                        <option>
                          &#xf155;
                          340
                        </option>
                        <option>
                          &#xf155;
                          800
                        </option>
                      </select>
                      <select id="listing_filter_options" class="form-control option-with-icon">
                        <option>
                          &#xf0b0;
                          Filter by
                        </option>
                        <option>
                          &#xf0b0;
                          place
                        </option>
                        <option>
                          &#xf0b0;
                          Weather
                        </option>
                        <option>
                          &#xf0b0;
                          Food
                        </option>
                      </select>
                      <select id="listing_filter_status" class="form-control option-with-icon">
                        <option>
                          &#xf15d;
                          Status
                        </option>
                        <option>
                          &#xf15d;
                          Status 1
                        </option>
                        <option>
                          &#xf15d;
                          Status 2
                        </option>
                        <option>
                          &#xf15d;
                          Status 2
                        </option>
                      </select>
                      <select id="listing_filter_short" class="form-control option-with-icon last-item">
                        <option>
                          &#xf15d;
                          Short by
                        </option>
                        <option>
                          &#xf15d;
                          Name
                        </option>
                        <option>
                          &#xf15d;
                          Length
                        </option>
                        <option>
                          &#xf15d;
                          Distance
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="listing-filter-service-select-block">
                    <h4>
                      <i class="fa fa-calculator" aria-hidden="true"></i> Amenities
                    </h4>
                    <div class="form-check">
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Service 1</span>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Service 1</span>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Service 1</span>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Service 1</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="btn-group">
                  <button type="submit" class="success-btn">
                    <i class="ti-search" aria-hidden="true"></i>
                    Search
                  </button>
                  <button type="button" class="danger-btn" data-toggle="collapse" data-target="#listing-advance-filter">
                    <i class="ti-search" aria-hidden="true"></i>
                    Advance
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- listing-map section -->
    <div class="listing-map-block" id="map-canvas" data-map-zoom="5"></div>
    <div class="serach-result-section">
      <div class="serach-result-section-inner">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="serach-result-section-title">
                <h4>All Listings <strong>({{listings.length}})</strong></h4>
              </div>
            </div>
            <div class="col-md-6">
              <div class="grid-controll-block text-right">
                <button type="button" class="grid-btn" id="grid_btn">
                  <span class="ti-layout-grid2"></span>
                </button>
                <button type="button" class="list-btn" id="list_btn">
                  <span class="ti-view-list-alt"></span>
                </button>
              </div>
            </div>
          </div>
          <div id="products" class="row product-list-group">
            <div class="col-lg-4 col-md-6" v-for="listing in listings">
              <article class="popular-listing-post">
                <div class="post-thumb">
                  <div v-if="listing.featuredImage == null">
                    <img src="images/post/9.jpg" alt="img" class="img-responsive">
                  </div>
                  <div v-else>
                    <img :src="'files/listings/'+ listing.featuredImage" alt="img" class="img-responsive">
                  </div>

                  <div class="listing-info">
                    <h4><a href="javascript:void(0)">{{ listing.name }}</a></h4>
                    <p><i class="fa fa-bag" aria-hidden="true"></i> {{ listing.category.name }}</p>
                  </div>
                  <div class="option-block">
                    <ul>
                      <li>
                        <a href="javascript:void(0)" class="bookmark">

                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div class="post-details">
                  <div class="post-meta">
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <h5><a href="javascript:void(0)">{{ listing.location_id.name }}</a></h5>
                    </div>
                    <div class="tag">
                      <span>{{ listing.condition }}</span>
                      <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="post-entry-block">
                    <div class="post-author">
                      <img src="images/post/author/1.jpg" alt="img" class="img-responsive">
                    </div>
                    <p class="post-entry">
                      {{ listing.description }}
                    </p>
                  </div>
                  <div class="post-footer">
                    <div class="contact-no">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <h5> {{ listing.user_id.name }}</h5>
                    </div>
                    <div class="schedule-info closed">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                      <h5>{{ listing.created_at }}</h5>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <nav class="navigation pagination pagination-primary">
        <div class="nav-links">
          <a class="page-numbers" href="#">1</a>
          <span class="page-numbers current">2</span>
          <a class="page-numbers" href="#">3</a>
          <a class="page-numbers" href="#">4</a>
          <a class="next page-numbers" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </nav>
    </div>
    <!-- serach-result section -->
  </div>
</template>

<script>
  export default {
    name: 'AllListings',

    data: () => ({
      listings: [],

    }),

    created() {
      this.fetchListings();
    },

    methods: {
      fetchListings(page_url) {
        let vm = this;
        page_url = page_url || '/api/all-listings';
        fetch(page_url)
          .then(res => res.json())
          .then(res => {
            this.listings = res.data;
            // vm.makePagination(res.meta, res.links);
          })
          .catch(err => console.log(err));
      },
    }
  }
</script>

<style scoped>

</style>
