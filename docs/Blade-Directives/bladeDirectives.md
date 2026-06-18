## Episodio 04: Blade Directives

### Resumen
En este episodio iniciamos viendo como no se puede pasar un array a htmlspecialchars, luego nos muestra como podemos usar cosas de blade para que eso no pase como el metodo:
```php
<x-layout>
@dump($tasks)
</x-layout>
```
y en la ruta hacemos esto
```php
Route::get('/', function () {
    return view('welcome',[
        'tasks' => [
            'Go to the store',
            'Go to the bank',
            'Go to the post office'
        ]

    ]);
});
```
Pero podemos usar unas que nos abrevian más el trabajo y que pueden ser de gran ayuda como si usamos 
```php
    @foreach ($tasks as $tasks) 
        <li>{{ $task }} </li>
        @endforeach
    
```
Pero tambien se pueden utilizar muchos más como **@if** o en caso de que se traigan datos de la base de datos en este caso y no existan tareas con @empty podremos poner otra condicional, vendria siendo como el else
Y tambien existen otras como:

```php
    @auth
    @guest
    @can
```
en este caso @auth: muestra el contenido solo si el usuario está logueado
@guest muestra el contenido solo si el usuario no está logueado
@can muestra el contenido si el usuario tiene un permiso específico

### Archivos modificados
/routes/Web.php
views/welcome.blade.php

### Evidencia
![tasks](/docs/imagenes/Tasks.png)
![Foreach](/docs/imagenes/Foreach.png)


### Comentarios
En este episodio se exploraron las directivas de Blade para manejar datos y control de acceso. Se aprendió a pasar arrays desde las rutas a las vistas, usar @dump para depuración, y recorrer datos con @foreach
