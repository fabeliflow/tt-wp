var gulp = require("gulp");
var sass = require("gulp-sass");
var minifyCSS = require("gulp-minify-css");
var uglify = require("gulp-uglify");
var rename = require("gulp-rename");
var autoprefixer = require("gulp-autoprefixer");
var plumber = require("gulp-plumber");
var svgmin = require("gulp-svgmin");

gulp.task("sass", function() {
  return gulp
    .src("scss/**/*.scss") // Gets all files ending with .scss in scss
    .pipe(
      plumber({
        errorHandler: onError
      })
    )
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(minifyCSS())
    .pipe(gulp.dest("css"));
});

gulp.task("scripts", function() {
  return (
    gulp
      .src("js/*.js")
      .pipe(
        plumber({
          errorHandler: onError
        })
      )
      // minify the file
      .pipe(uglify())
      .pipe(rename({ suffix: ".min" }))
      // output
      .pipe(gulp.dest("js/minified"))
  );
});

gulp.task("watch", function() {
  gulp.watch("scss/**/*.scss", ["sass"]);
  gulp.watch("js/*.js", ["scripts"]);
});

gulp.task("svgmin", function() {
  return gulp
    .src("img/**/*.svg")
    .pipe(svgmin())
    .pipe(gulp.dest("img"));
});

var onError = function(err) {
  console.log(err);
};
