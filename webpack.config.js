const path = require('path');

module.exports = {
    resolve: {
        extensions: ['.js', '.es6','.json','.jsx','.vue'],
        alias: {
            '@': path.resolve('resources/js')
        },
    },

    // stats: {
    //     children: true
    // }
};
