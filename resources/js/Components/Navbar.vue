<template>
  <nav
    class="navbar has-background-white-bis"
    role="navigation"
    aria-label="main navigation"
  >
    <div class="navbar-brand">
      <router-link class="navbar-item" :to="{ name: 'home' }">
        <img
          src="https://www.tektonlabs.com/wp-content/uploads/2021/09/tk-logo-034752.png"
          alt="logo"
          width="112"
          height="28"
        />
      </router-link>
      <a
        role="button"
        class="navbar-burger burger"
        aria-label="menu"
        aria-expanded="false"
        data-target="navbarBasicExample"
        @click="toggleNavbar()"
      >
        <span aria-hidden=" true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div
      id="navbarBasicExample"
      class="navbar-menu"
      :class="isActive ? 'is-active' : ''"
    >
      <div class="navbar-start">
        <li href="/home" class="navbar-item" >
          <router-link :to="{ name: 'home' }">Boards</router-link>
        </li>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <router-link class="button is-info" :to="{ name: 'register' }"
              ><strong>Registrarme</strong></router-link
            >
            <router-link class="button is-light" :to="{ name: 'login' }">Iniciar sesión</router-link>
          </div>
        </div>
        <div class="navbar-item has-dropdown is-hoverable" >
          <a class="navbar-link">
            <i class="fa fa-user-circle"></i> &nbsp; ¡Bienvenido(a)!
            <!-- {{ this.authInfo["user"]["name"] }}! -->
          </a>

          <div class="navbar-dropdown" >
            <a class="navbar-item" >
              <i class="fa fa-sign-out-alt"></i> &nbsp; Cerrar sesión
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script type="text/javascript">
export default {
  name: "AppNavbar",
  data() {
    return {
      isActive: false,
    };
  },
  methods: {
    toggleNavbar() {
      this.isActive = !this.isActive;
    },
  },
};
</script>
