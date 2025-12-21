const path = require("path");

module.exports = {
  proxy: "http://localhost:8000",
  files: [
    "wordpress/wp-content/themes/prom-theme/**/*.php",
    "wordpress/wp-content/themes/prom-theme/**/*.css",
    "wordpress/wp-content/themes/prom-theme/**/*.js",
  ],
  delay: 500,
  notify: false,
  open: false,
  reloadDelay: 500,
  watchOptions: {
    ignoreInitial: true,
  },
};
