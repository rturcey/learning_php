module.exports = {
    devServer: {
        disableHostCheck: true,
        sockHost: 'localhost',
        watchOptions: {
            ignored: /node_modules/,
            aggregateTimeout: 300,
            poll: 1000,
        }
    },
};