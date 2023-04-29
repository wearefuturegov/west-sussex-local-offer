const { task, src, dest, watch, parallel } = require("gulp");
const sass = require("gulp-sass")(require("node-sass"));

task("build", () => {
  return src("./src/scss/*.scss")
    .pipe(
      sass({
        includePaths: ["node_modules", "assets"],
      }).on("error", sass.logError)
    )
    .pipe(dest("./dist/css"));
});

task("default", () => {
  watch(["./src/scss/**/*.scss"], parallel("build"));
});
