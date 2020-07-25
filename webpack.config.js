const path = require('path'),
    MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    entry: "./assets/coachsWidget.js",
    output: {
        path: path.resolve(__dirname, 'assets'),
        filename: 'js/coachs.js'
    },
    mode: 'development',
    devtool: 'source-map',
    module: {
        rules: [
            {
                test: /\.s?css$/,
                use: [
                    {
                      loader: MiniCssExtractPlugin.loader,
                      options: {
                        publicPath: path.resolve(__dirname, 'assets/css'),
                      },
                    },
                    'css-loader', 'sass-loader'
                  ],
            },
            {
                enforce: 'pre',
                exclude: /node_modules/,
                test: /\.js$/,
                loader: 'eslint-loader'
            },
            {
                test: /\.js$/,
                loader: 'babel-loader'
            }
        ]
    }
    ,
    plugins: [new MiniCssExtractPlugin({filename: 'css/[name].css'})]
};