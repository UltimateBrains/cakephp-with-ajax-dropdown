 $(document).ready(function(){
			$('#country').change(function(){
				
				var id=$(this).val();
				var targeturl = '<?php echo Router::url(["controller"=>"homes","action"=>"getStates"])?>';
				//var targeturl = $('form').attr('getStates'); 
				//var targeturl = '/homes/getStates';				
				//alert(targeturl);
                
				if(id=='-1'){
				  $('#state').html('<option value="-1">Select State</option>');
				}else{
			      $("#divLoading").addClass('show');
				  $('#state').html('<option value="-1">Select State</option>'); 				
				  $.ajax({
					type:'post',
                    url: targeturl,                
 					data:'id='+id,
 					dataType: 'json',
 					success:function(result){
						// $("#divLoading").removeClass('show');
						// $('#state').append(result);
						}
				});	
			}
 			});

 });

	