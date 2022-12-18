'use strict';

const gulp = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
	return gulp.src('./assets/sass/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./assets/css'));
}


exports.default = function() {
	gulp.watch('./assets/sass/**/*.scss', { events: 'all' }, function(cb) {
		buildStyles();
		cb();
	});
}