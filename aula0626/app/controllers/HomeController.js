// Exemplo de HomeController.js

exports.index = (req, res) => {
  res.render('index', { title: 'Página inicial' });
};

exports.about = (req, res) => {
  res.render('about', { title: 'Sobre' });
};
