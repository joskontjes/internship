module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      files: '*.scss',
      tasks: ['sass']
    },
    sass: {
  		options: {
  			sourceMap: true
  		},
  		dist: {
  			files: {
  				'global.css': 'global.scss'
  			}
  		}
  	},
    browserSync: {
      dev: {
          bsFiles: {
              src : [
                  '*.css',
                  '*.php'
              ]
          },
          options: {
           watchTask: true,
           proxy: "joomla.box/internship"
          }
     }
   }
  });

  // Load the plugin that provides the "sass" task.
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');

  // Default task(s).
  grunt.registerTask('default', ['browserSync', 'watch']);

};
