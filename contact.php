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
    $patient_weight = $_POST['peso'];
    $patient_gender = $_POST['sexo'];
    $patient_physiological = $_POST['Estado_fisiologico'];
    $patient_fc = $_POST['FC'];
    $patient_fr = $_POST['FR'];
    $patient_temp = $_POST['Temp'];
    $patient_ruminal = $_POST['MovRum'];
    $patient_clinical = $_POST['Clinica'];
    $patient_quickQ = $_POST['pregunta'];
    $patient_question = $_POST['pregLarga'];

// Subject
    $subject = 'Se ha creado una nueva pregunta';

// Message
    $message = '
    <html>
    <head>
      <title>Nueva pregunta.</title>
  </head>
  <body>
      <h2>'.$patient_quickQ.'</h2>
      <p> Mensaje: '. $patient_question .'</p>
      <h4>Datos del animal:</h4>
      <p>Peso: '.$patient_weight.' <br> Sexo: '.$patient_gender.' <br>Estado fisiológico: '.$patient_physiological.' <br>Frecuencia cardiaca: '. $patient_fc .' <br>Frecuencia respiratoria: '. $patient_fr .' <br>Temperatura: '. $patient_temp .' <br>Movimientos ruminales: '. $patient_ruminal .' <br>Historia clínica: '. $patient_clinical .' </p>
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