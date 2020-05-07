<template>
  <div class="main-wrap">
    <navbar />
    <child />
    <cta></cta>
    <theFooter>
    </theFooter>
  </div>
</template>

<script>
import Navbar from '~/components/DarkNavbar'
import theFooter from '~/components/Footer'
import cta from '~/components/Cta'

export default {
  name: 'MainLayout',

  components: {
    Navbar,
    theFooter,
    cta
  }
}
</script>
