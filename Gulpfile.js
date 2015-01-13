'use strict'
// Borisvargas.com

var gulp = require('gulp');
var del = require('del');

// load plugins
var $ = require('gulp-load-plugins')();

var bowerDir = 'vendor/bower_components/';
var config = {
    assetsDir: 'app/assets/',
    bowerDir: 'vendor/bower_components/',
    buildDir: 'public/build/',
    cssOutput: 'public/assets/styles/',
    fontOutput: 'public/assets/styles/fonts/',
    imagesOutput: 'public/assets/images/',
    libsOutput: 'public/assets/scripts/libs',
    scriptsFrontOutput: 'public/assets/scripts/frontend/',
    scriptsBackOutput: 'public/assets/scripts/backend/',
    libs: [
        bowerDir + 'fastclick/lib/fastclick.js',
        bowerDir + 'jquery.cookie/jquery.cookie.js',
        bowerDir + 'jquery-placeholder/jquery.placeholder.js',
        bowerDir + 'foundation/js/foundation/*.js',
        bowerDir + 'jquery/dist/jquery.js',
        bowerDir + 'backbone/backbone.js',
        bowerDir + 'lodash/dist/lodash.js',
        bowerDir + 'backbone.radio/build/backbone.radio.js',
        bowerDir + 'hogan/web/builds/3.0.2/hogan-3.0.2.amd.js',
        bowerDir + 'layoutmanager/backbone.layoutmanager.js',
        bowerDir + 'requirejs/require.js'
    ],
    fonts: [
        this.bowerDir + 'foundation-icon-fonts/*',
        this.assetsDir + 'styles/fonts/**/*'
    ],
    images: [
        this.assetsDir + 'images/**/*'
    ]
};

gulp.task('styles-back', function () {
    return gulp.src([config.assetsDir + 'styles/backend/backend.scss'])
        .pipe($.sass({
            style: 'nested',
            includePaths: [config.bowerDir],
            precision: 10
        }))
        .pipe($.autoprefixer('last 1 version'))
        .pipe(gulp.dest(config.cssOutput));
});

gulp.task('styles-front', function () {
    return gulp.src([config.assetsDir + 'styles/frontend/boris.scss'])
        .pipe($.sass({
            outputStyle: 'nested',
            includePaths: [config.bowerDir],
            precision: 10
        }))
        .pipe($.autoprefixer('last 1 version'))
        .pipe(gulp.dest(config.cssOutput));
});

gulp.task('scripts-init', function () {
    gulp.src(config.libs)
        .pipe(gulp.dest(config.assetsDir + 'scripts/libs/'));
});

gulp.task('scripts-libs', function () {
    gulp.src(config.libs)
        .pipe(gulp.dest(config.libsOutput));
});

gulp.task('scripts-front', function () {
    gulp.src(config.assetsDir + '/scripts/frontend/**/*.js')
        .pipe(gulp.dest(config.scriptsFrontOutput));
});

gulp.task('scripts-back', function () {
    gulp.src(config.assetsDir + '/scripts/backend/**/*.js')
        .pipe(gulp.dest(config.scriptsBackOutput));
});

gulp.task('images', function () {
    return gulp.src(config.images)
        .pipe($.cache($.imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest(config.imagesOutput));
});

gulp.task('fonts', function () {
    return gulp.src(config.fonts)
        .pipe($.filter('*.{eot,svg,ttf,woff,otf}'))
        .pipe($.flatten())
        .pipe(gulp.dest(config.fontOutput));
});

var cb_versioning = function () {
    return del(config.buildDir + '*', { force: true }, function () {
        return gulp.src(['public/assets/styles/*.css'],  { base: 'public/assets' })
            .pipe(gulp.dest(config.buildDir))
            .pipe($.minifyCss())
            .pipe($.rev())
            .pipe(gulp.dest(config.buildDir))
            .pipe($.rev.manifest())
            .pipe(gulp.dest(config.buildDir));
    });
};
gulp.task('version-front', ['styles-front'], function () {
    return cb_versioning();
});

gulp.task('version-back', ['styles-back'], function () {
    return cb_versioning();
});
//gulp.task('ckeditor', function () {
//    return gulp.src('app/assets/bower_components/ckeditor/**/*')
//        .pipe(gulp.dest('public/assets/ckeditor'));
//});

gulp.task('watch', ['version-front', 'version-back', 'scripts-front', 'scripts-back'], function () {
    gulp.watch(config.assetsDir + 'styles/frontend/**/*.scss', ['version-front']);
    gulp.watch(config.assetsDir + 'styles/backend/**/*.scss', ['version-back']);

    gulp.watch(config.assetsDir + 'scripts/frontend/**/*.js', ['scripts-front']);
    gulp.watch(config.assetsDir + 'scripts/backend/**/*.js', ['scripts-back']);
});


//gulp.task('default', function () {
//    gulp.start('build');
//});
