const express = require('express');
const app = express();

const routes = require('./routes/web');

app.use('/', routes);

app.listen(3000, () => {
  console.log('Aplicativo ouvindo na porta 3000!');
});
