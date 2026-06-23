## Episodio 17: Authorization Using Gates

### Resumen
En este episodio se implementó autorización usando **Gates** en Laravel. Se agregó un enlace al área de administrador en la navegación 
```php
    public function boot(): void
    {
        Gate::define('view-admin', function (User $user){
            return true;
        });
    }
```
y se protegió usando la directiva `@can` en las vistas :
```php
      @can('view-admin')
        <li><a href="/admin">Admin</a></li>
      @endcan
```
Tambien se mostro que para una aplicación pequeña se puede utilizar este codigo:
```php
    public function boot(): void
    {
        Gate::define('view-admin', function (User $user){
            return $user->id == 1;
        });
    } 
```
 Y luego nos muestra como tambien en la migration podemos usar el `$table->string('role');` cuando es una aplicaciíon mas de roles 




 y el método `->can()` en las rutas tambien se utiliza en el video:
 ```php
 Route::get('/admin', function(){
    return 'Private only admin';
})->can('view-admin');
 
 ```
 
 También muestra como Los Gates se definen en `AppServiceProvider` como closures que reciben el usuario actual y retornan un booleano


También se vio cómo retornar un 404 en lugar de 403 para ocultar la existencia de rutas privadas utilzó el siguiente codigo:

```php
    public function boot(): void
    {
        Gate::define('view-admin', function (User $user){
            if($user->id==1){
                return Response::allow();
            }

            return Response::denyAsNotFound();
        });
    }
```

### Archivos modificados
- `app/Providers/AppServiceProvider.php`
- `app/Models/User.php`
- `routes/web.php`
- `resources/views/components/nav.blade.php`

### Evidencia
![Admin](imagenes02/Admin.png)

![NoAutorizado](imagenes02/noAutorizado.png)

### Comentarios
Un Gate es la autorización definida como un closure que recibe el usuario autenticado y retorna un boolean. Por defecto Laravel no ejecuta el closure si el usuario no está autenticado, retornando `false` ademas que la diferencia entre 403 y 404 es importante  ya que el 403 revela que el endpoint existe pero está restringido, mientras que el 404 oculta completamente su existencia.