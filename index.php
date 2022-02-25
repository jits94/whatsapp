<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'twilio-php/src/Twilio/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACc60ecbacead940335404bc89251e8406"; 
$token  = "3d2b8cbd544a53850164f8f79fd8d3cc"; 
$twilio = new Client($sid, $token); 

$message = $twilio->messages 
                  ->create("whatsapp:+59169092272", // telefono personal configurado en twilio que recibira los mensajes(cambiar telefono)
                  array( 
                    "from" => "whatsapp:+14155238886",  // telefono de prueba que te da twilio(no cambiar)     
                    "body" => "Probando mensaje" // mensaje que se enviara por whatsapp 
                ) 
       ); 

print("Mensaje enviado");