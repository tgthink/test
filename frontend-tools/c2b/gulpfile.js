/*
 * npm install gulp-less --save-dev
 * 
 */
var gulp = require('gulp');	//基础库
var less = require('gulp-less');	//编译less
var clean = require('gulp-clean');	//清空文件夹
var autoprefixer = require('gulp-autoprefixer');	//自动处理浏览器前缀
var notify = require('gulp-notify');	//

var paths = {
	src_html: 		"./src/**/*.html",
	src_php: 		"./src/**/*.php",
	src_json: 		"./src/**/*.json",
	src_txt: 		"./src/**/*.txt",
	src_js: 		"./src/js/**/*.js",
	src_js_total: 	"./src/js/**/*.*",
	src_css: 		"./src/css/**/*.css",
	src_less: 		"./src/css/**/*.less",

	src_js_css: "src/js/**/*.css",
	src_js_less: "src/js/**/*.less",

	src_images: 'src/images/**/*',
	src_pic: 'src/pic/**/*',

	dist_url: 		"./dist",
	dist_html: 		"./dist/**/*.html",
	dist_js: 		"./dist/js",
	dist_css: 		"./dist/css",
	dist_images: "dist/images",
	dist_pic: 'dist/pic',
	// main_js: "main.js",
	
	
	// rev_css: "dist/rev/css"
};
var handleHtmlAry = [paths.src_html, paths.src_json, paths.src_php, paths.src_txt];
// HTML处理
gulp.task('html', function() {
    return gulp.src(handleHtmlAry)
    .pipe(gulp.dest(paths.dist_url));
});
// 处理样式
gulp.task('styles', function() {
	/*js内css start*/
	// gulp.src([paths.src_js_less])
	// .pipe(less())
	// .pipe(autoprefixer('> 1%', 'IE 7'))
	// .pipe(gulp.dest(paths.dist_js));
	// gulp.src([paths.src_js_css])
	// .pipe(gulp.dest(paths.dist_js));
	/*js内css end*/
	//处理less
	gulp.src([paths.src_less])
	.pipe(less())
	.pipe(autoprefixer('> 1%', 'IE 7'))
	.pipe(gulp.dest(paths.dist_css));
	//处理普通css
	return gulp.src([paths.src_css])
	.pipe(gulp.dest(paths.dist_css));
});
// 图片
gulp.task('images', function() {  
	return gulp.src(paths.src_images)
    .pipe(gulp.dest(paths.dist_images));
});
gulp.task('pic', function() {  
	return gulp.src(paths.src_pic)
    .pipe(gulp.dest(paths.dist_pic));
});
// 脚本
gulp.task('scripts', function() {
	return gulp.src([paths.src_js_total])
	.pipe(gulp.dest(paths.dist_js))
	.pipe(notify({ message: 'Scripts task complete' }));
});
// 清理
gulp.task('clean', function() {
	return gulp.src([paths.dist_js, paths.dist_html, paths.dist_css, paths.dist_images, paths.dist_pic], {read: false})
	.pipe(clean());
});
// 定义默认任务
gulp.task('default', ['clean'], function() {
    gulp.start('scripts', 'styles', 'images', 'pic');
    setTimeout(function(){
      gulp.start('html');
    }, 1000);
});

// 看守
gulp.task('watch', function() {
  // 由于某些js控件或库的样式放置在js同空间名目录
  // 看守所有css档
  gulp.watch([paths.src_css, paths.src_less, paths.src_js_css, paths.src_js_less], ['styles', 'html']);
  //gulp.watch(paths.src_css, ['styles']);

  // 看守所有.js档
  gulp.watch([paths.src_js], ['scripts']);
  // 看守所有图片档
  gulp.watch(paths.src_images, ['images']);
  gulp.watch(paths.src_pic, ['pic']);

  // 监听html
  gulp.watch(handleHtmlAry, function(event) {
      gulp.run('html');
  });

});