
* Instalar Repos de terceros

* Clonar el repo
* Ejecutar los siguientes comandos
- composer install (optional)
- composer update

* copiar archivo env.example en .env

* ejecutar 
	> php artisan key:generate

* Configurar contenido de .env con la conexion la DB
* Luego de editar el .env ejecutar
	> php artisan config:cache
	> php artisan config:clear

* ejecutar 
	> php artisan migrate


composer update
configure el .env con la DB
php artisan key:generate
php artisan config:cache
php artisan config:clear
php artisan 

-----------------------------------
despues de clonar el repo:

* cp .env.example .env
* composer install
* php artisan key:generate

- instalar las dependencias en ambos entornos
  - npm (windows)
  - composer (vagrant)

si hay db realizar la migracion 

* entrar a mysql: mysql -u root -p
* create database nombre
* use nombre
* exit 
* modificar .env
* php artisan migrate