<template>
  <div>
    <div class="add-listing-tost-block">
      <p>
        <strong>{{ $t('you_are_logged_in') }} </strong><a href="#">{{ user.name }}</a>
      </p>
    </div>
    <my-listings></my-listings>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import myListings from '~/components/dashboard/Mylistings'
export default {
  layout: 'admin',
  middleware: 'auth',

  components: {
    myListings
  },

  computed: mapGetters({
    user: 'auth/user'
  }),

  metaInfo () {
    return { title: this.$t('home') }
  }
}
</script>
