<template>
  <div class="container-fluid">
    <!-- add-listing-tost-block -->
    <form id="add_listing_form" class="form-common add-listing-form" @submit.prevent="addLocation" @keydown="form.onKeydown($event)" novalidate="novalidate">

      <div class="listing-block businessinfo-listing">
        <h4>Location Information</h4>
        <div class="row">
          <div class="col-lg-6">
            <div class="businessinfo-left-block">
              <div class="form-group">
                <label for="category_name">Location Name</label>
                <input id="category_name" name="name" type="text" v-model="form.name"  class="form-control form-single-element" placeholder="Ex: Berlin, Munich" aria-required="true">
                <!--                <has-error :form="form" field="name"/>-->
              </div>
              <div class="form-group">
                <label for="listing_email">Location Description</label>
                <textarea id="listing_email" type="text" v-model="form.description"   name="description" class="form-control" placeholder="Ex: Some Description" aria-required="true"></textarea>
              </div>
              <div class="form-group">
                <label for="location_image">Location Image</label>
                <input class="form-control-file" ref="file"  type="file" @change="selectFile" name="file" id="location_image">

                <span>File Format .jpg, .jpeg, .png</span>
              </div>
              <div class="form-group">
                <div class="form-btn-block">
                  <button type="submit" class="form-btn">Save</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <table class="table table-responsive table-bordered table-striped">
              <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              <tr v-for="location in locations">
                <td>{{ location.name }}</td>
                <td>Germany</td>
                <td><button @click="editCategory(location.id)" class="btn btn-warning mb-2">Edit</button>
                  <button @click="deleteLocation(location.id)" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
  import Form from 'vform'
  import {objectToFormData} from 'object-to-formdata'

  // const objectToFormData = window.objectToFormData
  export default {
    name: 'location',
    layout: 'admin',
    middleware: 'auth',
    scrollToTop: false,

    metaInfo () {
      return { title: this.$t('Locations Manager') }
    },

    data: () => ({
      locations: [],
      form: new Form({
        name: '',
        description: '',
        file: null
      })
    }),

    created() {
      this.fetchLocations();
    },

    methods: {
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
      async addLocation () {
        await this.form.submit('post', '/api/admin/location',{
          // Transform form data to FormData
          transformRequest: [function (data, headers) {
            return objectToFormData(data)
          }]
        })
        this.form.reset()
        this.fetchLocations();
      },
      deleteLocation(id) {
        if (confirm('Are You Sure?')) {
          fetch(`/api/admin/location/${id}`, {
            method: 'delete'
          })
            .then(res => res.json())
            .then(data => {
              alert('Location Removed');
            })
            .catch(err => console.log(err));
          this.fetchLocations();
        }
      },
    }
  }
</script>

<style scoped>

</style>
