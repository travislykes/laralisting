<template>
  <div>
    <footer>
      <div class="footer-top-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="footer-widget">
                <div class="footer-logo-block">
                  <a>
                    <img v-bind:src="'images/logo.png'" alt="img" class="img-responsive">
                  </a>
                </div>
                <p class="address">
                  <i class="fa fa-map-marker" aria-hidden="true" /> Fabrikzeile # 26/2, <br>Saalepark Hof Bavaria, 95028
                </p>
                <p><i class="fa fa-phone" aria-hidden="true" /> +49-0000-000-000</p>
                <p><i class="fa fa-envelope-o" aria-hidden="true" /> info@example.com</p>
                <div class="footer-social-block">
                  <span>Follow us:</span>
                  <ul class="social">
                    <li>
                      <a>
                        <i class="fa fa-facebook" aria-hidden="true" />
                      </a>
                    </li>
                    <li>
                      <a>
                        <i class="fa fa-twitter" aria-hidden="true" />
                      </a>
                    </li>
                    <li>
                      <a>
                        <i class="fa fa-google-plus" aria-hidden="true" />
                      </a>
                    </li>
                    <li>
                      <a>
                        <i class="fa fa-youtube-play" aria-hidden="true" />
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- footer-social-block -->
              </div>

              <div class="footer-widget">
                <h4 class="footer-widget-title">
                  Useful Links
                </h4>
                <ul class="footer-content-list">
                  <li>
                    <a>
                      About ListingGEO
                    </a>
                  </li>
                  <li>
                    <a>
                      How it Works
                    </a>
                  </li>
                  <li>
                    <a>
                      Exclusive Listings
                    </a>
                  </li>
                  <li>
                    <a>
                      Popular Locations
                    </a>
                  </li>
                  <li>
                    <a>
                      Contact us
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget">
                <h4 class="footer-widget-title">
                  Listing Account
                </h4>
                <ul class="footer-content-list">
                  <li>
                    <a>
                      User Log in
                    </a>
                  </li>
                  <li>
                    <a>
                      User Registration
                    </a>
                  </li>
                  <li>
                    <a>
                      Add Listing
                    </a>
                  </li>
                  <li>
                    <a>
                      Favorite Lisitings
                    </a>
                  </li>
                  <li>
                    <a>
                      Pricing Plans
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="footer-widget">
                <h4 class="footer-widget-title">
                  Latest Listings
                </h4>
                <article class="latest-post">
                  <div class="post-thumb">
                    <a href="javascript:void(0)">
                      <img v-bind:src="'images/post/7.jpg'" alt="img" class="img-responsive">
                    </a>
                  </div>
                  <div class="post-wrapper">
                    <h6 class="title">
                      <a>
                        Grand Park Hotel
                      </a>
                    </h6>
                    <p class="post-entry">
                      175 Church Road, City Tower, California, CA785423
                    </p>
                    <div class="post-meta">
                      <a class="post-tag">
                        Hotel & Resort
                      </a>
                    </div>
                  </div>
                </article>
                <article class="latest-post">
                  <div class="post-thumb">
                    <a href="javascript:void(0)">
                      <img v-bind:src="'images/post/7.jpg'" alt="img" class="img-responsive">
                    </a>
                  </div>
                  <div class="post-wrapper">
                    <h6 class="title">
                      <a>
                        Grand Park Hotel
                      </a>
                    </h6>
                    <p class="post-entry">
                      175 Church Road, City Tower, California, CA785423
                    </p>
                    <div class="post-meta">
                      <a class="post-tag">
                        Hotel & Resort
                      </a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-block">
        <div class="container">
          <div class="row">
            <div class="col-md-6 push-md-6">
              <ul class="footer-nav">
                <li>
                  <a href="javascript:void(0)">
                    Legal
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    Privacy Policy
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    Terms of Use
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 pull-md-6">
              <p class="copyright-text">
                Copyright 2020. <a>ListingGEO</a>. All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'TheFooter'
}
</script>
