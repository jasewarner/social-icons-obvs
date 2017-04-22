var autoprefixer = require('gulp-autoprefixer'),
    cleancss = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    gulp = require('gulp'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify');

// Styles.
gulp.task('styles', function () {
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

// Scripts.
var jsFiles = 'js/functions/*.js',
    jsDest = 'js/';

gulp.task('scripts', function() {
    return gulp.src(jsFiles)
        .pipe(concat('social-icons-obvs-admin.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('social-icons-obvs-admin.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});

// Watch.
gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['styles']);
    gulp.watch('js/**/*.js', ['scripts']);
});
