# Kazoku - 家族アプリ

Laravel + Docker環境の家族向けWebアプリケーション

## セットアップ

```bash
# 1. クローン
git clone <リポジトリURL>
cd kazoku

# 2. 環境変数ファイル作成
cp src/.env.example src/.env

# 3. コンテナ起動
docker-compose up -d

# 4. 依存関係インストール
docker-compose exec app composer install

# 5. アプリケーションキー生成
docker-compose exec app php artisan key:generate

# 6. データベースマイグレーション
docker-compose exec app php artisan migrate
```

## アクセス

- **Webアプリ**: http://localhost
- **MySQL**: localhost:3306（laravel/secret）

## 開発コマンド

```bash
# 起動・停止
docker-compose up -d
docker-compose down

# Artisanコマンド
docker-compose exec app php artisan <コマンド>

# MySQL接続
docker-compose exec db mysql -u laravel -psecret laravel

# ログ確認
docker-compose logs -f
```

## 技術スタック

Laravel 11 / PHP 8.2 / MySQL 8.0 / Vite / Tailwind CSS v4

