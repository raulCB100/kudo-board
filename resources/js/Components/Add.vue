<template>
  <div>
    <div class="buttons">
      <b-button @click="cardModal" type="is-primary" expanded
        >Agregar nuevo {{ model }}</b-button
      >
    </div>
      <b-modal v-model="isModalActive" >
      <div class="card">
        <div class="card-content">
          <div class="control">
              <b-field label="Titulo">
              <b-input
                type="text"
                v-model="title"
                placeholder="Titulo"
                required
              >
              </b-input>
            </b-field>
            <b-field label="Descripción">
              <b-input
                type="text"
                v-model="description"
                placeholder="Descripción"
                required
              >
              </b-input>
            </b-field>
             <b-field label="Imagen">
              <b-input
                type="text"
                v-model="image"
                placeholder="Imagén"
                required
              >
              </b-input>
            </b-field>
            <footer class="card-footer">
              <button
                @click="isModalActive = false"
                class="card-footer-item button is-light"
                >Cancelar</button
              >
              <button
                class="card-footer-item button is-primary"
                >Guardar</button
              >
            </footer>
          </div>
        </div>
      </div>
    </b-modal>
  </div>
</template>
<script>
export default {
  name: "Add",
  props: {
    models: {
      required: true,
    },
  },
  data() {
    return {
      model: "",
      isModalActive: false,
      title:'',
      image:'',
      description:'',
      board_id:'',
      created_by:'',
    };
  },
  created() {
    this.model = this.models;
  },
  methods: {
    create(data) {
      let url = this.model === "board" ? "api/board" : "api/kudo";
      axios.post(url, data).then(({ data }) => {
        this.kudos = data.kudos;
        this.board = data.board;
        loading.close();
      });
    },
    cardModal() {
        this.isModalActive = true;
    },
  },
};
</script>