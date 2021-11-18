# Sunflower

🌻🌻🌻Vulnerabe Web Application🌻🌻🌻

Sunflowerは以下の5つのポートを使用します。  

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
