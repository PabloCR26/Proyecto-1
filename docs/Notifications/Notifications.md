## Episodio 20: Notifications

### Resumen
En este episodio se implementó el sistema de **notificaciones** de Laravel, primero se migró la tabla de notificaciones, se configuró el canal de envío por email y se integró la notificación dentro del método `store` del controlador.
Luego para hacer la instalación en la maquina virtual utilizamos el siguiente comando:

```bash
sudo sh < <(curl -sL https://raw.githubusercontent.com/axllent/mailpit/develop/install.sh)
```

 También se vio cómo previsualizar los correos localmente usando **MailPit**
 pero para que todo esto funcione necesitamos levantar el mailpit, primero editamos el `.env` con:

 Configuración de mail en `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=localhost
MAIL_PORT=1025
MAIL_FROM_ADDRESS=chavespablo2605@gmail.com
```
 Y luego usar:

 ```bash
 php artisan tinker
 ```

 y luego ejecutar lo siguiente:

 ```  bash

 $user = App\Models\User::first();

 $user->notify(new App\Notifications\IdeaPublished(App\Models\Idea::latest()->first()));

 ```



### Comandos utilizados
```bash
php artisan tinker
php artisan migrate
php artisan notifications:table
php artisan make:notification IdeaPublished

```

### Archivos modificados
- `app/Notifications/IdeaPublished.php`
- `app/Http/Controllers/IdeaController.php`
- `.env`



### Evidencia
![Tinker](/docs/imagenes02/tinker.png)

![Migrations](/docs/imagenes02/migrations.png)

![Idea](/docs/imagenes02/IdeaPublished.png)

![MailPit](/docs/imagenes02/mailpit.png)

![mail](/docs/imagenes02/mail.png)

![correo](/docs/imagenes02/correo.png)



### Comentarios
Las notificaciones en Laravel permiten avisar a los usuarios mediante diferentes canales como email. Si se quiere evitar que el usuario espere mientras se envía el email, se puede implementar la interfaz `ShouldQueue` para procesarlo en segundo plano.