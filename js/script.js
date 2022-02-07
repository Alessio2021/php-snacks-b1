const App = new Vue(
  {
    el: '#app',
    data: {
      cars: [],
      carsFiltered: [],
      marcaArray: 'All',
      colorArray: 'All',
    },
    created() {
      axios.get('http://localhost/php-snacks-b1/server/controller-api.php').then((result) => {
        this.cars = result.data.results;
        this.carsFiltered = this.cars;
      }).catch((error) => { 
        console.log(error); 
      });
    },
    methods: {
      filter() {
        if (this.colorArray != 'all' && this.marcaArray != 'all') {
            this.carsFiltered = this.cars.filter((element) => {
              return element.colore == this.colorArray && element.marca == this.marcaArray;
            });
        } else if (this.colorArray == 'all' && this.marcaArray != 'all') {
            this.carsFiltered = this.cars.filter((element) => {
                return element.marca == this.marcaArray;
            });
        } else if (this.colorArray != 'all' && this.marcaArray == 'all') {
            this.carsFiltered = this.cars.filter((element) => {
                console.log(this.colorArray);
                return element.colore == this.colorArray;
            });
        } else {
            this.carsFiltered = this.cars;
        }
      }
    },
  }
);