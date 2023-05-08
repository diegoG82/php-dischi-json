<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Json</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- CSS custom -->
    <link rel="stylesheet" href="./css/style.css" />
</head>

</head>

<body>
    <div id="app">

        <div class="header">
            <div class="navigation"><img src="./img/logo.png" alt=""></div>
        </div>


        <div class="container mt-4">
            <div class="row row-cols-3">

                <div class="col" v-for="(album, index) in albums" :key="index" @click="showDetails(index)">

                    <div class="card d-flex text-center align-items-center mb-4 p-4">
                        <img :src="album.poster" alt="">
                        <h4 class="title mt-4">{{album.title}}</h4>
                        <p class="author">{{album.author}}</p>
                        <p class="album-year">{{album.year}}</p>
                        <p class="album_genre">{{album.gen}}</p>
                    </div>
                </div>

            </div>
            <div class="discstats text-center" v-if="selectedAlbum"  @click="showDetails(index)" >

                <img class="mt-4" :src="selectedAlbum.poster" alt="">
                <h4 class="title mt-4" >{{selectedAlbum.title}}</h4>
                <p> {{selectedAlbum.author}}</p>
                <p> {{selectedAlbum.year}}</p>
                
            </div>
        </div>

    </div>



    <script src="js/script.js"></script>
</body>

</html>