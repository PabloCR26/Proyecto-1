## Episodio 13: Eloquent Relationships

### Resumen
En este episodio se definieron las relaciones Eloquent entre los modelos `Idea` y `User`. Se implementó `belongsTo` en el modelo `Idea`:
```php
 public function user()
    {

        return $this->belongsTo(User::class);

    }
```

 y `hasMany` en el modelo `User`:

 ```php
  public function ideas(): HasMany
    {
        return $this->hasMany(Idea::class);

    }
 ```
 permitiendo acceder a los datos relacionados. También se refactorizó el controlador para aprovechar estas relaciones y por ultimo dejo una intriga para el siguiente episodio.

### Comandos utilizados
php artisan tinker
App\Models\Idea::first()
App\Models\User::first()

### Archivos modificados
- app/Models/Idea.php
- app/Models/User.php
- app/Http/Controllers/IdeaController.php


### Evidencia
![Tinker](/docs/imagenes/tinker.png)

![user](/docs/imagenes/userfirst.png)

![pagina](/docs/imagenes/pagina%20Final.png)


### Comentarios
Se comprendió la diferencia entre acceder a una relación como propiedad (obtiene resultados) versus como método (obtiene el query builder).