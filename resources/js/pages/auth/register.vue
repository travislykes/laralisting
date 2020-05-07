<template>
  <div>
    <div class="subheader">
      <h2>Registration</h2>
      <div class="overlay"></div>
    </div>
    <div class="breadcrumb-block">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Home</a></li>
          <li class="breadcrumb-item active">Registration</li>
        </ol>
        <div class="breadcrumb-call-to-action">
          <p><i class="fa fa-phone" aria-hidden="true"></i> +49-1111-000-000</p>
          <a href="javascript:void(0)" class="contact-btn">
            Contact Us
          </a>
        </div>
      </div>
    </div>
    <card v-if="mustVerifyEmail" :title="$t('register')">
      <div class="alert alert-success" role="alert">
        {{ $t('verify_email_address') }}
      </div>
    </card>
<!--    <card v-else :title="$t('register')">-->
<!--    </card>-->
    <div v-else class="user-form-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-12">
            <div class="registration-form-block">
              <div class="registration-form-title">
                <h4>Sign up</h4>
              </div>
              <div class="form-block">
                <form class="form-common" @submit.prevent="register" @keydown="form.onKeydown($event)">
                  <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="name" id="name" v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }" class="form-control"  placeholder="Enter your Full Name" required>
                    <has-error :form="form" field="name" />
                  </div>
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
                  <div class="form-group">
                    <label for="password_confirmation">Confirm Password *</label>
                    <input type="password" v-model="form.password_confirmation" :class="{ 'is-invalid': form.errors.has('password') }" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm your Password">
                    <has-error :form="form" field="password_confirmation" />
                  </div>
                  <div class="form-group row form-check-row">
                    <div class="col-md-6">
                      <div class="row">
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
                        {{ $t('Sign Up') }}
                      </v-button>
                     </div>
                    <!-- GitHub Register Button -->
                    <login-with-github />
                  </div>
                </form>
                <div class="signin-others-option-block">
                  <h5>Already a Member? <a href="javascript:void(0)">Sign In</a></h5>
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
<!--      <card v-if="mustVerifyEmail" :title="$t('register')">-->
<!--        <div class="alert alert-success" role="alert">-->
<!--          {{ $t('verify_email_address') }}-->
<!--        </div>-->
<!--      </card>-->
<!--      <card v-else :title="$t('register')">-->
<!--        <form @submit.prevent="register" @keydown="form.onKeydown($event)">-->
<!--          &lt;!&ndash; Name &ndash;&gt;-->
<!--          <div class="form-group row">-->
<!--            <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>-->
<!--            <div class="col-md-7">-->
<!--              <input v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }" class="form-control" type="text" name="name">-->
<!--              <has-error :form="form" field="name" />-->
<!--            </div>-->
<!--          </div>-->

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

<!--          &lt;!&ndash; Password Confirmation &ndash;&gt;-->
<!--          <div class="form-group row">-->
<!--            <label class="col-md-3 col-form-label text-md-right">{{ $t('confirm_password') }}</label>-->
<!--            <div class="col-md-7">-->
<!--              <input v-model="form.password_confirmation" :class="{ 'is-invalid': form.errors.has('password_confirmation') }" class="form-control" type="password" name="password_confirmation">-->
<!--              <has-error :form="form" field="password_confirmation" />-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="form-group row">-->
<!--            <div class="col-md-7 offset-md-3 d-flex">-->
<!--              &lt;!&ndash; Submit Button &ndash;&gt;-->
<!--              <v-button :loading="form.busy">-->
<!--                {{ $t('register') }}-->
<!--              </v-button>-->

<!--              &lt;!&ndash; GitHub Register Button &ndash;&gt;-->
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

  components: {
    LoginWithGithub
  },

  metaInfo () {
    return { title: this.$t('register') }
  },

  data: () => ({
    form: new Form({
      name: '',
      email: '',
      password: '',
      password_confirmation: ''
    }),
    mustVerifyEmail: false
  }),

  methods: {
    async register () {
      // Register the user.
      const { data } = await this.form.post('/api/register')

      // Must verify email fist.
      if (data.status) {
        this.mustVerifyEmail = true
      } else {
        // Log in the user.
        const { data: { token } } = await this.form.post('/api/login')

        // Save the token.
        this.$store.dispatch('auth/saveToken', { token })

        // Update the user.
        await this.$store.dispatch('auth/updateUser', { user: data })

        // Redirect home.
        this.$router.push({ name: 'home' })
      }
    }
  }
}
</script>
