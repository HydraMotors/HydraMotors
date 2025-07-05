# Usa imagem base do PHP com Apache
FROM php:8.2-apache

# Habilita mod_rewrite do Apache
RUN a2enmod rewrite

# Instala extensões necessárias
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copia os arquivos do projeto para o diretório padrão do Apache
COPY CRUDTCC /var/www/html/

# Define permissões apropriadas
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expondo a porta padrão do Apache
EXPOSE 80
