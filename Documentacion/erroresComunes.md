[Regresar](index.md)

---
Esta sección tiene la intención de documentar los errores encontrados durante el desarrollo y actualización de la página en servicios de hostinger junto con la solución encontrada para ellos

# Índice
- [Página sensible a mayúsculas](#pagina-de-hosting-es-sensible-a-mayusculas)
- [Errores con PHP artisan link:storage](#el-comando-php-artisan-linkstorage-no-funciona)
- [Comandos artisan sin acceso a SSH](#ejecutar-comandos-artisan-sin-acceso-a-ssh)
- [No funcionan las rutas de filament](#activar-las-rutas-de-filament)

# Página de hosting es sensible a mayúsculas
Si se está desarrollando en una máquina con Windows instalada, se tendrá el detalle de que como la página de hosting está basada en Linux esta es sensible a diferencias de mayúsculas/minúsculas, haciendo que si un archivo es `EjemploImagen.jpg` la referencia `ejemploImagen.jpg` funcione en el servidor local de Windows, pero no en la página de hosting.
# El comando `php artisan link:storage` no funciona
En ocasiones se puede dar el caso que el servidor tenga bloqueada la función de PHP que permite crear el symlink que une a la carpeta de storage con public. La solución a esto es cambiar la configuración del servidor y remover `symlink` de las funciones bloqueadas, en Hostinger esto se puede modificar en Lista de sitios web -> Panel -> Avanzado -> Configuración PHP -> Opciones de PHP -> disableFunctions.
# Ejecutar comandos artisan sin acceso a SSH
Algunos problemas tienen que ser solucionados ejecutando comandos en la consola, sin embargo, incluso si no se tiene el acceso al SSH de la página de hosting es posible ejecutar comandos de `artisan` por medio de la Facade de artisan que proporciona Laravel, permitiendo ejecutar cualquier comando de artisan por medio de código PHP, ejemplo.
```php
use Illuminate\Support\Facades\Artisan;

Artisan::call('config:clear');
Artisan::call('vendor:publish', [
        '--tag' => 'filament-assets',
        '--force' => true,
    ]);

```
# Activar las rutas de filament
Filament añade sus propias rutas al proyecto cuando se agrega como dependencia que no están definidas por `web.php`, haciendo que se pueda dar el caso de que cuando se suban los archivos a la página de hosting las rutas no se agreguen correctamente (se pueden ver todas las rutas definidas con `php artisan route:list`), cuando este pase es necesario "activar" estas rutas por medio del comando `php artisan vendor:publish`, aunque según otras fuentes es necesario hacer otros comandos previos para evitar otros problemas, los comandos exactos que resolvieron este problema fueron:
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan optimize:clear
php artisan vendor:publish --tag=filament-assets --force
```