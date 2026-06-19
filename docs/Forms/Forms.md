## Episodio 05: Forms

### Resumen
Acá primero iniciamos cambiando el nombre de welcome a ideas, luego creamos primero un form vacío para poder inciar, uuilizando el siguiente codigo en la view
``` php
<x-layout>
<form action="">
    <textarea name="" id="" cols="30" rows="10"></textarea>
</form>
</x-layout>
```
Luego nos vamos a **tailawindcss** para traer un framework que vamos a utilizar

```php
 <div class="col-span-full">
          <label for="about" class="block text-sm/6 font-medium text-gray-900">About</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
        </div>
```
y deberia verse como la imagen 2 adjuntada en la evidencia
Luego  nos vamos a layout  y agregamos el script de tailwindcss

```php
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
```
y una vez esto hecho deberia verse como la evidencia 3 ya que netraria a funcionar tailwind 

Luego nos vamos a tomar el botón de Save que se utiliza para guardar la idea que el usuario tiene, en este caso igual en nuestro form agregamos esto:

```php
<div class="mt-6 flex items-center gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
```
Luego realizamos el methodo POST pero al guardar nos debe de dar **error 404** porque no hemos registrado una route que nos dirija a eso por eso hay que hacer una petición POST

```php
    route::POST('/ideas', function () {
        dd('hello!');
    });
```
Pero luego nos dio el **error 419** significa que  el framework incluye protección automática contra ataques entonces agregamos el:
```php
    @csrf
```
Para verificar que la protección CSRF está funcionando correctamente y que estamos recibiendo los datos del formulario, utilizamos el helper `dd()` en la ruta POST:

```php
Route::post('/ideas', function () {
    dd(request()->all());
});
```

Esto nos permite ver en pantalla todos los datos enviados por el formulario, incluyendo el token CSRF y el contenido del textarea.
Finalmente, completamos las rutas en `routes/web.php`. La ruta GET obtiene las ideas de la sesión y las pasa a la vista, la ruta POST guarda la nueva idea en sesión y redirige al inicio. También se agregó una ruta temporal para limpiar las ideas


### Archivos modificados
 `routes/web.php`
 `resources/views/ideas.blade.php`
 `resources/views/components/layout.blade.php`

### Evidencia
1
![Forms](/docs/imagenes/Forms.png)
2
![tailwind](/docs/imagenes/tailwind.png)
3
![Formato](/docs/imagenes/formato.png)
4
![save](/docs/imagenes/Save.png)
5
![csrf](/docs/imagenes/csrf.png)
6
![delete](/docs/imagenes/delete.png)
7
![idea](/docs/imagenes/idea.png)
8
![misideas](/docs/imagenes/misIddeas.png)
### Comentarios

Se comprendió el flujo completo de un formulario POST en Laravel: el error **404** ocurre cuando no existe una ruta POST registrada, y el error **419** se produce porque Laravel protege automáticamente los formularios contra ataques CSRF. La solución es agregar la directiva `@csrf` dentro del formulario, la cual genera un token que Laravel valida al recibir la solicitud.
