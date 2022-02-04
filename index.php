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
        <div class="d-flex">
            <div v-for="car in cars" class="container">
                <img style="order: -1" :src="car.immagine" />
                <h3>{{car.marca}}</h3>
                <h3>{{car.modello}}</h3>
                <h3>{{car.cavalli}}</h3>
                <h3>{{car.immatricolazione}}</h3>
                <h3>{{car.cilindrata}}</h3>
                <h3>{{car.accessori}}</h3>
                <h3>{{car.carburante}}</h3>
            </div>
            <!-- <div v-for="car in cars" class="container">
                <div v-for="element in car" class="">
                    <div v-if="element === 'immagine'">
                        <img style="order: -1" :src="element.immagine" />
                    </div>
                    <div v-else>
                        <h3>{{element}}</h3>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="js/script.js"></script>
</body>

</html>