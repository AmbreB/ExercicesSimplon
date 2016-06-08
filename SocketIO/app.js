var http = require('http');
var fs = require('fs');

// Chargement du fichier index.html affiché au client

var server = http.createServer(function(req, res){
	fs.readFile('./index.html', 'utf-8', function(error, content){
		res.writeHead(200, {"Content-Type" : "text/html"});
		res.end(content);
	});
});

// On charge Socket.IO

var io = require('socket.io').listen(server);

// Quand un client se connecte, on le note dans la console

io.sockets.on('connection', function(socket){

	// Envoie un message au serveur quand un client se connecte
	console.log('Un client est connecté');

	// Envoie un message au client quand le client se connecte
	socket.emit('message', 'Vous êtes connecté, génial !');

	// Ecoute si un message a été envoyé par le client via un bouton 
	// et l'affiche dans la console s'il y en a un
	socket.on('message', function(message){
		console.log(socket.pseudo + ' me parle et me dit : ' + message);
	});

	// Envoie un message à tous les autres clients quand un client 
	// se connecte
	socket.broadcast.emit('message', 'Un autre client vient de se connecter');

	// On récupère le pseudo envoyé par le client
	socket.on('petit_nouveau', function(pseudo){
		socket.pseudo = pseudo;
	});

});

server.listen(3000);