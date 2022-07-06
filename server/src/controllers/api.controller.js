const pdf = require('html-pdf');
const QRCode = require('qrcode');
const pdfTemplate = require('../documents');
const path = require('path');

function index(req, res, next) {
    try {
        res.status(200).json({
            version: '1.0.0',
            description: 'PDF QR generator project for Gururduwara',
            developer: 'Tanvir Sakib (tsakib360@gmail.com)',
        });
    } catch (err) {
        console.error(`Error: `, err.message);
        next(err);
    }
}

async function  createPDF(req, res, next) {
    try {
        let qr = await QRCode.toDataURL(req.body.url);
        let text = req.body.text;
        let receiptId = String(Date.now());
        pdf.create(pdfTemplate({qr, text, receiptId}), {
            childProcessOptions: {
                env: {
                    OPENSSL_CONF: '/dev/null',
                },
            }
        }).toFile('./src/files/result.pdf', function(err, res) {
            if (err) return console.log(err);
        });
        res.status(200).json({
            message : 'A PDF is generated with QR code',
            qrCode: qr,
            url : process.env.APP_URL+'fetch-pdf'
        });
    } catch (err) {
        console.error(`Error: `, err.message);
        next(err);
    }
}

function fetchPDF(req, res, next) {
    res.sendFile(`${path.join(__dirname, '../files/')}/result.pdf`)
}

module.exports = {
    index,
    createPDF,
    fetchPDF
};