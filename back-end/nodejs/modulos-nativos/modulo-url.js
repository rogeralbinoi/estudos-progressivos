var http = require("http"),
    url = require("url"),
    port = 3000;

var server = http.createServer(function (req, res) {
  result = url.parse(req.url, true); // o true faz com que a query venha como um json

  res.writeHead(200, {"Content-Type": "text/html"});
  
  // Inicio Query
  res.write("<h2>Queries</h2>");
  res.write("<ul>");
  for (var key in result.query) {
    res.write("<li> <strong>"+key+": </strong>"+result.query[key]+"</li>");
  }
  res.write("</ul>");
  // Fim Query

  // Outras infos da url
  res.write("protocol: "+result.protocol+"<br>");
  res.write("auth: "+result.auth+"<br>");
  res.write("path: "+result.path+"<br>");
  res.write("pathname: "+result.pathname+"<br>");
  res.write("href: "+result.href+"<br>");
  res.write("hash: "+result.hash+"<br>");
  res.write("search: "+result.search+"<br>");
  console.log(result);
  res.end();
});

var onServerStart = function () {
  console.log('Server nodejs rodando em: http://localhost:'+port);
}

server.listen(port, onServerStart);
