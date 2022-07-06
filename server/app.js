require('dotenv').config()
const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const cors = require('cors');
const port = process.env.PORT || 5000;
const apiRoute = require('./src/routes/api.route');

app.use(cors());
app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());

app.get('/', (req, res) => {
    res.status(200).json({
        version: '1.0.0',
        description: 'PDF QR generator project for Gururduwara',
        developer: 'Tanvir Sakib (tsakib360@gmail.com)',
    });
});

app.use('/api', apiRoute);

/* Error handler middleware */
app.use((err, req, res, next) => {
    const statusCode = err.statusCode || 500;
    console.error(err.message, err.stack);
    res.status(statusCode).json({'message': err.message});

    return;
});

app.listen(port, () => console.log(`Listening on url ${process.env.APP_URL}`));