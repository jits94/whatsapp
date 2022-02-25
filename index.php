<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'twilio-php/src/Twilio/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACc60ecbacead940335404bc89251e8406"; 
$token  = "3d2b8cbd544a53850164f8f79fd8d3cc"; 
$twilio = new Client($sid, $token); 

$message = $twilio->messages 
                  ->create("whatsapp:+59169092272", // para 
                  array( 
                    "from" => "whatsapp:+14155238886",       
                    "body" => "Hola Jorge" 
                ) 
       ); 

print("Mensaje enviado");