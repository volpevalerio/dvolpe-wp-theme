require('es6-promise').polyfill();
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var imagemin = require('gulp-imagemin');
var bourbon = require('node-bourbon').includePaths;
var neat = require('node-neat').includePaths;
var connect = require('gulp-connect');
var babel = require('gulp-babel');

gulp.task('js', function () {
  return gulp.src(['./src/js/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('app.js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(babel({
      presets:  ['env']
    }))
    .pipe(gulp.dest('./js'))
    .pipe(connect.reload())
})

var onError = function (err) {
  console.log('Si è presentato un errore: ', gutil.color.magenta(err.message));
  gutil.beep();
  this.emit('end');
}

gulp.task('sass', function () {
  return gulp.src('./src/sass/style.scss')
    .pipe(sass({
      includePaths: [bourbon, neat]
    }))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./'))
    .pipe(plumber({ errorHandler: onError }))
    .pipe(connect.reload())
});

gulp.task('images', function () {
  return gulp.src('./src/images/scr/*')
    .pipe(plumber({ errorHandler: onError }))
    .pipe(imagemin({ optimizationLevel: 7, progressive: true }))
    .pipe(gulp.dest('/images/dist'));
})

gulp.task('watch', function () {
  browserSync.init({
    files: './',
    proxy: 'dvolpe2018.test:8888'
  })
  gulp.watch('./src/sass/**/*.scss', ['sass']);
  gulp.watch('./js/*js', ['js']);
  gulp.watch('.src/images/src/*', ['images']);
});

gulp.task('connect', function () {
  connect.server({
    root: './',
    livereload: true
  })
})

gulp.task('default', ['sass', 'watch', 'js', 'images']);

