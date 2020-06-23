<template>

  <div class="container-fluid">
    <!-- add-listing-tost-block -->
    <form id="add_listing_form" class="form-common add-listing-form" @submit.prevent="addCategory"  novalidate="novalidate">

      <div class="listing-block businessinfo-listing">
        <h4>Category Information</h4>
        <div class="row">
          <div class="col-lg-6">
            <div class="businessinfo-left-block">
              <div class="form-group">
                <label for="category_name">Category Name</label>
                <input id="category_name" name="name" type="text" v-model="category.name"  class="form-control form-single-element" placeholder="Ex: Houses" aria-required="true">
<!--                <has-error :form="form" field="name"/>-->
              </div>
              <div class="form-group">
                <label for="listing_email">Category Description</label>
                <textarea id="listing_email" type="text" v-model="category.description"   name="description" class="form-control" placeholder="Ex: info@Some Description" aria-required="true"></textarea>
              </div>
              <div class="form-group">
                <label for="icon">Category Icon</label>
                <input id="icon" name="icon" type="text" v-model="category.icon"  class="form-control form-single-element" placeholder="Ex: Houses" aria-required="true">
<!--                <has-error :form="form" field="name"/>-->
              </div>
              <div class="form-group">
                <label for="category_image">Category Image</label>
                <input class="form-control-file" ref="file"  type="file" v-on:change="onImageChange" name="image" id="category_image">

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
                <th>Icon</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              <tr v-for="category in categories">
                <td>{{ category.name }}</td>
                <td>{{ category.icon }}</td>
                <td>Germany</td>
                <td><button @click="editCategory(category.id)" class="btn btn-warning mb-2">Edit</button>
                    <button @click="deleteCategory(category.id)" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </form>
  </div>

</template>

<script>

  export default {
    name: 'categories',
    layout: 'admin',
    middleware: 'auth',
    scrollToTop: false,

    metaInfo () {
      return { title: this.$t('Categories') }
    },

    data() {
      return {
        categories: [],
        category: {
          name: '',
          description: '',
          icon: '',
          image: ''
        },
        category_id: '',
        pagination: {},
        edit: false
      };
    },

    created() {
      this.fetchCategories();
    },

    methods: {
      fetchCategories(page_url) {
        let vm = this;
        page_url = page_url || '/api/admin/categories';
        fetch(page_url)
          .then(res => res.json())
          .then(res => {
            this.categories = res.data;
            vm.makePagination(res.meta, res.links);
          })
          .catch(err => console.log(err));
      },
      addCategory() {
        if (this.edit === false) {
          // Add
          fetch('/api/admin/categories', {
            method: 'post',
            body: JSON.stringify(this.category,{image: this.image}),
            headers: {
              'content-type': 'application/json',
              'Content-Type': 'multipart/form-data'
            }
          })
            .then(res => res.json())
            .then(data => {
              this.clearForm();
              alert('Category Added');
              this.fetchCategories();
            })
            .catch(err => console.log(err));
        } else {
          // Update
          fetch('/api/admin/categories/', {
            method: 'patch',
            body: JSON.stringify(this.category),
            headers: {
              'content-type': 'application/json',
              'Content-Type': 'multipart/form-data'
            }
          })
            .then(res => res.json())
            .then(data => {
              this.clearForm();
              alert('Category Updated');
              this.fetchCategories();
            })
            .catch(err => console.log(err));
        }
      },
      clearForm() {
        this.edit = false;
        this.category.id = null;
        this.category.category_id = null;
        this.category.name = '';
        this.category.description = '';
        this.category.icon = '';
        this.category.image = '';
      },
      makePagination(meta, links) {
        let pagination = {
          current_page: meta.current_page,
          last_page: meta.last_page,
          next_page_url: links.next,
          prev_page_url: links.prev
        };

        this.pagination = pagination;
      },
      editCategory(category) {
        this.edit = true;
        this.category.id = category.id;
        this.category.category_id = category.id;
        this.category.name = category.name;
        this.category.description = category.description;
        this.category.icon = category.icon;
      },
      deleteCategory(id) {
        if (confirm('Are You Sure?')) {
          fetch(`/api/admin/categories/${id}`, {
            method: 'delete'
          })
            .then(res => res.json())
            .then(data => {
              alert('Category Removed');
              this.fetchCategories();
            })
            .catch(err => console.log(err));
        }
      },
      //upload image
        onImageChange(e) {
          let files = e.target.files || e.dataTransfer.files;
          if (!files.length)
            return;
          this.createImage(files[0]);
        },
        createImage(file) {
          let reader = new FileReader();
          let vm = this;
          reader.onload = (e) => {
            vm.image = e.target.result;
          };
          reader.readAsDataURL(file);
        },
        // uploadImage(){
        //   axios.post('/image/store',{image: this.image}).then(response => {
        //     console.log(response);
        //   });
        // }


    }
  }
</script>



<style scoped>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>
