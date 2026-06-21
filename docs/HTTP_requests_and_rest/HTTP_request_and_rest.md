## Episodio 07: HTTP Requests and REST

### Resumen
En este episodio se implementaron las operaciones CRUD completas para el recurso `ideas` siguiendo convenciones REST en este caso se hizo primero una peticion Get a ideas pero ademas se le agrego que se pueda por medio de ID. 

Además se utiliza 
```php 
Route::get('/ideas/{id}', function ($id) {
    $ideas = Idea::find($id);

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

```
Para que solo nos devuelva el primero que encuentre y no toda una coleccion de registros y luego se crea una careta ideas para crear el CRUD con las acciones `index`, `show`, `edit`. 

También se aprendió sobre **Route Model Binding**, que permite a Laravel resolver automáticamente el modelo Eloquent desde la URL sin hacer la consulta manualmente. Se usó `findOrFail()` para manejar registros inexistentes con un error 404.

```php 
$idea = Idea::findOrFail($id);
```

 También se implementó **method spoofing** con `@method('PATCH')` y `@method('DELETE')` para enviar peticiones que los navegadores no soportan nativamente.

 ```php 
//edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
   
    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});

//update
Route::patch('/ideas/{idea}', function (Idea $idea) {
   
    $idea->update([
        'description' => request('idea'),
    ]);
    return redirect('/ideas/' . $idea->id);
});

```
Y por ultimo tambien hacemos el delete tambíen que utilizamos 

```php

//destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});

```
### Archivos modificados
`routes/web.php`
 `resources/views/ideas/index.blade.php`
`resources/views/ideas/show.blade.php`
`resources/views/ideas/edit.blade.php`

### Evidencia
![Peticion](/docs/imagenes/peticion.png)

![index](/docs/imagenes/index.png)

![ideas](/docs/imagenes/showIdeas.png)

![show](/docs/imagenes/show.png)

![Find](/docs/imagenes/FindOrFail.png)

![NotFound](/docs/imagenes/Not%20Found.png)

![edit](/docs/imagenes/edit.png)

![edit](/docs/imagenes/editada.png)

![delete](/docs/imagenes/delete2.png)


### Comentarios
Se comprendió cómo Route Model Binding simplifica el código al eliminar la necesidad de buscar manualmente el modelo con **find()** o **`findOrFail()`**
 Laravel detecta automáticamente el tipo del parámetro y resuelve el modelo correspondiente. También se entendió que los navegadores solo soportan GET y POST, por lo que se usa **@method('PATCH')** y **@method('DELETE')** para simular esos métodos HTTP mediante un campo oculto que Laravel interpreta internamente.