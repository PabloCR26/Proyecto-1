# Episodio 28: Idea Cards

## Resumen

En este episodio se comenzó a construir la sección principal de la aplicación para visualizar las ideas registradas por cada usuario. Se creó un controlador para manejar las ideas, se configuraron las rutas necesarias y se implementó una vista que muestra las ideas en formato de tarjetas. Además, se utilizó Eloquent para obtener únicamente las ideas pertenecientes al usuario autenticado y se mejoró la presentación mediante componentes Blade reutilizables.

## Comandos utilizados

```bash
php artisan make:controller IdeaController --resource
php artisan make:view ideas/index
php artisan tinker
```

## Archivos modificados

- routes/web.php
- app/Http/Controllers/IdeaController.php
- app/Models/Idea.php
- resources/views/ideas/index.blade.php
- resources/views/components/card.blade.php
- resources/views/components/idea/status-label.blade.php

## Evidencia

![ideas2](/docs/imagenes02/Ideas2.png)

![pending](/docs/imagenes02/pending.png)

## Comentarios

En este episodio aprendí a mostrar la información almacenada en la base de datos utilizando tarjetas visuales. También aprendí a obtener únicamente las ideas del usuario que ha iniciado sesión y a organizarlas en una cuadrícula para mejorar su visualización.

Además, se crearon componentes Blade reutilizables para las tarjetas y las etiquetas de estado, permitiendo mostrar de forma dinámica si una idea está pendiente, en progreso o completada.