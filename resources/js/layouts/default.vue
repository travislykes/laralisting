<template>
  <div class="main-wrap">
    <navbar />


      <child />

    <theFooter>
    </theFooter>
  </div>
</template>

<script>
import Navbar from '~/components/DarkNavbar'
import theFooter from '~/components/Footer'
export default {
  name: 'MainLayout',

  components: {
    Navbar,
      theFooter
  }
}
</script>
