let mix = require("laravel-mix");

mix
  .js("src/frontend/js/index.js", "js/main.js")
  .js("src/admin/js/backoffice.js", "js/back.js")
  .sass("src/frontend/sass/index.scss", "css/main.css")
  .sass("src/admin/scss/backoffice.scss", "css/backoffice.css")
  .setPublicPath("assets")
  .sourceMaps()
  .version();
