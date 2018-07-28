var gulp = require("gulp");
var sass = require("gulp-sass");
var browserSync = require("browser-sync").create();
var minifyCSS = require("gulp-minify-css");
var uglify = require('gulp-uglify');
var rename = require("gulp-rename");
var autoprefixer = require("gulp-autoprefixer");
var plumber = require("gulp-plumber");
var svgmin = require("gulp-svgmin");

gulp.task("sass", function() {
  return gulp
    .src("app/scss/**/*.scss") // Gets all files ending with .scss in app/scss
    .pipe(
      plumber({
        errorHandler: onError
      })
    )
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(minifyCSS())
    .pipe(gulp.dest("app/css"))
    .pipe(
      browserSync.reload({
        stream: true
      })
    );
});

gulp.task("scripts", function() {
  return gulp
    .src("app/js/*.js")
    .pipe(
      plumber({
        errorHandler: onError
      })
    )
    // minify the file
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    // output
    .pipe(gulp.dest("app/js/minified"))
    .pipe(
      browserSync.reload({
        stream: true
      })
    );
});

gulp.task("watch", ["browserSync"], function() {
  gulp.watch("app/scss/**/*.scss", ["sass"]);
  gulp.watch("app/js/*.js", ["scripts"]);
  gulp.watch("app/*.html", browserSync.reload);
  gulp.watch("app/js/*.js", browserSync.reload);
  // Other watchers
});

gulp.task("browserSync", function() {
  browserSync.init({
    server: {
      baseDir: "app"
    }
  });
});

gulp.task("svgmin", function() {
  return gulp
    .src("app/img/**/*.svg")
    .pipe(svgmin())
    .pipe(gulp.dest("app/img"))
    .pipe(
      browserSync.reload({
        stream: true
      })
    );
});

var onError = function(err) {
  console.log(err);
};
