
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

	copia ejemplo de env
	* cp .env.example .env

	instalar dependencias en vg
	* composer install

	generar llave para migraciones
	* php artisan key:generate

	instala dependencias en lc
	* npm (windows)

	realiza la migración
	* php artisan migrate

si hay db realizar la migracion 

	* entrar a mysql: mysql -u root -p
	* create database nombre y salir {exit}
	* modificar .env
		- cambiar el local, user y password
	Realizar la migración
	* php artisan migrate

