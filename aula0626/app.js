const express = require('express');
const exphbs = require('express-handlebars');
const sequelize = require('./config/database');

const User = require('./models/user');
const Post = require('./models/post');

const routes = require('./routes/web');

const app = express();

app.engine('hbs', exphbs.engine({ extname: '.hbs' }));
app.set('view engine', 'hbs');

sequelize.sync();

app.use('/', routes);

app.listen(3000, () => {
  console.log('Aplicativo ouvindo na porta 3000!');
});
