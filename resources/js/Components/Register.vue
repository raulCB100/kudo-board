<template>
  <div>
    <section class="hero has-background-white-bis is-fullheight">
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="column is-4 is-offset-4">
            <h3 class="title has-text-black">Registrarse</h3>
            <hr class="login-hr" />
            <p class="subtitle has-text-black">
              Por favor ingresa tus datos para crear una cuenta.
            </p>
            <div class="box top-margin-5">
              <figure class="avatar">
                <img
                  src="https://www.tektonlabs.com/wp-content/uploads/2021/09/tk-logo-034752.png"
                  alt="img"
                />
              </figure>
              <form>
                <!-- <div class="field">
                  <div class="control">
                    <b-field label="Nombre" type="is-info">
                      <b-input
                        v-model="user.name"
                        type="text"
                        id="name"
                        maxlength="50"
                      >
                      </b-input>
                    </b-field>
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <b-field label="Email" type="is-info">
                      <b-input
                        v-model="user.email"
                        type="text"
                        id="email"
                        maxlength="30"
                      >
                      </b-input>
                    </b-field>
                  </div>
                </div> -->
                <div class="field">
                  <div class="">
                    <b-field label="Nombre" type="is-info">
                      <b-input type="text" v-model="user.name" id="name">
                      </b-input>
                    </b-field>
                  </div>
                </div>

                <div class="field">
                  <div class="">
                    <b-field label="Email" type="is-info">
                      <b-input type="email" v-model="user.email" id="email">
                      </b-input>
                    </b-field>
                  </div>
                </div>
                <div class="field">
                  <div class="">
                    <b-field label="Seleccionar fecha de nacimiento" type="is-info">
                      <b-datepicker
                        v-model="user.birthday"
                        placeholder="Escribe o selecciona una fecha..."
                        icon="calendar-today"
                        editable
                      >
                      </b-datepicker>
                    </b-field>
                  </div>
                </div>

                <div class="field">
                  <div class="">
                    <b-field label="Contraseña" type="is-info">
                      <b-input
                        type="password"
                        v-model="user.password"
                        id="password"
                        password-reveal
                      >
                      </b-input>
                    </b-field>
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <b-field label="Confirmar contraseña" type="is-info">
                      <b-input
                        type="password"
                        v-model="user.password_confirmation"
                        id="password_confirmation"
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
                  {{ processing ? "Espera un momento" : "Registrar" }}
                </button>
                <br />
              </form>
            </div>
            <p class="has-text-grey">
              <label
                >¿Ya tienes cuenta?
                <router-link :to="{ name: 'login' }"
                  >¡Ingresa aquí!</router-link
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
import Messages from "../core/Messages";
export default {
  name: "register",
  data() {
    return {
      user: {
        name: "",
        email: "",
        birthday: "",
        password: "",
        password_confirmation: "",
      },
      processing: false,
    };
  },
  methods: {
    ...mapActions({
      signIn: "auth/login",
    }),
    async register() {
      this.processing = true;
      await axios
        .post("/register", this.user)
        .then((response) => {
          this.signIn();
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