<template>
  <div class="dashboard">
    <div class="main-wrap">
      <navbar></navbar>
      <sidebar></sidebar>
      <div class="page-container-wrap">
        <child />
        <div>
          <theFooter></theFooter>
        </div>
      </div>
     </div>
  </div>

</template>

<script>
  import sidebar from '~/components/dashboard/Sidebar'
  import navbar from '~/components/dashboard/Nav'
  import theFooter from '~/components/Footer'
  export default {
    name: 'AdminLayout',

    components:{
      sidebar,
      navbar,
      theFooter
    }
  }
</script>

<style scoped>

</style>
