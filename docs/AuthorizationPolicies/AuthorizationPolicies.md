## Episodio 18: Authorization Using Policies

### Resumen
En este episodio se implementó autorización usando **Policies** en Laravel. A diferencia de los Gates, las Policies permiten agrupar reglas de autorización específicas para un modelo.
Se creó la clase `IdeaPolicy` asociada al modelo `Idea` como se muestra en la evidencia


 se definió el método `update` para verificar que el usuario autenticado sea el creador de la idea y asi mismo no pueda actualizar las ideas de otros usuarios lo cual no le pertenecen a el.
 
 
 
  y se aplicó la autorización en los métodos `show`, `edit`, `update` y `destroy` del controlador.

### Comandos utilizados
```bash
php artisan make:policy IdeaPolicy --model=Idea
```

### Archivos modificados
- `app/Policies/IdeaPolicy.php`
- `app/Http/Controllers/IdeaController.php`
- `routes/web.php`

### Evidencia
![Policies](/docs/imagenes02/IdeaPolicy.png)

![Gate](/docs/imagenes02/Gate.png)

![noAcceso](/docs/imagenes02/noAcceder.png)

![noAcceso](/docs/imagenes02/update-aedir.png)

### Comentarios
Las Policies son clases dedicadas a agrupar reglas de autorización para un modelo específico y también es importante proteger todas las rutas que acceden o modifican un recurso, no solo la vista principal, ya que un atacante puede hacer peticiones directamente sin pasar por el navegador.