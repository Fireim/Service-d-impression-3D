<?php
include('socket.php');
session_start();

$_SESSION['forme'] = $_GET['forme'];
$_SESSION['param1'] = $_GET['longueur'];
$_SESSION['param2'] = $_GET['largeur'];
$_SESSION['param3'] = $_GET['hauteur'];
$addr = '127.0.0.1';
$port = '1234';

$message = $_SESSION['forme'];
$message .= ",";
$message .= $_SESSION['param1'];
$message .= ",";
$message .= $_SESSION['param2'];
$message .= ",";
$message .= $_SESSION['param3'];
$message .= ",";
$length = strlen($message);

$socket = creation_socket();
        
envoi_donnees($socket, $message, $addr, $port);
 
fermeture_socket($socket);

echo $message;
header('Location: Commande.php');
?>




