<?php
  //The form has been submitted, prep a nice thank you message
$output = '<h1>Enviando mensaje!</h1>';

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
$to = implode(',', $recipients);
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
'.$patient_quickQ.'
Mensaje: '. $patient_question .'
Datos del animal:
Especimen: '.$patient_animal.'
Peso: '.$patient_weight.' 
Sexo: '.$patient_gender.' 
Estado fisiologico: '.$patient_physiological.' 
Frecuencia cardiaca: '. $patient_fc .'
Frecuencia respiratoria: '. $patient_fr .' 
Temperatura: '. $patient_temp .' 
Movimientos ruminales: '. $patient_ruminal .' 
Historia clinica: '. $patient_clinical .'
';

        //Deal with the email
$attachment = chunk_split(base64_encode(file_get_contents($_FILES['images']['tmp_name'])));
$filename = $_FILES['images']['name'];

$boundary =md5(date('r', time())); 

  // To send HTML mail, the Content-type header must be set
  // Mail header
$header = "From: Pet Guru\r\nReply-To: softwaremanager@digimundo.com";
$header .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";
// $header .= iconv_mime_encode("Asunto", $patient_quickQ, $subject_preferences);

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
header('Location: index.html');
?>