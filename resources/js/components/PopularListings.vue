<template>
  <div class="popular-listing-section">
    <div class="container">
      <div class="section-title">
        <h2>Most Popular Listings</h2>
        <p>Discover exlusive popular listing in your city. Checkout what suits for you.</p>
      </div>
      <div class="row">
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
</template>

<script>
  export default {
    name: 'PopularListings',

    data: () => ({
      listings: [],

    }),

    created() {
      this.fetchListings();
    },

    methods: {
      fetchListings(page_url) {
        let vm = this;
        page_url = page_url || '/api/recent-listings';
        fetch(page_url)
          .then(res => res.json())
          .then(res => {
            this.listings = res.data;
          })
          .catch(err => console.log(err));
      },
    }
  }
</script>

<style scoped>

</style>
