const elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(mix => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });

/* Custom Task  */
var gulp = require('gulp'),
    cleanCss = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    copy = require('gulp-copy'),
    debug = require('gulp-debug'),
    less = require('gulp-less'),
    notify = require('gulp-notify'),
    pipe = require('gulp-pipe'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch');

var CONFIG = {
    NODE_PATH: 'node_modules',
    BOWER_PATH: 'bower_components',
    RESOURCES_PATH: 'resources/assets',
    PUBLIC_CSS_PATH: 'public/css',
    PUBLIC_FONTS_PATH: 'public/fonts',
    PUBLIC_JS_PATH: 'public/js'
};

/* Less Thingy */
gulp.task('bootstrap', function() {
    return gulp.src(CONFIG.NODE_PATH + '/bootstrap/less/bootstrap.less')
        .pipe(less())
        .pipe(rename('bootstrap.min.css'))
        .pipe(cleanCss({
            keepSpecialComments: 0
        }))
        .pipe(gulp.dest(CONFIG.PUBLIC_CSS_PATH))
        .pipe(notify('Bootstrap Compiled!'));
});

gulp.task('template', function() {
    return gulp.src(CONFIG.RESOURCES_PATH + '/less/template.less')
        .pipe(less())
        .pipe(rename('template.min.css'))
        .pipe(cleanCss({
            keepSpecialComments: 0
        }))
        .pipe(gulp.dest(CONFIG.PUBLIC_CSS_PATH))
        .pipe(notify('Template CSS Compiled!'));
});

/* Javascript Thingy */
var javascripts = [
    /* jquery */
    CONFIG.NODE_PATH + '/jquery/dist/jquery.js',
    /* bootstrap */
    CONFIG.NODE_PATH + '/bootstrap/dist/js/bootstrap.js',
    /* jquery detect mobile */
    CONFIG.BOWER_PATH + '/detect-mobile-browser/detectmobilebrowser.js',
    /* fastclick */
    CONFIG.NODE_PATH + '/fastclick/lib/fastclick.js',
    /* jquery-slimscroll */
    CONFIG.NODE_PATH + '/jquery-slimscroll/jquery.slimscroll.js',
    /* moment */
    CONFIG.NODE_PATH + '/moment/moment.js',
    /* block-ui */
    CONFIG.NODE_PATH + '/block-ui/jquery.blockUI.js',
    /* waves */
    // CONFIG.BOWER_PATH + '/Waves/dist/waves.js',
    /* jquery.nicescroll */
    CONFIG.BOWER_PATH + '/jquery.nicescroll/jquery.nicescroll.js',
    /* jquery scrollTo */
    CONFIG.BOWER_PATH + '/jquery.scrollTo/jquery.scrollTo.js',
    /* jquery wow */
    CONFIG.BOWER_PATH + '/wow/dist/wow.js',
    /* Jquery Piety */
    CONFIG.BOWER_PATH + '/peity/jquery.peity.min.js',
    /* Jquery Sparkline */
    CONFIG.NODE_PATH + '/sparkline/lib/sparkline.js',
    /* jquery ujs */
    CONFIG.NODE_PATH + '/jquery-ujs/src/rails.js',
    /* select 2 */
    CONFIG.NODE_PATH + '/select2/dist/js/select2.js',
    /* bootstrap-datepicker */
    CONFIG.NODE_PATH + '/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
    /* bootstrap-daterangepicker */
    CONFIG.NODE_PATH + '/bootstrap-daterangepicker/daterangepicker.js',
    /* bootstrap-filestyle */
    CONFIG.NODE_PATH + '/bootstrap-filestyle/src/bootstrap-filestyle.js',
    /* bootstrap-tagsinput */
    CONFIG.NODE_PATH + '/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',
    /* Ubold */
    CONFIG.RESOURCES_PATH + '/js/jquery.core.js',
    CONFIG.RESOURCES_PATH + '/js/jquery.app.js',
    /* Global */
    // CONFIG.RESOURCES_PATH + '/js/global.app.js'
];

var modernizr = CONFIG.NODE_PATH + '/modernizr/src/modernizr.js';

gulp.task('js', function() {
    return gulp.src(javascripts)
        .pipe(concat('script.min.js'))
        .pipe(uglify())
        .on('error', errorlog)
        .pipe(gulp.dest(CONFIG.PUBLIC_JS_PATH))
        .pipe(notify('Javascripts Compiled!'));
});

gulp.task('modernizr', function() {
    return gulp.src(modernizr)
        .pipe(uglify())
        .pipe(rename('modernizr.min.js'))
        .pipe(gulp.dest(CONFIG.PUBLIC_JS_PATH))
        .pipe(notify('modernizr.js Minified!'));
});

/* Copying Things */
gulp.task('copy', [
    'copy:select2',
    'copy:datepicker',
    'copy:daterangepicker',
    'copy:tagsinput',
    'copy:html5shiv',
    'copy:respond'
]);

gulp.task('copy:select2', function() {
    gulp.src(CONFIG.NODE_PATH + '/select2/dist/css/select2.css')
        .pipe(rename('select2.less'))
        .pipe(gulp.dest(CONFIG.RESOURCES_PATH + '/less'));

    gulp.src(CONFIG.NODE_PATH + '/select2-bootstrap-theme/dist/select2-bootstrap.css')
        .pipe(rename('select2-bootstrap.less'))
        .pipe(gulp.dest(CONFIG.RESOURCES_PATH + '/less'));
});

gulp.task('copy:datepicker', function() {
    gulp.src('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')
        .pipe(rename('bootstrap-datepicker3.less'))
        .pipe(gulp.dest(CONFIG.RESOURCES_PATH + '/less'));
});

gulp.task('copy:daterangepicker', function() {
    gulp.src('node_modules/bootstrap-daterangepicker/daterangepicker.css')
        .pipe(rename('daterangepicker.less'))
        .pipe(gulp.dest(CONFIG.RESOURCES_PATH + '/less'));
});

gulp.task('copy:tagsinput', function() {
    gulp.src('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.less')
        .pipe(gulp.dest(CONFIG.RESOURCES_PATH + '/less'));
});

gulp.task('copy:html5shiv', function() {
    gulp.src('node_modules/html5shiv/dist/html5shiv.min.js')
        .pipe(gulp.dest(CONFIG.PUBLIC_JS_PATH));
});

gulp.task('copy:respond', function() {
    gulp.src('node_modules/respond.js/dest/respond.min.js')
        .pipe(gulp.dest(CONFIG.PUBLIC_JS_PATH));
});
/* errorlog */
function errorlog(err) {
    console.log(err.message);
    this.emit('end');
}