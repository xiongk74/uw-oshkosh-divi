// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var copy = require('gulp-copy');
var babel = require('gulp-babel');
var imagemin = require('gulp-imagemin');
var merge = require('merge-stream');
var svgo = require('gulp-svgo');
var mkdirp = require('gulp-mkdirp');
var clean = require('gulp-clean');
var runSequence = require('run-sequence');

gulp.task('build', ['clean'], function (done) {
    gulp.on('task_stop', function (event) {
        if (event.task === 'builder') {
            done();
        }
    });
    gulp.start('builder');
    });
gulp.task('clean',function(){
    return gulp.src('builds')
    .pipe(clean())
});
gulp.task('builder',function(){
    var copy = gulp.src("src/**/*.*")
    .pipe(gulp.dest('builds'))
  var style = gulp.src('src/**/**.scss')
    .pipe(sass())
    .pipe(gulp.dest('builds'))
  var transform= gulp.src('src/uw-oshkosh-divi/js/**/*.js')
    .pipe(babel())
    .pipe(gulp.dest('builds/uw-oshkosh-divi/js'))
  var compressFavicons = gulp.src('src/uw-oshkosh-divi/img/favicons/*.*')
    .pipe(imagemin())
    .pipe(svgo())
    .pipe(gulp.dest('builds/uw-oshkosh-divi/img/favicons'))
  var compressFooter = gulp.src('src/uw-oshkosh-divi/img/footer/*.*')
    .pipe(imagemin())
    .pipe(svgo())
    .pipe(gulp.dest('builds/uw-oshkosh-divi/img/footer'))
  var rest =  gulp.src('src/uw-oshkosh-divi/img/*.*')
    .pipe(imagemin())
    .pipe(svgo())
    .pipe(gulp.dest('builds/uw-oshkosh-divi/img/'));
  var screenshot = gulp.src('src/uw-oshkosh-divi/*.*')
    .pipe(imagemin())
    .pipe(svgo())
    .pipe(gulp.dest('builds/uw-oshkosh-divi'));
  var lint = gulp.src('js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
  return merge( copy,style,transform,compressFooter,compressFavicons,screenshot,rest, lint);
});
