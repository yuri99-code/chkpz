import gulp from "gulp";
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);
import rename from "gulp-rename";
import browserSync from "browser-sync";
import concat from "gulp-concat";
import uglify from "gulp-uglify";
import cleanCSS from "gulp-clean-css";
import autoprefixer from "gulp-autoprefixer";

gulp.task("sass", function () {
    return gulp
    .src("app/scss/**/*.scss")
    .pipe(sass())
    .pipe(
        autoprefixer({
            overrideBrowserslist: ["last 8 versions"],
            cascade: false,
        })
    )
    .pipe(cleanCSS({ level: 2 }))
    .pipe(concat("style.min.css"))
    .pipe(gulp.dest("app/css"))
    .pipe(browserSync.stream());
});

gulp.task("style", function () {
    return gulp
    .src([
        "node_modules/normalize.css/normalize.css",
        "node_modules/bootstrap/dist/css/bootstrap-grid.min.css",
        "node_modules/swiper/swiper-bundle.min.css",
    ])
    .pipe(concat("libs.min.css"))
    .pipe(cleanCSS({ level: 2 }))
    .pipe(gulp.dest("app/css"));
});

gulp.task("script", function () {
    return gulp
    .src([
        "node_modules/swiper/swiper-bundle.min.js",
    ])
    .pipe(concat("libs.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("app/js"));
});

gulp.task("html", function () {
    return gulp.src("app/*.html").pipe(browserSync.reload({ stream: true }));
});


gulp.task('customJs', function () {
    return gulp.src('app/js/main.js')
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('app/js/min/'))
});


gulp.task("js", function () {
    return gulp.src("app/js/*.js").pipe(browserSync.reload({ stream: true }));
});

gulp.task("browser-sync", function () {
    browserSync.init({
        server: {
            baseDir: "app/",
        },
    });
});

gulp.task("watch", function () {
    gulp.watch("app/scss/**/*.scss", gulp.parallel("sass"));
    gulp.watch("app/*.html", gulp.parallel("html"));
    gulp.watch("app/js/*.js", gulp.parallel("js"));
});

gulp.task(
    "default",
    gulp.parallel("style", "script", "sass", "customJs", "watch", "browser-sync")
);
