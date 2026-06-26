## Episodio 23: Final Project Setup

### Resumen
En este episodio se inició el proyecto final llamado **Idea**, una aplicación para registrar y rastrear ideas de cursos. Se creó el proyecto con Laravel, en este caso yo lo maneje de manera local ya que aplicación que el utiliza es de pago que se muestra en las evidencias, lo que hice fue hacer igual el `laravel new idea --pest` lo configuré, luego configure el .conf:
```
<VirtualHost *:80>
    ServerName idea.isw811.xyz
    ServerAlias www.idea.isw811.xyz
    ServerAdmin webmaster@localhost
    DocumentRoot /vagrant/sites/lfts.isw811.xyz/idea/public
    DirectoryIndex index.php index.html
    <Directory /vagrant/sites/lfts.isw811.xyz/idea/public>
        Options FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/idea_error.log
    CustomLog ${APACHE_LOG_DIR}/idea_access.log combined
</VirtualHost>

``` 
y tambien el hosts:

```
192.168.56.10 idea.isw811.xyz
```
y luego cree la base de datos y la migración y seguidamente configuramos el .env:

```
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=idea
DB_USERNAME=escritor
DB_PASSWORD=secret 

```

 También se configuraron herramientas de desarrollo como **Pint** para formateo de código, **Rector** para modernización de PHP, y **Laravel Boost** para integración con IA mediante servidores MCP.

### Comandos utilizados
```bash
laravel new idea --pest
composer run format
composer require rector/rector --dev
composer require driftingly/rector-laravel --dev
vendor/bin/rector
php artisan boost:install
```

### Archivos modificados
- `composer.json`
- `rector.php`



### Evidencia
![Final Project Setup](/docs/imagenes02/nuevaPagina.png)

![habilitar](/docs/imagenes02/habilitar.png)

![rector](/docs/imagenes02/rector.png)

![rectorLaravel](/docs/imagenes02/rectorLaravel.png)

![rector3](/docs/imagenes02/rector3.png)

![install](/docs/imagenes02/installboost.png)

![install2](/docs/imagenes02/install2.png)

### Comentarios
Pint es un formateador de código opinado que sigue las convenciones de Laravel,. Rector es una herramienta que moderniza el código PHP automáticamente, Laravel Boost provee contexto al AI sobre el proyecto para que genere código más preciso. Crear un script `composer run format` permite ejecutar todas las herramientas de calidad de código con un solo comando antes de cada commit.