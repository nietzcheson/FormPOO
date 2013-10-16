FormPOO
=======

Crear dinámicamente formularios con PHP

Generalmente, en cualquier desarrollo de cualquier aplicación hay actividades que se suelen repetir constantemente. 
La hechura de formularios para el transporte de datos es común en las aplicaciones de hoy.
He aquí mi querer en crear esta clase. Resuelve de la manera más sencilla la creación de estos.
Ya si necesitamos hacer 1 ó 1000 formularios, no será una tarea engorrosa.

¡Es fácil! Se crean dos arrays.

  1- El primero lleva los datos del formulario como: method, action y id.
    
    $formularios["formulario"] = [
  	  "method"    =>    "POST",
  	  "action"    =>    "form.php",
  	  "id"        =>    "formulario"
    ];
    
  2- El segundo array lleva los datos de cada uno de los elementos del formulario.
    
    //Para el [type=text]
    
    $inputs["input"] = [
  		"label"=>"Label del input",
  		"type"=>"text",
  		"name"=>"nombre",
  		"value"=>"El nombre",
  		"placeholder"=>"Placeholder ",
  		"class"=>"input",
  	];
  	
  	//Para el [select]
  	
  	$inputs["select"] = [
  		"label"=>"Label del select",
  		"type"=>"select",
  		"name"=>"paises",
  		"opciones"=>[
  			"Colombia",
  			"Brasil"
  		]
  	];
  	
  	//Para el [type=radio]
  	
  	$inputs["radio1"] = [
  		"label"=>"Label del radio",
  		"type"=>"radio",
  		"name"=>"radio",
  		"value"=>"Radio1",
  	];
  
  	$inputs["radio2"] = [
  		"label"=>"Label del radio",
  		"type"=>"radio",
  		"name"=>"radio",
  		"value"=>"Radio2",
  	];
  	
  	//Para el [type=checked]

  	$inputs["check1"] = [
  		"label"=>"Label del checkbox",
  		"type"=>"checkbox",
  		"name"=>"check",
  		"value"=>"check1",
  	];
  
  	$inputs["check2"] = [
  		"label"=>"Label del checkbox",
  		"type"=>"checkbox",
  		"name"=>"check",
  		"value"=>"check2",
  	];

  3- Por último, se instancia la clase pasándole los datos por array.

    $Formulario = new Formulario($formularios, $inputs);
    $Formulario->formulario();
