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
<form method="<?=$this->form['method']?>" action="<?=$this->form['action']?>" id="<?=$this->form['id']?>">
<?php foreach($this->inputs as $this->input):?>
<?php if($this->input['type']=='select'):?>
<select name="<?=$this->input['name']?>">
<?php foreach($this->input["opciones"] as $this->opciones):?>
<option><?=$this->opciones?></option>
<?php endforeach;?>
</select>
<?php elseif($this->input['type']=='checkbox' || $this->input['type']=='radio'):?>
	<input type="<?=$this->input['type']?>" name="<?=$this->input['name']?>" value="<?=$this->input['value']?>"/>

<?php else:?>
<input type="<?=$this->input['type']?>" name="<?=$this->input['name']?>" value="<?=$this->input['value']?>" placeholder="<?=$this->input['placeholder']?>" class="<?=$this->input['class']?>"/>
<?php endif;?>
<?php endforeach;?>
</form>
<?php endforeach;?>
	<?}

	public function __destruct()
	{
		
	}
}
//Datos principales del formulario
$formularios["registro"] = [
	"method"=>"POST",
	"action"=>"form.php",
	"id"=>"formulario"
];

	//Input Text

	$inputs["nombre"] = [
		"type"=>"text",
		"name"=>"Nombre",
		"value"=>"",
		"placeholder"=>"Pon tu nombre",
		"class"=>"input",
	];

	//Select
	$inputs["paises"] = [
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
		"type"=>"radio",
		"name"=>"radio",
		"value"=>"Radio1",
	];
	echo "<label>Radio2</label>";
	$inputs["radio2"] = [
		"type"=>"radio",
		"name"=>"radio",
		"value"=>"Radio2",
	];

	//Checked

	$inputs["check1"] = [
		"type"=>"checkbox",
		"name"=>"check",
		"value"=>"check1",
	];

	$inputs["check2"] = [
		"type"=>"checkbox",
		"name"=>"check",
		"value"=>"check2",
	];

$Formulario = new Formulario($formularios, $inputs);
$Formulario->formulario();
?>