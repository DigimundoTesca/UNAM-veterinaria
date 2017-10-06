$(document).ready(function() {
  console.log('oliwis');

  /**
   * Shows a Sweet alert meanwhile the loads the page
   */
   function confirm() {
    swal({
      title: "Menú cargado!",
      text: "Disfruta tus alimentos!",
      type: "success",
      timer: 2000,
      showConfirmButton: false
    }).then(
    function(){},
    function(dismiss){}
    );
    setTimeout(2100);
  }
});