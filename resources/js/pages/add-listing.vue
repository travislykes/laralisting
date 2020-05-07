<template>
<div>
  <new-listing></new-listing>
</div>
</template>

<script>
  import newListing from '~/components/AddListing'
  export default {
    layout: 'admin',
    middleware: 'auth',

    components:{
      newListing
    },

    metaInfo () {
      return { title: this.$t('Add Listing') }
    }
  }
</script>

<style scoped>

</style>
