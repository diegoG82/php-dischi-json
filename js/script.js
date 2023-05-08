const {createApp} = Vue;

createApp({
    data() {
        return {
       albums: [],
       selectedAlbum: null
       
    };
},
// Faccio la chiamata axios all'apertura della pagina
mounted(){
    axios
    .get("http://localhost:8888/boolean/php-dischi-json/server.php")
    .then((resp) => {
       this.albums = resp.data.results;
    });
},



  methods: {
    showDetails(index) {
      if (this.selectedAlbum === this.albums[index]) {
        // ripulisco il campo 
        this.selectedAlbum = null; 
      } else {
        axios
          .get("http://localhost:8888/boolean/php-dischi-json/server.php")
          .then((resp) => {
            this.selectedAlbum = resp.data.results[index];
          });
      }
    },

  },

 

  
  


}).mount("#app");