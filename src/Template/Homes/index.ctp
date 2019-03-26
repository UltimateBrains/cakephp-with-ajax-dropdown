<div class="container">
		<h1>PHP Ajax Country State City Dropdown</h1>
		<?php $this->Form->create(); ?>
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
				  	//'options' => $state,
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
				    //'options' => $city,
				 	'empty'   => 'Select City',
				 	'id'      => 'city' ]				    
				); 
				?>
					</div>
				</div>
			</div>
		<?php $this->Form->end(); ?>
	</div>
	
	 <script>
    $(document).ready(function(){
            $('#country').change(function(){
                
                var id=$(this).val();
                //var targeturl = 'homes/getStates';
                var targeturl = '<?php echo h($this->Url->build(["controller" => "homes","action" => "getStates"]));?>';

                 alert(id);
                
                // if(id=='-1'){
                //   $('#state').html('<option value="-1">Select State</option>');
                // }else{
             //      $("#divLoading").addClass('show');
                //   $('#state').html('<option value="-1">Select State</option>');              
                  $.ajax({

                    type:'post',
                    url: targeturl,                
                    data:'country_id='+id,
                    success:function(result){
                        // $("#divLoading").removeClass('show');
                        // $('#state').append(result);
                        alert(result);
                        }
                }); 
            
            });

 });

    
</script>
