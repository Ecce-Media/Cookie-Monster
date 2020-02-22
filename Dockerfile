FROM ecceuk/craft-plugin-dev:latest
COPY . /plugin
RUN composer require ecce-media/gdpr-cookie-monster