//Basic gulp setup to handle auto refreshing and test environment
const gulp = require('gulp');
const bs = require('browser-sync');

const allFiles = ['**/scss/**/*.scss', '*.php', '**/js/*.js'];

gulp.task('watch-files', () => {
    bs.stream();
    bs.init({
        proxy: 'http://localhost/classic-events/',
        files: allFiles,
        injectChanges: true
    });
    gulp.watch(allFiles);
});

gulp.task('default', ['watch-files']);