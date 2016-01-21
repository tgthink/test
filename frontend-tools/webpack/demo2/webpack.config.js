module.exports = {
	entry: './main.js',
	output: {
		path: __dirname, //输出文件的保存路径
		filename: 'bundle.js' //输出文件的名称
	},
	module: {
		loaders: [{
			test: /\.css$/,
			loader: 'style!css!autoprefixer?{browsers:["last 2 version", "> 1%"]}'
		}]
	}
};