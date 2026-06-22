## Episodio 12: Require Authentication With Middleware


### Resumen
En este episodio se asoció cada idea a un usuario mediante una clave foránea con restricción de cascada como se muestra aca:

```php
    public function up(): void
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->foreingIdFor('User::class')->constrained()->onDelete();
            $table->text('description');
            $table->string('state');
            $table->timestamps();

        });
    }

```
También se aplicó middleware de autenticación para proteger rutas y se hizo la prueba tocando el index y nos da error porque el login es necesario,
 Se filtró el listado de ideas por usuario autenticado y por ultimo se hizo y se demostro que los usuarios solo pueden ver sus ideas y no las de los demás.

### Comandos utilizados
php artisan migrate:fresh
php artisan tinker
User::factory()->create()

### Archivos modificados
- database/migrations/xxxx_xx_xx_create_ideas_table.php
- app/Http/Controllers/IdeaController.php
- bootstrap/app.php
- routes/web.php
- resources/views/ideas/index.blade.php

### Evidencia
![refresh](/docs/imagenes/refresh1.png)

![login](/docs/imagenes/loginRequerido.png)

![Rutas](/docs/imagenes/nuevasRutas.png)

![Factory](/docs/imagenes/factory.png)

![vinculo](/docs/imagenes/vinculo.png)


### Comentarios
Se comprendió cómo proteger rutas con middleware y cómo asociar modelos entre sí mediante claves foráneas, garantizando que cada usuario solo vea sus propias ideas.