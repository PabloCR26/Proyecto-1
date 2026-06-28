# Episodio 27: Flash Messaging and Interactivity with AlpineJS

## Resumen
En este episodio se agregó un sistema de notificaciones para informar al usuario cuando una acción se realiza correctamente, como el inicio de sesión. También se integró AlpineJS para añadir funciones dinámicas a la interfaz, permitiendo que los mensajes aparezcan de forma visual y desaparezcan automáticamente después de unos segundos.

## Comandos utilizados

```bash
npm install alpinejs
```

## Archivos modificados

- resources/views/components/layout.blade.php
- resources/js/app.js
- app/Http/Controllers/SessionsController.php
- app/Http/Controllers/RegisteredUserController.php

## Evidencia

![Mensaje](/docs/imagenes02/mensaje.png)

![install](/docs/imagenes02/install%20alpinejs.png)

![changed](/docs/imagenes02/changed.png)

![time](/docs/imagenes02/time.png)

## Comentarios

En este episodio aprendí a usar mensajes flash en Laravel y a implementar AlpineJS para agregar interactividad a la aplicación. También pude crear notificaciones que se muestran temporalmente y desaparecen automáticamente después de unos segundos.