<template>
  <div>
    <div class="subheader">
      <h2>Log in / Registration</h2>
      <div class="overlay"></div>
    </div>
    <div class="breadcrumb-block">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Log in / Registration</li>
        </ol>
        <div class="breadcrumb-call-to-action">
          <p><i class="fa fa-phone" aria-hidden="true"></i> +1-0000-000-000</p>
          <a href="javascript:void(0)" class="contact-btn">
            Contact Us
          </a>
        </div>
      </div>
    </div>
    <div class="user-form-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-12">
            <div class="registration-form-block">
              <div class="registration-form-title">
                <h4>Sign in</h4>
              </div>
              <div class="form-block">
                <form class="form-common" @submit.prevent="login" @keydown="form.onKeydown($event)">
                  <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" name="email" id="email" v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }" class="form-control"  placeholder="Enter your Email">
                    <has-error :form="form" field="email" />
                  </div>
                  <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }" class="form-control" name="password" id="password" placeholder="Enter your Password">
                    <has-error :form="form" field="password" />
                  </div>
                  <div class="form-group row form-check-row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="form-check">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" v-model="remember" name="remember">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Remember Me</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="forgot-link-block">
                          <router-link :to="{ name: 'password.request' }" class="small ml-auto my-auto">
                          <a class="forgot-link">Forgot Password?</a>
                          </router-link>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-btn-block">
                      <v-button :loading="form.busy" class="form-btn">
                        {{ $t('login') }}
                      </v-button>
<!--                      <button type="submit" class="form-btn">Sign in</button>-->
                    </div>
                  </div>
                </form>
                <div class="signin-others-option-block">
                  <h5>Not a Member? <router-link :to="{ name: 'register' }">Sign up</router-link></h5>
                  <p>Connect with your social media network</p>
                  <div class="social-icon-btn-group-detail">
                    <a href="javascript:void(0)" class="icon-btn-fb">
                      <i class="fa fa-facebook"></i> Facebook
                    </a>
                    <a href="javascript:void(0)" class="icon-btn-tw">
                      <i class="fa fa-twitter"></i> Twitter
                    </a>
                    <a href="javascript:void(0)" class="icon-btn-gplus">
                      <i class="fa fa-google-plus"></i> Google +
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- panel -->
          </div>
        </div>
      </div>
    </div>
<!--    <div class="col-lg-8 m-auto">-->
<!--      <card :title="$t('login')">-->
<!--        <form @submit.prevent="login" @keydown="form.onKeydown($event)">-->
<!--          &lt;!&ndash; Email &ndash;&gt;-->
<!--          <div class="form-group row">-->
<!--            <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>-->
<!--            <div class="col-md-7">-->
<!--              <input v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }" class="form-control" type="email" name="email">-->
<!--              <has-error :form="form" field="email" />-->
<!--            </div>-->
<!--          </div>-->

<!--          &lt;!&ndash; Password &ndash;&gt;-->
<!--          <div class="form-group row">-->
<!--            <label class="col-md-3 col-form-label text-md-right">{{ $t('password') }}</label>-->
<!--            <div class="col-md-7">-->
<!--              <input v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }" class="form-control" type="password" name="password">-->
<!--              <has-error :form="form" field="password" />-->
<!--            </div>-->
<!--          </div>-->

<!--          &lt;!&ndash; Remember Me &ndash;&gt;-->
<!--          <div class="form-group row">-->
<!--            <div class="col-md-3" />-->
<!--            <div class="col-md-7 d-flex">-->
<!--              <checkbox v-model="remember" name="remember">-->
<!--                {{ $t('remember_me') }}-->
<!--              </checkbox>-->

<!--              <router-link :to="{ name: 'password.request' }" class="small ml-auto my-auto">-->
<!--                {{ $t('forgot_password') }}-->
<!--              </router-link>-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="form-group row">-->
<!--            <div class="col-md-7 offset-md-3 d-flex">-->
<!--              &lt;!&ndash; Submit Button &ndash;&gt;-->
<!--              <v-button :loading="form.busy">-->
<!--                {{ $t('login') }}-->
<!--              </v-button>-->

<!--              &lt;!&ndash; GitHub Login Button &ndash;&gt;-->
<!--              <login-with-github />-->
<!--            </div>-->
<!--          </div>-->
<!--        </form>-->
<!--      </card>-->
<!--    </div>-->
  </div>
</template>

<script>
import Form from 'vform'
import LoginWithGithub from '~/components/LoginWithGithub'

export default {
  middleware: 'guest',
    layout: 'basic',
  components: {
    LoginWithGithub
  },

  metaInfo () {
    return { title: this.$t('login') }
  },

  data: () => ({
    form: new Form({
      email: '',
      password: ''
    }),
    remember: false
  }),

  methods: {
    async login () {
      // Submit the form.
      const { data } = await this.form.post('/api/login')

      // Save the token.
      this.$store.dispatch('auth/saveToken', {
        token: data.token,
        remember: this.remember
      })

      // Fetch the user.
      await this.$store.dispatch('auth/fetchUser')

      // Redirect home.
      this.$router.push({ name: 'home' })
    }
  }
}
</script>
