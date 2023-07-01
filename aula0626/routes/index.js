const express = require('express');
const router = express.Router();

// Importe seus controladores
const HomeController = require('../app/controllers/HomeController');

// Defina as rotas
router.get('/', HomeController.index);
router.get('/about', HomeController.about);

module.exports = router;
