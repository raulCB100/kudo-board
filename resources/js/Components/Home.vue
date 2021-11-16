<template>
  <div class="container">
    <h1>
      Bienvenido: <b>{{ user.email }}</b>
    </h1>
    <Add models="board"></Add>
    <div class="row">
      <div class="columns is-multiline">
        <div
          class="column is-12-tablet is-6-desktop is-3-widescreen"
          v-for="board in boards"
          :key="board.id"
        >
          <router-link :to="`/board/${board.id}`">
            <Kudo :dt="board"></Kudo>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";
import Kudo from "./Kudo.vue";
import Add from "./Add.vue";
export default {
  components: { Kudo, Add },
  name: "home",
  data() {
    return {
      boards: [],
      user: this.$store.state.auth.user,
    };
  },
  created() {
      const loading = this.$buefy.loading.open();
    axios.get("/api/board").then(({ data }) => {
      this.boards = data;
      loading.close();
    });
  },
  methods: {
    ...mapActions({
      signOut: "auth/logout",
    }),
    async logout() {
      await axios.post("/logout").then(({ data }) => {
        this.signOut();
        this.$router.push({ name: "login" });
      });
    },
  },
};
</script>