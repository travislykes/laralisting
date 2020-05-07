<template>
  <div>
    <card :title="$t('home')">
      {{ $t('you_are_logged_in') }} {{ user.name}}
    </card>
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
