const   path = require('path'),
        MiniCssExtractPlugin = require('mini-css-extract-plugin'),
        UglifyJSPlugin = require('uglifyjs-webpack-plugin'),
        OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');

module.exports = {
    entry: './assets/js/index.js',
    mode: 'development',
    devtool: 'source-map',
    output: {
        filename: 'scripts.min.js',
        path: path.resolve(`${__dirname}/assets/js/`, 'dist')
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                    },
                    "css-loader",
                    "postcss-loader", 
                    "sass-loader"
                ]
            },
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            }         
        ]
    },
    plugins: [ 
        new MiniCssExtractPlugin({
            filename: '../../../style.css',
        }
    )],
    optimization: {
        minimizer: [
            new UglifyJSPlugin(),
            new OptimizeCssAssetsPlugin()
        ]
    }
};