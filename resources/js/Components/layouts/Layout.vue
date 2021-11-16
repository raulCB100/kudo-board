<template>
  <div class="container">
      <breadcrumb></breadcrumb>
      <router-view></router-view>
  </div>
</template>

<script>
import { mapActions } from "vuex";
import Breadcrumb from '../Breadcrumb.vue';
export default {
  components: { Breadcrumb },
  name: "layout",
  data() {
    return {
      user: this.$store.state.auth.user,
    };
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