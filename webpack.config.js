const path = require('path'),
	MiniCssExtractPlugin = require('mini-css-extract-plugin'),
	TerserPlugin = require('terser-webpack-plugin'),
	OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');

module.exports = {
	entry: './assets/js/entry.js',
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
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {
							sourceMap: true,
							url: false
						}
					},
					{
						loader: 'postcss-loader',
						options: {
							plugins: [require('autoprefixer')],
							sourceMap: true
						}
					},
					{
						loader: 'sass-loader',
						options: {
							sourceMap: true
						}
					}
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
			filename: '../../../style.css'
		})
	],
	optimization: {
		minimizer: [new TerserPlugin(), new OptimizeCssAssetsPlugin()]
	}
};
