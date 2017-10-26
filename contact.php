<?php 
  $encoding = "utf-8";
// Upload images files
    $uploaddir = '/var/www/uploads/'; //Or some other temporary location
    $myFile = $_FILES['images'];
    $fileCount = count($myFile["name"]);
    for ($i = 0; $i < $fileCount; $i++) {
      $uploadfile = $uploaddir . basename($_FILES['images']['name'][$i]);
      if (!move_uploaded_file($_FILES['images']['tmp_name'][$i], $uploadfile)) {
        //If there is a potential file attack, stop processing files.
        break;
      }
      $attachments[$i] = $uploadfile;
    }
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
    'softwaremanager@digimundo.com.mx',
    'itzli2000@msn.com',
  );
  $to = implode(',', $recipients);
  $from_mailto = $_POST['itzli2000@msn.com'];
  $patient_animal = $_POST['animal'];
  $patient_age = $_POST['Edad'];
  $patient_weight = $_POST['Peso'];
  $patient_gender = $_POST['Sexo'];
  $patient_physiological = $_POST['Estado_fisiologico'];
  $patient_consult = $_POST['Consulta'];
  $patient_fc = $_POST['FC'];
  $patient_fr = $_POST['FR'];
  $patient_temp = $_POST['Temp'];
  $patient_ruminal = $_POST['MovRum'];
  $patient_clinical = $_POST['Clinica'];
  $patient_quickQ = $_POST['pregunta'];
  $patient_question = $_POST['pregLarga'];
  $patient_capilar = $_POST['Capilar'];
  $patient_mucosa = $_POST['Mucosas'];
  $patient_nodo = $_POST['Linfonodo'];

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
  <h4>Datos del espécimen:</h4>
  <p>Espécimen: '.$patient_animal.'<br>Edad: ' .$patient_age. ' años.<br>Peso: '.$patient_weight.' kg.<br> Sexo: '.$patient_gender.' <br>Estado fisiológico: '.$patient_physiological. '<br>Motivo de la consulta:' .$patient_consult. ' <br>Frecuencia cardiaca: '. $patient_fc .' lpm.<br>Frecuencia respiratoria: '. $patient_fr .' rpm.<br>Temperatura: '. $patient_temp . ' °C<br>Tiempo de llenado capilar: ' .$patient_capilar. '<br>Coloración de mucosas: ' .$patient_mucosa. '<br>Linfonodos: ' .$patient_nodo. ' <br>Movimientos ruminales: '. $patient_ruminal .' <br>Historia clínica: <br><br>'. $patient_clinical .' </p>
  </body>
  </html>
  ';

// To send HTML mail, the Content-type header must be set
// Mail header
  $header = "Content-type: text/html; charset=".$encoding." \r\n";
  $header .= "De: Pet Gurú ".$from_mailto." \r\n";
  $header .= "MIME-Version: 1.0 \r\n";
  $header .= "Content-Transfer-Encoding: 8bit \r\n";
  $header .= "Fecha: ".date("r (T)")." \r\n";
  $header .= iconv_mime_encode("Asunto", $patient_quickQ, $subject_preferences);

// Mail it
  mail($to, $subject, $message, $header, $attachments);

// Redirect
  header('Location: index.html');
?>