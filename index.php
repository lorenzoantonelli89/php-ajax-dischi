<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <title>Esercizi PHP Dischi</title>
    <!-- link jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- link vueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- axio vuejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- link my js -->
    <script src="js/main.js"></script>
    <!-- link my css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="container-option">
                    <select name="changeGenre" v-model="selectGenre" @change="filteredMusic">
                        <!-- <option selected value>All</option> -->
                        <option value="All">All</option>
                        <option :value="option" v-for="option in genres">
                            {{option}}
                        </option>
                    </select>
                </div>
                <div id="container-musics">
                    <div class="card-music" v-for="music in orderedMusic">
                        <img :src="music.poster" alt="">
                        <h1 class="title">
                            {{music.title}}
                        </h1>
                        <h3 class="author">
                            {{music.author}}
                        </h3>
                        <div class="container-info-music">
                            <h4>
                                {{music.genre}}
                            </h4>
                            <h4>
                                {{music.year}}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>