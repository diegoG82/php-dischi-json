const {createApp} = Vue;

createApp({
    data() {
        return {
       albums: [],
       
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

}).mount("#app");