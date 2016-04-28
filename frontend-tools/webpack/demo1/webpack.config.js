//npm install css-loader style-loader
//var CommonsChunkPlugin = require("webpack/lib/optimize/CommonsChunkPlugin");
var webpack = require('webpack');
// var commonsPlugin = new webpack.optimize.CommonsChunkPlugin('common.js');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var commonsPlugin = new webpack.optimize.CommonsChunkPlugin('common.js');
var HtmlWebpackPlugin = require('html-webpack-plugin');
module.exports = {
	entry: {
		index: "./index.js",
		list1: "./src/js/list1.js",
	},
	output: {
	    path: './dist/',
	    publicPath: 'dist/',
		filename: "js/[name].js"
	},
	module: {
		loaders: [
			{
				test: /\.css$/,
				loader: "style!css"
			},
            /*{
                test: /\.html$/,
                loader: ExtractTextPlugin.extract('', "file-loader")
            }*/
		]
	},
	plugins: [new HtmlWebpackPlugin({
		filename: 'list1.html',
		template: './src/list1.html',
		inject: false
	}), new CommonsChunkPlugin({
	  name: "commons",
	  // (the commons chunk name)

	  filename: "commons.js",
	  // (the filename of the commons chunk)

	  // minChunks: 3,
	  // (Modules must be shared between 3 entries)

	  // chunks: ["pageA", "pageB"],
	  // (Only use these entries)
	})]
}
/*
	{
		//根据模板插入css/js等生成最终HTML
		favicon:'./src/img/favicon.ico', //favicon路径
		filename:'/view/index.html',    //生成的html存放路径，相对于 path
		template:'./src/view/index.html',    //html模板路径
		inject:true,    //允许插件修改哪些内容，包括head与body
		hash: true,    //为静态资源生成hash值
		minify: {    //压缩HTML文件
			removeComments:true,    //移除HTML中的注释
			collapseWhitespace:true    //删除空白符与换行符
		}
	}
 */
/*
	var webpackConfig = {
	  entry: 'index.js',
	  output: {
	    path: 'dist',
	    filename: 'index_bundle.js'
	  },
	  plugins: [new HtmlWebpackPlugin()]
	}
 */