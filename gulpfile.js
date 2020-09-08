let gulp = require('gulp'),
    sass = require('gulp-sass'),
    gcmq = require('gulp-group-css-media-queries');

let path = {
    build: {
        css: './',
    },
    src: {
        css: 'scss/style.scss',
    },
    watch: {
        css: 'scss/**/*.scss',
    }
};

function styles() {
    return gulp.src(path.src.css)
        .pipe(sass({outputStyle: 'nested'}).on('error', sass.logError))
        .pipe(gcmq())
        .pipe(gulp.dest(path.build.css))
}

function watch() {
    gulp.watch(path.watch.css, styles)
}

exports.default = gulp.parallel(styles, watch);