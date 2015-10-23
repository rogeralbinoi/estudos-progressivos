var http = require("http");

var port = 3000;

var server = http.createServer(function (req, res) {
  if(req.url == "/"){
    res.writeHead(200, {"Content-Type": "text/html"});
    res.write("<h1> Primeiro server em nodejs </h1> <br> Acesse: <a href='/sobre'>Sobre</a> <br> Tente usar uma <a href='/asdlkj'>Rota que nao existe</a>");
    console.log(req.url);
  }else if (req.url == "/sobre") {
    res.writeHead(200, {"Content-Type": "text/html"});
    res.write("<h1> Sobre Nodejs ;) </h1> <br> Acesse: <a href='/'>Home</a>  <br> Tente usar uma <a href='/asdlkj'>Rota que nao existe</a>");
    console.log(req.url);
  }else {
  	res.writeHead(404, {"Content-Type": "text/html"});
    res.write("<h1>Esta pagina nao existe</h1> <br> <a href='/'>Home</a>");
    console.log(req.url);
  }
  
  res.end();
});


server.listen(port, function () {
  console.log('Server nodejs rodando em: http://localhost:'+port);
});
