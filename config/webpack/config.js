const path = require('path');
const { argv } = require('yargs');
const merge = require('webpack-merge');

const isProduction = !!((argv.env && argv.env.production) || argv.p);
const rootPath = process.cwd() + '/web/app/themes/spaceyeti';

const config = {
  entry: {
    main: [
      'scripts/main.js',
      'styles/main.scss',
    ],
  },
  open: false,
  copy: 'images/**/*',
  proxyUrl: 'http://localhost:9000',
  publicPath: '/app/themes/spaceyeti',
  paths: {
    root: rootPath,
    assets: path.join(rootPath, 'assets'),
    dist: path.join(rootPath, 'dist'),
  },
  enabled: {
    sourceMaps: !isProduction,
    optimize: isProduction,
    cacheBusting: isProduction,
    watcher: !!argv.watch,
  },
  devUrl: 'http://localhost:9000',
  cacheBusting: '[name]_[hash:8]',
  watch: [
    'app/**/*.php',
    'config/**/*.php',
    'resources/views/**/*.php'
  ]
}

module.exports = merge(config, {
  env: Object.assign({ production: isProduction, development: !isProduction }, argv.env),
  publicPath: `${config.publicPath}/${path.basename(config.paths.dist)}/`,
  manifest: {},
});

if (process.env.NODE_ENV === undefined) {
  process.env.NODE_ENV = isProduction ? 'production' : 'development';
}

/**
 * If your publicPath differs between environments, but you know it at compile time,
 * then set SAGE_DIST_PATH as an environment variable before compiling.
 * Example:
 *   SAGE_DIST_PATH=/wp-content/themes/sage/dist yarn build:production
 */
/* if (process.env.SAGE_DIST_PATH) {
  module.exports.publicPath = process.env.SAGE_DIST_PATH;
} */

/**
 * If you don't know your publicPath at compile time, then uncomment the lines
 * below and use WordPress's wp_localize_script() to set SAGE_DIST_PATH global.
 * Example:
 *   wp_localize_script('sage/main.js', 'SAGE_DIST_PATH', get_theme_file_uri('dist/'))
 */
// Object.keys(module.exports.entry).forEach(id =>
//   module.exports.entry[id].unshift(path.join(__dirname, 'helpers/public-path.js')));
