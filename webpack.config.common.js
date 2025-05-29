const path = require('path');

const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    context: path.resolve(__dirname, "src"),
    entry: './js/index.js',
    output: {
        path: path.resolve(__dirname, 'dist/js/'),
        filename: 'main.js',
        clean: true,
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "../css/[name].css",
        }),
        new CopyWebpackPlugin({
            patterns: [
                {
                    from: path.resolve(__dirname, 'src/**/*.php'),
                    to: path.resolve(__dirname, 'dist')
                },
            ],
        }),
    ],
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            importLoaders: 1
                        }
                    },
                    {
                        loader: 'postcss-loader'
                    }
                ]
            },
        ]
    },
};