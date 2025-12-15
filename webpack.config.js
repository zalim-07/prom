const path = require("path");
const fs = require("fs");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ImageMinimizerPlugin = require("image-minimizer-webpack-plugin");
const CopyWebpackPlugin = require("copy-webpack-plugin");

// Функция для поиска всех HTML страниц в папке pages
function getPageEntries() {
  const pagesDir = path.resolve(__dirname, "src/pages");
  const pages = [];

  if (fs.existsSync(pagesDir)) {
    const folders = fs.readdirSync(pagesDir);
    folders.forEach((folder) => {
      const pagePath = path.join(pagesDir, folder, "index.html");
      if (fs.existsSync(pagePath)) {
        pages.push({
          name: folder,
          template: `./src/pages/${folder}/index.html`,
          filename: `pages/${folder}/index.html`,
        });
      }
    });
  }

  return pages;
}

module.exports = (env, argv) => {
  const isProd = argv.mode === "production";
  const pages = getPageEntries();

  return {
    entry: "./src/js/index.js",

    output: {
      path: path.resolve(__dirname, "dist"),
      filename: "assets/js/[name].js", // без хэшей
      assetModuleFilename: (pathData) => {
        const filepath = pathData.filename;
        // Сохраняем оригинальную структуру папок для assets
        if (filepath.includes('/assets/')) {
          return filepath.replace(/.*\/assets\//, 'assets/');
        }
        return "assets/images/[name][ext]";
      },
      clean: true,
    },

    devtool: isProd ? false : "source-map",

    devServer: {
      static: path.resolve(__dirname, "dist"),
      hot: true,
      liveReload: true,
      open: true,
      port: 3000,
      watchFiles: ["src/**/*"],
      historyApiFallback: {
        rewrites: [
          ...pages.map((page) => ({
            from: new RegExp(`^\\/pages\\/${page.name}`),
            to: `/pages/${page.name}/index.html`,
          })),
        ],
      },
    },

    module: {
      rules: [
        {
          test: /\.html$/i,
          loader: "html-loader",
          options: {
            sources: {
              list: [
                {
                  tag: "img",
                  attribute: "src",
                  type: "src",
                },
              ],
            },
            minimize: false, // HTML не минифицируется
          },
        },

        // CSS
        {
          test: /\.css$/i,
          use: [
            isProd ? MiniCssExtractPlugin.loader : "style-loader",
            {
              loader: "css-loader",
              options: {
                importLoaders: 1,
                sourceMap: !isProd,
              },
            },
            {
              loader: "postcss-loader",
              options: {
                sourceMap: !isProd,
              },
            },
          ],
        },

        // SCSS
        {
          test: /\.s[ac]ss$/i,
          use: [
            isProd ? MiniCssExtractPlugin.loader : "style-loader",
            {
              loader: "css-loader",
              options: {
                importLoaders: 1,
                sourceMap: !isProd,
              },
            },
            {
              loader: "postcss-loader",
              options: {
                sourceMap: !isProd,
              },
            },
            {
              loader: "sass-loader",
              options: {
                sourceMap: !isProd,
                api: "modern",
              },
            },
          ],
        },

        // PNG → WebP
        {
          test: /\.(png|jpe?g)$/i,
          type: "asset/resource",
        },

        // Просто копируем SVG
        {
          test: /\.svg$/i,
          type: "asset/resource",
        },

        // Шрифты
        {
          test: /\.(woff2?|ttf|eot|otf)$/i,
          type: "asset/resource",
          generator: {
            filename: "assets/fonts/[name][ext]",
          },
        },
      ],
    },

    plugins: [
      // Главная страница
      new HtmlWebpackPlugin({
        template: "./src/index.html",
        filename: "index.html",
        minify: false,
      }),

      // Автоматически добавляем все страницы из папки pages
      ...pages.map(
        (page) =>
          new HtmlWebpackPlugin({
            template: page.template,
            filename: page.filename,
            minify: false,
          })
      ),

      new MiniCssExtractPlugin({
        filename: "assets/css/[name].css",
      }),

      new CopyWebpackPlugin({
        patterns: [
          { from: "src/js/main.js", to: "assets/js/main.js" },
          { from: "src/js/swiper.js", to: "assets/js/swiper.js" },
        ],
      }),

      // Конвертация PNG/JPG → WebP только в prod
      ...(isProd
        ? [
            new ImageMinimizerPlugin({
              generator: [
                {
                  type: "asset",
                  preset: "webp",
                  implementation: ImageMinimizerPlugin.imageminGenerate,
                  options: {
                    plugins: [["imagemin-webp", { quality: 80 }]],
                  },
                },
              ],
            }),
          ]
        : []),
    ],

    optimization: {
      minimize: false, // JS НЕ сжимается
      splitChunks: false,
    },

    resolve: {
      extensions: [".js", ".scss"],
    },
  };
};
