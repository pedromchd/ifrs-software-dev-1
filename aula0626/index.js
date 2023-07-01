const express = require('express');
const exphbs = require('express-handlebars');

const app = express();

// Configuração do Handlebars
app.engine('handlebars', exphbs());
app.set('view engine', 'handlebars');

// Configuração do diretório de visualizações
app.set('views', path.join(__dirname, 'app', 'views'));

// Configuração do diretório público
app.use(express.static(path.join(__dirname, 'public')));

// Configuração do body-parser, caso necessário
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

// Configuração das rotas
const routes = require('./routes');
app.use(routes);

// Inicialização do servidor
app.listen(3000, () => {
  console.log('Servidor iniciado na porta 3000');
});
