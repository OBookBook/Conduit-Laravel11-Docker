<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# Conduit プロジェクト - Laravel 11 実装

Conduitは、RealWorldプロジェクトの一環として、Medium.comのクローンサイトを作成するためのブログプラットフォームです。このプロジェクトは、実際の世界と同じ機能を持つプラットフォームを作ることで、学習したいフレームワークの技術を習得することを目的としています。

## ステップ1: HTMLとCSSの実装 (完了)

以下のページのHTMLとCSSを実装し、ページを作成してください。この段階では機能は実装せず、見た目のみを整えます。

- Home
- Create/Edit Article
- Article

## ステップ2: 機能の実装 (完了)

![image](https://github.com/OBookBook/Conduit-Laravel11-Docker/assets/130152109/c45eab78-f9ff-4c2e-b843-16cca7c4d757)
- Home: `http://localhost:8080/`

![image](https://github.com/OBookBook/Conduit-Laravel11-Docker/assets/130152109/160969a7-b333-4d68-98e4-47017d25788d)
- Create Article: `http://localhost:8080/article/create`

![image](https://github.com/OBookBook/Conduit-Laravel11-Docker/assets/130152109/41bde55e-3dec-4baf-bbb8-6e3f1f7615f0)
- Edit Article: `http://localhost:8080/article/1/edit`

![image](https://github.com/OBookBook/Conduit-Laravel11-Docker/assets/130152109/20da16af-0cfa-4856-b093-286f8e492647)
- Article (認証機能や著者、お気に入り機能は実装不要): `http://localhost:8080/article/show/1`

## ステップ3: テストコードの作成 (完了)

ArticleControllerの結合テスト作成
`api\tests\Feature\ArticleControllerTest.php`

```shell
php artisan test
```

## 工夫した点

- **コンポーネントディレクトリの導入**: 
  - 目的: レイアウトの共通化を通じて、コードの保守性と再利用性を向上させる。
  - 詳細: `api\resources\views\components` ディレクトリに共通レイアウトコンポーネントを配置。

- **作成ページと編集ページの統合**: 
  - 目的: 作成ページと編集ページを一つのページに統合し、コードの保守性と再利用性を向上させる。

- **バリデーション機能の実装**: 
  - 目的: 入力値のバリデーションを実装し、コントローラーとの責務を明確に分ける。
  - 方法: フォームリクエストを使用。

- **バリデーション時の入力値補完**: 
  - 目的: ユーザーに対してフィードバックを提供する。
  - 方法: Bladeテンプレートでバリデーションエラー時に入力値を補完。

# Setup

## Environment

```shell
docker-compose up -d
```

## Seed
```shell
docker-compose exec api php artisan migrate --seed
```

## Laravel
http://localhost:8080/

## phpmyadmin
http://localhost:5000/

## Container Shell
```shell
docker-compose exec api bash
```