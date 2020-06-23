<template>
  <div class="container-fluid">
    <div class="add-listing-tost-block">
      <p>
        <strong>Add New Listing </strong>
      </p>
    </div>
    <!-- add-listing-tost-block -->
    <form id="add_listing_form" class="form-common add-listing-form" @submit.prevent="addList" @keydown="form.onKeydown($event)" novalidate="novalidate" enctype="multipart/form-data">
      <div class="listing-block businessinfo-listing">
        <h4>Listing Details</h4>
        <div class="row">
          <div class="col-lg-6">
            <div class="businessinfo-left-block">
              <div class="form-group">
                <label for="listing_name">Listing Title</label>
                <input id="listing_name" type="text" v-model="form.listingName" name="listingName" class="form-control form-single-element" placeholder="Ex: iPhone 11 Pro" aria-required="true">
              </div>
              <div class="form-group">
                <label for="listing_price"> Price</label>
                <input id="listing_price" type="number" step="0.01" v-model="form.price" name="price" class="form-control" placeholder="Price From" aria-required="true">
              </div>
              <div class="form-group listing-compose-block">
                <label for="listing_desc">Description</label>
                <textarea id="listing_desc" rows="5" cols="50"  v-model="form.description" name="description" type="text" class="form-control" placeholder="Brief Description" aria-required="true"></textarea>
              </div>
              <div class="form-group listing-compose-block">
                <label for="features">Features</label>
                <input id="features" type="text" class="form-control" v-model="form.features" name="features" placeholder="Ex Red, Plastic, 5G " aria-required="true">
              </div>
            </div>
          </div>
          <!-- col-lg-6 -->
          <div class="col-lg-6">
            <div class="form-group">
              <label for="listing_category">Category</label>
              <select id="listing_category"  v-model="form.category" name="category" class="form-control">
                <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <select id="location" v-model="form.location" name="location" class="form-control">
                <option v-for="location in locations"  :value="location.id">{{ location.name }}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="condition">Condition</label>
              <select id="condition" v-model="form.condition" name="condition" class="form-control">
                <option value="new">New</option>
                <option value="used">Used</option>
                <option value="slightly_used">Slightly Used</option>
              </select>
            </div>
            <div class="form-group">
              <label for="condition">Listing Video URL <small>(if available)</small></label>
              <input id="videoUrl" type="text" v-model="form.video_url" name="video_url" class="form-control" placeholder="YouTube Video URL Here" aria-required="true">
            </div>
            <div class="uload-images-block">
              <h5>Upload Image</h5>
              <div class="form-group form-group-file-type">
                <label for="featured_image">Featured Image</label>
                <input type="file" class="form-control-file" @change="selectFile" name="file" id="featured_image" required>
                <span>Maximum file size: 20 MB.</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <button type="submit" class="listing-btn-large">Save Listing</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
  import Form from 'vform'
  import {objectToFormData} from 'object-to-formdata'

  export default {
    name: 'AddListing',
    middleware: 'auth',
    scrollToTop: false,
    metaInfo () {
      return { title: this.$t('Add Listing') }
    },

    data: () => ({
      categories: [],
      locations: [],
      form: new Form({
        listingName: '',
        category: '',
        location: '',
        condition: '',
        features: '',
        price:'',
        video_url:'',
        description: '',
        file: null,
      })
    }),

    // mounted() {
    //   $('#location').select({
    //     placeholder: "Select location",
    //   });
    // },

    created() {
      this.fetchCategories();
      this.fetchLocations();
    },

    methods: {
      fetchCategories(page_url) {
        let vm = this;
        page_url = page_url || '/api/admin/categories';
        fetch(page_url)
          .then(res => res.json())
          .then(res => {
            this.categories = res.data;
            // vm.makePagination(res.meta, res.links);
          })
          .catch(err => console.log(err));
      },
      fetchLocations(page_url) {
        let vm = this;
        page_url = page_url || '/api/admin/location';
        fetch(page_url)
          .then(res => res.json())
          .then(res => {
            this.locations = res.data;
            // vm.makePagination(res.meta, res.links);
          })
          .catch(err => console.log(err));
      },
      selectFile (e) {
        const file = e.target.files[0]
        // Do some client side validation...
        this.form.file = file
        // console.log(this.form.file)
      },
      async addList () {
        await this.form.submit('post', '/api/my-listings',{
          // Transform form data to FormData
          transformRequest: [function (data, headers) {
            return objectToFormData(data)
          }]
        })
        this.form.reset()
        this.$router.push('home')
        // this.fetchCategories();
      },

    }
  }
</script>

<style scoped>

</style>
