## Episodio 21: When to Queue it Up

### Resumen
En este episodio se aprendió el concepto de **Queued Jobs** en Laravel primero vamos a agregar la implementacion de la clase en este caso quedaría así:
```php
class IdeaPublished extends Notification implements ShouldQueue
```
 para que el envío del email se procese en segundo plano sin hacer esperar al usuario.
 
 También se explicó la diferencia entre **queue** , **job** y **work**.
 
Luego también se creó un job de ejemplo `UpdateIdeaStatistics` y se vio cómo procesar la cola con `php artisan queue:work`.

### Comandos utilizados
```bash
php artisan tinker
php artisan make:job UpdateIdeaStatistics
php artisan queue:work
App\Jobs\UpdateIdeaStatistics::dispatch();


```

### Archivos modificados
- `app/Notifications/IdeaPublished.php`
- `app/Jobs/UpdateIdeaStatistics.php`
- `.env`



### Evidencia
![work](/docs/imagenes02/work.png)

![job](/docs/imagenes02/Job1.png)



### Comentarios
Esta Clase permiten ejecutar tareas largas en segundo plano para mejorar el rendimiento el **job** es la tarea, la **queue** es la pila de tareas pendientes y el **work** es el proceso que las ejecuta. Sin un worker corriendo con `php artisan queue:work`, los jobs quedan en la tabla `jobs` de la base de datos sin procesarse. 