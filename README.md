# Documentación página CECyTE  
### 29/11/2025
---
# Índice
- [Instalación local](#instalación-local)
- [Dependencias usadas](Documentacion/dependencias.md)
- [Vistas existentes](Documentacion/vistas.md)
- [Errores encontrados](Documentacion/erroresComunes.md)
   
---
# Instalación local
1. Se necesita una instalación de Laravel, PHP y composer. Además, si se desea poder visualizar la página, se necesita un proveedor de servidor web y un proveedor de base de datos 

    + El setup recomendado para Servidor y base de datos es "Laravel Herd" y "DBengine", ambos opciones gratis
    + ADVERTENCIA: Como el proyecto utiliza Filament y este requiere que sus páginas se accedan con el formato `https://nombreDominio/admin` el proveedor de servidor web xampp es incompatible con estas páginas.

2. Comprueba que la instalación fue correcta corriendo en cmd `php -v`, `composer -v` y `laravel -v`. O intentando crear un proyecto de Laravel  nuevo con el comando `laravel new NombreDelProyecto`
3. Una vez todo funciona, haz una copia local del repositorio con `git clone` o descarga zip
4. En el folder con los archivos del proyecto clonado, usa el comando `composer install` para instalar todas las dependencias del proyecto
5. Dentro del folder root del proyecto existe un archivo llamado `.env.example`, haz una copia del archivo y llámalo `.env`. Este es el archivo de configuración del proyecto, así que es necesario llenarlo con la información necesaria.

    + Dentro de `.env` hay un campo llamado `APP_KEY`, deja este campo vacío, ya que este se rellena por medio un comando que se hará más adelante para generar una llave de encriptación
    
6. Dentro del proveedor de base de datos se necesita crear una nueva base de datos que tenga el mismo nombre y detalles que los descritos en `.env`  
7. Usa el comando `php artisan migrate`, esto migrará las tablas descritas en el proyecto a la base de datos
8. Usa el comando `php artisan key:generate` para rellenar el campo `APP_KEY` con una llave de encriptación generada
9. Usa el comando `php artisan storage:link` para generar un vínculo entre la carpeta de `storage` y `public`, este vínculo es usado en algunas partes del proyecto para visualización de archivos
10. Por motivos de seguridad, dentro del repositorio de GitHub no se encuentran los archivos dentro de `storage\app\public` ni las entradas a la base de datos, solicítaselos a alguien más.
   
---