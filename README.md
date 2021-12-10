# Sunflower

🌻🌻🌻Vulnerabe Web Application for Himawari🌻🌻🌻

![Sunflower_Gopher](./Sunflower_Gopher.png)

The Gopher character is based on the Go mascot designed by Renée French.

SunflowerはHimawariのテスト用に作製した脆弱なWebアプリケーションです。  
以下8種類の脆弱性を再現しています。

- Cross-Site Scripting(Reflected・Stored)
- SQL Injection
- Cross-Site Request Forgery
- OS Command Injection
- Directory Traversal
- Open Redirect
- HTTP Header Injection
- Directory Listing

対象の実装次第でどこでも脆弱性は生まれ得るので、  
OS Command InjectionをURL、クエリパラメータ(name, value両方)、Cookie、User Agent、Referer、POSTボディ(name, value両方)に実装しました。

その他ログイン必須ページやセッションに保存されたデータでの攻撃など、幅広いシナリオに対応しています。

## ports

以下の5つのポートを使用します。  

- 18080 nginx
- 18081 nginx-php (very old)
- 3306 mysql
- 1433 mssql
- 5432 pgsql

## run

以下のコマンドを実行すると、Sunflowerが起動します。  
先述のポートが未使用なことを確認してから実行してください。

```sh
sudo docker-compose up -d
```

## stop

以下のコマンドを実行すると、Sunflowerが停止します。  
DBがリセットされないことに注意してください。

```sh
sudo docker-compose down
```

## reset

以下のコマンドを実行すると、Sunflowerが停止し、DBがリセットされます。

```sh
sudo docker-compose down -v
```
