const express = require('express');
const router = express.Router();

router.get('/', (req, res) => {
  res.send('Página inicial');
});

router.get('/about', (req, res) => {
  res.send('Sobre nós');
});

module.exports = router;
