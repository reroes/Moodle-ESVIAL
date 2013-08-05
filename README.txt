*******************************************************************************
*******************************************************************************
*******************************************************************************
*******************************************************************************
*****************************MOODLE ESVIAL*************************************
*******************************************************************************
*******************************************************************************
*******************************************************************************
*******************************************************************************

Instrucciones para Instalación de Moodle ESVIAL:
Si se desea realizar la instalación de Moodle ESVIAL, se puede llevar a cabo de
la siguiente forma:
-------------------------------------------------------------------------------
1. Descargar Moodle-ESVIAL
-------------------------------------------------------------------------------
2. Crear la carpeta moodledata a utilizar.
-------------------------------------------------------------------------------
3. Instalar Moodle-ESVIAL
-------------------------------------------------------------------------------
4. Cambiar el tema al de Moodle-ESVIAL de la siguiente forma:
   "Administración del sitio → Apariencia → Temas → Seleccionar Tema"
Ahí se debe presionar el botón "Cambiar tema" de Predeterminado y seleccionar:
"ESVIAL Formal White", luego, si lo desea, cambie el logo en:
   "Administración del sitio → Apariencia → Temas → ESVIAL Formal White"
-------------------------------------------------------------------------------
5. Configurar editor de textos TinyMCE. 
Ir a 
Administración del sitio → Extensiones → Editores de texto → Gestionar editores.  
y en el área de "Barra de herramientas del editor" se coloca el siguiente texto:

save,preview,print,|,fontselect,fontsizeselect,formatselect,|,undo,redo,|,search
,replace,|,fullscreen,fullpage

bold,italic,underline,strikethrough,sub,sup,|,justifyleft,justifycenter,
justifyright,|,cleanup,removeformat,pastetext,pasteword,|,forecolor,backcolor,|,
ltr,rtl

bullist,numlist,outdent,indent,|,link,unlink,|,image,nonbreaking,charmap,table,
|,code
-------------------------------------------------------------------------------
6. Configurar Mapa del Sitio.
Primero es necesario activar la edición del sitio, luego se presiona el atajo de 
teclado 3 o se dirige a la página sitemap.php y agrega el bloque "Navegación 
Simple" en la página sitemap.php, se presiona el botón de mover en el bloque y 
se mueve el bloque a la sección de contenido (centro del sitio).

Como segundo paso es necesario configurar el bloque de la siguiente forma:

Ajustes de bloque
Inicio: Dejar vacío para usar el habitual de Moodle 
Perfil: (sugiero colocar Mi Perfil)
Título del bloque: (sugiero colocar Mapa del Sitio)
Mostrar cursos: Seleccionar opción
Mostrar módulos: Dejar opción sin seleccionar
Mostrar Nodo nivel superior: Seleccionar opción

Qué categorías deberían mostrarse en el bloque de navegación simple
home: Seleccionar opción
profile: Seleccionar opción
*Categoría de cursos N: Seleccionar opción

Mostrar módulos en cursos
Todas las opciones de esta sección se encuentran inhabilitadas debido que no 
se seleccionó la opción “Mostrar Módulos” en la categoría “Ajustes de bloque”.

Mostrar módulos en portada
Todas las opciones de esta sección se encuentran inhabilitadas debido que no 
se seleccionó la opción “Mostrar Módulos” en la categoría “Ajustes de bloque”.

Dónde aparece este bloque
Ubicación original del bloque: Sistema
Mostrar en tipos de página: guest
Región por defecto: Content
Peso por defecto: 1

En esta página
Visible: Si
Región: content
Peso: 1

Y por último presionar el botón "Guardar cambios"
-------------------------------------------------------------------------------
7. Descomprimir el archivo jwplayer-master.zip y colocarlo en la carpeta filter 
de la carpeta de moodle con el nombre streaming. 
-------------------------------------------------------------------------------
8. Instalar el filtro jwplayer (streaming)
Nota: este filtro puede dar problemas para instalar otros paquetes, por lo que 
si da problemas se recomienda mover la carpeta fuera de la carpeta de Moodle al 
querer instalar otros paquetes ó utilizar otro reproductor de video que tenga 
funcionalidades de accesibilidad.
-------------------------------------------------------------------------------
9. Configuración del filtro jwplayer (streaming)
Para activar el filtro es necesario ubicarse en:

         Administración del sitio → Extensiones → Filtros → Gestionar filtros 

y colocar el filtro como “conectado”.
-------------------------------------------------------------------------------

*******************************************************************************
*******************************************************************************
***********************Mejoras realizadas al Moodle 2.4:***********************
*******************************************************************************
*******************************************************************************
1. Bloque de accesibilidad de Moodle.
2. Links para mejorar la navegación en la plataforma.
3. Plugin para medir accesibilidad del contenido en TinyMCE.
4. Página de accesibilidad para visualizar la ayuda de accesibilidad en Moodle.
5. Accesskeys para mejorar la navegación. El listado de accesskeys se encuentra
en la página de accesibilidad.
6. Nueva vista para agregar recursos y/o actividades
7. Nueva vista para subir archivos
8. Mapa del sitio. Se utiliza el bloque de navegación simple el cual está modi-
ficado para agregar más links.
9. Cambios en el contraste de los links de la barra de navegación en el tema.
10. Cambios generales para agregar caption y header a las tablas, texto alter-
nativo donde se consideró necesario y botón de submit a los forms que lo 
necesitaran al navegar con el teclado.

