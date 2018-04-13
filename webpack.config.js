const path = require('path'),
      settings = require('./settings');

module.exports = [
    {
        entry: {
            main: settings.themeLocation + '/js/main-js/main-page.js'
        },
        output: { 
            path: path.resolve(__dirname, settings.themeLocation + '/js'),
            filename: 'main-scripts-bundled.js'
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['env']
                        }
                    }
                }
            ]
        }
    },
    {
        entry: {
            portfolio: settings.themeLocation + '/js/portfolio-js/portfolio-page.js'
        },
        output: {
            path: path.resolve(__dirname, settings.themeLocation + '/js'),
            filename: 'portfolio-scripts-bundled.js'
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['env']
                        }
                    }
                }
            ]
        }
    },
    {
        entry: {
            portfolio: settings.themeLocation + '/js/base-js/scripts.js'
        },
        output: {
            path: path.resolve(__dirname, settings.themeLocation + '/js'),
            filename: 'scripts-bundled.js'
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['env']
                        }
                    }
                }
            ]
        }
    }
];