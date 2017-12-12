var gulp = require("gulp");
var browserSync = require("browser-sync").create();
var header = require("gulp-header");
var cleanCSS = require("gulp-clean-css");
var rename = require("gulp-rename");
var uglify = require("gulp-uglify");
//var pkg = require("./package.json");
var concat = require('gulp-concat');

// Set the banner content
var banner = "";

// Compile LESS files from /less into /css


// Minify compiled CSS
gulp.task("minify-css",function () {

    var files = [
        "../public/css/*.css",
    
    ];

    return gulp.src(files)
        .pipe(cleanCSS({ compatibility: "ie8" }))
        .pipe(concat("all-styles-compiled.css"))
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest("dist/css"))
        .pipe(browserSync.reload({
            stream: true
        }));
});

// Minify bootstrap V4 
gulp.task("minify-cssv",function () {
    
        var files = [
            "../source/css/bsv/*.css",
        
        ];
    
        return gulp.src(files)
            .pipe(cleanCSS({ compatibility: "ie8" }))
            .pipe(concat("all-styles-compiled.css"))
            .pipe(rename({ suffix: ".min" }))
            .pipe(gulp.dest("dist/css"))
            .pipe(browserSync.reload({
                stream: true
            }));
    });



// Copy JS to dist
gulp.task("minify-js",
    function () {

        var files = [
            "../source/js/*.js",
           
        ];

        return gulp.src(files)
            .pipe(concat("all-scripts-compiled.js"))
            //.pipe(uglify())
            .pipe(rename({ suffix: ".min" }))
            .pipe(gulp.dest("dist/js"))
            .pipe(browserSync.reload({
                stream: true
            }));
    });


// Run everything
gulp.task("default", ["minify-css", "minify-js"]);

// Configure the browserSync task
gulp.task("browserSync",
    function () {
        browserSync.init({
            server: {
                baseDir: ""
            }
        });

    });

// // Dev task with browserSync
// gulp.task("dev", ["browserSync", "less", "minify-css", "minify-js"], function () {
//     gulp.watch("less/*.less", ["less"]);
//     gulp.watch("source-css/*.css", ["minify-css"]);
//     gulp.watch("source-css/**/*.css", ["minify-css"]);
//     gulp.watch("source-js/*.js", ["minify-js"]);
//     gulp.watch("source-js/**/*.js", ["minify-js"]);
//     gulp.watch("JavaScript-Mvc-framework/*.js", ["js-mvc"]);
//     gulp.watch("JavaScript-Mvc-framework/**/*.js", ["js-mvc"]);
//     // Reloads the browser whenever HTML or JS files change
//     gulp.watch("views/*.html", browserSync.reload);
//     gulp.watch("dist/js/*.js", browserSync.reload);
// });
