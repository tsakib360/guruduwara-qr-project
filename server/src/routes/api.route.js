const express = require('express');
const router = express.Router();
const apiController = require('../controllers/api.controller');

router.get('/', apiController.index);
router.post('/create-qr', apiController.createQR);
router.post('/create-pdf', apiController.createPDF);
router.post('/fetch-pdf', apiController.fetchPDF);

module.exports = router;