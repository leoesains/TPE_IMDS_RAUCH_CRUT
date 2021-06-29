"use strict";

// define la app Vue
let app = new Vue({
    el: "#templateVueStock",
    data: {
        stock: [{ material: "cartón", kilos: 50, carga: '29/6/2021' },
                { material: "plástico", kilos: 12, carga: '27/6/2021' },
                { material: "vidrio", kilos: 7, carga: '15/4/2021' },
                { material: "lata", kilos: 84, carga: '1/3/2021' }
            ],
        columns :["material", "kilos", "carga"]
    },
    filters: {
        capitalize: function (str) {
          return str.charAt(0).toUpperCase() + str.slice(1)
        }
    },
   
});

/* function saludar() {
    let id_podcast = document.querySelector("#id_podcast").value;
    fetch("api/comentarios/" + id_podcast)
    .then(response => response.json())
    .then(comments => {
        app.comments = comments; //asignacion de variable comments para el templates
        calcularPromedio();
    }).catch(error => console.log(error));
} */

function calcularKilosTotales(){
    let total = 0;
    let cargas = app.stock
    cargas.forEach(carga => {
        total += carga.kilos
    });
    document.querySelector("#cantTotal").innerHTML = total;
}

function getComments() {
    let id_podcast = document.querySelector("#id_podcast").value;
    fetch("api/comentarios/" + id_podcast)
    .then(response => response.json())
    .then(comments => {
        app.comments = comments; //asignacion de variable comments para el templates
        calcularPromedio();
    }).catch(error => console.log(error));
}

calcularKilosTotales();

