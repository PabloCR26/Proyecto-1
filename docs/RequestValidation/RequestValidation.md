## Episodio 09: Request Validation

### Resumen
En este episodio se implementó validación del lado del servidor en el controlador `IdeaController`
para que a la hora de pasar la entrada del usuario se cumplan algunas reglas y no sea necesario llegar hasta la consulta SQL

```bash
    public function store(Request $request)
    {
        request()->validate([

        'description' => ['required', 'min:10']
        ]);
    }

```
Luego se agrega mostró como pintar los errores con la variable `$errors` en el `create.blade.php` agregando lo siguiente:
```php

  @if ($errors->has('description'))
        <p class= "text-xs text-red-500"> {{$errors->first('description')}} </p>
    @endif

```
Luego creamos `error.balde.php` y le agregamos este codigo:

```php
@props([
    'name' => 'required'
])

@error($name)
    <p class= "text-xs text-red-500"> {{$message }} </p>
@enderror
```
Y ya podemos utilizar un componente reutilizable como es `x-form.error`


### Archivos modificados
- `app/Http/Controllers/IdeaController.php`
- `resources/views/ideas/create.blade.php`
- `resources/views/components/forms/error.blade.php`


### Evidencia
![Validación](img/episodio09-validacion.png)
![error](/docs/imagenes/error.png)
![error2](/docs/imagenes/Newerror.png)

### Comentarios
La validación del lado del servidor es esencial para proteger la base de datos de datos vacíos. Laravel redirige automáticamente de vuelta al formulario cuando la validación falla. `@error` simplifica la visualización de mensajes de error por campo. Y en la pagina de Laravel podemos ver toda la lista de errores