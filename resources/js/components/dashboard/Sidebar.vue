<template>
<div>
  <a href="#" id="slide-nav-trigger" class="slide-nav-trigger">
    <i class="fa fa-bars" aria-hidden="true"></i>
    Dashboard Navigation
  </a>
  <div class="slide-menu-wrap">
    <nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
      <div class="user-profile-block">
        <div>
          <div class="user-thumb">
            <img :src="'images/misc/9.jpg'" alt="img" class="img-responsive">
          </div>
          <div class="user-info">
            <h5>
              Robert Smith
            </h5>
            <span>UI Designer</span>
          </div>
        </div>
        <a href="#" class="listing-btn-cmn">Update Profile</a>
      </div>
      <div class="accordion-menu responsive-menu" data-accordion-group>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="dashboard.html">
              <span class="menu-icon-wrap icon ti-layers-alt"></span>
              <span class="menu-title">Dashboard</span>
            </a>
          </div>
        </div>
        <div class="slide-navigation-wrap" data-accordion>
          <div class="nav-item has-sub" data-control>
            <a href="javascript:void(0)">
              <span class="menu-icon-wrap icon ti-location-pin"></span>
              <span class="menu-title">My Listing</span>
            </a>
          </div>
          <div class="menu-content" data-content>
            <div class="nav-item">
              <a href="dashboard-all-listing.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">All listings</span>
              </a>
            </div>
            <div class="nav-item">
              <a href="dashboard-new-listing.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Add new listings</span>
              </a>
            </div>
            <div class="nav-item">
              <a href="dashboard-active-listing.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Active Listings</span>
              </a>
            </div>
            <div class="nav-item">
              <a href="dashboard-expired-listing.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Expired Listings</span>
              </a>
            </div>
          </div>
        </div>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="dashboard-favorites-listing.html">
              <span class="menu-icon-wrap icon ti-heart"></span>
              <span class="menu-title">My Favorites</span>
            </a>
          </div>
        </div>
        <div class="slide-navigation-wrap" data-accordion>
          <div class="nav-item has-sub" data-control>
            <a href="javascript:void(0)">
              <span class="menu-icon-wrap icon ti-comment-alt"></span>
              <span class="menu-title">Reviews</span>
            </a>
          </div>
          <div class="menu-content" data-content>
            <div class="nav-item">
              <a href="dashboard-all-review.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">All Reviews</span>
              </a>
            </div>
            <div class="nav-item">
              <a href="dashboard-my-review.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">My Reviews</span>
              </a>
            </div>
          </div>
        </div>
        <div class="slide-navigation-wrap" data-accordion>
          <div class="nav-item has-sub" data-control>
            <a href="javascript:void(0)">
              <span class="menu-icon-wrap icon ti-email"></span>
              <span class="menu-title">Messages</span>
            </a>
            <div class="menu-badge-wrap">
              <span class="menu-badge">5</span>
            </div>
          </div>
          <div class="menu-content" data-content>
            <div class="nav-item">
              <a href="dashboard-all-message.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">All Messages</span>
              </a>
            </div>
            <div class="nav-item">
              <a href="dashboard-unread-message.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Unread Messages</span>
              </a>
            </div>
          </div>
        </div>
        <div class="slide-navigation-wrap" data-accordion>
          <div class="nav-item has-sub" data-control>
            <a href="javascript:void(0)">
              <span class="menu-icon-wrap icon ti-gift"></span>
              <span class="menu-title">Packages</span>
            </a>
          </div>
          <div class="menu-content" data-content>
            <div class="nav-item">
              <a href="dashboard-checkout.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Checkout</span>
              </a>
            </div>
          </div>
          <div class="menu-content" data-content>
            <div class="nav-item">
              <a href="dashboard-package-plan.html">
                <span class="menu-icon-wrap bullet"></span>
                <span class="menu-title">Package Plan</span>
              </a>
            </div>
          </div>
        </div>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="dashboard-invoices.html">
              <span class="menu-icon-wrap icon ti-clipboard"></span>
              <span class="menu-title">Invoices</span>
            </a>
          </div>
        </div>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="dashboard-add-campaign.html">
              <span class="menu-icon-wrap icon ti-check-box "></span>
              <span class="menu-title">Add Campaign</span>
            </a>
          </div>
        </div>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="dashboard-claim-refund.html">
              <span class="menu-icon-wrap icon ti-pencil-alt"></span>
              <span class="menu-title">Claim & Refund</span>
            </a>
          </div>
        </div>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="dashboard-settings.html">
              <span class="menu-icon-wrap icon ti-settings"></span>
              <span class="menu-title">Settings</span>
            </a>
          </div>
        </div>
        <div class="slide-navigation-wrap">
          <div class="nav-item">
            <a href="dashboard-profile.html">
              <span class="menu-icon-wrap icon ti-user"></span>
              <span class="menu-title">My Profile</span>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
</template>

<script>
  export default {
    name: 'Sidebar'
  }
</script>

<style scoped>

</style>
