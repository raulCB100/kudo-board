<template>
  <div class="container">
    <h1>
      Board: <b>{{ board.title }}</b>
    </h1>
    <add models="kudo"></add>
    <div class="row">
      <div class="columns is-multiline">
        <div
          class="column is-12-tablet is-6-desktop is-3-widescreen"
          v-for="kudo in kudos"
          :key="kudo.id"
        >
          <Kudo :dt="kudo" :type='kudo'></Kudo>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Kudo from "./Kudo.vue";
import Add from "./Add.vue";
export default {
  components: { Kudo, Add },
  name: "Board",
  data() {
    return {
      kudos: [],
      board: [],
    };
  },
  created() {
      const loading = this.$buefy.loading.open();
      const id = this.$route.params.boardId;
      console.log(id);
    axios.get(`/api/board/${id}`).then(({ data }) => {
      this.kudos = data.kudos;
      this.board = data.board;
      loading.close();
    });
  },
  methods: {},
};
</script>