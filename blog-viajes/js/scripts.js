//Animate on scroll
jQuery(document).ready($ => {
  new WOW().init();
});



// Validar Formulario //

jQuery(document).ready(function ($) {
  'use strict';
  window.addEventListener('load', function () {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName('needs-validation');
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          event.preventDefault();
          if (form.checkValidity() === false) {
            event.stopPropagation();
          } else {

            //obtener valores del formulario
            var nombre = document.getElementById('nombre').value,
              apellido = document.getElementById('apellido').value,
              city = document.getElementById('city').value,
              estate = document.getElementById('estate').value,
              email = document.getElementById('mail').value,
              phoneNum = document.getElementById('phoneNum').value,
              mensaje = document.getElementById('mensaje').value;
            console.log(nombre);
            console.log(apellido);
            console.log(city);
            console.log(estate);
            console.log(mail);
            console.log(phoneNum);
            console.log(mensaje);

            // ejecutar ajax
            var xhr = new XMLHttpRequest();
            // ABRIR CONEXION//
            xhr.open('POST', 'http://blogviajes.local/inc/enviar.php', true);

            // Formulario Header
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            // Enviar estadp
            xhr.onload = function () {
              if (xhr.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
                if (respuesta.respuesta === true) {
                  var div = document.createElement('div')
                  div.appendChild(document.createTextNode('Se envió correctamente'));
                  div.classList.add('alert', 'alert-success', 'mt-4', 'text-center');
                  document.querySelector('form').appendChild(div);
                }
              }
            }
            //Enviar el request
            xhr.send('nombre=' + nombre + '&apellido=' + apellido + '&city=' + city + '&estate=' + estate + '&email=' + email + '&phoneNum=' + phoneNum + '&mensaje=' + mensaje);
          }
          form.classList.add('was-validated');
        }, false);
      });
    },
    false);
})();


// Activate Smooth Scroll//



//Smooth scrolling
var $j = jQuery.noConflict();
jQuery(document).ready(function () {
  $j('a.smooth-scroll').click(function (event) {
    event.preventDefault();

    //get/return id #about #contact
    var section = $j(this).attr("href");
    $j('html, body').animate({
      scrollTop: $j(section).offset().top - 55
    }, '1450', 'easeInOutExpo');

  });

});

// Lucklaend-nav-effect color to transparent //
var $j = jQuery.noConflict();
jQuery(function () {
  jQuery(window).scroll(function () {
    if ($j(this).scrollTop() < 50) {
      //hide nav
      jQuery('nav').removeClass('lucklaend-nav');

    } else {
      // show nav
      jQuery('nav').addClass('lucklaend-nav');

    }
  });
});

// to close movile menu on click//
var $j = jQuery.noConflict();
jQuery(function () {
  $j(".navbar-collapse ul li a").on("click touch", function () {
    $j(".navbar-toggler").click();
  });

});

// Activate Owl Carousel- Clientes //
jQuery(function () {
  jQuery('#clientes-list').owlCarousel({
    items: 4,
    autoplay: true,
    smartSpeed: 700,
    loop: true,
    autoplayHoverPause: true
  });
})