<?php


echo $this->Form->create();
$langList = ['M'=>'Marathi', 'E'=>'english', 'H'=>'Hindi'];
echo $this->Form->control('languages',[
	'type'=>'select',
	'multiple'=>'checkbox',
	'options' => $langList,

]);
echo $this->Form->button('submit');

echo $this->Form->end();

?>