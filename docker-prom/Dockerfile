FROM wordpress:latest

# Копируем php.ini в контейнер
COPY php.ini /usr/local/etc/php/conf.d/uploads.ini

# Устанавливаем права доступа
RUN chmod 644 /usr/local/etc/php/conf.d/uploads.ini
