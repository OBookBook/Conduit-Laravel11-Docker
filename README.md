<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 開発環境構築

```shell
./init.sh
```

# Laravel
http://localhost:8080/

# phpmyadmin
http://localhost:5000/


# in Container
```shell
docker-compose exec api bash
```

# ホットリロード Laravel documents
https://laravel.com/docs/11.x/

# api\vite.config.js
```js 
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            usePolling: true
        }
    }
});
```

or

# Laravel + Next.js 開発環境

# Laravel ダウンロード

```shell
composer create-project laravel/laravel ./api # 最新
or
composer create-project laravel/laravel:^9.0 ./api # バージョン指定
```

# Next.js ダウンロード

```shell
git clone https://github.com/laravel/breeze-next.git ./client # Gitから
or
npx create-next-app@latest ./client # 最新
```

# Docker 起動

```shell
docker-compose up -d
```
