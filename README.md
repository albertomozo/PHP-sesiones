# SESIONES EN PHP session

Conjunto de a ficheros que van a ser incluidos en una misma sesion a traves de ```session_start()```  	

## sesion.php

Página  de inicio de la sesión. Todas las páginas de una sesión deben comenzar por ```session_start()``` . Además en esta primera pagina creamos un variable de session ``` $_SESSION['variable']``` qyue nos va a servir para compriobar que hemos pasado por esta página. 

En el caso de registro en una web, esta primera página podría ser la página de confirmacion de 'login'

## sesion_1.php sesion_2.php 

Páginas enlazadas a la primera a traves de este código inicial

```php	
session_start();
if (!isset($_SESSION['clienteip'])){
	header("location:caducada.html");
	exit;
}
```

Comenzamos iniciando la sesión y comprobando que  existe una cariable se session generada en la pagina de sesion.php

## caducada.html 

Página a la que redigimos todas aquellas paginas que no esten en la sesión y hayan pasado por la página sesion.php 

## sesion_cerrar.php

Página en la que cerramos la sesion y vemos como se destruyen las variables de sesión 
```php
session_destroy();
```

## nosesion.php

Página sin session_start()

# Manual

https://docs.google.com/presentation/d/1UkOp5jkjx8Bt-CPllg5Itk9vQmgsQkedmaF1KspnfSo/edit#slide=id.p




