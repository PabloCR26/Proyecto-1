## Episodio 06: Databases, Migrations and Eloquent

### Resumen
 En este episodio primero se configuro la base de datos a utilizar, luego nos fuimos a nuestra Maquina Virtual y ejecutamos **php artisan** para ver todo lo que podemos ejecutar, luego se migró el almacenamiento de ideas de la sesión a una base de datos creando `create_ideas_table`.
 Luego podemos ver que esta se divide en dos **up()** y **down()**, luego vamos a la migration y agregamos 

 ```
    $table->text('description');
 ```
 y se ejecuta el php artisan migrate

Y finalmente se implementó **Eloquent ORM** creando el modelo `Idea` para insertar y consultar registros. También se vio cómo agregar columnas nuevas mediante migraciones adicionales y cómo filtrar resultados con `where` en este episodio por ejemplo para buscar los pendientes
### Comandos utilizados
```bash
php artisan
php artisan make:migration create_ideas_table
php artisan migrate
php artisan make:model Idea
php artisan migrate:refresh
php artisan make:migration add_state_to_ideas_table
```

### Archivos modificados
database/migrations/xxxx_xx_xx_create_ideas_table.php
database/migrations/xxxx_xx_xx_add_state_to_ideas_table.php
app/Models/Idea.php
routes/web.php
resources/views/ideas.blade.php

### Evidencia
![artisan](/docs/imagenes/phpartisan.png)
![create](/docs/imagenes/createIdeas.png)
![artisanmigrate](/docs/imagenes/artisanmigrate2.png)
![status](/docs/imagenes/status.png)
![refresh](/docs/imagenes/refresh.png)
![state](/docs/imagenes/addState.png)
![model](/docs/imagenes/model.png)
![get](/docs/imagenes/get.png)
![where](/docs/imagenes/where.png)

### Comentarios
Se comprendió la diferencia entre almacenar información temporalmente en sesión y mantenerla en una base de datos mediante Eloquent. Las migraciones funcionan como control de versiones de la base de datos, permitiendo que cualquier miembro del equipo ejecute `php artisan migrate` para tener la misma estructura y tambien que si usamos `php artisan migrate::refresh` voy a perder todos mis datos por eso no se usa en producción
