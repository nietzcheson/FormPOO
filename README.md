FormPOO
=======

Crear dinámicamente formularios con PHP

Hay actividades que en el desarrollo de cualquier aplicación se hacen repetitivas. 
En mi caso, hago una aplicación que requiere de muchas veces crear formularios. 
He aquí por qué he creado esta clase. Es bastante sencilla.

Se crean dos arrays.

  1- El primero lleva los datos del formulario como: method, action y id.
    
    $formularios["formulario"] = [
  	  "method"    =>    "POST",
  	  "action"    =>    "form.php",
  	  "id"        =>    "formulario"
    ];
  
  2. El segundo array lleva los datos de cada uno de los elementos del formulario
  
    //Input Text

  	$inputs["nombre"] = [
  		"type"          =>    "text",
  		"name"          =>    "Nombre",
  		"value"         =>    "",
  		"placeholder"   =>    "Pon tu nombre",
  		"class"         =>    "input",
  	];
  
  	//Select
  	
  	$inputs["paises"] = [
  		"type"          =>    "select",
  		"name"          =>    "Nombre",
  		"value"         =>    "Países",
  		"opciones"      =>    [
                        			"Colombia",
                        			"Brasil"
  	                      	]
  	];
  	
  3. Por último, se instancia el objeto y se le pasan los parámetros->($formularios,$inputs);
