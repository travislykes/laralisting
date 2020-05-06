<template>
  <div>
  <explore></explore>
    <categorybox></categorybox>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import explore from '~/components/Explore'
import categorybox from '~/components/Categorybox'
export default {
  layout: 'basic',

    components: {
      explore,
        categorybox
    },
  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script>

<style scoped>
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.title {
  font-size: 85px;
}
a {
   color: #fff;
  ff: ;
  */: ;
  text-decoration: none;
  background-color: transparent;
}
</style>
