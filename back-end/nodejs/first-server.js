var http = require("http");

var port = 3000;

var server = http.createServer(function (req, res) {
  res.writeHead(200, {"Content-Type": "text/html"});
  res.write("<h1> Primeiro server em nodejs </h1>");
  res.end();
});


server.listen(port, function () {
  console.log('Primeiro server em  nodejs rodando em: http://localhost:'+port);
});
