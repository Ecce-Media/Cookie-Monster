FROM ecceuk/craft-plugin-dev:latest
COPY . /plugin
COPY ./craft/templates /var/www/templates
COPY ./craft/web/assets /var/www/web/assets
RUN composer require ecce-media/gdpr-cookie-monster