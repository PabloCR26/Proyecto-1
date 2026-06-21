## Episodio 10: Form Request Validation

### Resumen
En este episodio se aprendió a extraer la validación del controlador a una clase. Se generó la clase `StoreIdeaRequest` con `php artisan make:request`, se definieron las reglas de validación que en este caso son:

```php
    public function rules(): array
    {
        return [
            'description' => ['required', 'min:10'],
        ];
    }
```
y se sustituyó el parámetro `Request` en el controlador por `IdeaRequest`, lo que hace que la validación se ejecute automáticamente antes de llegar al método.

 También se vio cómo personalizar los mensajes de error mediante el método `messages()`.

 ```php
     public function messages(): array
    {
        return [
            'description.required' => 'vamos,escribe algo!!!',
        ];
    }
 ```



### Comandos utilizados
```bash
php artisan make:request IdeaRequest
```

### Archivos modificados
- `app/Http/Requests/IdeaRequest.php`
- `app/Http/Controllers/IdeaController.php`
- `resources/views/ideas/edit.blade.php`


### Evidencia
![Request](/docs/imagenes/StoreIdea.png)

![edit](/docs/imagenes/metodoEdit.png)

### Comentarios
Una clase Form Request permite separar la lógica de validación del controlador, lo que resulta útil cuando las reglas son complejas o se reutilizan en múltiples acciones. Si las reglas de validación