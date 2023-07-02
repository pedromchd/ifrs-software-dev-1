const express = require('express');
const authMiddleware = require('../middlewares/authMiddleware');

const router = express.Router();

const Controller = require('../controllers/Controller');

router.get('/', authMiddleware, Controller.home);
router.get('/about', authMiddleware, Controller.about);

module.exports = router;
