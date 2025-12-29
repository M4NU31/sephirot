const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

const paths = {
  scss: 'assets/scss/**/*.scss',
  cssDest: 'css',
};

function styles() {
  return gulp.src('assets/scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(rename({ basename: 'style', extname: '.css' }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.cssDest));
}

function watch() {
  gulp.watch(paths.scss, styles);
}

exports.build = styles;
exports.watch = watch;
