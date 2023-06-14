const mongoose = require('mongoose');

module.exports = () => {
    const connectionParams = {
        useNewUrlParser: true,
        useUnifiedTopology: true
    };
    try {
        mongoose.connect(process.env.DB_CONNECTION, connectionParams);
        console.log('Connected to database');
    }
    catch (error) {
        console.log('Could not connect to database');
    }
}