const express = require('express');
const router = express.Router();

const contentController = require('./controllers/contentController');

router.get('/', contentController.home);
router.get('/about', contentController.about);

module.exports = router;
