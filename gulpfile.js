var gulp = require('gulp');
var cleanCSS = require('gulp-clean-css');
//var jsmin = require('gulp-jsmin');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
//var imagemin = require('gulp-imagemin');
//var cache = require('gulp-cache');

// Sass to css
gulp.task('sass', function () {
    return gulp.src('./sass/**/*.sass')
        .pipe(plumber())
        .pipe(sass())
        .pipe(gulp.dest('./css'));
});

gulp.task('minify-css', function() {
    return gulp.src(['css/*.css', '!css/*.min.css'])
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('css'));
});

// gulp.task('minify-js', function () {
//    gulp.src('src/**/*.js')
//        .pipe(jsmin())
//        .pipe(rename({suffix: '.min'}))
//        .pipe(gulp.dest('dist'));
// });

// //////////////////////////////////////////////////////////
// Task Image minify TODO werkt nog niet verder uitzoeken
// //////////////////////////////////////////////////////////

//gulp.task('images', function(){
//    return gulp.src('pre-images/**/*')
//        .pipe(imagemin({ progressive: true}))
//        .pipe(gulp.dest('images'));
//});

// ///////////////////////////////////////////////////
// Watch Task
// ///////////////////////////////////////////////////
gulp.task('watch', function(){
    gulp.watch('sass/**/*.sass', ['sass']);
    gulp.watch('css/*.css', ['minify-css']);
    gulp.watch()
});
// ///////////////////////////////////////////////////
// Default Task
// ///////////////////////////////////////////////////

gulp.task('default' , ['watch', 'sass', 'minify-css']);