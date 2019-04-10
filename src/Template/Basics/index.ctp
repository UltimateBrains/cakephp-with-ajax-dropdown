<div class="panel panel-default">
  <div class="panel-body">
	 <div class="row">
 		<div class="col-sm-4"></div>

   		<div class="col-sm-4">

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
	    </div>
	  </div>
  </div>
</div>