function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [
  { path: '/', name: 'welcome', component: page('welcome.vue') },
  { path: '/listings', name: 'listings', component: page('listings.vue') },
  { path: '/view-listing/:id', name: 'view.listing', component: page('view-listing.vue') },

  { path: '/login', name: 'login', component: page('auth/login.vue') },
  { path: '/register', name: 'register', component: page('auth/register.vue') },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },

  { path: '/home', name: 'home', component: page('home.vue') },
  { path: '/add-listing', name: 'add.listing', component: page('add-listing.vue') },
  { path: '/categories', name: 'config.categories', component: page('config/categories.vue') },
  { path: '/location', name: 'config.location', component: page('config/location.vue') },
  { path: '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') }
    ] },

  // { path: '/config',
  //   component: page('config/index.vue'),
  //   children: [
  //     { path: '', redirect: { name: 'config.location' } },
  //     // { path: 'categories', name: 'config.categories', component: page('config/categories.vue') },
  //     { path: 'location', name: 'config.location', component: page('config/location.vue') }
  //   ] },

  { path: '*', component: page('errors/404.vue') }
]
