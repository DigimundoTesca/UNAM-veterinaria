<?php
if(isset($_POST['submit']))
{
  $encoding = "utf-8";
// Preferences for Subject field
  $subject_preferences = array(
    "input-charset" => $encoding,
    "output-charset" => $encoding,
    "line-length" => 76,
    "line-break-chars" => "\r\n"
  );

// Multiple recipients
  $recipients = array(
    'ceo@digimundo.com.mx',
    'frontend@digimundo.com.mx',
    'itzli2000@msn.com',
  );
  // $to = implode(',', $recipients);
  $from_mailto = $_POST['itzli2000@msn.com'];
  $patient_animal = $_POST['animal'];
  $patient_weight = $_POST['Peso'];
  $patient_gender = $_POST['Sexo'];
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
  <p> Mensaje: <br>'. $patient_question .'</p>
  <h4>Datos del animal:</h4>
  <p>Espécimen: '.$patient_animal.'<br>Peso: '.$patient_weight.' <br> Sexo: '.$patient_gender.' <br>Estado fisiológico: '.$patient_physiological.' <br>Frecuencia cardiaca: '. $patient_fc .' <br>Frecuencia respiratoria: '. $patient_fr .' <br>Temperatura: '. $patient_temp .' <br>Movimientos ruminales: '. $patient_ruminal .' <br>Historia clínica: '. $patient_clinical .' </p>
  </body>
  </html>
  ';
        //The form has been submitted, prep a nice thank you message
  $output = '<h1>Thanks for your file and message!</h1>';

        //Deal with the email
  $to = 'itzli2000@msn.com';
  $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
  $filename = $_FILES['file']['name'];

  $boundary =md5(date('r', time())); 

  // To send HTML mail, the Content-type header must be set
  // Mail header
  $header = "From: Pet Gurú\r\nReply-To: softwaremanager@digimundo.com";
  $header .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; charset=".$encoding." boundary=\"_1_$boundary\"";
  $header .= "MIME-Version: 1.0 \r\n";
  $header .= "Content-Transfer-Encoding: 8bit \r\n";
  $header .= "Fecha: ".date("r (T)")." \r\n";
  $header .= iconv_mime_encode("Asunto", $patient_quickQ, $subject_preferences);

  $message="This is a multi-part message in MIME format.

  --_1_$boundary
  Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

  --_2_$boundary
  Content-Type: text/plain; charset=\"iso-8859-1\"
  Content-Transfer-Encoding: 7bit

  $message

  --_2_$boundary--
  --_1_$boundary
  Content-Type: application/octet-stream; name=\"$filename\" 
  Content-Transfer-Encoding: base64 
  Content-Disposition: attachment 

  $attachment
  --_1_$boundary--";

  // Mail it
  mail($to, $subject, $message, $header);

  // Redirect
  header('Location: foro.html');
}
?>