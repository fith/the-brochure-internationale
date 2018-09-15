var gulp = require('gulp');
var less = require('gulp-sass');
var minifyCSS = require('gulp-csso');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('css', function(){
  return gulp.src([
      'src/css/*.scss'
    ])
    .pipe(less())
    .pipe(concat('style.css'))
    .pipe(minifyCSS())
    .pipe(gulp.dest('www/css'))
});

gulp.task('js', function(){
  return gulp.src([
      'src/js/*.js'
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('app.min.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('www/js'))
});

gulp.task('watch', function() {
  gulp.watch('src/css/*.scss', ['css'])
  gulp.watch('src/js/*.js', ['js'])
});

gulp.task('default', [ 'css', 'js' ]);


