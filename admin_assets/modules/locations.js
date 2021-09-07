//alert('hello');

							
						var res='location';
						
						/*
			            $('#state').on('change', function() {
			            	var state_id = $(this).val();
  							//alert( this.value );

  							if(state_id>0){
                                          $.ajax({
    						                url: base_url+'admin/admin/callcityofstate',
                    						type: 'POST',
                    						data: {state_id:state_id},
                    						beforeSend: function ( xhr ) {
                                                //Add your image loader here
                                                //jQuery("#loaderimg").html('<img src="<?php echo base_url() ?>images/ajax-loader.gif">');
                                            },
                    						
                    						success:function(data){
                    						    $("#loaderimg").hide();
                    							 var resp = $.trim(data);
                    							    $("#city").html('<option value="0">--Select--</option>');
                    							    $("#city").append(resp);
                                            }
                    				    });
                                     }else{
                                         $("#city").html('<option value="0">--Select--</option>');
                                     }

						});
						*/

						$("#frmlocation_add").validate({
			                rules: {
			                    state: {
			                        required: true,
			                        selectcheck: true
			                    },
			                    
			                    city: {
			                         required: true,
			                         minlength: 3,
			                         maxlength: 35,
									 alpha: true
			                    },
			                    
			                    

			                    image: {
			                         required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    


			                    
			                    
			                },
			            
			                messages: {
			                    
			                    city: {
			                        required: "Specify location name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },	

			                    image: {
			                     //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	


			            $("#frmlocation_edit").validate({
			                rules: {
			                    state: {
			                        required: true,
			                        selectcheck: true
			                    },
			                    
			                    city: {
			                         required: true,
			                         minlength: 3,
			                         maxlength: 35,
									 alpha: true
			                    },
			                    
			                    

			                    image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    


			                    
			                    
			                },
			            
			                messages: {
			                    
			                    city: {
			                        required: "Specify location name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },	

			                    image: {
			                     //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	


			   $("#frmlocation_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmlocation_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-locations',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Location information added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										$("#shwdatatable").load(base_url+'manage-locations/list');
										$('#frmlocation_add')[0].reset();
										$(window).off("beforeunload");
										$(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'success',
										        title: ' Location information added.'
	      									})
	      								});

										
									}else if(data=='Location already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#city").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Location already present!'
	      									})
	      								});

									}
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));


			   $("#state,#city").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

            $("#shwdatatable").load(base_url+'manage-locations/list');

            $(document).on('click', '.delete', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var deleteid = splitid[1];
                                     
                                        var txt;
                    					var r = confirm("Are you sure of DELETING the record?");
                    					if (r == true) {
                      // AJAX Request
		                                       $.ajax({
		                                         
		                                         url: base_url+'api/locations/location/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-locations/list');
		                                       //location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });	
                                   
                                   
                                   //remove banner
                                   $(document).on('click', '.bannerremv', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var deleteid = splitid[1];
                                     
                                        var txt;
                    					var r = confirm("Are you sure of DELETING the record?");
                    					if (r == true) {
                      // AJAX Request
		                                       $.ajax({
		                                         
		                                         url: base_url+'api/locations/location/removebanner',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       
		                                       location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });
                                   
                                   //remove places
                                   $(document).on('click', '.placermv', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var deleteid = splitid[1];
                                     
                                        var txt;
                    					var r = confirm("Are you sure of DELETING the record?");
                    					if (r == true) {
                      // AJAX Request
		                                       $.ajax({
		                                         
		                                         url: base_url+'api/locations/location/removeplaces',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       
		                                       location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });
                                   
                                   

            						$(document).on('click', '.bnchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_location_images";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'admin/admin/updatestatus',
                                         type: 'POST',
                                         data: { id:recordid, value:value, table:table },
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });

            						$(document).on('click', '.mchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_places_to_visit";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'admin/admin/updatestatus',
                                         type: 'POST',
                                         data: { id:recordid, value:value, table:table },
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });

            						$(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_location";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'admin/admin/updatestatus',
                                         type: 'POST',
                                         data: { id:recordid, value:value, table:table },
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });


            						$("#frmlocation_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmlocation_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-locations',
									                data:new FormData(this),
									                beforeSend: function ( xhr ) {
									                    //Add your image loader here
									                     jQuery(".lds-facebook").show();
									                },
									                success:function(data){
									                //alert(data);
														    jQuery(".lds-facebook").hide();
									                    	//jQuery("#subjresponse").html(data);
						                                    //$("#subjresponse").fadeOut(12000);
						                                    $(window).off("beforeunload");
						                                    $(function() {	

													    	  var Toast = Swal.mixin({
														      toast: true,
														      position: 'top-end',
														      showConfirmButton: false,
														      timer: 7000
														    });

														    Toast.fire({
														        icon: 'success',
														        title: ' Location information updated.'
					      									})
	      												});
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));
									
									
									$(document).on('keyup', '.sc', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var currentval=$(this).val();
                                       var final=recordid+"_"+currentval;
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'api/locations/location/updatesequence',
                                         type: 'POST',
                                         data: { id:final},
                                         success: function(response){
                                            if(response=='1'){
                                       			alert('Status Updated');
                                       		}else{
                                       			alert('Invalid Input');
                                       		}
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });
