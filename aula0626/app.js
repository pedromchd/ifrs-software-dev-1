const express = require('express');
const exphbs = require('express-handlebars');
const app = express();

app.engine('hbs', exphbs.engine({ extname: '.hbs', defaultLayout: false }));
app.set('view engine', 'hbs');

const routes = require('./routes/web');

app.use('/', routes);

app.listen(3000, () => {
  console.log('Aplicativo ouvindo na porta 3000!');
});
