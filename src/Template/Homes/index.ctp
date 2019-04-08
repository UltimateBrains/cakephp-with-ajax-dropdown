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
							[
								'options' => '$state',
								'id'=>'state'
						    ],
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
						alert(data);
						$.ajax({
							method: 'get',
							url : "<?php echo $this->Url->build( [ 'controller' => 'homes', 'action' => 'statess' ] ); ?>",
							data: {country_id:data},
							success: function( response )
							{       
	                	//document.getElementById("state").value = response;
	                        //$('#state').val(response)
	                        // $('#state').html(response);
	                        	data = JSON.stringify(response);
	                        	alert(data);
	                   	   		$.each(data.response, function(value) {              
                             
                        		//$('<option>').val(value).html($("#state"));
                        		$('#state').html(response);
                    		});

						        

						        // $.each(data.response, function(key, value) {
						        //      $('#state')
						        //         .append($("<option></option>")
						        //         .attr("value",key)
						        //         .text(value));
						        // });

	
	                  	   
	                        }
	                });
					};
				});


			</script>
