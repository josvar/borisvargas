'use strict'
// Borisvargas.com

var gulp = require('gulp');
var del = require('del');

// load plugins
var $ = require('gulp-load-plugins')();


var config = {
    assetsDir: 'app/assets/',
    bowerDir: 'vendor/bower_components/',
    frontDir: this.assetsDir + 'scripts/frontend/',
    buildDir: 'public/build/',
    cssOutput: 'public/assets/styles/',
    fontOutput: this.cssOutput + 'fonts/',
    imagesOutput: 'public/assets/images/',
    libsOutput: 'public/assets/scripts/libs',
    scriptsFrontOutput: 'public/assets/scripts/frontend/',
    libs: [
        this.bowerDir + 'fastclick/lib/fastclick.js',
        this.bowerDir + 'jquery.cookie/jquery.cookie.js',
        this.bowerDir + 'jquery-placeholder/jquery.placeholder.js',
        this.bowerDir + 'foundation/js/foundation.min.js',
        this.bowerDir + 'jquery/dist/jquery.js',
        this.bowerDir + 'backbone/backbone.js',
        this.bowerDir + 'lodash/dist/lodash.js',
        this.bowerDir + 'backbone.radio/build/backbone.radio.js',
        this.bowerDir + 'requirejs/require.js'
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
    return gulp.src([config.assetsDir + 'styles/backend.scss'])
        .pipe($.sass({
            style: 'nested',
            includePaths: [config.bowerDir],
            precision: 10
        }))
        .pipe($.autoprefixer('last 1 version'))
        .pipe(gulp.dest(config.cssOutput));
});

gulp.task('styles-front', function () {
    return gulp.src([config.assetsDir + 'styles/boris.scss'])
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
})

gulp.task('scripts-libs', function () {
    gulp.src(config.libs)
        .pipe(gulp.dest(config.libsOutput));
});

gulp.task('scripts-front', function () {
    gulp.src(config.frontDir + '**/*.js')
        .pipe(gulp.dest(config.scriptsFrontOutput));
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


gulp.task('watch-front', ['version-front'], function () {
    gulp.watch(config.assetsDir + 'styles/**/*.scss', ['version-front']);
})

gulp.task('watch-back', ['version-back'], function () {
    gulp.watch(config.assetsDir + 'styles/**/*.scss', ['version-back']);
})


//gulp.task('default', function () {
//    gulp.start('build');
//});
