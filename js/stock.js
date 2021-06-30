"use strict";

// define la app Vue
let app = new Vue({
    el: "#templateVueStock",
    data: {
        stock: [],
        columns :["material", "kilos", "fecha"]
    },
    filters: {
        capitalize: function (str) {
          return str.charAt(0).toUpperCase() + str.slice(1)
        }
    }, 
});

let selectCartonero = document.querySelector('#stockCartonero');
selectCartonero.addEventListener('change', getStockByDNI); // función que se desata al cambiar el select

function getStockByDNI() {
    let dni_cartonero = document.querySelector("#stockCartonero").value;
    let nombre = document.querySelector('#nameCartonero');
    nombre.innerHTML = this.options[this.selectedIndex].text;
    fetch("api/stock/" + dni_cartonero)
    .then(response => response.json())
    .then(stock => { 
        app.stock = stock; //asignacion de variable stock para el templates
        if (stock.length != 0){
            calcularKilosTotales();
        }
    }).catch(error => console.log(error));
}

function calcularKilosTotales(){
    let total = 0;
    let cargas = app.stock
    cargas.forEach(carga => {
        total += parseInt(carga.kilos);
    });
    document.querySelector("#cantTotal").innerHTML = total;
}
