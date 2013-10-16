<?php 

class Formulario
{
	public $forms = array();
		public $method;
		public $action;
		public $idForm;

	public $form;
	public $inputs = array();
	public $input;
	public $opciones;

	public function __construct($forms = array("method"=>"POST","action"=>"index.php","id"=>"formulario"), $inputs = array("Nombre1","Nombre2"))
	{	
		$this->forms = $forms;
		$this->form;
		$this->inputs = $inputs;
		$this->input;
		$this->opciones;
	}

	public function formulario()
	{?>

<?php foreach($this->forms as $this->form):?>
<form method="<?=$this->form['method']?>" action="<?=$this->form['action']?>" id="<?=$this->form['id']?>" class="<?=$this->form['class']?>">
<legend><?=$this->form["legend"]?></legend>
<?php foreach($this->inputs as $this->input):?>

<?php if($this->input['type']=='select'):?>
	<div class="<?=$this->input['class']?>">
		<label><?=$this->input['label']?></label>
	<select name="<?=$this->input['name']?>">
<?php foreach($this->input["opciones"] as $this->opciones):?>
<option><?=$this->opciones?></option>
<?php endforeach;?>
</select>
	</div>
	
<?php elseif($this->input['type']=='checkbox' || $this->input['type']=='radio'):?>
	<label><?=$this->input['label']?></label>
	<input type="<?=$this->input['type']?>" name="<?=$this->input['name']?>" value="<?=$this->input['value']?>"/>

<?php elseif($this->input['type']=='submit'):?>
	<div class="<?=$this->input['class']?>">
	<input type="<?=$this->input['type']?>" value="<?=$this->input['value']?>"/>
	</div>
<?php elseif($this->input['type']=="date"):?>
	<div class="<?=$this->input['class']?>">
		<label><?=$this->input['label']?></label>
	<input type="text" name="<?=$this->input['name']?>" placeholder="Mes/Día/Año" class="datepicker"/>
</div>
<?php elseif($this->input['type']=="textarea"): ?>
	<div class="<?=$this->input['class']?>">
		<label><?=$this->input['label']?></label>
	<textarea name="<?=$this->input['name']?>"></textarea>
</div>
<?php else:?>
	<div class="<?=$this->input['class']?>">
		<label><?=$this->input['label']?></label>
<input type="<?=$this->input['type']?>" name="<?=$this->input['name']?>" value="<?=$this->input['value']?>" placeholder="<?=$this->input['placeholder']?>"/>
	</div>
	
<?php endif;?>
<?php endforeach;?>
</form>
<?php endforeach;?>
	<?}

	public function __destruct()
	{
		
	}
}


/*
$formularios["registro"] = [
	"method"=>"POST",
	"action"=>"form.php",
	"id"=>"formulario",
	"legend"=>"Datos del formulario"

];

	//Input Text

	$inputs["nombre"] = [
		"label"=>"Label del input",
		"type"=>"text",
		"name"=>"Nombre",
		"value"=>"",
		"placeholder"=>"Pon tu nombre",
		"class"=>"input",
	];

	//Select
	$inputs["paises"] = [
		"label"=>"Label del select",
		"type"=>"select",
		"name"=>"Nombre",
		"value"=>"Países",
		"opciones"=>[
			"Colombia",
			"Brasil"
		]
	];

	//Radio
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

	//Checked

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

$Formulario = new Formulario($formularios, $inputs);
$Formulario->formulario();
*/


?>