## Episodio 19: Frontend Asset Bundling with Vite

### Resumen
En este episodio se migró el manejo de assets del frontend de CDN a un sistema local usando **Vite**. Primero lo que hicimos es eliminaron las referencias a Tailwind CSS y DaisyUI desde CDN en el layout
luego se instaló DaisyUI localmente con npm, y se configuró la directiva `@vite` para referenciar los archivos CSS y JavaScript compilados.

 También se vio cómo usar el servidor de desarrollo de Vite con hot reloading y cómo compilar los assets para producción con `npm run build` y que siempre que realicemos un cambio hay que correr el comando para ver los cambios aplicados.

### Comandos utilizados
```bash
npm install daisyui
npm run dev
npm run build
```

### Archivos modificados
- `resources/views/components/layout.blade.php`
- `resources/css/app.css`
- `resources/js/app.js`
- `vite.config.js`
- `package.json`

### Evidencia
![Quitamos](/docs/imagenes02/quitamos.png)
![RunDev](/docs/imagenes02/runDev.png)
![DaisyUI](/docs/imagenes02/DaisyUI.png)
![Run](/docs/imagenes02/RunBuild.png)
![Message](/docs/imagenes02/HelloPeople.png)
### Comentarios
Vite es una herramienta que toma nuestros archivos CSS y JavaScript, los une y optimiza en un solo archivo listo para el navegador. En lugar de cargar Tailwind y DaisyUI desde internet con un CDN, ahora los instalamos localmente y los compilamos nosotros mismos. Durante el desarrollo se ejecuta `npm run dev` para que el navegador se actualice automáticamente cada vez que guardamos un cambio. Cuando el proyecto está listo para subir a producción, se usa `npm run build` para generar los archivos finales optimizados en la carpeta `public/build/`. 