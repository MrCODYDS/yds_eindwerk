var gulp = require('gulp');
var sass = require('gulp-sass');

//sass
gulp.task('sass', function (cb) {
    gulp.src('src/scss/**/*.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('dest/'));
    cb();
});

// Default task
gulp.task('default', function () {
    gulp.start('sass');
});