<br>
<div class="panel panel-default" style="width: 500px; height: 450px;margin: auto;">
  <div class="panel-body">
		<h3>Cakephp - Ajax Country State City Dropdown</h3>
		<?php $this->Form->create(); ?>
			<div class="row">
				<div class="col-sm-4">
				<div class="form-group">
		        <hr>
				<br>				
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
                    url : "<?php echo $this->Url->build( [ 'controller' => 'homes', 'action' => 'statess' ] ); ?>",
                    data: {country_id:data},
                    success: function( response )
                    {       
                       $( '#state' ).html(response);
                    }
                });
        };
    });

    
</script>
