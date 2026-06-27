## Episodio 24: Design Your Model Layer

### Resumen
En este episodio se diseñó la capa de modelos del proyecto final. Se crearon los modelos `Idea` y `Step` con sus respectivas migraciones en este caso primero se inicio con idea y se agrego el siguiente codigo: 
```php 
    public function up(): void
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();            
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('status')->default('pending');
            $table->string('image_path')->nullable();
            $table->json('links')->default('[]');
            $table->timestamps();
        });
    }


```
Luego nos vamos a configurar el boot de AppService, para proseguir a configurar el `idea.php` también se definieron las relaciones entre modelos: un `User` tiene muchas `ideas`, una `Idea` pertenece a un `User` y puede tener muchos `Steps`, y cada `Step` pertenece a una `Idea`. 

También se creó el enum `IdeaStatus` para manejar los estados de una idea y se escribieron pruebas unitarias para verificar las relaciones.
 
 Además que se realizó factories, políticas y controladores, pero ademas no se pudo realizar test ya que la version php no es compatible.

### Comandos utilizados
```bash
php artisan make:model Idea 
php artisan make:model Step 
php artisan make:enum 
php artisan make:test IdeaTest
php artisan migrate
php artisan tinker
```

### Archivos modificados
- `database/migrations/xxxx_create_ideas_table.php`
- `database/migrations/xxxx_create_steps_table.php`
- `app/Models/Idea.php`
- `app/Models/Step.php`
- `app/Models/User.php`
- `app/Enums/IdeaStatus.php`
- `database/factories/IdeaFactory.php`
- `database/factories/StepFactory.php`
- `tests/Unit/IdeaTest.php`
- `tests/Pest.php`

### Evidencia
![Model Layer](/docs/imagenes02/modeloIdea.png)

![enum](/docs/imagenes02/enum.png)

![status](/docs/imagenes02/status.png)

![ideasStatus](/docs/imagenes02/IdeaStatus.png)

![ModelStep](/docs/imagenes02/modelStep.png)

![RawIdea](/docs/imagenes02/IdeaRaw.png)

![makeIdea](/docs/imagenes02/makeIdea.png)

 


### Comentarios
Los enums de PHP permiten definir un conjunto fijo de valores para un campo, evitando referencias a strings dispersas en el código. El método `label()` dentro del enum centraliza el texto que se muestra en la interfaz. `Model::unguard()` desactiva la protección de asignación masiva globalmente y `Model::shouldBeStrict()` activa la detección de errores como lazy loading y acceso a atributos inexistentes. Las factories permiten generar datos de prueba rápidamente para los tests.