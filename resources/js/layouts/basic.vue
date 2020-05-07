<template>
  <div class="main-wrap">
    <navbar></navbar>
    <child />
    <cta></cta>
    <theFooter></theFooter>
  </div>
</template>

<script>
import theFooter from '~/components/Footer'
import navbar from '~/components/Navbar'
import cta from '~/components/Cta'
export default {
  name: 'BasicLayout',

  components: {
      theFooter,
      navbar,
    cta
  }
}
</script>

