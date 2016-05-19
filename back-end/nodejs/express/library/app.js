// Importando modulo express
var express = require('express');

// Criando o app
var app = express();

// Servindo arquivos estáticos
app.use(express.static(__dirname+'/public'));

// Setando porta
var PORT = 3000

// Roteamento simples
app.get('/', function (req, res) {
  res.send('Hello');
});

// Iniciando servidor
app.listen(PORT, function () {
  console.log('Listen in '+PORT);
});