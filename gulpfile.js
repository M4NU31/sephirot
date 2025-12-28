const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

const paths = {
  scss: 'assets/scss/**/*.scss',
  js: 'assets/js/**/*.js',
  cssDest: 'assets/dist/css',
  jsDest: 'assets/dist/js'
};

// SCSS → CSS
function styles() {
  return gulp.src(paths.scss)
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.cssDest));
}

// JS → min
function scripts() {
  return gulp.src(paths.js)
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.jsDest));
}

exports.default = gulp.series(styles, scripts);
