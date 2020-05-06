<template>
  <div class="main-wrap">
    <navbar></navbar>
    <child />
    <theFooter></theFooter>
  </div>
</template>

<script>
import theFooter from '~/components/Footer'
import navbar from '~/components/Navbar'
export default {
  name: 'BasicLayout',

  components: {
      theFooter,
      navbar
  }
}
</script>

