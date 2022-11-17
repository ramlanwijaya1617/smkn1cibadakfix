const mix = require("laravel-mix");
require("laravel-mix-svg-vue");
require("laravel-mix-bundle-analyzer");
const path = require("path");
const directoryName = path.basename(__dirname);
const config = require("./webpack.config");

mix.setPublicPath("./");
mix.webpackConfig(config);

mix.browserSync(directoryName + ".test");

mix.postCss("resources/css/app.css", "dist/css").options({
    processCssUrls: false,
    postCss: [
        require("postcss-import"),
        require("tailwindcss/nesting"),
        require("tailwindcss"),
        require("autoprefixer"),
    ],
}).postCss("resources/css/wp-editor.css", "dist/css").options({
    processCssUrls: false,
    postCss: [
        require("postcss-import"),
        require("tailwindcss/nesting"),
        require("tailwindcss"),
        require("autoprefixer"),
    ],
});

mix.copyDirectory("resources/images/default", "dist/images/default");
mix.js("resources/js/app.js", "dist/js")
    .vue({ version: 3 })
    .extract(["crypto-js", "laravel-mix-svg-vue", "axios", "gsap"])

    .svgVue({
        svgPath: "resources/images/svg",
        extract: false,
        svgoSettings: [
            { removeTitle: true },
            { removeViewBox: false },
            { removeDimensions: true },
        ],
    })
    .version();
mix.sourceMaps().version();
mix.disableSuccessNotifications();

if (!mix.inProduction()) {
    mix.bundleAnalyzer();
}
