<template>
  <div class="card">
    <div class="card-image">
      <figure class="image is-4by3">
        <img :src="data.image" alt="kudo image" />
      </figure>
    </div>
    <div class="card-content">
      <div class="media">
        <div class="media-left">
          <figure class="image is-48x48">
            <img :src="data.image" alt="kudo image" />
          </figure>
        </div>
        <div class="media-content">
          <p class="title is-4" v-if="type">Kudo para:</p>
          <p class="title is-4" v-else>Board para:</p>
          <p class="subtitle is-6">{{ data.title }}</p>
        </div>
      </div>

      <div class="content">{{ data.description }}</div>
    </div>

    <footer class="card-footer">
        <b-button type="is-danger" expanded>Eliminar</b-button>
    </footer>
  </div>
</template>

<script>
export default {
  name: "Kudo",
  props: {
    dt: {
      type: Object,
      required: true,
    },
    type: {
      required: false,
    },
  },
  data() {
    return {
      data: [],
    };
  },
  created() {
    this.data = this.dt;
  },
};
</script>

<style>
</style>