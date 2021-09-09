const gulp = require("gulp"),
  fancylog = require("fancy-log"),
  browserSync = require("browser-sync"),
  server = browserSync.create(),
  dev_url = "http://license-booking.test/";

const { stream, watch } = require("browser-sync");
const { src } = require("gulp");
const imagemin = require("gulp-imagemin");
var concat = require('gulp-concat')


/**
 * Define all source paths
 */

var paths = {
  styles: {
    src: "./src/scss/",
    dest: "./assets/css",
  },
  scripts: {
    src: "./src/js/",
    dest: "./assets/js",
  },
  images: {
    src: "./src/images/*",
    dest: "./assets/images/",
  },
  phpFlies:{
    src: "./app/**/*.php"
  }
};

/**
 * Webpack compilation: http://webpack.js.org, https://github.com/shama/webpack-stream#usage-with-gulp-watch
 *
 * build_js()
 */

function concatJs() {
  return gulp.src([paths.scripts.src + 'admin/*.js', paths.scripts.src + 'front/*.js'])
    .pipe(concat({path: 'main.js'}))
    .pipe(gulp.dest(paths.scripts.src))
}

function build_js() {
  const compiler = require("webpack"),
    webpackStream = require("webpack-stream");

  return gulp
    .src(paths.scripts.src + 'main.js')
    .pipe(
      webpackStream(
        {
          config: require("./webpack.config.js"),
        },
        compiler
      )
    )
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(
      server.stream() // Browser Reload
    );
}

/**
 * SASS-CSS compilation: https://www.npmjs.com/package/gulp-sass
 *
 * build_css()
 */

function build_css() {
  const sass = require("gulp-sass"),
    postcss = require("gulp-postcss"),
    sourcemaps = require("gulp-sourcemaps"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano");

  const plugins = [autoprefixer(), cssnano()];

  return gulp
    .src(paths.styles.src + 'style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss(plugins))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(
      server.stream() // Browser Reload
    );
}


function image_min(){
	return gulp.src(paths.images.src)
	.pipe(imagemin())
	.pipe(gulp.dest(paths.images.dest))
	.pipe(
		server.stream() // Browser Reload
	  );
}

function watchPhp() { 
  return gulp.src('app/**/*.php')
  .pipe(
    server.stream()
  )
 }


/**
 * Watch task: Webpack + SASS
 *
 * $ gulp watch
 */

gulp.task("watch", function () {
  // Modify "dev_url" constant and uncomment "server.init()" to use browser sync
  server.init({
    proxy: dev_url,
  });

  gulp.watch([paths.scripts.src + 'admin/*.js', paths.scripts.src + 'front/*.js'], concatJs);
  gulp.watch(paths.scripts.src, build_js);
  gulp.watch(paths.styles.src + '**/*.scss', build_css);
  gulp.watch(paths.images.src, image_min);
  gulp.watch(paths.phpFlies.src, watchPhp);
  // gulp.watch([paths.phpFlies.src]).on('change', reload);
});

