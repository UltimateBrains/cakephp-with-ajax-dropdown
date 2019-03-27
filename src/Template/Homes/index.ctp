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
   $('document').ready(function(){
         $('#country').change(function(){
            var searchkey = $(this).val();
            searchName( searchkey );
         });
        function searchName( keyword ){
        var data = keyword;
        alert(data);
        $.ajax({
                    method: 'get',
                    url : "<?php echo $this->Url->build( [ 'controller' => 'Countries', 'action' => 'statess' ] ); ?>",
                    data: {country_id:data},
                    success: function( response )
                    {       
                       $( '#state' ).html(response);
                    }
                });
        };
    });

    
</script>
