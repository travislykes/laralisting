<template>
  <div class="main-wrap">
    <navbar />

    <div class="container mt-4">
      <child />
    </div>
    <theFooter>
    </theFooter>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import theFooter from '~/components/Footer'
export default {
  name: 'MainLayout',

  components: {
    Navbar,
      theFooter
  }
}
</script>
