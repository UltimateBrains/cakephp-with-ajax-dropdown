<?php
	echo $this->Html->script('jquery.min');
	echo $this->Form->control('country',[
		'id' =>'country',
		'options' => $countries,
		
	]);
	echo $this->Html->image('ajax-loader.gif', array('alt' => 'lodding', 'id' => 'loding1'));
	echo $this->Form->control('state', array(
		'id' =>'state',
		//'type' => 'select'
		'options' => '$states',
		'empty' => 'select state',
	));
	echo $this->Html->image('ajax-loader.gif', array('alt' => 'lodding', 'id' => 'loding2'));
	echo $this->Form->control('city', array(
		'id' =>'city',
		//'type' => 'select'
		'empty' => 'select city',
		'options' => '$city',
	));
?>
