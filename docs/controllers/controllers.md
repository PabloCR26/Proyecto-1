## Episodio 08: Controllers

### Resumen
En este episodio se completaron lo que faltaba de `ideas` en este caso con create que modificamos el `web.php` con este codigo:
```php

//create
Route::get('/ideas/create', function () {
   
    return view'ideas.create';
});

 Luego se generó un controlador con `php artisan make:controller` y se movió cada acción del `web.php` al controlador, dejando las rutas limpias apuntando al controlador correspondiente.

### Comandos utilizados
```bash
php artisan make:controller IdeaController 
```
### Archivos modificados
/routes/Web.php
/IdeaController.php
/ideas/create.blade.php

### Evidencia

![nohayideas](/docs/imagenes/nohayideas.png)

![controller](/docs/imagenes/controller.png)

![nuevoControlador](/docs/imagenes/nuevoController.png)

![rutasLimpias](/docs/imagenes/RutasLimpias.png)
### Comentarios
Usar controladoresen hace el código más organizado y mantenible