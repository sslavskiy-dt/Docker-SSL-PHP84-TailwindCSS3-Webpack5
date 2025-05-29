# Docker-SSL-PHP84-TailwindCSS3-Webpack5

## Stack

- PHP 8.4
- TailwindCSS v3.4.17 (latest)
- webpack

## Requirements for workstation

- NodeJS
- Docker Desktop
- VSCode (+ plugins)

## Development

### Start

> npm install\
> docker compose up -d\
> npm run dev

[Open site in browser (https://localhost)](https://localhost)

### Stop

> docker compose stop

or

> docker compose down

## Production

> npm install\
> npm run build

[Open site in browser (https://localhost)](https://localhost)

All data for production stored in "dist" folder.

## Links

[Simple Webpack Configuration (JS & PostCSS - Tailwind) | WordPress](https://www.youtube.com/watch?v=6DknOk_NrG4)

[Production Webpack Configs with Image Optimization | WordPress](https://www.youtube.com/watch?v=TlJT5ZDWZSc)

[CssMinimizerWebpackPlugin](https://webpack.js.org/plugins/css-minimizer-webpack-plugin/)

[CopyWebpackPlugin](https://webpack.js.org/plugins/copy-webpack-plugin/)

[Setup an Apache, PHP, and HTTPS development environment with Docker](https://dockerwebdev.com/tutorials/docker-php-development/)