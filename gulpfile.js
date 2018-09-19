const 	gulp = require('gulp'),
		sass = require('gulp-sass'),
		cssnano = require('gulp-cssnano'),
		sourcemaps = require('gulp-sourcemaps'),
		autoprefixer = require('gulp-autoprefixer'),
		notify = require('gulp-notify'),
		concat = require('gulp-concat'),
		rename = require('gulp-rename'),
		babel = require('gulp-babel'),
		uglify = require('gulp-uglify');

gulp.task('watch', () => { 
	gulp.watch('assets/sass/*.scss', gulp.series('sass'));
	gulp.watch('assets/js/build/*.js', gulp.series('js'));
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

gulp.task('js', () => {
	return gulp.src([
		'assets/js/build/modernizr.js',
		'assets/js/build/polyfills.js',
		'assets/js/build/script.js',		
	])
		.pipe(babel({ presets: ['env'] }))
		.pipe(concat('scripts.js'))
		.pipe(uglify())
		.pipe(rename('scripts.min.js'))
		.pipe(gulp.dest('assets/js'));
});
