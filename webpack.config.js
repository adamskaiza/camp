// const path = require('path');                                                          /*To służy do tworzenia ścieżek. W obecnej konfiguracji nie jest potrzebne (output)*/
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncWebpackPlugin = require("browser-sync-webpack-plugin");

module.exports = function (env) {
	/*opakowany module.exports w funkcję dzięki czemu jest dostęp do zmiennej środowiskowej env*/

	console.log(`webpack in ${env.mode} mode`);

	const config = {
		// entry: "./src/js/app.js",                                                     /*Potrzebne w przypadku jednego entry.*/
		entry: {
			"dist/main.js":
				"./src/js/main.js" /*Po prawej są pliki wejściowe, po lewej wyjściowe.*/,
			"dist/style": "./src/scss/main.scss",
		},
		output: {
			// filename: "bundle.min.js",                                                 /*Potrzebne w przypadku jednego entry. Tworzy osobny plik js oraz css z app.js*/
			// path: path.resolve(__dirname, './'),                                       /*To służy do tworzenia ścieżek. W obecnej konfiguracji nie jest potrzebne*/
			filename: "[name]",
			path: __dirname /*Output tworzy ścieżki na podstawie entry.*/,
		},
		mode: env.mode,
		devtool:
			env.mode === "development"
				? "source-map"
				: false /*Moduł do tworzenia source-map*/,
		plugins: [
			// new MiniCssExtractPlugin({                                                 /*Potrzebne w przypadku jednego entry*/
			//     filename: 'style.css'
			// }),
			new MiniCssExtractPlugin() /*Plugin do wyodrębniania css do oddzielnego pliku.*/,
		],
		module: {
			rules: [
				{
					test: /\.(jpe?g|png|gif|svg)$/i,
					type: "asset/resource",
					generator: {
						filename: "dist/images/[name][ext]",
					},
				},
				{
					test: /\.(woff(2)?|ttf|otf|eot)(\?v=\d+\.\d+\.\d+)?$/,
					type: "asset/resource",
					generator: {
						filename: "dist/fonts/[name][ext]",
					},
				},
				{
					test: /\.m?js$/i,
					exclude: /(node_modules|bower_components)/,
					use: [
						{
							loader: "babel-loader",
							options: {
								presets: ["@babel/preset-env"],
								plugins: [["@babel/transform-runtime"]],
							},
						},
					],
				},
				{
					test: /\.css$/i,
					use: [MiniCssExtractPlugin.loader, "css-loader"],
				},
				{
					test: /\.s[ac]ss$/i,
					use: [
						MiniCssExtractPlugin.loader,
						"css-loader",
						{
							loader: "postcss-loader",
							options: {
								postcssOptions: {
									plugins: [["autoprefixer"]],
								},
							},
						},
						{
							loader: "sass-loader",
						},
					],
				},
			],
		},
	};

	if (env.mode === "development") {
		if (env.bs) {
			config.plugins.unshift(
				new BrowserSyncWebpackPlugin({
					files:
						"**/*.php" /*To jest niezbędne żeby aktualizowały się pliki php*/,
					port: 3000 /*Domyślny port to 3000 - wa razie kolizji tu można ustawić inny*/,
					proxy:
						"http://localhost/wit-camp/" /*Browser sync na localhost - wymaga właczenia wamp lub xamp*/,
					// proxy: "http://nas.gansa.pl/2021/jakasstrona",                            /*Browser sync na nas.gansa.pl*/
				})
			);
		}
	}
	return config;
};

//Webpack wczytuje "use" od dołu do góry.
//Kolejność wczytywania ma znaczenie, bo przetworzone dane są przekazywane dalej.

//W pliku package.json symbol ^ oznacza, że musi się zgadzać pierwsza cyfra w wersji. (Semantic Versioning)

//Bez "babel" importowanie plików js będzie bardziej skomplikowane.

//Komenty startowe:
//npm run start - odpala webpacka w trybie developerskim
//npm run watch - odpala webpacka w trybie developerskim z funkcją watch
//npm run watch-bs - odpala webpacka w trybie developerskim z funkcją watch i browser sync (to wymaga dodatkowo wklejenia skryptu w kod strony i odpalenia php np. wamp)
//npm run build - odpala webpacka w trybie produkcyjnym. Z pliku wynikowego usuwa komentarze, minifikuje itp.
