<template>
  <div>
    <section class="hero has-background-white-bis is-fullheight">
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="column is-4 is-offset-4">
            <h3 class="title has-text-black">¡Bienvenido!</h3>
            <hr class="login-hr" />
            <p class="subtitle has-text-black">
              Por favor inicia sesión con tu cuenta para continuar.
            </p>
            <div class="box top-margin-5">
              <figure class="avatar">
                <img
                  src="https://www.tektonlabs.com/wp-content/uploads/2021/09/tk-logo-034752.png"
                  alt="img"
                />
              </figure>
              <form>
                <div class="field">
                  <div class="control">
                    <b-field label="Email" type="is-info">
                      <b-input
                        v-model="auth.email"
                        type="email"
                        id="email"
                        maxlength="30"
                      >
                      </b-input>
                    </b-field>
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <b-field label="Contraseña">
                      <b-input
                        type="password"
                        v-model="auth.password"
                        id="password"
                        password-reveal
                      >
                      </b-input>
                    </b-field>
                  </div>
                </div>
                <button
                  type="submit"
                  :disabled="processing"
                  @click="login"
                  class="button is-info"
                >
                  {{ processing ? "Espera un momento" : "Entrar" }}
                </button>
                <br />
              </form>
            </div>
            <p class="has-text-grey">
              <label
                >¿Aún no tienes tu cuenta?
                <router-link :to="{ name: 'register' }"
                  >¡Registrate aquí!</router-link
                ></label
              >
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import { mapActions } from "vuex";
import AppNavbar from "../components/Navbar";
import Messages from "../core/Messages";
export default {
  name: "login",
  components: { AppNavbar },
  data() {
    return {
      auth: {
        email: "",
        password: "",
      },
      processing: false,
    };
  },
  methods: {
    ...mapActions({
      signIn: "auth/login",
    }),
    async login() {
      this.processing = true;
      await axios.get("/sanctum/csrf-cookie");
      await axios
        .post("/api/login", this.auth)
        .then(({ data }) => {
          this.signIn();
          this.$router.replace({name: 'home'})
        })
        .catch(({ response: { data } }) => {
            Messages.showErrorMessage(data.message);
        })
        .finally(() => {
          this.processing = false;
        });
    },
  },
};
</script>