## Episodio 03: Pass Data To Views

### Resumen
Empezamos pasandole el saludo a la ruta y lo que hacemos es hacer eco o en otras palabras pasarle datos de greeting a la view para que se vea el Hello Word al inicio, después mandamos que salude con nuestro nombre y lo mostramos en la pagina con el codigo en el web
```php
Route::view('/', 'welcome', [
    'greeting' => 'Hello',
    'person' => 'José Pablo'
]);
```
```php
<x-layout>
<p>
   {{$greeting}}, {{$person}}!
</p>
</x-layout>
```
Pero tambien se muestra como hacerlo por medio del request
```php
Route::view('/', 'welcome', [
    'greeting' => 'Hello',
    'person' => request('person'),
]);
```
Pero esto puede ser peligroso por eso se debe utilizar un filtro para que los datos no sean tan vulnerables

### Archivos modificados
/routes/Web.php
views/welcome.blade.php


### Evidencia
![greeting](/docs/imagenes/viewGreeting.png)
![view](/docs/imagenes/greeting.png)
![pagina](/docs/imagenes/viewpagina.png)
![pagina](/docs/imagenes/saludoNombre.png)
![pagina](/docs/imagenes/saludo.png)
![request](/docs/imagenes/request.png)
### Comentarios
Se da a entender que cuando usa una view se le pueden pasar datos a esa View 

