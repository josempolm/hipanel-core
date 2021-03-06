## Необходимые пакеты

__1.__ __PHP 7.1__. (ondrej)

__2.__ __Composer__.

__3.__ __docker-compose__.

__4.__ [HiDev](https://github.com/hiqdev/hidev).

## Установка

__1.__ Склонить репозиторий [hipanel](https://git.hiqdev.com/advancedhosters/hipanel.advancedhosters.com)

__2.__ Запустить `composer install` в корне репозитория.
> Если появятся запросы на установку дополнительных пакетов (например _php-zip_ или _php-curl_) нужно будет их установить.

__3.__ Настроить __.env__ файл, используя _.env.example_ в корне репозитория.

Например:

```
ENV=dev
REAL_IP=127.0.0.1
HOSTS=local.hipanel.advancedhosters.com
API_HOSTS_LINE=hiapi.advancedhosters.com:88.208.34.69
```
где __88.208.34.69__ айпи адрес который нужно получить с помощью `ping hiapi.advancedhosters.com`

__4.__ Дальше запускаем `hidev deploy` в корне репозитория.

__5.__ Потом `docker-compose up`.

__6.__ С помощью `docker ps` можно будет узнать номер порта.

Например в _0.0.0.0:32785_, номер __32785__ использутся вместе с __REAL_IP__ для загрузки страницы в браузере.
`127.0.0.1:32785`.

> По умолчанию номер порта всегда меняется, чтобы сделать его постоянным, нужно изменить в файле `docker-compose.yml` в строке __ports:__.

Например:

```
...
    ports:
      - "0.0.0.0:1080:80"
...
```

и теперь постоянная точка входа будет `127.0.0.1:1080`.

## Ошибка

Если возникнет ошибка при переходе на `127.0.0.1:32785`, возможно проблема с неправильным айпи адресом в API_HOSTS_LINE. Нужно еще раз сделать `ping hiapi.advancedhosters.com`, поменять на правильный айпи и запустить `docker-compose down; docker-compose up`.
