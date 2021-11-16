<template>
  <div>
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li
          v-for="(breadcrumb, id) in breadcrumbList"
          :key="id"
          @click="routeTo(id)"
          :class="{ linked: !!breadcrumb.link }"
        >
          {{ breadcrumb.name }}
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Breadcrumb",
  data() {
    return {
      breadcrumbList: [],
    };
  },
  mounted() {
    this.updateList();
  },
  watch: {
    $route() {
      this.updateList();
    },
  },
  methods: {
    routeTo(routeTo) {
      if (this.breadcrumbList[routeTo].link)
        this.$router.push(this.breadcrumbList[routeTo].link);
    },
    updateList() {
      this.breadcrumbList = this.$route.meta.breadcrumb;
    },
  },
};
</script>

