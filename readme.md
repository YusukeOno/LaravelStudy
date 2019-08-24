# LaravelStudy
Studying is fun for me. Laravel 5.5 (LTS)

## Laravel導入した手順

Composerを導入した手順は省略する。

LaravelStudyディレクトリ配下にLaravel5.5をインストールする。

```
$ composer create-project laravel/laravel LaravelStudy --prefer-dist 5.5.*
$ cd LaravelStudy
$ git init
$ git add .
$ git commit -m "ここにコミットログを書く。"
$ git remote add origin git@github.com:[ここにユーザー名/リポジトリ名].git
$ git push -u origin master
```

### ローカルで動作確認する

```
$ php artisan serve
```

## Docker

Dockerコンテナを立ち上げる。(-dオプションでバックグラウンドで実行。--buildオプションで起動前にイメージをビルド。
```
docker-compose up -d --build
```

### Web-APP-DB構成
```
(8080:80) nginx -> PHP -> MySQL
(8443:443) nginx -> PHP -> MySQL
```