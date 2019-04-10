<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Go To Counties '), ['controller'=>'countries','action' => 'index']) ?></li>
        
        
    </ul>
</nav>




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
			
				<?php $count = 1;
				foreach ($country as $key => $country) { 
					$options[] = ['text' => $country->name, 'value' => $country->id];}		     
					echo $this->Form->select('country_name',
						$options,[ 

							'empty'   => 'Select Country',
							'id'      => 'country',
							'class'=>'form-control'
						]); ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						
						<?php 

						echo $this->Form->select('state_name',
							['id' => '' ],

							[

								'empty'   => 'Select State',
								'id'      => 'state',
								'class'=>'form-control'
							]);?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<?php 
							echo $this->Form->select('city_name',
								['id'=>''],
								[ 
									'empty'   => 'Select City',
									'id'      => 'city',
									'class'=>'form-control'
								]);?>
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
						//alert(data);
						$.ajax({
							method: 'get',
							url : "<?php echo $this->Url->build( [ 'controller' => 'homes', 'action' => 'statess' ] ); ?>",
							data: {country_id:data},
							dataType:'json',
							success: function( response )
							{    
							    $('#state').html("");
	                	   		$.each(response.state, function(key, value) {
                        		//alert(JSON.stringify(value.name))	
                        		key++;
                        		$('#state').append($('<option>', {value:key, text:value.name}));
                         		})                   		
	                  	   
	                        }
	                });
					};
					////  get cities
					$('#state').change(function(){

						var searchkey = $(this).val();
						searchCity( searchkey );
					});
					function searchCity( keyword ){
						var data = keyword;
						//alert(data);
						$.ajax({
							method: 'get',
							url : "<?php echo $this->Url->build( [ 'controller' => 'homes', 'action' => 'citiess' ] ); ?>",
							data: {state_id:data},
							dataType:'json',
							success: function( response )
							{    
							    $('#city').html("");
	                	   		$.each(response.city, function(key, value) {
                        		//alert(JSON.stringify(value.name))	
                        		key++;
                        		$('#city').append($('<option>', {value:key, text:value.name}));
                         		})                   		
	                  	   
	                        }
	                });
					};


				});


			</script>
