const express = require('express');
const router = express.Router();

const Controller = require('../app/controllers/Controller');

router.get('/', Controller.home);
router.get('/about', Controller.about);

module.exports = router;
