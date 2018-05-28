var gulp = require('gulp');
var sass = require('gulp-sass');
 
gulp.task('styles', function () {
  return gulp.src('./resources/assets/sass/variables.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});