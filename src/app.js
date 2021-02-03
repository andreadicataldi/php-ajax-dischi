let app = new Vue({
  el: "#app",
  data: {
    albums: [],
    activeGenre: "all",
  },
  methods: {},
  mounted() {
    axios
      .get("dist/db.php")
      .then((response) => {
        this.albums = response.data;
      })
      .catch((error) => {
        alert(error);
      });
  },
});
