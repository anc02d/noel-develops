module.exports = function(grunt) {
  grunt.initConfig({
    sass: {
      options: {
        outputStyle: 'expanded'
      },
      dist: {
        files: [{
          expand: true,
          cwd: 'dev/assets/sass/',
          src: '**/*.scss',
          dest: 'public_html/css',
          ext: '.css'
        }]
      }
    },
    watch: {
      files: 'dev/assets/sass/**/*.scss',
      tasks: 'sass'
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
};
