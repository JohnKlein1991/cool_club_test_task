Приложение для отправки писем на фиксированный адрес.

Для того, чтобы развернуть приложение, нужно запустить следующие команды:

`docker-compose up`
`docker-compose exec php-fpm composer install`
`docker-compose exec php-fpm php artisan migrate`

После этого по адресу localhost будет отображаться форма для отправки email. 

Адрес, на который производится отправка задается в .env файле в параметре EMAIL_FROM_FORM_DESTINATION

Команда для запуска тестов:
`docker-compose exec php-fpm php artisan test` 
