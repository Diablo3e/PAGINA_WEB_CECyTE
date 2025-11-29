[Regresar](index.md)

---
En esta sección se presentarán los componentes que existen dentro de la página, las secciones dentro de estos (si existen) con sus vistas relacionadas y cualquier comportamiento especial relacionado. En cuanto a las vistas, la documentación se centrará en registrar los comportamientos o interacciones especiales que algunas de estas tengan, si no está aquí lo más seguro es que sea una vista HTML estándar.

La mayoría de las vistas tienen un .css y un .js asociado, cuando este sea el caso, en la mayoría de los casos estos tendrán un nombre similar a la vista. Por ejemplo, `navbar.blade.php` puede tener relacionados archivos como `styles_navbar.css`,`styles_barra_navegacion.css`, `navbar.js`, etc. 

Se recomienda aprender Laravel para poder navegar el proyecto con más facilidad, ya que la estructura de las carpetas y la interacción entre muchos de los componentes está dictado por el framework.
# Índice
## [Plantillas](#plantillas-1)
- [Plantilla Global](#plantilla-global-appbladephp)
- [Plantilla de carreras](#plantilla-de-carreras-carrerabladephp)
## [Componentes](#componentes-1)
- [Barra de redes](#barra-redes)
- [Carrusel inicio](#carrusel-inicio)
- [Carreras](#cuadricula-de-carreras)
- [Chatbot](#chatbot)
- [Encabezado](#encabezado)
- [Formulario](#formulario)
- [Mapa de planteles en puebla](#mapa-planteles)
- [Menú de accesibilidad ](#menú-de-accesibilidad)
- [Pie de página](#pie-de-página)
## [Vistas especiales](#vistas-especiales-1)
- [Detalles de planteles](#detalles-de-planteles)
- [Transparencia](#transparencia)

---
---
# Plantillas
Laravel permite definir plantillas para que luego estas puedan ser importadas en cualquier vista dentro del proyecto con `@extends(nombrePlantilla)`, todas las plantillas están en `resources\views\layouts\`.  
Dentro de plantillas, las secciones listadas son aquellos campos que la platilla permite que se rellenen con cualquier contenido HTML. 
## Plantilla global (app.blade.php)
Plantilla que incluye los elementos que se quiere estén en toda la página (header, footer, barra de redes, etc.), utilizado por todas las demás vistas
### Componentes externos
- [Encabezado](#encabezado)
- [Barra de redes](#barra-redes)
- [Menú de accesibilidad](#menu-de-accesibilidad)
- [Chatbot](#chatbot)
- [Formulario](#formulario)
- [Pie de página](#pie-de-pagina)
### Secciones
- title
- body-class
- content
## Plantilla de carreras (carrera.blade.php)
Plantilla que se usó para generar cada vista de las distintas carreras disponibles, estas vistas se encuentran en `resources\views\carreras\`. Esta plantilla a su vez también utiliza la plantilla global. 
### Componentes externos
- [Todos los componentes externos de plantilla global](#plantilla-global-appbladephp)
### Secciones
- title
- archivo-programa-estudios
- page-title
- descripcion-carrera
- descripcion-perfil-ingreso
- descripcion-perfil-egreso
- competencias-egreso
# Componentes
Laravel permite definir componentes (pequeños pedazos de código HTML con los extras de blade) para que luego estas puedan ser incluidos en cualquier vista dentro del proyecto con `@include(nombreComponente)`, todos los componentes están en `resources\views\components\`
## Barra redes
- `barra_redes.blade.php` 
- Barra de redes flotante en la parte izquierda de la pantalla
## Carrusel inicio
- `mapa_carrusel.blade.php`
- Carrusel que se muestra en la página inicial.
## Cuadricula de carreras
- `pestanas_carrera.blade.php`
- Container con la cuadrícula de todas las imágenes que llevan a las respectivas páginas con los detalles de cada una
## Chatbot
- `chatbot.blade.php`
- Icono del chatbot y container que muestra la conversación con todas las diferentes opciones
## Encabezado
- `navbar.blade.php`
- La barra de navegación superior con todas las diferentes opciones
- **COMPORTAMIENTO ESPECIAL:** La barra de navegación incluye un apartado para hacer búsquedas, esta búsqueda está dictada por el método `SearchAll()` que existe en `searchController` y la búsqueda se conecta con el controlador por medio de una ruta llamada `busqueda` que renderiza los resultados en la vista `search.blade.php`. Hasta el momento está configurada para buscar coincidencias de nombre en las tablas de carreras y planteles.
## Formulario
- `formulario.blade.php`
- UI para introducir datos que se muestra cuando se le da click al botón 'informes' en la navbar
- **COMPORTAMIENTOS ESPECIALES:**   
    Cuando se le proporciona todos los datos necesarios al formulario y se le da click al botón para enviar ocurren 2 cosas en `formulario.js`:
    + Se hace una petición a la ruta `formulario.enviar`, la cual llama a `FormularioController` que a su vez ejecuta la función `enviarFormulario()` que guardar los datos introducidos en la tabla `formularios`
    + Se hace una petición a la ruta `formulario.enviar.email`, la cual llama a `FormularioController` que a su vez ejecuta la función `enviarEmail()` la cual enviara un correo con los datos introducidos al correo relacionado con el plantel, la redacción del correo se hace por medio de una vista HTML, en este caso `resources\views\Mails\infoFormulario.blade.php`, el correo destino es el que está en base de datos dentro de la tabla planteles y el correo origen es el que está en `.env` junto con las credenciales necesarias.
## Mapa planteles
- `mapa-Planteles.blade.php`
- Container con las secciones de planteles EMSad, la imagen con la localización de los distintos planteles dentro del estado de puebla, y planteles CECyTE
## Menú de accesibilidad
- `menu_accesibilidad.blade.php`
- Botón inicial del menú de accesibilidad y todas las opciones que se despliegan después
- **COMPORTAMIENTOS ESPECIALES:**   
    Las opciones del menú de accesibilidad afectan el cómo se ve la página, esto se hace por medio de `menu_accesibilidad.js` el cual maneja la opción de texto a voz, aplica clases y modifica atributos del elemento `<body>` de la página, las clases a su vez aplican los filtros detallados en `styles_menu_accesibilidad.css`, los filtros existentes son negativo y escala de grises.
## Pie de página
- `footer.blade.php`
- Todos los componentes e información del pie de página junto con los logos de la parte de abajo
# Vistas especiales
Se referirá como vistas especiales a aquellas vistas HTML que ocupan otra cosa que no sea .js o .css. Y, en cambio, hacen uso de bases de datos, plantillas de Laravel (que no sea la global) o acciones especiales que no sean obvias. Cabe resaltar que dentro de Laravel, todas las vistas tienen la terminación `.blade.php` y están conformadas por código HTML estándar con la opción de utilizar @ seguido de keywords especiales (como `@php`, `@include`, `@foreach`, etc.) para hacer una variedad de cosas.
   
Todas las vistas están en `resources\views\`
## Detalles de planteles
La vista de `planteles_detalle.blade.php` es la responsable de renderizar las siguientes secciones para cada uno de los planteles existentes:
- Carrusel con fotos de portada
- Encabezado del plantel (Título, lema, descripción y badge)
- Fotos de las instalaciones 
- Mapas 
    - ubicaciones (en Google Maps)
    - croquis
- Personal
- Comunicados
- Carrusel con fotos de la comunidad
- Carreras (de acuerdo base de datos)
- Vinculación
    - Ofertas laborales
    - Formatos para servicio social
    - Formatos para prácticas profesionales
    - Redes sociales
    - Seguimiento de egresados
    - Sistema dual
- Extensión educativa
- Control escolar
    - Avisos
    - Planes de estudio (de acuerdo a base de datos)
    - Horarios

Esta vista es especial en el sentido que es la **única que renderiza la información de los planteles**, y su contenido cambia en función de como se accede a ella.
### Funcionamiento
El flujo que la vista sigue es:
1. Se recibe una petición get en la ruta https://nombredominio.com/planteles/detalle/plantel#
2. `planteles_detalle.js` hace una petición fetch a la ruta con el nombre  `plantelData.get` con el # indicado
3. La ruta a su vez va al controlador `PlantelesController` que llama la función `getDetallesPlanteles(#)` que a su vez accede a todos los diferentes controllers para todas las secciones, construyendo un .json con los datos obtenidos de las tablas en la base de datos.
4. `planteles_detalle.js` recibe el .json resultante y ejecuta todas las funciones para renderizar correctamente la página con la información.
### Edición del contenido de planteles
Para los planteles se tenía el requerimiento de que cada encargado de los distintos planteles pudiera modificar los detalles de su propio plantel sin tener que hacer una petición a los encargados de la página, por este motivo, se implementó un panel de administradores usando [Filament](dependencias.md#dependencias-de-laravel-utilizadas) por lo que dentro del proyecto, todos los archivos relacionados a Filament sirven con este propósito.   
   
Esencialmente, Filament sirve como una UI entre la base de datos y los usuarios, por lo que modificar los datos en la base de datos directamente afectara los contenidos de planteles de la misma manera que si se modificaran usando la UI de Filament.
   
Muchos de los inputs del panel de administradores aceptan archivos, cuando este sea el caso en la base de datos Filament guardará el path hacia la imagen guardada y el archivo en la carpeta indicada. Todos los archivos se guardan en `storage\app\public\`, donde cada sección tiene una carpeta dedicada (ejemplo, DocumentoHorarios, ImgInstalaciones, etc). Por el momento, Filament ignora el nombre original del archivo y pone uno generado aleatoriamente, además, no existen separaciones de archivos entre planteles dentro de las carpetas. 

Se puede acceder al panel de administradores por medio de https://nombreDominio/admin con las credenciales registradas en base de datos (por motivos de seguridad la contraseña se hashea antes de ser guardada) y la creación de usuarios junto con los permisos se encuentran en la pestaña de usuarios (pestaña que solo será visible si el usuario que inicio sesión tiene permisos de administrador, que es una columna en la tabla de usuarios).

## Transparencia
La vista de `Transparencia.blade.php` es responsable de presentar todos los archivos relacionados a secciones necesarias para cumplir con la Ley General de Contabilidad Gubernamental y la Ley de Transparencia. Por conveniencia se configuró para que su **funcionamiento dependiera de los archivos localizados en `public\pdfs\transparencia\`, por lo que modificar las carpetas o archivos dentro del folder afectara a la vista**
### Funcionamiento
El flujo que sigue la vista es el siguiente
1. Se recibe una petición get para la ruta https://nombredominio.com/Transparencia
2. Antes de renderizar la vista, la ruta hace una petición a `PdfController` por cada sección en la vista de transparencia, cada petición se hace para obtener los subdirectorios que existen dentro de los folders especificados (ver la ruta llamada `Transparencia` para más detalles) y se adjunta la información junto a la vista
3. La vista llena cada menú select dentro de cada sección con la información adjuntada anteriormente, esto se hace por medio de funciones `@forEach` dentro del archivo `Transparencia.blade.php`
4. El script `public\js\transparencia.js` usa varias funciones de `PdfController` por medio de rutas definidas para añadir, entre otras cosas, un eventListener a cada select el cual hará lo siguiente en caso de que se detecte un cambio:
    1. Llamar la función `buscarPestanas()` como `buscarPestanas(folderPrincipal, [seccion, eleccionSelect], selectDeLaSeccion, contenedorParaDocumentos)`
    2. La función busca si hay más subfolders dentro del path indicado, en caso de que los encuentre insertará un botón dentro del `contenedorParaDocumentos` indicado por cada subfolder, donde cada botón muestra los contenidos de su subfolder correspondiente y devuelve null. En caso de que no encuentre subfolders, devolverá los resultados de `getPdfs(folderPrincipal, [seccion, eleccionSelect])` que será un array con todos los archivos encontrados.
    3. Si la función `buscarPestanas()` devuelve null no se hará nada más, pero sí devolvió el array de archivos, se renderizará cada uno de ellos dentro de `contenedorParaDocumentos`
### Formato del nombre de archivos
* Se espera que las carpetas siempre tengan su nombre en minúsculas, eviten caracteres especiales como acentos y se remplacen espacios por guion bajo o medio.   
* Los archivos pueden usar caracteres especiales y mayúsculas/minúsculas, pero se espera que se remplacen los espacios por guion bajo o medio (cuando se renderizan los archivos todos los guiones bajos o medios son cambiados otra vez a espacios).
### Edición de los archivos mostrados
Debido a las peculiaridades de la vista, los siguientes cambios de folders/archivos harán lo siguiente:
+ Cambiar los nombres de archivos -> Los nombres de los archivos renderizados cambiarán de acuerdo al nombre del archivo original, pero mantienen la extensión del archivo. La extensión puede modificarse al cambiar la función `getArchivos` de `app\Http\Controllers\PdfController.php`
+ Cambiar el nombre de subdirectorios de carpeta que sea el destino de `buscarPestanas()` -> Cambiar el nombre de la sub carpeta cambiara el nombre que muestra el botón resultante, siempre con la primera letra en mayúscula (debido a que el formato de nombre de las carpetas no acepta mayúsculas).
+ Añadir subdirectorios a una carpeta que sea el destino de `buscarPestanas()` -> Esto hará que cuando la sub carpeta sea detectada se generará el botón correspondiente, sin embargo, si hay archivos que no están en sub carpetas estos se omitirán. Todo archivo que quiera mostrarse tiene que estar en sub carpetas o en su defecto no deben de existir sub carpetas en la carpeta destino.
+ Añadir/eliminar archivos -> todo cambio de los archivos existentes es detectado, por lo tanto, los movimientos de añadir, eliminar y modificar los archivos afectarán a lo que se renderiza de igual manera