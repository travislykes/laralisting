<template>
  <div class="row">
    <div class="col-md-3">
      <card :title="$t('Config')" class="settings-card">
        <ul class="nav flex-column nav-pills">
          <li v-for="tab in tabs" :key="tab.route" class="nav-item">
            <router-link :to="{ name: tab.route }" class="nav-link" active-class="active">
              <fa :icon="tab.icon" fixed-width />
              {{ tab.name }}
            </router-link>
          </li>
        </ul>
      </card>
    </div>

    <div class="col-md-9">
      <transition name="fade" mode="out-in">
        <router-view />
      </transition>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'config',
    layout: 'admin',
    middleware: 'auth',

    computed: {
      tabs () {
        return [
          {
            // icon: 'lock',
            // name: this.$t('location'),
            // route: 'config.location'
          }
        ]
      }
    }
  }
</script>

<style scoped>

</style>
