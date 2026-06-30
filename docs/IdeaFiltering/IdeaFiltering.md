# Episodio 29: Idea Filtering

## Resumen

En este episodio se agregó la funcionalidad de filtrado para las ideas según su estado.
 luego se pueden ver todas sus ideas o filtrarlas. Para esto se utilizó el query string de la URL y consultas condicionales con Eloquent.

 y luego hacemos un composer run format

## Comandos utilizados

```bash
composer run format
```

## Archivos modificados

- app/Http/Controllers/IdeaController.php
- app/Models/Idea.php
- app/IdeaStatus.php
- resources/views/idea/index.blade.php
- resources/views/components/card.blade.php

## Evidencia

![Filtrado de ideas por estado](/docs/imagenes02/URLPending.png)
![Filtrado de ideas por estado](/docs/imagenes02/URLCompleted.png)
![Filtrado de ideas por estado](/docs/imagenes02/botones.png)
![Counts](/docs/imagenes02/counts.png)
![composer](/docs/imagenes02/composer.png)

## Comentarios

En este episodio aprendí a filtrar información usando parámetros en la URL, como `?status=pending`. Además, se agregaron botones para filtrar las ideas y se mostraron contadores para saber cuántas ideas hay en cada estado. Esto ayuda a que la página sea más ordenada y fácil de usar. 