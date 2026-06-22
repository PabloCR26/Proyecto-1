## Episodio 11: Authentication Explained

### Resumen

En este episodio se implementó el sistema de autenticación de usuarios en Laravel.
Primero fuimos a DaisyUI y buscamos un estilo, luego se crearon los formularios de registro e inicio de sesión 
se validaron los datos enviados por los usuarios, se almacenaron contraseñas de forma segura mediante `hash` y se configuró el inicio y cierre de sesión utilizando las herramientas de autenticación de Laravel. Además, se aprendió a mostrar diferentes elementos de la interfaz.

### Comandos utilizados

php artisan make:controller Auth/RegisteredUserController

php artisan make:controller Auth/SessionsController 

### Archivos modificados

routes/web.php
app/Http/Controllers/Auth/RegisteredUserController.php
app/Http/Controllers/Auth/SessionsController.php
resources/views/auth/register.blade.php
resources/views/auth/login.blade.php
resources/views/components/nav.blade.php
app/Models/User.php

### Evidencia

![Formulario de registro y autenticación](/docs/imagenes/formregistro.png)

![registered](/docs/imagenes/Registered.png)

![Session ](/docs/imagenes/ControllerSession.png)

![Session ](/docs/imagenes/login.png)

### Comentarios

Se comprendió el flujo completo de autenticación en Laravel, incluyendo el registro de usuarios, la validación de formularios, el almacenamiento seguro de contraseñas mediante Hash, el inicio y cierre de sesión con Auth, y el uso de las directivas @auth y @guest para personalizar la interfaz según el estado del usuario.
