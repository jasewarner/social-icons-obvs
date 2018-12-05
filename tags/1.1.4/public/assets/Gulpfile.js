var autoprefixer = require('gulp-autoprefixer'),
    cleancss = require('gulp-clean-css'),
    gulp = require('gulp'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass');

// css
gulp.task('css', function () {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 3 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./css/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(cleancss())
        .pipe(gulp.dest('./css/'));
});

// watch
gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['css']);
});
