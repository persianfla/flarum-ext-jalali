const gulp = require('flarum-gulp');

gulp({
  modules: {
    'sijad/jalali': 'src/**/*.js',
  },
  files: [
    'bower_components/moment-jalaali/build/moment-jalaali.js',
  ],
});
