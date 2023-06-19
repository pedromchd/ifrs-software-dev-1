const http = require('http');
const server = http.createServer((request, response) => {
  response.writeHead(200, {'Content-Type': 'text/html'});
  if (request.url == '/') {
    response.write('<h1>Olá mundo</h1>');
  }
  response.end();
});
server.listen(3000, () => {
  console.log('Servidor rodando!');
})