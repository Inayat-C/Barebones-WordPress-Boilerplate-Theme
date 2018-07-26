const 	gulp = require('gulp'),
		sass = require('gulp-sass'),
		cssnano = require('gulp-cssnano'),
		sourcemaps = require('gulp-sourcemaps'),
		autoprefixer = require('gulp-autoprefixer'),
		notify = require('gulp-notify'),
		concat = require('gulp-concat'),
		rename = require('gulp-rename'),
		pump = require('pump'),
		babel = require('gulp-babel'),
		order = require("gulp-order"),
		uglify = require('gulp-uglify');

gulp.task('watch', () => { 
	gulp.watch('assets/sass/*.scss', ['sass']);
	gulp.watch('assets/js/build/*.js', ['js']);
});

gulp.task('sass', () => {
	return gulp.src('assets/sass/*.scss')
		.pipe(sourcemaps.init()) 
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({ browsers: ['last 3 versions'] }))
		.pipe(cssnano({ 'zindex': false }))
  		.pipe(sourcemaps.write('./'))
  		.pipe(gulp.dest('./'))		
    	.pipe(notify({ message: 'Succesfully compiled' }));
});

gulp.task('js', (cb) => {
	pump([
		gulp.src('assets/js/build/*.js'),
		babel({ presets: ['env'] }),
  		order([
			'assets/js/build/modernizr.js',
			'assets/js/build/polyfills.js',
		]),	
		concat('scripts.js'),
		uglify(),
		rename('scripts.min.js'),
		gulp.dest('assets/js')
	], cb);
});

