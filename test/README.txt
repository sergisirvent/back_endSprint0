Este directorio se encarga de realizar test automáticos con la herramienta de testeo Newman de Postman

/*
*
*Si no tienes instalado newman
*
*
*	Deberás instalar la última version de node.js y ejecutar en tu consola el comando:
*
*		npm install -g newman
*
*/

Una vez instalado newman ejecuta en la consola el siguiente comando:

	newman run -e entornoSprint0.json coleccionSprint0.json //(el nombre del entorno antes que el de la coleccion)

El test debería ejecutarse automáticamente

*Si no funciona asegurate de estar en el directorio donde se encuentran los archivos json

