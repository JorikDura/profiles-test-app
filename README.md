# Установка

* Склонировать проект
* Войти в созданную папку и ввести команду в терминал:

```
docker run --rm --interactive --tty -v $(pwd):/app composer install
```

* Создать .env файл на основе ```.env.example``` и настроить окружение. (Указать наименование бд, пользователя, пароль и
  т.д);
* Запустить докер контейнер командой:

```
sail up -d
```

* Войти внутрь контейнера:

```
docker exec -it profiles-test-app-php-1 bash
```

* Ввести команду

```
php artisan key:generate
```

* Запустить миграции

```
php artisan migrate
```

* Опробовать API;
