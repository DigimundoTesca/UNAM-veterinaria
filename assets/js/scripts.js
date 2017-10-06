$(document).ready(function() {
  $("#mailitbtn").on("click", function(e) {
      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
      let form = $('#mailit');
      swal({
        title: "Su pregunta será enviada!",
        text: "Espere pronto una respuesta",
        type: "success",
        showCancelButton: false,
        confirmButtonText: "Entendido",
        confirmButtonClass: 'btn btn-success'
      }).then(function () {
          // sendmail();
        });
    });

  // function sendmail() {
  //   $("form.container").submit(function(e) {
  //     e.preventDefault();
  //     var data = $(this).serialize();
  //     var url = $(this).attr('action');
  //     var form = $(this);
  //     $.post(url,data,function(data){
  //       $(.result).html(data.result+"Watchlist");
  //     });
  //     return false;
  //   });
  // }


});

