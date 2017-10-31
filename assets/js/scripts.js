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
      // Simple login form validation
      var x = document.forms["myForm"]["usuarioSuper"].value;
      var y = document.forms["myForm"]["PasswordSuper"].value;
      if (x != "Tester" && y != "tester" ) {
        swal(
            'Error',
            'Usuario o contraseña incorrectos!',
            'error'
            )
        return false;
    }
      swal({
        title: "¡Bienvenido!",
        text: "Generemos conocimiento",
        type: "success",
        confirmButtonText: "Vamos",
        confirmButtonClass: 'btn btn-success'
        }).then(function () {
            $(".logIn").css('display', 'none');
            $(".newQuestion").css("display","inline");
            window.location.href = 'user.html';
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
    // Show chat on user page
    $(document).ready(function() {
        var footerscroll = document.getElementById('footeruser');
        var chatmodule = document.getElementById('chatModule');
        $('#showChat').on('click', function(event) {
            event.preventDefault();
            chatmodule.classList.toggle('activeChat');
        });
        $('.chatClose').on('click', function(event) {
            event.preventDefault();
            chatmodule.classList.toggle('activeChat');
        });
    });


});

