- Importante: si instalamos las dependencias de Bower en slick.js duplicamos en .less slick.css y slickthemes.css
- Iniciar con comando gulp en terminal, carpeta raíz de proyecto
- Si usamos mamp, que apunte a la carpeta /dist y puerto 8888.
- Si no usamos mamp, descomentar líneas 90-93 de gulpfile.js y comentar las siguientes.


////// SI ES WORDPRESS

1. Sustituimos gulpfile.js por el contenido de gulpfile-wordpress
2. Copiamos los archivos de "lib/wordpress/nombreweb" a "lib" y trabajamos sobre ellos.
3. Copiamos la carpeta assets a la raíz del tema y trabajamos con ella.
4. Añadimos functions.php y style.css a la raíz del tema. Está dentro de lib/wordpress