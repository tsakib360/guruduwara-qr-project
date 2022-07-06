function index(req, res, next) {
    try {
        res.status(200).json({
            version: '1.0.0',
            description: 'PDF QR generator project for Gururduwara',
            developer: 'Tanvir Sakib (tsakib360@gmail.com)',
        });
    } catch (err) {
        console.error(`Error while getting programming languages`, err.message);
        next(err);
    }
}

module.exports = {
    index
};