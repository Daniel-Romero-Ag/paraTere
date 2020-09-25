(function() {
    // "use strict";

    document.addEventListener('DOMContentLoaded', function() {
        var totalToPay;
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
        var pase_dia = document.getElementById('pase_dia');
        var pase_dos_dias = document.getElementById('pase_dos_dias');
        var pase_completo = document.getElementById('pase_completo');
        var calcular = document.getElementById("calcular");
        var errorDiv = document.getElementById("error");
        var regalo = document.getElementById("regalo");
        var etiquetas = document.getElementById("etiquetas");
        var camisas = document.getElementById("camisa_evento")
        var botonRegistro = document.getElementById("btnRegistro");
        var lista_productos = document.getElementById("lista-productos");
        var Suma = document.getElementById("suma_total");
        var mensajeNombre = "";
        var mensajeApellido = "";
        var mensajeMail = "";
        var total = document.getElementById("total");
        $("#btnRegistro").addClass("deshabilitado");
        botonRegistro.disabled = true;

        $(".resumen-evento li:nth-child(1) p").animateNumber({ number: 8 }, 1200);
        $(".resumen-evento li:nth-child(2) p").animateNumber({ number: 12 }, 1200);
        $(".resumen-evento li:nth-child(3) p").animateNumber({ number: 9 }, 1200);
        $(".resumen-evento li:nth-child(4) p").animateNumber({ number: 13 }, 1200);
        $(".menu-programa a:first").addClass("flecha");
        calcular.addEventListener('click', getTotalToPay);
        pase_dia.addEventListener('blur', mostrarDias);
        pase_dos_dias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarDatos);
        apellido.addEventListener('blur', validarDatos);
        email.addEventListener('blur', validarDatos);
        email.addEventListener('blur', validarArroba);


        function validarDatos() {

            mensajeNombre = "";
            mensajeApellido = "";
            mensajeMail = "";
            if (nombre.value == 0) {
                nombre.style.border = "1px solid red";
                mensajeNombre = "<p>Este campo es Obligatorio</p>";
            } else {
                nombre.style.border = "2px solid #c8c8c8";
            }
            if (apellido.value == 0) {
                apellido.style.border = "1px solid red";
                mensajeApellido = "<p>Este campo es Obligatorio</p>";
            } else {
                apellido.style.border = "2px solid #c8c8c8";
            }
            if (email.value == 0) {
                email.style.border = "1px solid red";
                mensajeMail = "<p>Este campo es Obligatorio</p>";
            } else {
                email.style.border = "2px solid #c8c8c8";
            }
            errorDiv.innerHTML = mensajeNombre + mensajeApellido + mensajeMail;
            if (errorDiv.innerHTML != "") {
                errorDiv.style.display = "block";
                errorDiv.style.border = "2px solid red";
            }
        }



        function validarArroba() {
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = "none";
                this.style.border = "2px solid #c8c8c8";
            } else {
                this.style.border = "1px solid red";
                errorDiv.style.display = "block";
                errorDiv.style.border = "2px solid red";
                errorDiv.innerHTML += "<p>Falta un @</p>"
            }
        }


        function mostrarDias() {
            var ticketDay = pase_dia.value,
                ticket2Days = pase_dos_dias.value,
                ticketComplete = pase_completo.value,
                dias = ["viernes", "sabado", "domingo"];
            for (dia of dias) {
                document.getElementById(dia).style.display = "none";
            }
            dias = [];

            if (ticketComplete > 0) {
                dias = ["viernes", "sabado", "domingo"];
            } else if (ticket2Days > 0) {
                dias = ["viernes", "sabado"];
            } else if (ticketDay > 0) {
                dias = ["viernes"];
            } else {
                dia = [];
            }
            for (dia of dias) {
                document.getElementById(dia).style.display = "block";
            }
        }

        function getTotalToPay(event) {
            event.preventDefault();
            if (giftSelected()) {
                $("#btnRegistro").removeClass("deshabilitado");
                botonRegistro.disabled = false;


                totalToPay();
                total.value = totalToPay;

            } else {
                alert("Seleccione un regalo");
                regalo.focus();
            }
        }

        function giftSelected() {
            return regalo.value != '';
        }



        function totalToPay() {
            var ticketDay = pase_dia.value,
                ticket2Days = pase_dos_dias.value,
                ticketComplete = pase_completo.value,
                cantCamisas = camisas.value,
                cantEtiquetas = etiquetas.value;

            totalToPay = (ticketDay * 30) + (ticket2Days * 40) + (ticketComplete * 50) + (cantEtiquetas * 2) + (cantCamisas * 10 * 0.93);
            console.log(totalToPay);
            console.log(cantCamisas);
            console.log(cantEtiquetas);
            var resumen = [];
            if (ticketDay > 0) {
                resumen.push(ticketDay + " pases por 1 dia");
            }
            if (ticket2Days > 0) {
                resumen.push(ticket2Days + " pases por 2 dias");
            }
            if (ticketComplete > 0) {
                resumen.push(ticketComplete + " pases completos");
            }
            if (cantCamisas > 0) {
                resumen.push(cantCamisas + " camisas");
            }
            if (cantEtiquetas > 0) {
                resumen.push(cantEtiquetas + " etiquetas");
            }



            lista_productos.innerHTML = "";


            for (let i = 0; i < resumen.length; i++) {
                lista_productos.innerHTML += "<p>" + resumen[i] + "</p>";

            }
            Suma.style.display = "block";
            Suma.innerHTML = totalToPay.toFixed(2);
        }
    })
})();
$(function() {
    $(".menu-programa a").on("click", function() {
        $(".ocultar").hide();
        var infoDeseada = $(this).attr("href");
        $(".menu-programa a").removeClass("flecha");
        $(infoDeseada).show();
        $(this).addClass("flecha")
        return false;
    });
    $(".contador-faltante").countdown("2020/07/21 12:00:00", function(event) {
        $(".dias").html(event.strftime("%D"));
        $(".horas").html(event.strftime("%H"));
        $(".minutos").html(event.strftime("%M"));
        $(".segundos").html(event.strftime("%S"));
    })
    $(".nombre-sitio").lettering();


})
$(function() {

    console.log("hola");
})
$(function() {
    $(".menu-movil").on("click", function() {
        // var estado = ($(".navegacion-principal").css("display"));
        // if (estado == "none") {
        //     $(".navegacion-principal").show();
        // } else {
        //     $(".navegacion-principal").hide();
        // }
        $(".navegacion-principal").slideToggle();
    });
});
$(function() {
    var windowHeight = $(window).height();
    // console.log(windowHeight);
    var alturaHero = $(".hero").height();
    console.log(alturaHero);
    var navHeight = $(".barra").innerHeight();
    // console.log(navHeight);
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        // console.log(scroll);
        if (alturaHero < scroll) {
            $(".barra").addClass("arriba")
            $("body").css({ "margin-top": navHeight + "px" });

        } else {
            $(".barra").removeClass("arriba");
            $("body").css({ "margin-top": "0" });
        }
    })
})
$(function() {
    $(".menu-movil").on("click", function() {
        // var estado = ($(".navegacion-principal").css("display"));
        // if (estado == "none") {
        //     $(".navegacion-principal").show();
        // } else {
        //     $(".navegacion-principal").hide();
        // }
        $(".navegacion-principal").slideToggle();
    });
});
$(function() {
    var map = L.map('mapa').setView([51.505, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();

});
$(function() {
    $("body.conferencias .navegacion-principal a:nth-child(1)").addClass("activo");
    $("body.calendario .navegacion-principal a:nth-child(2)").addClass("activo");
    $("body.invitados .navegacion-principal a:nth-child(3)").addClass("activo");
    $("body.registro .navegacion-principal a:nth-child(4)").addClass("activo");
});
$(function() {
    if ($("body.index") || $("body.invitados")) {
        $(".invitado-info").colorbox({ inline: true, width: "50%" });
    }
});