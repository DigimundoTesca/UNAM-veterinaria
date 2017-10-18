$(document).ready(function() {
    // Forms handlers
    $(".mailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.vacaquest.submit();
        });
    });
    $(".caballomailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.caballoquest.submit();
        });
    });
    $(".ovejamailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.ovejaquest.submit();
        });
    });
    $(".cerdomailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.cerdoquest.submit();
        });
    });
    $(".conejomailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.conejoquest.submit();
        });
    });
    $(".gallomailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.galloquest.submit();
        });
    });
    $(".avemailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.avequest.submit();
        });
    });
    $(".perromailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.perroquest.submit();
        });
    });
    $(".gatomailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.gatoquest.submit();
        });
    });
    $(".faunamailitbtn").on("click", function(e) {
      e.preventDefault();
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          document.faunaquest.submit();
        });
    });
    // Login form handler
    $( "#LogInOut" ).click(function(e) {
      e.preventDefault();
      swal({
        title: "¡Felicidades!",
        text: "Bienvenido Juan Perez",
        type: "success",
        confirmButtonText: "Vamos",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
          $(".newQuestion").css("visibility","visible");
        });
    });
    // Sinlge Question gallery
    jQuery(document).ready(function(){ 
        jQuery("#gallery").unitegallery(); 
    }); 
    // Animal icons popover
    $(document).ready(function(){
        if (screen.width>=1100) {
            $('[data-toggle="popover"]').popover();   
        }
    });
});

