<?php 
if(isset($_POST['submit'])){
    $encoding = "utf-8";
// Preferences for Subject field
    $subject_preferences = array(
        "input-charset" => $encoding,
        "output-charset" => $encoding,
        "line-length" => 76,
        "line-break-chars" => "\r\n"
        );

// Multiple recipients
    $to = 'itzli2000@msn.com';
    $from_name = $_POST['name'];
    $from_lastname = $_POST['lastname'];
    $from_phone = $_POST['phone'];
    $from_mail = $_POST['email'];
    $from_message = $_POST['message'];

// Subject
    $subject = 'Contacto desde mi página';

// Message
    $message = '
    <html>
    <head>
      <title>Mensaje.</title>
  </head>
  <body>
      <h2>Mensaje enviado desde página personal.</h2>
      <h4>'.$from_name.' '.$from_lastname.' <br>Correo: '.$from_mail.' <br>Teléfono: '. $from_phone .' <br>Escribió lo siguiente:</h4>
      <p> Mensaje: '. $from_message .'</p>
  </body>
  </html>
  ';

// To send HTML mail, the Content-type header must be set
// Mail header
  $header = "Content-type: text/html; charset=".$encoding." \r\n";
  $header .= "De: ".$from_name.$from_lastname." <".$from_mail."> \r\n";
  $header .= "MIME-Version: 1.0 \r\n";
  $header .= "Content-Transfer-Encoding: 8bit \r\n";
  $header .= "Fecha: ".date("r (T)")." \r\n";
  $header .= iconv_mime_encode("Asunto", $mail_subject, $subject_preferences);

// Mail it
  mail($to, $subject, $message, $header);

// Redirect
  header('Location: index.html');
}
?>