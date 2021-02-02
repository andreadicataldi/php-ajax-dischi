let app = new Vue({
  el: "#app",
  data: {
    albums: [],
    activeGenre: "all",
  },
  methods: {},
  mounted() {
    axios
      .get("https://flynn.boolean.careers/exercises/api/array/music")
      .then((response) => {
        this.albums = response.data.response;
      })
      .catch((error) => {
        alert("Errore" + error);
      });
  },
});
