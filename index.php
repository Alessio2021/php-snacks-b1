<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <form action="index.php" method="GET">
            <label for="">Seleziona marca auto</label>
            <select @change="filter" v-model="marcaArray" name="type" id="type">
                <option value="all">All</option>
                <option value="Ford">Ford</option>
                <option value="Toyota">Toyota</option>
                <option value="Fiat">Fiat</option>
            </select>
        </form>
        <form action="index.php" method="GET">
            <label for="">Seleziona colore</label>
            <select @change="filter" v-model="colorArray" name="color" id="color">
                <option value="all">All</option>
                <option value="Bianco">Bianco</option>
                <option value="Rosso">Rosso</option>
                <option value="Blu">Blu</option>
                <option value="Grigio">Grigio</option>
            </select>
        </form>
        <div class="d-flex">
            <div v-for="car in carsFiltered" class="container">
                <div v-for="(element, key) in car" class="">
                    <div v-if="key == 'immagine'">
                        <img style="order: -1" :src="element" />
                    </div>
                    <div v-else>
                        <h3>{{element}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>