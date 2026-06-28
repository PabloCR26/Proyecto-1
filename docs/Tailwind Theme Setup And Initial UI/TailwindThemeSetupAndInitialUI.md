## Episodio 25: Tailwind Theme Setup And Initial UI

### Resumen
En este episodio se configuró el tema de Tailwind CSS con variables de color personalizadas como son:
```php
    --color-background: oklch(0.12 0 0);
    --color-foreground: oklch(0.95 0 0);
    --color-card: oklch(0.16 0 0);
    --color-primary: oklch(0.65 0.15 160);
    --color-primary-foreground: oklch(0.12 0 0);
    --color-border: oklch(0.24 0 0);
    --color-input: oklch(0.24 0 0);
    --color-muted-foreground: oklch(0.6 0 0);
```

 y se crearon componentes CSS reutilizables para botones y formularios que en este caso son form.css y btn.css y luego se creo el layout principal con navegación, se crearon las páginas de registro e inicio de sesión con componentes Blade reutilizables, y se implementó la lógica de autenticación en los controladores `RegisteredUserController` y `SessionsController, tambien en Routes se utilizó:
Rutas en `routes/web.php`:
```php
Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
```



### Comandos utilizados
```bash
npm run dev
php artisan make:controller RegisteredUserController
php artisan make:controller Auth/SessionsController
```

### Archivos modificados
- `resources/css/app.css`
- `resources/css/components/button.css`
- `resources/css/components/form.css`
- `resources/views/components/layout.blade.php`
- `resources/views/components/nav.blade.php`
- `resources/views/components/form/form.blade.php`
- `resources/views/components/form/field.blade.php`
- `resources/views/auth/register.blade.php`
- `resources/views/auth/login.blade.php`
- `app/Http/Controllers/RegisteredUserController.php`
- `app/Http/Controllers/Auth/SessionsController.php`
- `routes/web.php`



### Evidencia
![Inicio](/docs/imagenes02/nuevaPageHello.png)
![Inicio](/docs/imagenes02/2paso.png)
![logoPagina](/docs/imagenes02/logoPagina.png)
![route](/docs/imagenes02/route.png)
![session](/docs/imagenes02/SessionConroller.png)
![Login](/docs/imagenes02/login.png)
![error](/docs/imagenes02/error.png)
![final](/docs/imagenes02/final.png)

### Comentarios
Los componentes CSS se importan con `layer(components)` para que las clases utilitarias puedan sobrescribirlos. El cast `hashed` en el modelo `User` encripta automáticamente la contraseña al guardarla. 