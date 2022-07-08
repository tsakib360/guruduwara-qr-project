const pdf = require('html-pdf');
const QRCode = require('qrcode');
const pdfTemplate = require('../documents');
const path = require('path');
const puppeteer = require('puppeteer');
const { createCanvas, loadImage } = require("canvas");
const qr = require('qr-image-color');
const fs = require('fs');

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

async function createQR(req, res, next) {
    try {
        // let qr = await QRCode.toDataURL(req.body.url);
        // let qr_image_1 = await create(req.body.url,  150,  '#9f7db0', '#e0ecb4');
        // let qr_image_2 = await create(req.body.url,  150,  '#9f7db0', '#f3d194');
        var qr_image_1 = qr.image(req.body.url, { type: 'png', color: '#9f7db0', background: '#e0ecb4' });
        var qr_image_2 = qr.image(req.body.url, { type: 'png', color: '#9f7db0', background: '#f3d194' });
        qr_image_1.pipe(fs.createWriteStream('./src/files/qr1.png'));
        qr_image_2.pipe(fs.createWriteStream('./src/files/qr2.png'));
        res.status(201).json({
            message: 'New QR code generated',
            qr1: qr_image_1,
            qr2: qr_image_2
        });
    } catch (err) {
        console.error(`Error: `, err.message);
        next(err);
    }
}

async function createPDF(req, res, next) {
    try {
        const browser = await puppeteer.launch();
        const page = await browser.newPage();
        await page.setViewport({
            width: 1624,
            height: 1255,
            deviceScaleFactor: 1,
        });
        await page.goto(process.env.CLIENT_URL + 'pdf-view?page='+req.body.pages, {
            waitUntil: 'networkidle2',
        });
        const pdf = await page.pdf({path: `./src/files/${req.body.number}.pdf`, printBackground: true, width: '425mm', height: '330mm'});

        await browser.close();
        res.status(201).json({
            message: 'New PDF Created',
            data: pdf,
        });
    } catch (err) {
        console.error(`Error: `, err.message);
        next(err);
    }
}

async function  createPDFNormal(req, res, next) {
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
    res.sendFile(`${path.join(__dirname, '../files/')}/${req.params.pdf}`)
}

async function create(dataForQRcode, width, darkcolor, lightcolor) {
    const canvas = createCanvas(width, width);
    QRCode.toCanvas(
        canvas,
        dataForQRcode,
        {
            errorCorrectionLevel: "H",
            margin: 1,
            color: {
                dark: darkcolor,
                light: lightcolor,
            },
            transparent: true
        }
    );
    return canvas.toDataURL("image/png");
}

module.exports = {
    index,
    createPDF,
    fetchPDF,
    createQR
};