//alert('hello');
						$("#shwdatatable").load(base_url+'manage-cygnetture-dishes/list');
							
						var res='designation';
						$("#frmdish_add").validate({
			                rules: {
			                    dish_title: {
			                        required: true,
			                        minlength: 10
			                        //alpha:true
			                    },

			                    cuisine: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    dish_description: {
			                        required: true,
			                        minlength: 20,
			                        maxlength:500
			                        //alpha:true
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
			                    dish_title: {
			                        required: "Specify name of the dish",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        //maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    

			                    dish_description: {
			                        required: "Specify a description of the dish",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 300 characters allowed.")
			                    },

			                    image: {
			                     	 required: "Upload an image",
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },
			                    
	   
			                },
			            
			            });	

			            $("#frmdish_edit").validate({
			                rules: {
			                    dish_title: {
			                        required: true,
			                        minlength: 10
			                        //alpha:true
			                    },

			                    cuisine: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    dish_description: {
			                        required: true,
			                        minlength: 20,
			                        maxlength:500
			                        //alpha:true
			                    },
			                    
			                
			                },
			            
			                messages: {
			                     dish_title: {
			                        required: "Specify name of the dish",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        //maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    

			                    dish_description: {
			                        required: "Specify a description of the dish",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 300 characters allowed.")
			                    },

			                    
	   
			                },
			            
			            });

			            

			            

			            


			$("#frmdish_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmdish_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-cynetture-dish',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Cygnetture Dish added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										$("#shwdatatable").load(base_url+'manage-cygnetture-dishes/list');
										$('#frmdish_add')[0].reset();
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
										        title: ' Cygnetture Dish Added.'
	      									})
	      								});
										
									}else if(data=='Cygnetture Dish already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#dish_title").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Cygnetture Dish already present!'
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

			$("#frmdish_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmdish_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-cynetture-dish',
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
														        title: 'Dish information updated.'
					      									})
	      											});
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));
			

			
			

			




			$("#cuisine,#dish_title").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

            

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
		                                         
		                                         url: base_url+'api/media/media/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-media-news/list');
		                                       //location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });	

            						$(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_media_news";
                                      
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