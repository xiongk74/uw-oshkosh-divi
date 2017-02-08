// Include gulp
var gulp = require('gulp');

// Include Our Plugins
const jshint = require('gulp-jshint');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const copy = require('gulp-copy');
const babel = require('gulp-babel');
const imagemin = require('gulp-imagemin');
const merge = require('merge-stream');
const svgo = require('gulp-svgo');
const mkdirp = require('gulp-mkdirp');
const clean = require('gulp-clean');
const runSequence = require('run-sequence');
const autoprefixer = require('gulp-autoprefixer');
const cssnano = require('gulp-cssnano');
const gulpif = require('gulp-if');

gulp.task('build', function(cb) {
  runSequence('clean', ['style', 'js', 'images', 'php'], 'lint', cb);
});

gulp.task('clean', function() {
    return gulp.src('builds')
        .pipe(clean());
});

gulp.task('style', function () {
  var notThemeMetadata = function(file){
    var filenameSplit = String(file["history"]).split('/');
    var filename = filenameSplit[filenameSplit.length-1];
    if(filename != 'theme-metadata.css'){
      return true;
    }
    return false;
  }
  return gulp.src(['src/**/*.css', 'src/**/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions']
    }))
    .pipe(gulpif(notThemeMetadata, cssnano()))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('builds/uw-oshkosh-divi'));
});

gulp.task('js', function(){
  return gulp.src('src/uw-oshkosh-divi/js/**/*.js')
      .pipe(babel({
        presets: ['es2015']
      }))
      .pipe(uglify())
      .pipe(gulp.dest('builds/uw-oshkosh-divi/js'));
});

gulp.task('images', function(){
  return gulp.src('src/uw-oshkosh-divi/img/**/*')
      .pipe(imagemin())
      .pipe(gulp.dest('builds/uw-oshkosh-divi/img'));
});

gulp.task('php', function(){
  return gulp.src('src/uw-oshkosh-divi/**/*.php')
      .pipe(gulp.dest('builds/uw-oshkosh-divi/'));
});

gulp.task('lint', function(){
  return gulp.src('src/uw-oshkosh-divi/js/*.js')
      .pipe(jshint())
      .pipe(jshint.reporter('default'));
});
