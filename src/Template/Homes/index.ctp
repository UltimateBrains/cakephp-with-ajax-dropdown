<div class="container">
		<h1>PHP Ajax Country State City Dropdown</h1>
		<?php echo $this->Form->create(); ?>
			<div class="row">
				<div class="col-sm-4">
				<div class="form-group">					
				<?php 
				 echo $this->Form->control(
				 	'country_name',[
				 	'options' => $country,
				 	'empty'   => 'Select Country',
				 	'id'      => 'country' ]				    
				); 
				?>
				</div>
				</div>
				<div class="col-sm-4">
				<div class="form-group">
						
			   <?php 
				 echo $this->Form->control(
				 	'state_name',[
				  	'options' => $state,
				 	'empty'   => 'Select State',
				 	'id'      => 'state' ]				    
				); 
				?>
				</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
			    <?php 
				 echo $this->Form->control(
				 	'city_name',[
				    'options' => $city,
				 	'empty'   => 'Select City',
				 	'id'      => 'city' ]				    
				); 
				?>
					</div>
				</div>
			</div>
		<?php echo $this->Form->End(); ?>
	</div>
	
	<div id="divLoading"></div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" type="text/javascript"></script>
	<script>
	$(document).ready(function(){
		$('#country').change(function(){
			var id=$(this).val();
			
			if(id=='-1'){
				$('#state').html('<option value="-1">Select State</option>');
			}else{
				$("#divLoading").addClass('show');
				$('#state').html('<option value="-1">Select State</option>');
				$('#city').html('<option value="-1">Select City</option>');
				$.ajax({
					type:'post',
					url:'<?php echo Router::url(array("controller" => "homes", "action" => "getStates")); ?>',
					data:'id='+id+'&type=state',
					success:function(result){
						$("#divLoading").removeClass('show');
						$('#state').append(result);
					}
				});
			}
		});
		$('#state').change(function(){
			var id=$(this).val();
			if(id=='-1'){
				$('#city').html('<option value="-1">Select City</option>');
			}else{
				$("#divLoading").addClass('show');
				$('#city').html('<option value="-1">Select City</option>');
				$.ajax({
					type:'post',
					url:'<?php echo Router::url(array("controller" => "homes", "action" => "getCities")); ?>',
					data:'id='+id+'&type=city',
					success:function(result){
						$("#divLoading").removeClass('show');
						$('#city').append(result);
					}
				});
			}
		});
	});
	</script>