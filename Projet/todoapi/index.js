var express = require('express');
var app = express();
var todos = [ "Coucou", "J'en ai marre", "Je sais pas", ];

app.get('/', function (req, res) {
  	res.send('Hello World!');
});

app.get('/todos', function (req, res){
	res.send(':(');
});
app.post('/todos', function (req, res){
	res.json(todos);
});

var server = app.listen(3000, function () {
  var host = server.address().address;
  var port = server.address().port;

  console.log('Example app listening at http://%s:%s', host, port);
});
