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
