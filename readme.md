### laravel-oauth2-server-demo

Base on Laravel 5.2 & laravel-oauth2-server 5.1

### How to run

``` bash  
composer install

php artisan key:generate

php artisan migrate
```    
 
### Add sample record to tables

``` sql  
INSERT INTO oauth_clients
(id, secret, `name`, created_at, updated_at)
VALUES('1', '1', '1', STR_TO_DATE('1979-01-01 09:00:00','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('1979-01-01 09:00:00','%Y-%m-%d %H:%i:%s'));

INSERT INTO oauth_client_endpoints
(id, client_id, redirect_uri, created_at, updated_at)
VALUES(1, '1', 'http://172.16.20.39:89', STR_TO_DATE('1979-01-01 09:00:00','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('1979-01-01 09:00:00','%Y-%m-%d %H:%i:%s'));

INSERT INTO oauth_scopes
(id, description, created_at, updated_at)
VALUES('1', '1', STR_TO_DATE('1979-01-01 09:00:00','%Y-%m-%d %H:%i:%s'), STR_TO_DATE('1979-01-01 09:00:00','%Y-%m-%d %H:%i:%s'));
```



### Final

Register user and access http://localhost page
