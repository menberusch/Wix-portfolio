var gulp = require('gulp'),
    webpack = require('webpack'),
    settings = require('./settings'),
    browserSync = require('browser-sync').create(),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass');

gulp.task('styles', () => {
    return gulp.src(settings.themeLocation + '/scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(autoprefixer())
        .pipe(gulp.dest(settings.themeLocation + '/scss/'))
        .pipe(browserSync.stream());
});

gulp.task('scripts', (callback) => {
    webpack(require('./webpack.config'), (err, stats) => {
        if(err) {
            console.log(err.toString());
        }

        console.log(stats.toString());
        callback();
    });
});

gulp.task('serve', ['styles','scripts'], () => {
    browserSync.init({
        notify: false,
        proxy: settings.previewURL,
        ghostMode: false
    });

    gulp.watch('./**/*.php', () => {
        browserSync.reload();
    });
    gulp.watch(settings.themeLocation + '/scss/**/*.scss', ['styles']);
    gulp.watch([settings.themeLocation + '/js/main-js/**/*.js', settings.themeLocation + '/js/portfolio-js/**/*.js', settings.themeLocation + '/js/base-js/**/*.js'], ['waitForScripts']);
});

gulp.task('waitForScripts', ['scripts'], () => {
    browserSync.reload();
});

gulp.task('prod', ['scripts'], () => {
    gulp.src(settings.themeLocation + '/scss/style.scss')
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest(settings.themeLocation));
});