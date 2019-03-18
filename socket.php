<?php
function creation_socket()
{
	$socket = socket_create(AF_INET , SOCK_DGRAM , SOL_UDP);
	/* 
	 * AF_INET est la famille d'adresses Internet, 
	 * SOCK_DGRAM correspond au type de sockets, ici socket mode non connecté ( UDP )
	 * SOL_UDP est le protocole utilisé, UDP donc.
	 */
 
	if($socket < 0)
	{
		echo 'Erreur de création de la socket.';
		exit(1);
	}
 
	/* Retourne le descripteur de la socket */
	return $socket;
}

function attachement_socket_addr($socket, $addr, $port)
{
	/* Sur un serveur il faut attacher l’adresse à une socket, 
	ici on attachera à une adresse ip et un port */
	socket_bind($socket, $addr, $port);
}

// function reception_donnees($socket, $port_ecoute)
// {
	// $from = "";
	// $reception = socket_recvfrom($socket, $donnees, TAILLE_MAX_DATA, 0, $from, $port_ecoute);
	// /* On précise à socket_recvfrom, le descripteur de la socket, 
	// la variable (buffer) permettant de recevoir les données, 
	// la taille des données à recevoir, l'adresse et le port de destination
	// */
 
	// /* socket_recvfrom() renvoi le nombre d'octets reçu ou -1 si non reçu */
	// if($reception < 0)
		// echo 'Erreur de réception des données';
	// else
		// echo 'Message reçu : '.$donnees;
// }

 function envoi_donnees($socket, $donnees, $addr_dest, $port_dest)
 {
	$longueur_donnees = strlen($donnees); /* Calcul de la taille des données */
	 $envoi = socket_sendto($socket, $donnees, $longueur_donnees, 0, $addr_dest, $port_dest);
	 /* On précise à socket_sendto, le descripteur de la socket, les données à envoyer,
	sa taille, l'adresse et le port de destination
	 */
 
	/* socket_sendto() renvoi le nombre d'octets transmis ou -1 si non transmis */
	 if($envoi < 0)
		echo 'Erreur denvoi des données';
	else
		echo 'Données envoyées';
}

function fermeture_socket($socket)
{
	/* Fermeture de la socket et détruit les ressources utilisées par celle-ci. */
	socket_close($socket);
}
?>



