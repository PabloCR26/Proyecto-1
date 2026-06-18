## Episodio 02: Layout Files

### Resumen
En el episodio dos también aun nos muestran algo de rutas en este caso como abreviarlas.
Por ejemplo pasamos de esto:
```php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');


});
```
A esto: 

```php
Route::view('/', 'welcome');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
```
Luego seguimos creamos una carpeta creada components y creamos el layout que son componentes unicos que se van a utilizar mucho y utilizamos lo primordial que es:
```php
<x-layout>
```
para que se muestre el archivo layout donde ahi esta la href que dirigen a las otras paginas

Y se usa tambien el **{{ $slot }}** es el espacio donde se inyecta el contenido de cada página que use este layout.

Para después agregarle un Style en este caso vamos a hacer:
```php
    <style>
        nav a {
            color: blue;
        }
    </style>
```
tambien agregamos luego el 
```php
@props([
    'title' => 'Laracasts'
])
```
y ponemos en {{ Title }} para que se muestre la pagina en la cual estamos pero también hay que modificar en donde dice layout a la par ponemos tittle y el nombre que quiere que se muestre
Y luego creamos un nuevo componente de card para utilizarla como se muestra:
```php
<div class="card" style="background: #e3e3e3; padding: 1rem; text-align: center;">
    {{ $slot }}

</div>
```
Y tambien podemos sobreescribir las card pero debemos utilizar
 {{ $attributes }} en el componente.

### Archivos modificados
/routes/Web.php
views/welcome.blade.php
views/contact.blade.php
components/layout.blade.php
components/card.blade.php

### Evidencia
![layout](/docs/imagenes/layout.png)
![style](/docs/imagenes/style.png)
![layouts](/docs/imagenes/layouts.png)
![Tittle](/docs/imagenes/Tittle.png)
![card](/docs/imagenes/card.png)

### Comentarios
Acá aprendimos como se puede sobreescribir atributos y dar un estilo diferente